<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Hostel_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }


    function selectHostels(){

        $query = $this->db->get('hostel_type')->result_array();
        return $query;
    }


    function createHostelFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['rooms']=  html_escape($this->input->post('rooms'));
        // $page_data['hostel_id']=  html_escape($this->input->post('hostel_id'));

        $this->db->insert('hostel_type', $page_data);

    }

    function updateHostelFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['rooms']=  html_escape($this->input->post('rooms'));
        // $page_data['hostel_id']=  html_escape($this->input->post('hostel_id'));

        $this->db->where('id', $param2);
        $this->db->update('hostel_type', $page_data);

    }



    function deleteHostelFunction($param2){

        $this->db->where('id', $param2);
        $this->db->delete('hostel_type');

    }


}