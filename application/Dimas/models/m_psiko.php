<?php
	class M_Psiko extends CI_Model 
    {
		function __construct() {
			parent:: __construct();
		}
        

        // This is login model function
        function login($username, $password)
        {
            $data = $this->db->query("call sp_login('$username', '$password')");
            return $data->first_row();
        }

        // This is model function about content every page on web
        function get_konten($jenis)
        {
            $data = $this->db->query("call sp_get_konten('$jenis')");
			return $data->first_row();
        }
        
        // model function to get the news
        function get_artikel_berita($limit, $start)
        {
            $this->db->select('*');
            $this->db->from('tb_artikel_berita');
            $this->db->order_by('tanggal', 'DESC');
            $this->db->limit($limit, $start);
            $data = $this->db->get();
            return $data->result_array();
        }

        function searchContent($jenis)
        {
            $data = $this->db->query("call sp_search_content('$jenis')");
            return $data->result_array();
        }

        function add_article($judul, $pengarang, $kategori, $isi)
        {
            $this->db->query("call sp_tambah_artikel('$judul', '$pengarang', '$kategori', '$isi')");
        }
		
		function tambah_pertanyaan($email, $nama, $isi)
        {
			$id=0;
            $this->db->query("call sp_masukkan_komentar_baru('$email', '$nama', '$isi','$id')");
        }
		
		function list_pertanyaan()
        {
            $data = $this->db->query("call sp_get_komentar()");
			return $data->result_array();
        }
		
		function detil_pertanyaan($id)
        {
            $data = $this->db->query("call sp_get_detil_komentar('$id')");
            return $data->first_row();
			//return $data->result_array();
        }
		
		function balas_pertanyaan($id)
        {
            $data = $this->db->query("call sp_get_komentar_terakhir('$id')");
			return $data->first_row();
        }
		
		function kirim_balas_pertanyaan($id,$isi)
        {
            $data = $this->db->query("call sp_masukkan_komentar('$id','$isi',0)");
			
        }
		
        // model function with contents of consultant list
        function get_consultant_list()
        {
            $data = $this->db->query("call sp_get_consultant_list()");
			return $data->result_array();
        }
                           
        
        function get_misi_description()
        {
            $data = $this->db->query("call sp_get_misi_description()");
			return $data->first_row();
        }
        
        function get_misi_list()
        {
            $data = $this->db->query("call sp_get_misi_list()");
			return $data->result_array();
        }
        
        function get_misc_description()
        {
            $data = $this->db->query("call sp_get_misc_description()");
			return $data->first_row();
        }
        
        function get_misc_list()
        {
            $data = $this->db->query("call sp_get_misc_list()");
			return $data->result_array();
        }
        
        //Model for all contents at service page
        function get_klinis_description_head()
        {
            $data = $this->db->query("call sp_get_klinis_description_head()");
            return $data->first_row();
        }
        
        function get_klinis_description_foot()
        {
            $data = $this->db->query("call sp_get_klinis_description_foot()");
            return $data->first_row();
        }

        function get_klinis_list()
        {
            $data = $this->db->query("call sp_get_klinis_list()");
            return $data->result_array();
        }
                
        function get_pendidikan()
        {
            $data = $this->db->query("call sp_get_pendidikan()");
			return $data->first_row();
        }

        function get_layanan($jenis)
        {
            $data = $this->db->query("call sp_get_layanan('$jenis')");
			return $data->first_row();
        }

    	function get_list_foto($limit, $start)
        {
            $this->db->select('*');
            $this->db->from('tb_foto');
            $this->db->order_by('id_foto', 'DESC');
            $this->db->limit($limit, $start);
            $data = $this->db->get();
            return $data->result_array();
        }

        function add_photo($nama)
        {
           $this->db->query("call sp_tambah_foto('$nama')");
        }

        function edit_photo($id)
        {
            $data = $this->db->query("call sp_edit_foto('$id')");
            return $data->first_row();
        }

        function list_edit()
        {
            $this->db->select('*');
            $this->db->from('tb_artikel_berita');
            $this->db->order_by('tanggal', 'DESC');
            $data = $this->db->get();
            return $data->result_array();
        }
        
        function edit_article($id)
        {
            $data = $this->db->query("call sp_edit_artikel('$id')");
            return $data->first_row();
        }
        
        function edit_photo_selected($id, $nama)
        {
            $data = $this->db->query("call sp_edit_foto_pilihan('$id', '$nama')");
        }

        function edit_article_selected($pengarang, $judul, $kategori, $isi, $id)
        {
            $data = $this->db->query("call sp_edit_artikel_pilihan('$pengarang','$judul', '$kategori', '$isi','$id')");
        }

        function hapus_artikel($id)
        {
            $this->db->query("call sp_hapus_artikel('$id')");
        }

        function hapus_foto($id)
        {
            $this->db->query("call sp_hapus_foto('$id')");
        }   

        // tambahan model dari Dimas -- for admin activity
        function detil_sub_pertanyaan($id)
        {
            $data = $this->db->query("call sp_get_detil_komentar('$id')");
            return $data->result_array();
        }

        function hapus_komentar($id){
            $this->db->query("call sp_hapus_komentar('$id')");
        }

        function hapus_sub_komentar($id){
            $this->db->query("call sp_hapus_sub_komentar('$id')");
        }

        function edit_komentar($email, $judul, $isi, $id)
        {
            $data = $this->db->query("call sp_edit_komentar('$email', '$judul', '$isi', '$id')");
            return $data->first_row();
        }

        function detil_pertanyaan_selected($id)
        {
            $data = $this->db->query("call sp_get_detil_komentar_selected('$id')");
            return $data->first_row();
        }

        function tambah_komentar_admin($email, $judul, $isi, $id_sub)
        {
            $id=1;
            $this->db->query("call sp_masukkan_komentar('$id_sub', '$isi', '$id', '$judul')");
        }
    }
?>