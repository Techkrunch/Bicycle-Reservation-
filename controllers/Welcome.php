<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	// public $CI = NULL;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('db_model');
		// load Session Library
		$this->load->library('session');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function index()
	{
		$query = $this->db_model->getAll('bicycle', 10);
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
		}
		$this->load->view('home', $data);
		// $this->load->view('content', $data);
	}


	//---------------------------------------------------------------------------
	//admin backend
	public function administrator()
	{
		// $query = $this->db_model->getAll('job', '10');
		// $data['a'] = null;
		// if ($query) {
		// 	$data['a'] =  $query;
		// }
		// $this->load->view('home', $data);
		$this->load->view('admin/admin');
	}
	public function bcy()
	{
		$query = $this->db_model->getAll('bicycle', '10');
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
		}
		$this->load->view('admin/cycle', $data);
	}

	public function img_get($bicycle)
	{
		$dataa = array(
			'id' => $bicycle
		);
		$query = $this->db_model->getAll('bicycle', $dataa);

		$data_['job_array'] = null;
		if ($query) {
			$data_['job_array'] =  $query;
		}
		$this->load->view('admin/booking', $data_);
	}


	// View booings
	public function bcy_booked()
	{
		$find_pending = "SELECT b1.id as `id`, applicant_id as `user` , cycle_id as `bicycle`,application_status as `state`,payment_code as `Mpesa`
							from bookings b1
							INNER JOIN users u1
							ON u1.id = b1.applicant_id
							INNER JOIN bicycle bcy
							on b1.cycle_id = bcy.id
							where b1.application_status='pending'  ";

		$query = $this->db_model->passSQLAll($find_pending);
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
			//   print_r($data);
			//   exit();


		}
		$this->load->view('admin/booking', $data);
	}



	public function return($id)
	{
		$message = array(
			'success' => 'Saikle Returned',
			'error' => 'Error while Processing Saikle Return. '
		);
		// print_r($id);
		// die();
		$query = $this->db_model->updaterecords2($id);
		if ($query) {
			//   print_r($data); exit();
			$query = $this->db_model->updaterecords21($id);
			$this->session->set_flashdata('msg_register', $message['error']);
			redirect('/welcome/bcy_booked');
		} else if (!$query) {
			$this->session->set_flashdata('msg_register', $message['success']);
			redirect('/welcome/bcy_booked');
		}
		$this->load->view('/welcome/bcy_booked');
	}
	// View booings2
	public function bcy_approved()
	{
		$find_pending = "SELECT applicant_id as `user` , cycle_id as `bicycle`,application_status as `state`,payment_code as `Mpesa`
							from bookings b1
							INNER JOIN users u1
							ON u1.id = b1.applicant_id
							INNER JOIN bicycle bcy
							on b1.cycle_id = bcy.id
							where b1.application_status='approved'  ";

		$query = $this->db_model->passSQLAll($find_pending);
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
			//   print_r($data);  exit();  
		}
		$this->load->view('admin/approved', $data);
	}
	public function todays()
	{
		$Date = date("Y-m-d");
		// echo $Date;
		// die();
		$find_pending = "SELECT * FROM `bookings` WHERE application_date = '$Date' and application_status ='approved' ";

		$query = $this->db_model->passSQLAll($find_pending);
		$data['aa'] = null;
		if ($query) {
			$data['aa'] =  $query;
			// print_r($data);
			// exit();
		}
		$this->load->view('admin/todays', $data);
	}


	// Approve booings


	public function updatedata($id)
	{
		$message = array(
			'success' => 'Saikle Approved',
			'error' => 'Error while approving Saikle. '
		);
		// print_r($id);
		// die();
		$query = $this->db_model->updaterecords($id);
		if ($query) {
			//   print_r($data); exit();
			$this->session->set_flashdata('msg_register', $message['error']);
			redirect('/welcome/bcy_booked');
		} else if (!$query) {
			$this->session->set_flashdata('msg_register', $message['success']);
			redirect('/welcome/bcy_booked');
		}
		$this->load->view('/welcome/bcy_booked');
	}











	public function uploadPic()
	{
		$config = [
			'upload_path' => './uploads',
			'allowed_types' => 'gif|png|jpg|jpeg'
		];
		$this->load->library('upload', $config);
		$this->form_validation->set_error_delimiters();

		if ($this->upload->do_upload()) {
			$data = $this->input->post();
			$available = 'available';
			$info = $this->upload->data();
			$image_path = base_url("uploads/" . $info['raw_name'] . $info['file_ext']);
			$data = array(
				'cycle_price' => $this->input->post('price'),
				'bicycle_name' => $this->input->post('Bicycle_name'),
				'bicycle_pic' => $image_path,
				'bicycle_state' => $available
			);
			// echo '<pre>';
			// print_r($info);
			// echo '</pre>';
			// print_r($image_path);
			// print_r($data);
			// exit();
			$datat = array(
				'cycle_price' => $this->input->post('price'),
				'bicycle_name' => $this->input->post('Bicycle_name')
			);

			$message = array(
				'error' => 'A Bicycle already exists with that Name',
				'success' => 'Bicycle Added Successfully. '
			);
			// $user_exists = $this->db_model->dbInsert('bicycle', $data);

			$user_exists = $this->db_model->getAllSpecific('bicycle', $datat);
			if (!$user_exists) {

				unset($data['submit']);
				$this->db_model->dbInsert('bicycle', $data);
				$this->session->set_flashdata('msg_register', $message['success']);
				redirect('welcome/bcy');
			} else {
				$this->session->set_flashdata('message', $message['error']);
				redirect('welcome/bcy');
			}
		} else {
			$this->index();
		}
	}


	public function msg()
	{
		$query = $this->db_model->getAll('contact', '10');
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
		}
		$this->load->view('admin/Feedbacks', $data);
	}
	//---------------------------------------------------------------------------
	public function contact()
	{
		$this->load->view('contact');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function Home()
	{
		$this->load->view('home');
	}


	// *********************************************************************************************************************************************
	// login functions
	public function submitPassword()
	{
		$password = $this->input->post('password');
		$data = array(
			'email' => $this->input->post('email')
		);
		$access = $this->db_model->login_access('users', $data, $password);
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
			// print_r($user_data);

			if ($user_data->id == '1') {
				//	print_r('administrator');	
				redirect('welcome/administrator');
			} else {
				//print_r('User'); 
				redirect('welcome/');
			}
		} else {
			echo 'wrong password';
			redirect('welcome/login');
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

		$user_exists = $this->db_model->getAllSpecific('users', $data);
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
			$this->db_model->dbInsert('users', $data);
			//$this->sendSMS($data['contact_number'], urlencode($otp_message));
			/**$otp_data = array(
            'contact_number'=>$data['contact_number'],
                'otp'=>$otp
            );*/
			//$this->session->set_userdata($otp_data);
			$this->session->set_flashdata('msg_register', $message['success']);

			redirect('welcome/register');
		} else {
			$this->session->set_flashdata('message', $message['error']);
			redirect('welcome/functionname');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/login');
	}
	public function filterSearch()
	{
		$job_category = $this->input->post('filter');
		$data = array(
			'job_category' => $job_category
		);
		$query = $this->db_model->getAllSpecific('job', $data);
		$data['a'] = null;
		if ($query) {
			$data['a'] =  $query;
		}
		$this->load->view('home', $data);
	}



	public function cycle_get($id)
	{

		$find_pending = "SELECT * FROM `bicycle` WHERE id = '$id' ";
		$query = $this->db_model->passSQLAll($find_pending);

		$data_['job_array'] = null;
		if ($query) {
			$data_['job_array'] =  $query;
		}
		$this->load->view('job', $data_);
	}
	public function apply()
	{
		$bike_id = $this->input->post('Bike_id');
		$Mpesa_code = $this->input->post('Mpesa');
		$applicant = $this->session->userData('id');
		// print_r($applicant . 'applicant');
		// print_r($bike_id . 'bike');
		// die();
		$data1 = array(
			'applicant_id' => $applicant,
			'cycle_id ' => $bike_id,
			'application_status' => 'approved'
		);
		// print_r($data1);
		// die();
		$data = array(
			'applicant_id' => $applicant,

			'cycle_id ' => $bike_id,
			'application_status' => 'pending',
			'payment_code' => $Mpesa_code,

			'application_date'  =>  date("Y-m-d H:i:s")
		);
		$message = array(
			'success' => 'Saikle Application Successful. Wait for Confirmation from Owner. ',
			'error' => 'Saikle already booked. '
		);

		$user_exists = $this->db_model->getAllSpecific('bookings', $data1);
		if (!$user_exists) {
			$this->db_model->dbInsert('bookings', $data);
			// print_r($id);
			// die();
			$query = $this->db_model->updaterecords1($bike_id);

			//   print_r($data); exit();
			$this->session->set_flashdata('msg_update', $message['success']);
			redirect('welcome/cycle_get/' . $bike_id);
		} else {
			$this->session->set_flashdata('msg_update', $message['error']);
			redirect('welcome/cycle_get/' . $bike_id);
		}
	}
	public function contact_Mgs()
	{
		$message = array(
			'success' => 'Successfully Submitted. '
		);

		$data = array(
			'fullname' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'msg' => $this->input->post('msg'),
			'submit_date' => date("Y-m-d H:i:s")
		);
		$this->db_model->dbInsert('contact', $data);
		//$this->sendSMS($data['contact_number'], urlencode($otp_message));
		/**$otp_data = array(
            'contact_number'=>$data['contact_number'],
                'otp'=>$otp
            );*/
		//$this->session->set_userdata($otp_data);
		$this->session->set_flashdata('msg', $message['success']);
		redirect('welcome/contact');
	}
}
