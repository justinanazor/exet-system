<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function UserLoginFunction (){

        $email = $this->input->post('username');			
        $password = $this->input->post('password');	
        $user_type = $this->input->post('user_type'); // New user_type field
    
        $credential = array(
            'email' => $email,
            'password' => sha1($password)
        );
    
        // Map user types to their respective tables and dashboards
        $user_tables = [
            'admin' => ['table' => 'admin', 'id_field' => 'admin_id', 'dashboard' => 'admin/dashboard'],
            'student' => ['table' => 'student', 'id_field' => 'student_id', 'dashboard' => 'student/dashboard'],
            'hostel' => ['table' => 'hostel', 'id_field' => 'hostel_id', 'dashboard' => 'hostel/dashboard'],
            'security' => ['table' => 'security', 'id_field' => 'security_id', 'dashboard' => 'security/dashboard'],
            'guardian' => ['table' => 'guardian', 'id_field' => 'guardian_id', 'dashboard' => 'guardian/dashboard']
        ];
    
        // Check if the provided user_type exists in the mapping
        if (isset($user_tables[$user_type])) {
            $user_table = $user_tables[$user_type];
    
            // Query the database for the credentials in the specified table
            $query = $this->db->get_where($user_table['table'], $credential);
            if ($query->num_rows() > 0) {
                $row = $query->row();
    
                // Set session data
                $this->session->set_userdata('login_type', $user_type);
               
                $this->session->set_userdata($user_type . '_login', '1');
                $this->session->set_userdata($user_type . '_id', $row->{$user_table['id_field']});
                $this->session->set_userdata('login_user_id', $row->{$user_table['id_field']});
                $this->session->set_userdata('name', $row->name);
                $this->session->set_userdata('hostel', $row->type);
                $this->session->set_flashdata('flash_message', $row->name . ' ' . get_phrase('Successfully Login'));
                redirect(base_url() . $user_table['dashboard'], 'refresh');
            }
        }
    
                // If no match is found
            $data['error_message'] = 'Invalid email or password.';
            $this->load->view('backend/login', $data);
            return;
    }
     
		
}
