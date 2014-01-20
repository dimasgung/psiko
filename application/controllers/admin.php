<?php		
session_start();
 
class  admin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("M_Psiko");
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	function index($error=null)
	{   
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['error'] = $error;
			$data['menu'] = "menu_fotoAdmin";
			$data['body'] = "fotoAdmin";
			$data['user'] = $this->session->userdata("id_user");
			$this->load->view('temp2', $data);
		}
	}

	function tambah_artikel($error=null)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['error'] = $error;
			$data['menu'] = "menu_artikelAdmin";
			$data['body'] = "artikelAdmin";
			$data['user'] = $this->session->userdata("id_user");
			$this->load->view('temp2', $data);
		}
	}
	
	function balas_konsultasi($error=null)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['error'] = $error;
			$data['menu'] = "menu_artikelAdmin";
			$data['body'] = "konsultasiAdmin";
			$data['user'] = $this->session->userdata("id_user");
			$data['list_pertanyaan']=$this->M_Psiko->list_pertanyaan();
			$this->load->view('temp2', $data);
		}
	}	

	function edit_foto($error=null)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['error'] = $error;
			$data['menu'] = "menu_editFoto";
			$data['body'] = "edit_foto";
			//pagination
			$jml = $this->db->get('tb_foto');
	        $config['base_url'] = base_url().'index.php/admin/edit_foto';
	        $config['total_rows'] = $jml->num_rows();
	        $config['per_page'] = 8;
	        $this->pagination->initialize($config);
	 		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $data['links'] = $this->pagination->create_links();
			$data['list_foto'] = $this->M_Psiko->get_list_foto($config['per_page'], $page);
			$this->load->view('temp2', $data);
		}
	}

	function edit_photo($id)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['foto'] = $this->M_Psiko->edit_photo($id);
			$data['menu'] = "menu_editFoto";
			$data['body'] = "edit_foto2";
			$this->load->view("temp2",$data);
		}
	}

	function edit_photo_selected()
	{
		$id = $this->input->post('id');
		$url = $this->input->post('url');
		if($_POST['submit'] == "Ubah")
		{
			$foto = explode(" ", $_FILES['userfile']['name']);
			$url_foto = implode("_", $foto);
			
			$config['upload_path'] = './resources/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '10000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->M_Psiko ->edit_photo_selected($id, $url_foto);
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('fotoAdmin', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				redirect('admin/edit_foto/2');
			}
		}
		else
		{
			$path = $_SERVER['DOCUMENT_ROOT'] .'/resources/images/'.$url;
			//echo $path;
			unlink($path);
			$this->M_Psiko->hapus_foto($id);
			redirect('admin/edit_foto/2');	
		}
	}

	function edit_artikel($error=null)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['error'] = $error;
			$data['list'] = $this->M_Psiko->list_edit();
			$data['menu'] = "menu_editArtikel";
			$data['body'] = "editArtikel";
			$this->load->view("temp2",$data);
		}
	}
	
	function edit_article($id)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['artikel'] =$this->M_Psiko->edit_article($id);
			$data['menu'] = "menu_editArtikel";
			$data['body'] = "editArtikel2";
			$this->load->view("temp2",$data);
		}
	}
	
	function edit_article_selected()
	{
		$id = $this->input->post('id');
		if($_POST['submit'] == "Ubah")
		{
			$pengarang = $this->input->post('pengarang');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$data['artikel'] =$this->M_Psiko->edit_article_selected($pengarang, $judul, $isi, $id);
			redirect('admin/edit_artikel/2');
		}
		else
		{
			$this->M_Psiko->hapus_artikel($id);
			redirect('admin/edit_artikel/2');	
		}
	}

	function add_article()
	{
		$judul = $this->input->post("judul", true);
		$pengarang = $this->input->post("pengarang", true);
		$kategori = $this->input->post("kategori", true);
		$isi = $this->input->post("isi", true);
		$this->M_Psiko->add_article($judul, $pengarang, $kategori, $isi);
		redirect("admin/tambah_artikel/2");
	}

	function add_photo()
	{
		$foto = explode(" ", $_FILES['userfile']['name']);
		$url_foto = implode("_", $foto);
		//$file_name = $this->input->post('userfile');
		
		$config['upload_path'] = './resources/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		//$file_name = $config['file_name'];
		$this->M_Psiko ->add_photo($url_foto);
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('fotoAdmin', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			redirect("admin/index/2");
			//$this->load->view('fotoAdmin', $data);
		}
	}

	// -----------------------------------------------------------------------------------------------------------------------------------------------------------------

	// Yang dibuat baru oleh Dimas

	function detil_pertanyaan($id)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			//$data['pertanyaan'] =$this->M_Psiko->detil_pertanyaan($id);
			$data['pertanyaan'] = $this->M_Psiko->detil_sub_pertanyaan($id);
			$this->db->close();
			$data['detil_pertanyaan'] =$this->M_Psiko->detil_pertanyaan_admin($id);
			$data['menu'] = "menu_konsultasiAdmin";
			$data['body'] = "konsultasiAdmin2";
			$this->load->view("temp2",$data);
		}
	}

	function jawab_pertanyaan($id)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['pertanyaan'] =$this->M_Psiko->detil_pertanyaan_admin($id);
			$data['menu'] = "menu_editArtikel";
			$data['body'] = "konsultasiAdmin3";
			$this->load->view("temp2",$data);
		}
	}
	
	function add_komentar_admin()
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$judul = $this->input->post("judul", true);
			$email = 'admin';
			$isi = $this->input->post("isi", true);
			$id = $this->input->post("id", true);
			$sub_id = $this->input->post("id_sub", true);
			$this->M_Psiko->tambah_komentar_admin($email, $judul, $isi, $sub_id);
			redirect("admin/detil_pertanyaan/".$id);
		}
	}

	function hapus_komentar($id){
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$this->M_Psiko->hapus_komentar($id);
			redirect('admin/balas_konsultasi');	
		}
	}

	function hapus_sub_komentar($id,$id_sub_komentar){
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['pertanyaan'] = $this->M_Psiko->detil_pertanyaan_admin($id);
			$this->db->close();
			$this->M_Psiko->hapus_sub_komentar($id);
			redirect('admin/detil_pertanyaan/'.$id_sub_komentar);
		}
	}
	
	function edit_komentar_admin($id)
	{
		if(!$this->session->userdata("id_user"))
		{
			redirect("home/login");
		} 
		else 
		{
			$data['pertanyaan'] =$this->M_Psiko->detil_pertanyaan_selected($id);
			$data['menu'] = "menu_editArtikel";
			$data['body'] = "editKomentar";
			$this->load->view("temp2",$data);
		}
	}

	function edit_komentar()
	{
		$id = $this->input->post('id');
		if($_POST['submit'] == "Ubah")
		{
			$email = 'admin';
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');

			$id = $this->input->post('id');
			$id_sub = $this->input->post('id_sub');

			$data['pertanyaan'] =$this->M_Psiko->edit_komentar($email, $judul, $isi, $id);
			redirect('admin/detil_pertanyaan/'. $id_sub);
		}
		else
		{
			$this->M_Psiko->hapus_artikel($id);
			redirect('admin/edit_artikel/2');	
		}
	}
}
?>