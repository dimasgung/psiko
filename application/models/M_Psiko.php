<?php
	class M_Psiko extends CI_Model 
    {
		function __construct() {
			parent:: __construct();
		}
        
        function login($username, $password)
        {
            $data = $this->db->query("call sp_login('$username', '$password')");
            return $data->first_row();
        }
        
        function get_konten($jenis)
        {
            $data = $this->db->query("call sp_get_konten('$jenis')");
			return $data->first_row();
        }
        
        function get_recruitment_consultant($param)
        {
            $data = $this->db->query("call sp_get_recruitment_consultant('$param')");
			return $data->first_row();
        }
        
        function get_artikel_berita()
        {
            $data = $this->db->query("call sp_get_artikel_berita()");
			return $data->result_array();
        }
        
        function get_consultant_list()
        {
            $data = $this->db->query("call sp_get_consultant_list()");
			return $data->result_array();
        }
                    
        function get_psychological_assesment()
        {
            $data = $this->db->query("call sp_get_psychological_assesment()");
			return $data->first_row();
        }
        
        function get_assesment_centre_description()
        {
            $data = $this->db->query("call sp_get_assesment_centre_description()");
			return $data->result_array();
        }
        
        function get_assesment_centre_list()
        {
            $data = $this->db->query("call sp_get_assesment_centre_list()");
			return $data->result_array();
        }
        
        function get_hris_description()
        {
            $data = $this->db->query("call sp_get_hris_description()");
			return $data->first_row();
        }
        
        function get_hris_list()
        {
            $data = $this->db->query("call sp_get_hris_list()");
			return $data->result_array();
        }
        
        function get_klinis_description()
        {
            $data = $this->db->query("call sp_get_klinis_description()");
			return $data->result_array();
        }
        
        function get_klinis_list()
        {
            $data = $this->db->query("call sp_get_klinis_list()");
			return $data->result_array();
        }
        
        function get_konseling_karyawan_description()
        {
            $data = $this->db->query("call sp_get_konseling_karyawan_description()");
			return $data->result_array();
        }
        
        function get_konseling_karyawan_list()
        {
            $data = $this->db->query("call sp_get_konseling_karyawan_list()");
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
        
        function get_pendidikan_description()
        {
            $data = $this->db->query("call sp_get_pendidikan_description()");
			return $data->first_row();
        }
        
        function get_pendidikan_list()
        {
            $data = $this->db->query("call sp_get_pendidikan_list()");
			return $data->result_array();
        }
        
        function get_pendidikan_service()
        {
            $data = $this->db->query("call sp_get_pendidikan_service()");
			return $data->result_array();
        }
        
        function get_performance_management_description()
        {
            $data = $this->db->query("call sp_get_performance_management_description()");
			return $data->first_row();
        }
        
        function get_performance_management_list()
        {
            $data = $this->db->query("call sp_get_performance_management_list()");
			return $data->result_array();
        }
        
        function get_recruitment_seleksi_description()
        {
            $data = $this->db->query("call sp_get_recruitment_seleksi_description()");
			return $data->result_array();
        }
        
        function get_recruitment_seleksi_list()
        {
            $data = $this->db->query("call sp_get_recruitment_seleksi_list()");
			return $data->result_array();
        }
        
        function get_training_description()
        {
            $data = $this->db->query("call sp_get_training_description()");
			return $data->first_row();
        }
        
        function get_training_list()
        {
            $data = $this->db->query("call sp_get_training_list()");
			return $data->result_array();
        }
    }
?>