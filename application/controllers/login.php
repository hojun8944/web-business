<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();
	    	//by putting it as an array, calls more than one helper at once
	    	$this->load->helper(array('form', 'url'));
	    	// session is info about the user.
			$this->load->library('session');			    	
    }
	public function index()
	{
		$error = array('error' => " ");
		$userInfo = $this->session->userdata('userInfo');
 		if(empty($userInfo['loginName']))
			$this->load->view('login_page', $error);
		else{
			redirect('base');		
		}
	}

	/*
	 * In order to implement form validation you'll need three things:
	 * 1. A View file containing a form.
	 * 2. A View file containing a "success" message to be displayed upon successful submission.
	 * 3. A controller function to receive and process the submitted data.
	 */

	public function loginCheck(){
		$this->load->model('customer_model');
		// ------------------- form_validation
		$this->load->library('form_validation');

		// ------------------- setting the rule
		$this->form_validation->set_rules('loginName','Login Name','required');
		$this->form_validation->set_rules('password','Password','required');
		
		// post :- retrieving the data with given name
		$password = $this->input->post('password');	
		$loginName = $this->input->post('loginName');

		// get the information of the user with login name == loginName
		$customer = $this->customer_model->get($loginName);

		
		if(count($customer) == 0){

			$error = array('error' => "the given login name is NOT registered");
			$this->load->view('login_page',$error);

		// 첫번째 Case
		// if no customer with corresponding loginname -> error
		// if wrong login name or password given -> error  
		}else if ($loginName != $customer->login || $password != $customer->password){
			$error = array('error' => "Your password or login name is incorrect!");
			$this->load->view('login_page', $error);	
		
		// 두번째 Case
		// given right password and if loginName is admin -> then redirect to admin mode
		}else if($password == $customer->password && $loginName == "admin"){
			$userInfo = array('loginName' => $loginName, 'password' => $password, 'first' => $customer->first, 'last' => $customer->last, 'id' => $customer->id);
			$this->session->set_userdata('userInfo',$userInfo);
			redirect('base/admin_main');

		// 세번째 Case
		// given right passwer and the loginName -> redirect to main page.
		}else if($loginName == $customer->login && $password == $customer->password){
			$userInfo = array('loginName' => $loginName, 'password' => $password, 'first' => $customer->first, 'last' => $customer->last, 'id' => $customer->id);
			$this->session->set_userdata('userInfo',$userInfo);
			$this->session->set_userdata('shopping_cart', array());
			redirect('base');
		}
	}

	public function registerForm(){
		redirect('register');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */