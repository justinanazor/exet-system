<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Parent_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function createparent_adminFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('email'));
        $page_data['phone']=  html_escape($this->input->post('phone'));
        $page_data['address']=  html_escape($this->input->post('address'));
        $page_data['password']= sha1($this->input->post('password'));
        $this->db->insert('guardian', $page_data);
        $parent_id = $this->db->insert_id();
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/parent_image/' . $parent_id. '.jpg');

    }

    function updateparent_adminFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('email'));
        $page_data['phone']=  html_escape($this->input->post('phone'));
        $page_data['address']=  html_escape($this->input->post('address'));
        $this->db->where('guardian_id', $param2);
        $this->db->update('guardian', $page_data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/parent_image/' . $param2. '.jpg');

    }

    function deleteparent_adminFunction($param2){

        $this->db->where('guardian_id', $param2);
        $this->db->delete('guardian');

    }


    function selectparent_admin(){

        $query = $this->db->get('guardian')->result_array();
        return $query;
    }


}