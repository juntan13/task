<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminPage extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
$this->load->model('admin_model');
if(!$this->session->userdata('uid'))
redirect('signin');

}
public function index(){
$userfname=$this->session->userdata('fname');	
$data['users'] = $this->admin_model->get_all_users();
// Load view to display user details
$this->load->view('adminPage', $data);


}
}