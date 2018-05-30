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

        $this->db->select('BaseTblProject.projectId,BaseTblProject.projectName');
        $this->db->from('tbl_projects as BaseTblProject');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTblProject.projectName  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTblProject.isDeleted', 0);

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

        $this->db->select('BaseTblProject.projectId, BaseTblProject.projectName');
        $this->db->from('tbl_projects as BaseTblProject');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTblProject.projectName  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTblProject.projectName  LIKE '%".$searchText."%'
                           )";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTblProject.isDeleted', 0);

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
        $this->db->select('projectId, projectName,roleId');
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
     * This function used to get project information by id
     * @param number $projectId : This is project id
     * @return array $result : This is project information
     */
    function getProjectInfoById($projectId)
    {
        $this->db->select('projectId, projectName,  roleId');
        $this->db->from('tbl_projects');
        $this->db->where('isDeleted', 0);
        $this->db->where('projectId', $projectId);
        $query = $this->db->get();

        return $query->row();
    }

}

  