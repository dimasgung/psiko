<?php		
session_start();
 
class  home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("M_Psiko");
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	function index()
	{  	
		$data['title'] = "Home";
		$data['body'] = "home1";
		$data['sekilas'] = $this->M_Psiko->get_konten('sekilas');
		$this->db->close();
		$data['tentang'] = $this->M_Psiko->get_konten('tentang');
		$this->db->close();
		$data['visi'] = $this->M_Psiko->get_konten('visi');
		$this->db->close();
		$data['sasaran'] = $this->M_Psiko->get_konten('sasaran');
		$this->db->close();
		$data['misi_desc'] = $this->M_Psiko->get_misi_description();
		$this->db->close();
		$data['misi_list'] = $this->M_Psiko->get_misi_list();
		$this->db->close();
		$data['misc_desc'] = $this->M_Psiko->get_misc_description();
		$this->db->close();
		$data['misc_list'] = $this->M_Psiko->get_misc_list();
		$this->load->view('temp', $data);
	}
	 
	function auth()
	{
		$data['error'] = false;
		$username = $this->input->post("username", true);
		$password = $this->input->post("password", true);
		$cek = $this->M_Psiko->login($username, $password);
		if(!empty($cek->nama) && !empty($cek->password))
		{
			if($username == $cek->nama && md5($password) == $cek->password)
			{
				$temp = array("id_user" => $cek->nama);
				$this->session->set_userdata($temp);
				redirect("admin");
			}           
		}
		else
		{    
			redirect("home/login/1");
		}  
	}
	 
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login/2");
	}
	 
	function consultant()
	{
		$data['title'] = 'Konsultan';
		$data['body'] = 'konsultan';
		$data['consultant'] = $this->M_Psiko->get_consultant_list();
		$this->db->close();
		$data['team_associate'] = $this->M_Psiko->get_konten('team_associate');
		$this->db->close();
		$data['team_psikolog'] = $this->M_Psiko->get_konten('team_psikolog');
		$this->load->view("temp", $data); 
	}

	function article($temp=null)
	{   
		$data['title'] = 'Artikel';
		$data['body'] = 'artikel';
		//pagination
		if(empty($temp))
		{
			$jml = $this->db->get('tb_artikel_berita');
	        $config['base_url'] = base_url().'index.php/C_home/article';
	        $config['total_rows'] = $jml->num_rows();
	        $config['per_page'] = 3;
	        $this->pagination->initialize($config);
	 		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $data['links'] = $this->pagination->create_links();
			$data['artikel'] = $this->M_Psiko->get_artikel_berita($config['per_page'], $page);
		}
		else
		{	
			$temporary = explode("_", $temp);
			if(count($temporary)>1)
			{
				$temp = $temporary[0]." ".$temporary[1]; 
			}
			$data['artikel'] = $this->M_Psiko->searchContent($temp);
			$data['temp'] = 1;
		}
		$this->load->view("temp", $data); 
	}

	function services($temp)
	{   
		if($temp=="klinis")
		{
			$data['title'] = 'Klinis';
			$data['body'] = 'klinis';
			$data['klinis'] = $this->M_Psiko->get_layanan('klinis');
			$this->db->close();
		}
		
		if($temp=="pendidikan")
		{
			$data['title'] = 'Pendidikan';
			$data['body'] = 'pendidikan';
			$data['pendidikan'] = $this->M_Psiko->get_layanan('pendidikan');
			$this->db->close();
		}
		
		if($temp=="rekrutmen_seleksi")
		{
			$data['title'] = 'Rekrutmen Seleksi';
			$data['body'] = 'rekrutmen_seleksi';
			$data['rekrutmen_seleksi'] = $this->M_Psiko->get_layanan('rekrutmen_seleksi');
			$this->db->close();
		}
		
		if($temp=="recruitment_consultant")
		{
			$data['title'] = 'Recruitment Consultant';
			$data['body'] = 'recruitment_consultant';
			$data['rekrutmen_konsultan'] = $this->M_Psiko->get_layanan('rekrutmen_konsultan');
			$this->db->close();
		}
		
		if($temp=="psychological_assesment")
		{
			$data['title'] = 'Psychological Assesment';
			$data['body'] = 'psychological_assesment';
			$data['psychological_assesment'] = $this->M_Psiko->get_layanan('psychological_assesment');
			$this->db->close();
		}
		
		if($temp=="assesment_centre")
		{
			$data['title'] = 'Assesment Centre';
			$data['body'] = 'assesment_centre';
			$data['assesment_centre'] = $this->M_Psiko -> get_layanan('assesment_centre');
			$this->db->close();
		}
		
		if($temp=="konseling_karyawan")
		{
			$data['title'] = 'Konseling Karyawan';
			$data['body'] = 'konseling_karyawan';
			$data['konseling_karyawan'] = $this->M_Psiko -> get_layanan('konseling_karyawan');
			$this->db->close();
		}
		
		if($temp=="training")
		{
			$data['title'] = 'Training';
			$data['body'] = 'training';
			$data['training'] = $this->M_Psiko -> get_layanan('training');
			$this->db->close();
		}
		
		if($temp=="performance_management")
		{
			$data['title'] = 'Performance Management';
			$data['body'] = 'performance_management';
			$data['performance_management'] = $this->M_Psiko -> get_layanan('performance_management');
			$this->db->close();
		}
		
		if($temp=="hris")
		{
			$data['title'] = 'HRIS';
			$data['body'] = 'hris';
			$data['hris'] = $this->M_Psiko -> get_layanan('hris');
			$this->db->close();
		}
		$this->load->view("temp", $data);
	}

	function login($error=null)
	{   
		 $data['error']	= $error;
		 $data['title'] = "Sign in";
		 $this->load->view('login', $data);
	}
	
	function gallery()
	{
		$data['title'] = "Galeri";
		$data['body'] = "galeri";
		//pagination
		$jml = $this->db->get('tb_foto');
        $config['base_url'] = base_url().'index.php/home/gallery';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = 8;
        $this->pagination->initialize($config);
 		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['links'] = $this->pagination->create_links();
		$data['list_foto'] = $this->M_Psiko->get_list_foto($config['per_page'], $page);
		$this->load->view('temp', $data);
	}
	//////////////////////////////////*konsultasi*//////////////////////////////////////////////////
	
	function konsultasi_pertanyaan()
	{
		$data['title'] = 'Konsultasi';
		$data['body'] = 'konsultasi_kirim';
		$this->load->view('temp', $data);
	
	}
	function tambah_pertanyaan()
	{
		$nama = $this->input->post("nama", true);
		$email = $this->input->post("email", true);
		$isi = $this->input->post("isi", true);
		$this->M_Psiko->tambah_pertanyaan($email, $nama, $isi);
		redirect("home/list_pertanyaan");
	}
	
	function list_pertanyaan()
	{
		$data['title'] = "Konsultasi";
		$data['body'] = "list_pertanyaan";
		$data['list_pertanyaan']=$this->M_Psiko->list_pertanyaan();
		$this->load->view('temp', $data);
	}
	
	function detil_pertanyaan($id, $judul, $error=null)
	{
		$data['error'] = $error;
		$data['judul'] = str_replace("%20"," ",$judul);
		$data['id'] = $id;
		$data['title'] = "Konsultasi";
		$data['body'] = "detil_pertanyaan";
		$data['detil']=$this->M_Psiko->detil_pertanyaan($id);
		$this->load->view('temp', $data);
	}
	
	function balas_pertanyaan($id)
	{
		
		$data['title'] = "Konsultasi";
		$data['body'] = "balas_pertanyaan";
		$data['detil']=$this->M_Psiko->balas_pertanyaan($id);
		$this->load->view('temp', $data);
	}
	
	function kirim_balas_pertanyaan($id, $judul)
	{
		
		$data['title'] = "Konsultasi";
		$data['body'] = "detil_pertanyaan";
		$tanda=2;
		$isi = $this->input->post('isi');
		$data['detil']=$this->M_Psiko->kirim_balas_pertanyaan($id,$isi);
		redirect('home/detil_pertanyaan/' .$id ."/" .$judul ."/" .$tanda);
	}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////

	function admin($page, $add=null, $error=null)
	{
		if ($page=="foto")
		{
			$data['error'] = $error;
			$data['menu'] = "menu_fotoAdmin";
			$data['body'] = "fotoAdmin";
			$data['user'] = $this->session->userdata("id_user");
			$this->load->view('temp2', $data);
		}
		if($page=="list_foto")
		{
			$data['body'] = "edit_foto";
			$data['menu'] = "menu_fotoAdmin";
			//pagination
			$jml = $this->db->get('tb_foto');
	        $config['base_url'] = base_url().'index.php/home/admin/list_foto';
	        $config['total_rows'] = $jml->num_rows();
	        $config['per_page'] = 8;
	        $this->pagination->initialize($config);
	 		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	        $data['links'] = $this->pagination->create_links();
			$data['list_foto'] = $this->M_Psiko->get_list_foto($config['per_page'], $page);
			$this->load->view('temp2', $data);
		}
		if($page=="artikel")
		{
			$data['error'] = $error;
			$data['menu'] = "menu_artikelAdmin";
			$data['body'] = "artikelAdmin";
			$data['user'] = $this->session->userdata("id_user");
			$this->load->view('temp2', $data);
		}
	}
}
?>