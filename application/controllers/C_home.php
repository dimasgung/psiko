<?php		
session_start();
 
class  C_home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("M_Psiko");
		$this->load->helper(array('form', 'url'));
	
	}

 function index()
 {  	
    //if($this->session->userdata("id_user"))     
    //{
	    $data['error']	="";
	    $data['body'] = 'user/home';
	    $data['home'] = $this->M_Psiko->get_konten('sekilas');
	    $this->load->view("user/temp", $data); 
//	} 
//    else
//	{
//		$data['error']	="";
//		$this->load->view("user/login", $data);
//	}
 }
 
 function auth()
 {
    $data['error'] = "";
    $valid = false;		
    $username = $this->input->post("username", true);
	$password = $this->input->post("password", true);
	if($username!="" || $password!="") 
    {
	    $this->db->close();
		$cek = $this->M_Psiko->login($username, $password);
		if(!empty($cek->nama) && !empty($cek->password))
        {
            if($username == $cek->nama && md5($password) == $cek->password)
            {
                $valid = true;
                $temp = array("id_user" => $cek->nama);
                $this->session->set_userdata($temp);
                redirect("C_home");	
            }           
	    }
	    else
        {    
            $data['error'] = "2";
            $this->load->view("user/login", $data);	
        }  
	}
    else
    {    
        $data['error'] = "1";
		$this->load->view("user/login", $data);	
	}
 }
 
 function logout()
 {
     $this->session->sess_destroy();
	 redirect("C_home");
 }
 
 function consultant_list()
 {
   	 $data['body'] = 'user/consultant_list';
   	 $data['consultant'] = $this->M_Psiko->get_consultant_list();
   	 $this->load->view("user/temp", $data); 
 }

 function artikel_berita()
 {   
	 $data['body'] = 'user/artikel_berita';
	 $data['artikel_berita'] = $this->M_Psiko->get_artikel_berita();
	 $this->load->view("user/temp", $data); 
 }
 
 function post()
 {   
	 $this->load->view('user/post'); 
 }
 
 function practices()
 {   
	 $data['body'] = 'user/practices';
	 $this->load->view("user/temp", $data);
 }

function singlepost()
 {   
	 $this->load->view('user/singlepost'); 
 } 
 
 function about()
 {   
	 $data['body'] = 'user/about';
	 $data['about'] = $this->M_Psiko->get_konten('tentang');
	 $this->load->view("user/temp", $data);
 }
 
 function contact()
 {   
     $data['body'] = 'user/contact';
     $this->load->view("user/temp", $data);
 }
 
 function login()
 {   
     $data['error']	="";
     $this->load->view('user/login', $data);
 }		
}
?>