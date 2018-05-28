<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model
{
    /**
     * This function is used to get the project listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function projectListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.projectId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_projects as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the project listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function projectListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.projectId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_projects as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the project roles information
     * @return array $result : This is result of the query
     */
    function getProjectRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $projectId : This is project id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $projectId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_projects");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($projectId != 0){
            $this->db->where("projectId !=", $projectId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new project to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewProject($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_projects', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get project information by id
     * @param number $projectId : This is project id
     * @return array $result : This is project information
     */
    function getProjectInfo($projectId)
    {
        $this->db->select('projectId, name, email, mobile, roleId');
        $this->db->from('tbl_projects');
        $this->db->where('isDeleted', 0);
		$this->db->where('roleId !=', 1);
        $this->db->where('projectId', $projectId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    /**
     * This function is used to update the project information
     * @param array $projectInfo : This is projects updated information
     * @param number $projectId : This is project id
     */
    function editProject($projectInfo, $projectId)
    {
        $this->db->where('projectId', $projectId);
        $this->db->update('tbl_projects', $projectInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the project information
     * @param number $projectId : This is project id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteProject($projectId, $projectInfo)
    {
        $this->db->where('projectId', $projectId);
        $this->db->update('tbl_projects', $projectInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to match projects password for change password
     * @param number $projectId : This is project id
     */
    function matchOldPassword($projectId, $oldPassword)
    {
        $this->db->select('projectId, password');
        $this->db->where('projectId', $projectId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_projects');
        
        $project = $query->result();

        if(!empty($project)){
            if(verifyHashedPassword($oldPassword, $project[0]->password)){
                return $project;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change projects password
     * @param number $projectId : This is project id
     * @param array $projectInfo : This is project updation info
     */
    function changePassword($projectId, $projectInfo)
    {
        $this->db->where('projectId', $projectId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_projects', $projectInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to get project login history
     * @param number $projectId : This is project id
     */
    function loginHistoryCount($projectId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.projectId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.projectAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.projectId', $projectId);
        $this->db->from('tbl_last_login as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    /**
     * This function is used to get project login history
     * @param number $projectId : This is project id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($projectId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.projectId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.projectAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('tbl_last_login as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.projectId', $projectId);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function used to get project information by id
     * @param number $projectId : This is project id
     * @return array $result : This is project information
     */
    function getProjectInfoById($projectId)
    {
        $this->db->select('projectId, name, email, mobile, roleId');
        $this->db->from('tbl_projects');
        $this->db->where('isDeleted', 0);
        $this->db->where('projectId', $projectId);
        $query = $this->db->get();
        
        return $query->row();
    }

}

  