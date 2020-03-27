<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('db_model');
        // load Session Library
        $this->load->library('session');
    }
    public function index()
    { }

    public function login()
    {
        $this->load->view('login');
    }
    public function registerForm()
    {
        $this->load->view('register');
    }
    public function Home()
    {
        $this->load->view('home');
    }


    public function submitPassword()
    {
        $password = $this->input->post('password');
        $data = array(
            'email' => $this->input->post('email')
        );
        $access = $this->db_model->login_access('employees', $data, $password);
        //print_r ($access); die;
        $user_data = $access[0];
        if (count($user_data) > 0) {
            $data['user_data'] = $user_data;
            $userData = array(
                'fname'          => $user_data->fname,
                'lname'          => $user_data->lname,
                'id'         => $user_data->id,
                'registration_date'     => $user_data->registration_date,
                'email'         => $user_data->email,
                // 'group'            => $user_data->group_id_fk,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userData);
            redirect('admin/home');
        } else {
            echo 'wrong password';
            redirect('admin/login');
        }
    }
    public function register_user()
    {
        $data = array(
            'email' => $this->input->post('email')
        );
        $message = array(
            'error' => 'A User already exists with that Email',
            'success' => 'User Created Successfully. '
        );

        $user_exists = $this->db_model->getAllSpecific('employees', $data);
        if (!$user_exists) {
            $password = $this->input->post('password');
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            //echo $hashed_password; die;
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'city' => $this->input->post('city'),
                'dob' => $this->input->post('dob'),
                'phone' => $this->input->post('phone'),
                'gender' => $this->input->post('gender'),
                'educational_background' => $this->input->post('educational_background'),
                'email' => $this->input->post('email'),
                'password' => $hashed_password,
                // 'group_id_fk'=>$this->input->post('group_id'),
                'registration_date' => date("Y-m-d H:i:s")
            );
            $this->db_model->dbInsert('employees', $data);
            //$this->sendSMS($data['contact_number'], urlencode($otp_message));
            /**$otp_data = array(
                 'contact_number'=>$data['contact_number'],
                'otp'=>$otp
            );*/
            //$this->session->set_userdata($otp_data);
            $this->session->set_flashdata('message', $message['success']);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('message', $message['error']);
            redirect('admin/functionname');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
    

}
