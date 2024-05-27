<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_Model extends CI_Model{

public function index($fname,$lname,$dateofbirth,$gender,$address,$city,$zipCode,$phoneNumber,$occupation,$emailid,$password,$IncomeSources,$Amount,$ip_address){
$data=array(
'user_role'=>2,
'FirstName'=>$fname,
'LastName'=>$lname,
'DateOfBirth'=>$dateofbirth,
'Gender'=>$gender,
'Address'=>$address,
'City'=>$city,
'ZipCode'=>$zipCode,
'PhoneNumber'=>$phoneNumber,
'Occupation'=>$occupation,
'Email'=>$emailid,
'Password'=>$password,
'IncomeSources'=>$IncomeSources,
'Amount'=>$Amount,
'IPAddress'=>$ip_address);
$query=$this->db->insert('users',$data);


if($query){
$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
redirect('signup');
} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');	
redirect('signup');	
}
}

}