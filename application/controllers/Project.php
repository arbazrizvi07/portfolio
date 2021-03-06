<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Project (projectController)
 * project Class to control all project related operations.
<<<<<<< HEAD
 * @author : Kishor Mali
=======
 * @author : Vidya Shevale
>>>>>>> fd14b3db3c91079b40cc702b918ac722b06286f6
 * @version : 1.1
 * @since : 15 November 2016
 */
class Project extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the project
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the project list
     */
    
    function projectListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->project_model->projectListingCount($searchText);

			$returns = $this->paginationCompress ( "projectListing/", $count, 10 );
            
            $data['projectRecords'] = $this->project_model->projectListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Project Listing';

            $this->loadViews("Projects/projects", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('project_model');
            $data['roles'] = $this->project_model->getprojectRoles();
            
            $this->global['pageTitle'] = 'CodeInsect : Add New Project';

            $this->loadViews("Projects/addNew", $this->global, $data, NULL);

        }
    }

    
    /**
     * This function is used to add new project to the system
     */
    function addNewProject()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');

            /*$this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');*/

            $this->form_validation->set_rules('projectName','Project Name','trim|required|max_length[128]');
            /*$this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');*/

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $projectName = ucwords(strtolower($this->security->xss_clean($this->input->post('projectName'))));
               /* $email = $this->security->xss_clean($this->input->post('email'));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('projectName'))));*/
                $projectInfo = array('projectName'=>$projectName, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('project_model');
                $result = $this->project_model->addNewproject($projectInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Project created successfully');
                    redirect('projectListing');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Project creation failed');
                    redirect('addNew');
                }
                

            }
        }
    }

    
    /**
     * This function is used load project edit information
     * @param number $projectId : Optional : This is project id
     */
    function editOld($projectId = NULL)
    {
        if($this->isAdmin() == TRUE )
        {
            $this->loadThis();
        }
        else
        {
            if($projectId == null)
            {
                redirect('projectListing');
            }
            
            $data['roles'] = $this->project_model->getprojectRoles();

            $data['projectInfo'] = $this->project_model->getprojectInfo($projectId);
            
            $this->global['pageTitle'] = 'CodeInsect : Edit project';

            $this->loadViews("Projects/editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the project information
     */
    function editProject()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $projectId = $this->input->post('projectId');
            
            $this->form_validation->set_rules('projectName','Project Name','trim|required|max_length[128]');
            /*$this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');*/
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($projectId);
            }
            else
            {
                $projectName = strtoupper($this->security->xss_clean($this->input->post('projectName')));
                /*$email = $this->security->xss_clean($this->input->post('email'));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));*/
                
                $projectInfo = array();
                
                $projectInfo = array('projectName'=>$projectName,'updatedBy'=>$this->vendorId,
                        'updatedDtm'=>date('Y-m-d H:i:s'));

                $result = $this->project_model->editproject($projectInfo, $projectId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Project updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Project updation failed');
                }
                
                redirect('projectListing');
            }
        }
    }

    /**
     * This function is used to delete the project using projectId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteProject()
    {

        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {

            $projectId = $this->input->post('projectId');
            $projectInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->project_model->deleteproject($projectId, $projectInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }


    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $projectId : This is project id
     */
    function loginHistoy($projectId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $projectId = ($projectId == NULL ? $this->session->projectdata("projectId") : $projectId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["projectInfo"] = $this->project_model->getprojectInfoById($projectId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->project_model->loginHistoryCount($projectId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$projectId."/", $count, 5, 3);

            $data['projectRecords'] = $this->project_model->loginHistory($projectId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Project Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }
}

?>