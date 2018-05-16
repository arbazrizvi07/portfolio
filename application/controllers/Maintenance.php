<?php  /**/
class Maintenance extends CI_Controller
{		
	function __construct()	
	{		
		parent:: __construct();		
	}	

	function index()	
	{		
		if($this->session->userdata('sr76F78eD')=='yes')		
		{				
			$this->session->unset_userdata('sr76F78eD')	;	
			$this->load->view('maintenance');		
		}		
		else	
		{			
			redirect(base_url());		
		}		
	}
}
?>