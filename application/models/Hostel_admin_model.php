<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Hostel_admin_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function createhostel_adminFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('email'));
        $page_data['phone']=  html_escape($this->input->post('phone'));
        $page_data['type']=  html_escape($this->input->post('type'));
        $page_data['password']= sha1($this->input->post('password'));

        $this->db->insert('hostel', $page_data);
        $hostel_admin_id = $this->db->insert_id();
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/hostel_admin_image/' . $hostel_admin_id. '.jpg');

    }

    function updatehostel_adminFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('email'));
        $page_data['type']=  html_escape($this->input->post('type'));
        $page_data['phone']=  html_escape($this->input->post('phone'));

        $this->db->where('hostel_id', $param2);
        $this->db->update('hostel', $page_data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/hostel_admin_image/' . $param2. '.jpg');

    }

    function deletehostel_adminFunction($param2){

        $this->db->where('hostel_id', $param2);
        $this->db->delete('hostel');

    }


    function selecthostel_admin(){

        $query = $this->db->get('hostel')->result_array();
        return $query;
    }


}