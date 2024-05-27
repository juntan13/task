<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

public function index()
	{
//Form Validation DateOfBirth Gender Address City ZipCode PhoneNumber Occupation IncomeSource Amount
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last Name','required|alpha');
$this->form_validation->set_rules('dateofbirth','Date Of Birth','required');
$this->form_validation->set_rules('gender','Gender','required');
$this->form_validation->set_rules('address','Address','required');
$this->form_validation->set_rules('city','City','required');
$this->form_validation->set_rules('zipcode','Zip Code','required');
$this->form_validation->set_rules('phoneNumber','Phone Number','required|min_length[10]');
$this->form_validation->set_rules('accupation','Occupation','required');
$this->form_validation->set_rules('Amount','Amount','required');
$this->form_validation->set_rules('IncomeSources','IncomeSources','required');
$this->form_validation->set_rules('emailid','EmailId','required|valid_email|is_unique[users.Email]');
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
$this->form_validation->set_message('is_unique', 'This email is already exists.');
if($this->form_validation->run())
{
//Getting Post Values
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$dateofbirth=$this->input->post('dateofbirth');
$gender=$this->input->post('gender');
$address=$this->input->post('address');
$city=$this->input->post('city');
$zipcode=$this->input->post('zipcode');
$phoneNumber=$this->input->post('phoneNumber');
$accupation=$this->input->post('accupation');
$emailid=$this->input->post('emailid');
$password=$this->input->post('password');
$ip_address = $_SERVER['REMOTE_ADDR'];
$Amount=$this->input->post('Amount');
$IncomeSources=$this->input->post('IncomeSources');
$this->load->model('Signup_Model');
$user_id = $this->Signup_Model->index($fname,$lname,$dateofbirth,$gender,$address,$city,$zipcode,$phoneNumber,$accupation,$emailid,$password,$IncomeSources,$Amount,$ip_address);
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('User Details');
        $pdf->SetSubject('User Details');

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('dejavusans', '', 12);

        // Add user details to the PDF
        $pdf->Write(10, 'User Details:');
        $pdf->Ln();
        $pdf->Write(10, 'Name: ' . $fname);
        // Add more user details as needed

        // Output the PDF
        $pdf->Output('user_details_' . $fname . '.pdf', 'I'); // 'D' to force download, you can use 'I' to display in the browser
} else {
$this->load->view('signup');
}
}
}