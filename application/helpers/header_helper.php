 <?php  /**/

function preload()
{
	//Code to put site in maintenance mode
	$CI =& get_instance();
	$CI->load->library('session');
	if(!strpos(current_url(), 'maintenance'))
	{
		$CI->session->set_userdata('sr76F78eD','yes');
		redirect('maintenance'); 
	}	
}

preload();
header_loader('header');

function header_loader($controller_library_name)
{
	$CI =& get_instance();    
	// strip off the .php file extension if added
	$file_name = str_replace('.PHP', '', $controller_library_name);
	$file_name = strtolower($file_name);
	$CI->load->library($file_name);
	return $CI->$file_name->index();
}
?>  