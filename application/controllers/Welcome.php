<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Load the session library
        $this->load->helper('url'); // Optional: for redirecting
		$this->load->model('CommonModel','cm',true); // Load common model
        $this->load->helper('auth'); // Load helper manually
        $this->CI = &get_instance();

    }
	
	public function set_time_zone()
    {
        $time_zone = $this->input->post('time_zone');
        $this->session->set_userdata('time_zone', $time_zone);
        echo json_encode(array('success' => 'success'));
    }
/*************** Common Methods ***********************/
    public function common_data()
    {

        $this->session->userdata('time_zone');
       // date_default_timezone_set($this->session->userdata('time_zone'));
        $post_date = date('Y-m-d');
        $timestamp = date("Y-m-d H:i:s");
        $post_time = date("H:i:s");
        $data["post_date"] = $post_date;
        $data["post_time"] = $post_time;
        $data["timestamp"] = $timestamp;
        $data['user_session_id'] = "";
        $data['user_session_email'] = "";
        $data['user_session_name'] = "";
		$data['user_session_type'] = "";

        if ($this->session->userdata("user_session_id") == "" || $this->session->userdata("user_session_id") == null) {
            redirect("/");
        }

        $data['user_session_id'] = $this->session->userdata("user_session_name");
        $data['user_session_email'] = $this->session->userdata("user_session_name");
        $data['user_session_name'] = $this->session->userdata("user_session_name");
		$data['user_session_type'] = $this->session->userdata("user_session_type");

      
        return $data;
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		$this->load->view('registration');
	}
	public function about_us()
	{
		$this->load->view('about-us');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function contact_us()
	{
		$this->load->view('contact-us');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy-policy');
	}
	public function terms_use()
	{
		$this->load->view('terms-use');
	}
	public function developers()
	{
		$this->load->view('developers');
	}
	
	public function login_process() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('login'));
        }

        $email = $this->input->post('email');
        $password = $this->input->post('password');
		$data=array('email'=>$email);
        $user = $this->cm->getRecords($data,'users');
        if (!empty($user) && (md5($password)=== $user[0]->password)) {
            // Check if user is already logged in elsewhere
            if ($user[0]->session_id && $user[0]->session_id != session_id()) {
                $this->session->sess_destroy(); // Log out previous session
            }

            // Set session data
            $session_data = array(
				'user_session_first_name'=>$user[0]->first_name,
                'user_session_last_name'=>$user[0]->last_name,
                'user_session_id'   => $user[0]->id,
                'user_session_email'     => $user[0]->email,
                'user_session_type' => $user[0]->user_type, // Store user role
                'logged_in' => TRUE,
            );
            $this->session->set_userdata($session_data);
            
            $this->cm->update_session_id($user[0]->id, session_id());

            // Redirect based on user role
            switch ($user[0]->user_type) {
                case 'super_admin':
                    redirect(base_url('super-admin-dashboard'));
                    break;
                case 'admin':
                    redirect(base_url('admin-dashboard'));
                    break;
                case 'agent':
                    redirect(base_url('agent-dashboard'));
                    break;
                default:
                    redirect('/');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password.');
            redirect('/');
        }
    }

    public function logout() {
        $this->cm->clear_session_id($this->session->userdata('user_session_id'));
        $this->session->sess_destroy();
        redirect('/');
    }
	
	public function super_admin_dashboard() {
		$data=$this->common_data();
        if ($this->session->userdata("user_session_id") == "" || $this->session->userdata("user_session_id") == null) {
            redirect("/");
        }
		 
		 $data['menu_open'] = "";
		$data['menu_active'] = "dashboard";
	
		$this->load->view('dashboard',$data);
	}
	public function admin_dashboard() {
        $data=$this->common_data();
        if ($this->session->userdata("user_session_id") == "" || $this->session->userdata("user_session_id") == null) {
            redirect("/");
        }
		 
		 $data['menu_open'] = "";
		$data['menu_active'] = "dashboard";
	
		$this->load->view('dashboard',$data);
	}
	
	public function agent_dashboard() {
		$data=$this->common_data();
        if ($this->session->userdata("user_session_id") == "" || $this->session->userdata("user_session_id") == null) {
            redirect("/");
        }
		 
		 $data['menu_open'] = "";
		$data['menu_active'] = "dashboard";
	
		$this->load->view('dashboard',$data);
	}
	public function register_process() {
        // Set form validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            redirect('register'); // Reload form if validation fails
        } else {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'email'      => $this->input->post('email'),
                'password'   => md5($this->input->post('password')),
                'user_type'  => 'agent' // Default user type
            ];

            if ($this->cm->save($data,'users')) {
                $this->session->set_flashdata('success', 'Registration successful. You can now log in.');
                redirect('/');
            } else {
                $this->session->set_flashdata('error', 'Registration failed. Try again.');
                redirect('register');
            }
        }
    }
}
