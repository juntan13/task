<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

 
    public function get_all_users() {
        // Query the database to get all user details
        $query = $this->db->get('users');
        return $query->result();
    }
}