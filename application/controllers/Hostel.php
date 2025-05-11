<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Hostel extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database(); 
                $this->load->helper('text');                        
                $this->load->library('session');	
                $this->load->model('admin_model');
                $this->load->model('class_model');
                $this->load->model('hostel_admin_model');
                $this->load->model('security_model');	
                $this->load->model('subject_model');	
                $this->load->model('student_model');
                $this->load->model('hostel_model');
                $this->load->model('parent_model');
                
                /********** *Set your default time zone here **********/
                timezone();
        
    }

    public function index() {
        if($this->session->userdata('hostel_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('hostel_login') == 1) redirect(base_url(). 'hostel/dashboard', 'refresh');
    
    }

    function dashboard() {

        if($this->session->userdata('hostel_login') != 1) redirect(base_url(). 'login', 'refresh');
        
       	$page_data['page_name'] = 'dashboard';
        $page_data['page_title'] =  get_phrase('Hostel Admin Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function manage_profile($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'update'){
            $this->student_model->updateStudentInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'student/manage_profile', 'refresh');
        }

        if($param1 == 'changePassword'){

            $this->admin_model->changeStudentPasswordInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'student/manage_profile', 'refresh');

        }

        $page_data['page_name'] = 'manage_profile';
        $page_data['page_title'] =  get_phrase('Manage Profile');
        $this->load->view('backend/index', $page_data);
    }


    function manage_request ($param1 = null, $param2 = null, $param3 = null){
        
        $running_year = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
        
            if($param1 == ''){
            
                $match = array('running_year' => $running_year, 'status !=' => 'expired');
                $page_data['status'] = 'active';
                // $this->db->order_by('exam_date', 'desc');
                // $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();
    
                $page_data['requests'] = $this->db->where($match)->get('requests')->result_array();
        }

        if($param1 == 'declined'){
 
             $match = array('status' => 'expired', 'running_year' => $running_year);
             $page_data['status'] = 'expired';
             $this->db->order_by('exam_date', 'desc');
             $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();
         }

         if($param1 == 'approved'){
 
            $match = array('status' => 'expired', 'running_year' => $running_year);
            $page_data['status'] = 'expired';
            $this->db->order_by('exam_date', 'desc');
            $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();
        }

        if($param1 == 'create'){

            // if ($this->input->post('class_id') > 0 && $this->input->post('section_id') > 0 && $this->input->post('subject_id') > 0) {
                $this->crud_model->create_request();
                $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
                redirect(site_url('student/manage_request'), 'refresh');
            // }
            // else {
            //     $this->session->set_flashdata('error_message', get_phrase('ensure subject, class and section are selected'));
            //     redirect(base_url() . 'admin/manage_request', 'refresh');
            // }
        }

        if($param1 == 'edit'){
            if($this->input->post('class_id') > 0 && $this->input->post('subject_id') > 0 && $this->input->post('section_id') > 0){
                $this->crud_model->update_online_exam();
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url() . 'admin/manage_request', 'refresh');
            }
            else {
                $this->session->set_flashdata('error_message', get_phrase('ensure subject, class and section are selected'));
                redirect(base_url() . 'admin/manage_request', 'refresh');
            }
        }

        if($param1 == 'delete'){
            $this->crud_model->delete_request($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'student/manage_request', 'refresh');
        }


        $page_data['page_name'] = 'manage_request';
        $page_data['page_title'] =  get_phrase('Manage Request');
        $this->load->view('backend/index', $page_data);

    }

    function manage_request_status($request_id = null, $status = null){
        $student_request = $this->db->get_where('requests', array('id'=> $request_id))->row_array();
        $student_info = $this->db->get_where('student', array('student_id'=> $student_request['student_id']))->row_array();
        $parent = $this->db->get_where('guardian', array('guardian_id' => $student_info['parent_id']))->row()->email;
        $this->crud_model->manage_request_status($request_id, $status);
        $email_to = $parent;
                $email_subject = 'Request Notification';
                $email_desc = 'Dear Esteem Parent, kindly check your account for a request.';

                $this->trigger_mail($email_to, $email_subject, $email_desc);
        redirect(site_url('hostel/manage_request'), 'refresh');
    }

    function manage_request_hostel_status($request_id = null, $status = null){
        $this->crud_model->manage_request_hostel_status($request_id, $status);
        $admin = $this->db->get_where('admin', array('admin_id' => 1))->row()->email;
        $email_to = $admin;
                $email_subject = 'Request Notification';
                $email_desc = 'Dear Dean of Student Affair, kindly check your account for a request.';

                $this->trigger_mail($email_to, $email_subject, $email_desc);
        redirect(site_url('hostel/manage_request'), 'refresh');
    }

    function manage_request_admin_status($request_id = null, $status = null){
        $this->crud_model->manage_request_admin_status($request_id, $status);
        redirect(site_url('admin/manage_request'), 'refresh');
    }

    function view_request($request_id){
        $page_data['request_id'] = $request_id;
        $page_data['page_name'] = 'view_request';
        $page_data['page_title'] = get_phrase('Student Request');
        $this->load->view('backend/index', $page_data);
    }

    function online_exam_result($param1 = null, $param2 = null) {
       
        if ($param1 == '') {
            $page_data['data2'] = 'active';
            $page_data['exams'] = $this->crud_model->available_exams($this->session->userdata('login_user_id'));
        }

        $page_data['page_name'] = 'online_exam_result';
        $page_data['page_title'] = get_phrase('online_exam_results');
        $this->load->view('backend/index', $page_data);
    }


    function take_online_exam($online_exam_code) {

        $online_exam_id = $this->db->get_where('online_exam', array('code' => $online_exam_code))->row()->online_exam_id;
        $student_id = $this->session->userdata('login_user_id');
        // check if the student has already taken the exam
        $check = array('student_id' => $student_id, 'online_exam_id' => $online_exam_id);
        $taken = $this->db->where($check)->get('online_exam_result')->num_rows();

        $this->crud_model->change_online_exam_status_to_attended_for_student($online_exam_id);

        $status = $this->crud_model->check_availability_for_student($online_exam_id);

        if ($status == 'submitted') {
            $page_data['page_name']  = 'page_not_found';
        }
        else{
            $page_data['page_name']  = 'online_exam_take';
        }
        $page_data['page_title'] = get_phrase('online_test');
        $page_data['online_exam_id'] = $online_exam_id;
        $page_data['exam_info'] = $this->db->get_where('online_exam', array('online_exam_id' => $online_exam_id));
        $this->load->view('backend/index', $page_data);
    }


    function submit_online_exam($online_exam_id = null){

        $answer_script = array();
        $question_bank = $this->db->get_where('question_bank', array('online_exam_id' => $online_exam_id))->result_array();

        foreach ($question_bank as $question) {

          $correct_answers  = $this->crud_model->get_correct_answer($question['question_bank_id']);
          $mark  = $this->crud_model->get_mark($question['question_bank_id']);
          $container_2 = array();
        //   $question_id = array();
          if (isset($_POST[$question['question_bank_id']])) {

              foreach ($this->input->post($question['question_bank_id']) as $row) {
                  $submitted_answer = "";
                  if ($question['type'] == 'true_false') {
                      $submitted_answer = $row;
                  }
                  elseif($question['type'] == 'fill_in_the_blanks'){
                    $suitable_words = array();
                    $suitable_words_array = explode(',', $row);
                    foreach ($suitable_words_array as $key) {
                      array_push($suitable_words, strtolower($key));
                    }
                    $submitted_answer = json_encode(array_map('trim',$suitable_words));
                  }
                  else{
                      array_push($container_2, strtolower($row));
                      $submitted_answer = json_encode($container_2);
                  }
                  
                  $container = array(
                      "question_bank_id" => $question['question_bank_id'],
                      "submitted_answer" => $submitted_answer,
                      "correct_answers"  => $correct_answers,
                      "mark" => $mark
                  );
              }
          }
          else {
              $container = array(
                  "question_bank_id" => $question['question_bank_id'],
                  "submitted_answer" => "",
                  "correct_answers"  => $correct_answers,
                  "mark" => $mark
              );
          }

          array_push($answer_script, $container);
        }
        $this->crud_model->submit_online_exam($online_exam_id, json_encode($answer_script));
        // $this->crud_model->calculate_exam_mark($online_exam_id, json_encode($answer_script));
        redirect(base_url() . 'student/online_exam', 'refresh');
    }
    function trigger_mail($to, $subject, $message, $cc = NULL)
	{

	$CI =& get_instance();
	$CI->email->set_newline("\r\n");
	$CI->email->from('', 'Veritas Exeat Management System');
	$CI->email->to($to);
	$CI->email->subject($subject);
	$CI->email->message($message);

		if($CI->email->send())
		{
		//   echo "Success! - An email has been sent to ".$to;
		}
		else
		{ 
		  show_error($CI->email->print_debugger());
		  return false;
		}
	}


}
