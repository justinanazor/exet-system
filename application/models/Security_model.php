<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Security_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function createsecurity_adminFunction(){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('staffno'));
        $page_data['phone']=  html_escape($this->input->post('phone'));
        
        $page_data['password']= sha1($this->input->post('password'));
        $this->db->insert('security', $page_data);
        $security_id = $this->db->insert_id();
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/security_image/' . $security_id. '.jpg');

    }

    function updatesecurity_adminFunction($param2){

        $page_data['name'] =  html_escape($this->input->post('name'));
        $page_data['email']=  html_escape($this->input->post('staffno'));
        $page_data['phone']=  html_escape($this->input->post('phone'));
    
        $this->db->where('security_id', $param2);
        $this->db->update('security', $page_data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/security_image/' . $param2. '.jpg');



    }

    public function update_status($request_id) {
       
        $this->db->select('time_end');
        $this->db->where('id', $request_id);
        $query = $this->db->get('requests');
    
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $current_date = date('Y-m-d');
            
     
            if ($current_date > $row->time_end) {
                
                $end_date = strtotime($row->time_end);
                $current_date_ts = strtotime($current_date);
                $days_overdue = floor(($current_date_ts - $end_date) / (60 * 60 * 24)); 
                
                $status = 'overdue (' . $days_overdue . ' days)'; 
            } else {
                $status = 'returned';
            }
    
          
            $this->db->where('id', $request_id);
            return $this->db->update('requests', ['days_overstayed' => $status]);
        }
        
        return false;
    }

    public function update_status_2($request_id) {
        // Determine whether to set "returned" or "overdue"
        $this->db->select('time_end');
        $this->db->where('id', $request_id);
        $query = $this->db->get('requests');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $current_date = date('Y-m-d');
            $status = ($current_date > $row->time_end) ? 'overdue' : 'returned';

            $this->db->where('id', $request_id);
            return $this->db->update('requests', ['days_overstayed' => $status]);
        }
        return false;
    }

    function deletesecurity_adminFunction($param2){

        $this->db->where('security_id', $param2);
        $this->db->delete('security');

    }


    function selectsecurity_admin(){

        $query = $this->db->get('security')->result_array();
        return $query;
    }

    public function updateDaysOverstayed($request_id, $days_overstayed)
    {
        $this->db->where('id', $request_id);
        $this->db->update('requests', ['days_overstayed' => $days_overstayed]);
    }
    
}