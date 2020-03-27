<?php
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
    }
    public function welcome(){
        $this->load->model('db_model');
        $data['users'] = $this->db_model->getUsers('3');
        $this->sendEmail('ian@email.com');
        print_r ($data);die;
        $this->load->view('home', $data);
    }
    public function sendEmail($email){
        $this->load->library('email');

    }
}
?>