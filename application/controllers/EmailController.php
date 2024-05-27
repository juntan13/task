<?php
// application/controllers/EmailController.php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function sendDailyEmails() {
        // Load the email library
        $this->load->library('email');

        // Fetch user emails (you'll need to implement your own logic here)
        $user_emails = array('user1@example.com', 'user2@example.com', 'user3@example.com');

        // Configure email parameters
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($user_emails);
        $this->email->subject('Daily Update');
        $this->email->message('This is your daily update email.');

        // Send email
        if ($this->email->send()) {
            echo 'Emails sent successfully.';
        } else {
            echo 'Error sending emails: ' . $this->email->print_debugger();
        }
    }
}