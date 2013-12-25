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
        function get_artikel_berita()
        {
            $data = $this->db->query("call sp_get_artikel_berita()");
			return $data->result_array();
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
                
        function get_recruitment_selection_desc_head()
        {
            $data = $this->db->query("call sp_get_recruitment_selection_desc_head()");
			return $data->first_row();
        }

        function get_recruitment_selection_desc_foot()
        {
            $data = $this->db->query("call sp_get_recruitment_selection_desc_foot()");
            return $data->first_row();
        }

        function get_recruitment_selection_list()
        {
            $data = $this->db->query("call sp_get_recruitment_selection_list()");
            return $data->result_array();
        }
        
        function get_recruitment_consultant($param)
        {
            $data = $this->db->query("call sp_get_recruitment_consultant('$param')");
            return $data->first_row();
        }

        function get_psychological_assesment()
        {
            $data = $this->db->query("call sp_get_psychological_assesment()");
            return $data->first_row();
        }

        function get_assesment_centre_desc_head()
        {
            $data = $this->db->query("call sp_get_assesment_centre_desc_head()");
            return $data->first_row();
        }
        
        function get_assesment_centre_desc_foot()
        {
            $data = $this->db->query("call sp_get_assesment_centre_desc_foot()");
            return $data->first_row();
        }

        function get_assesment_centre_list()
        {
            $data = $this->db->query("call sp_get_assesment_centre_list()");
            return $data->result_array();
        }

        function get_conseling_employee_desc_head()
        {
            $data = $this->db->query("call sp_get_conseling_employee_desc_head()");
            return $data->first_row();
        }

        function get_conseling_employee_desc_foot()
        {
            $data = $this->db->query("call sp_get_conseling_employee_desc_foot()");
            return $data->first_row();
        }
        
        function get_conseling_employee_list()
        {
            $data = $this->db->query("call sp_get_conseling_employee_list()");
            return $data->result_array();
        }

        function get_training_desc_head()
        {
            $data = $this->db->query("call sp_get_training_desc_head()");
			return $data->first_row();
        }

        function get_training_desc_foot()
        {
            $data = $this->db->query("call sp_get_training_desc_foot()");
            return $data->first_row();
        }
        
        function get_training_list()
        {
            $data = $this->db->query("call sp_get_training_list()");
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
    }
?>