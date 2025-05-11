<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
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
        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('admin_login') == 1) redirect(base_url(). 'admin/dashboard', 'refresh');
    
    }

    function dashboard() {

        if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
        
       	$page_data['page_name'] = 'dashboard';
        $page_data['page_title'] =  get_phrase('Admin Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    function manage_profile($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'update'){
            $this->admin_model->updateAdminInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/manage_profile', 'refresh');
        }

        if($param1 == 'changePassword'){

            $this->admin_model->changeAdminPasswordInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/manage_profile', 'refresh');

        }

        $page_data['page_name'] = 'manage_profile';
        $page_data['page_title'] =  get_phrase('Manage Profile');
        $this->load->view('backend/index', $page_data);
    }



    function classes($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->class_model->createClassFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/classes', 'refresh');
        }

        if($param1 == 'update'){
            $this->class_model->updateClassFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/classes', 'refresh');
        }

        if($param1 == 'delete'){
            $this->class_model->deleteClassFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/classes', 'refresh');
        }

        $page_data['page_name'] = 'class';
        $page_data['page_title'] =  get_phrase('Manage Programme');
        $this->load->view('backend/index', $page_data);

    }

    function hostel_type($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->hostel_model->createHostelFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/hostel_type', 'refresh');
        }

        if($param1 == 'update'){
            $this->hostel_model->updateHostelFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/hostel_type', 'refresh');
        }

        if($param1 == 'delete'){
            $this->hostel_model->deleteHostelFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/hostel_type', 'refresh');
        }

        $page_data['page_name'] = 'hostel_type';
        $page_data['page_title'] =  get_phrase('Manage Hostel');
        $this->load->view('backend/index', $page_data);

    }



    function hostel_admin($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->hostel_admin_model->createhostel_adminFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/hostel_admin', 'refresh');
        }

        if($param1 == 'update'){
            $this->hostel_admin_model->updatehostel_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/hostel_admin', 'refresh');
        }

        if($param1 == 'delete'){
            $this->hostel_admin_model->deletehostel_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/hostel_admin', 'refresh');
        }

        $page_data['page_name'] = 'hostel_admin';
        $page_data['page_title'] =  get_phrase('Manage hostel_admin');
        $this->load->view('backend/index', $page_data);

    }


    function parent($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->parent_model->createparent_adminFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }

        if($param1 == 'update'){
            $this->parent_model->updateparent_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }

        if($param1 == 'delete'){
            $this->parent_model->deleteparent_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/parent', 'refresh');
        }

        $page_data['page_name'] = 'parent';
        $page_data['page_title'] =  get_phrase('Manage Parent');
        $this->load->view('backend/index', $page_data);

    }


    function security($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->security_model->createsecurity_adminFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/security', 'refresh');
        }

        if($param1 == 'update'){
            $this->security_model->updatesecurity_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/security', 'refresh');
        }

        if($param1 == 'delete'){
            $this->security_model->deletesecurity_adminFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/security', 'refresh');
        }

        $page_data['page_name'] = 'security';
        $page_data['page_title'] =  get_phrase('Manage Security');
        $this->load->view('backend/index', $page_data);

    }


    function section($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->section_model->createSectionFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/section', 'refresh');
        }

        if($param1 == 'update'){
            $this->section_model->updateSectionFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/section', 'refresh');
        }

        if($param1 == 'delete'){
            $this->section_model->deleteSectionFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/section', 'refresh');
        }

        $page_data['page_name'] = 'section';
        $page_data['page_title'] =  get_phrase('Manage Semester');
        $this->load->view('backend/index', $page_data);

    }


    function subject($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->subject_model->createSubjectFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/subject', 'refresh');
        }

        if($param1 == 'update'){
            $this->subject_model->updateSubjectFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/subject', 'refresh');
        }

        if($param1 == 'delete'){
            $this->subject_model->deleteSubjectFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/subject', 'refresh');
        }

        $page_data['page_name'] = 'subject';
        $page_data['page_title'] =  get_phrase('Manage Subject');
        $this->load->view('backend/index', $page_data);

    }

    function student($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->student_model->createStudentFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data created successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        if($param1 == 'update'){
            $this->student_model->updateStudentFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        if($param1 == 'delete'){
            $this->student_model->deleteStudentFunction($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            redirect(base_url() . 'admin/student', 'refresh');
        }

        $page_data['page_name'] = 'student';
        $page_data['page_title'] =  get_phrase('Manage Student');
        $this->load->view('backend/index', $page_data);

    }

    
    function get_class_sections($class_id){

        $sections = $this->db->get_where('section', array('class_id' => $class_id))->result_array();
        foreach ($sections as $key => $section){
            echo '<option value="'.$section['section_id'].'">'.$section['name'].'</option>';
        }
    }

    function manage_request ($param1 = null, $param2 = null, $param3 = null){
        
        $running_year = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
        
        if($param1 == ''){
           
            $match = array('running_year' => $running_year, 'admin_status =' => 'approved');
            $page_data['status'] = 'active';
            // $this->db->order_by('exam_date', 'desc');
            // $page_data['online_exams'] = $this->db->where($match)->get('online_exam')->result_array();

            $page_data['requests'] = $this->db->where($match)->get('requests')->result_array();
        }

        if($param1 == 'expired'){
 
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

    function analytics ($param1 = null, $param2 = null, $param3 = null){

        $currentMonthStart = date('Y-m-01 00:00:00'); // First day of the current month
        $currentMonthEnd = date('Y-m-t 23:59:59');   // Last day of the current month

        $this->db->select('student_id, COUNT(*) as request_count');
        $this->db->from('requests');
        $this->db->where('date >=', $currentMonthStart);
        $this->db->where('date <=', $currentMonthEnd);
        $this->db->group_by('student_id');
        $this->db->having('request_count =', 5); // Students with up to 5 requests
        $query = $this->db->get();

        $page_data['request_count'] = $query;
        
        $running_year = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
        
       $page_data['pending'] = $this->db->get_where('requests', array('running_year' => $running_year, 'status' => 'pending'));
     
       $currentTime = time(); // Current timestamp
        $this->db->where('running_year', $running_year);
        $this->db->where('time_end >', date('Y-m-d H:i:s', $currentTime)); // Use formatted date string
        $page_data['time_out'] = $this->db->get_where('requests', array('running_year' => $running_year, 'time_end >'=> date('Y-m-d H:i:s', $currentTime)));
        

        $page_data['page_name'] = 'analytics';
        $page_data['page_title'] =  get_phrase('View Analytics');
        $this->load->view('backend/index', $page_data);

    }
   


    function manage_online_exam_question($online_exam_id = null, $task = null, $type = null){

        if ($task == 'add') {
            if ($type == 'multiple_choice') {
                $this->crud_model->add_multiple_choice_question_to_online_exam($online_exam_id);
            }
            elseif ($type == 'true_false') {
                $this->crud_model->add_true_false_question_to_online_exam($online_exam_id);
            }
            elseif ($type == 'fill_in_the_blanks') {
                $this->crud_model->add_fill_in_the_blanks_question_to_online_exam($online_exam_id);
            }
            redirect(site_url('admin/manage_online_exam_question/'.$online_exam_id), 'refresh');
        }

        $page_data['online_exam_id'] = $online_exam_id;
        $page_data['page_name'] = 'manage_online_exam_question';
        $page_data['page_title'] = $this->db->get_where('online_exam', array('online_exam_id'=>$online_exam_id))->row()->title;
        $this->load->view('backend/index', $page_data);
    }



    function load_question_type($type, $online_exam_id) {
        $page_data['question_type'] = $type;
        $page_data['online_exam_id'] = $online_exam_id;
        $this->load->view('backend/admin/online_exam_add_'.$type, $page_data);
    }


    function manage_multiple_choices_options() {
        $page_data['number_of_options'] = $this->input->post('number_of_options');
        $this->load->view('backend/admin/manage_multiple_choices_options', $page_data);
    }

    function delete_question_from_online_exam($question_id){
        $online_exam_id = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->online_exam_id;
        $this->crud_model->delete_question_from_online_exam($question_id);
        
        $this->session->set_flashdata('flash_message' , get_phrase('Data deleted successfully'));
        redirect(base_url() . 'admin/manage_online_exam_question/'. $online_exam_id, 'refresh');
    }


    function update_online_exam_question($question_id = null, $task = null, $online_exam_id = null) {
        if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        $online_exam_id = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->online_exam_id;
        $type = $this->db->get_where('question_bank', array('question_bank_id' => $question_id))->row()->type;
        if ($task == "update") {
            if ($type == 'multiple_choice') {
                $this->crud_model->update_multiple_choice_question($question_id);
            }
            elseif($type == 'true_false'){
                $this->crud_model->update_true_false_question($question_id);
            }
            elseif($type == 'fill_in_the_blanks'){
                $this->crud_model->update_fill_in_the_blanks_question($question_id);
            }
            redirect(site_url('admin/manage_online_exam_question/'.$online_exam_id), 'refresh');
        }
        $page_data['question_id'] = $question_id;
        $page_data['page_name'] = 'update_online_exam_question';
        $page_data['page_title'] = get_phrase('update_question');
        $this->load->view('backend/index', $page_data);
    }

    function update_online_exam($param1 = null){

        $page_data['online_exam_id'] = $param1;
        $page_data['page_name'] = 'edit_online_exam';
        $page_data['page_title'] = get_phrase('update exam');
        $this->load->view('backend/index', $page_data);
    }

    function manage_online_exam_status($online_exam_id = null, $status = null){
        $this->crud_model->manage_online_exam_status($online_exam_id, $status);
        redirect(site_url('admin/manage_online_exam'), 'refresh');
    }


    function view_online_exam_result($online_exam_id){
        $page_data['online_exam_id'] = $online_exam_id;
        $page_data['page_name'] = 'view_online_exam_result';
        $page_data['page_title'] = get_phrase('result');
        $this->load->view('backend/index', $page_data);
    }
    function view_request($request_id){
        $page_data['request_id'] = $request_id;
        $page_data['page_name'] = 'view_request';
        $page_data['page_title'] = get_phrase('Student Request');
        $this->load->view('backend/index', $page_data);
    }


    function general_message(){

        $page_data['message'] = $this->input->post('message');
        $page_data['user_id'] = $this->input->post('user_id');
        $page_data['date'] = strtotime(date('Y-m-d'));

        $sql = "select * from general_message order by general_message_id desc limit 1";
        $return_query = $this->db->query($sql)->row()->general_message_id + 1;
        $page_data['general_message_id'] = $return_query;
        $this->db->insert('general_message', $page_data);
        echo json_encode($page_data);
    }







}
