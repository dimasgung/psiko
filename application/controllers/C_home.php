<?php		
 session_start();
 
class  C_home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
	
	}


 function index()
 {
   
	 $this->load->view('user/home');
 
 }
 
 function lawyers()
 {
   
	 $this->load->view('user/lawyers');
 
 }

 function news()
 {
   
	 $this->load->view('user/news');
 
 }
 
 function post()
 {
   
	 $this->load->view('user/post');
 
 }
 
 function practices()
 {
   
	 $this->load->view('user/practices');
 
 }

function singlepost()
 {
   
	 $this->load->view('user/singlepost');
 
 } 
 
 function about()
 {
   
	 $this->load->view('user/about');
 
 }
 
 function contact()
 {
   
	 $this->load->view('user/contact');
 
 }
	
}
?>