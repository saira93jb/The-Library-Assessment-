<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *     - or -
     *         http://example.com/index.php/welcome/index
     *     - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('EngineerOffice/header');
        $this->load->view('EngineerOffice/admin-dashboard');
        $this->load->view('EngineerOffice/footer');
    }

    public function print_pre($arr = array())
    {
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
    }

    public function send_initiate_email($email = '', $name = '')
    {
        if (!empty($email)) {
            $emaildata = array(
                'to' => $email,
                'engineer_email' => $email,
                'name' => $name,
                'email_subject' => 'Your Engineering Application has been Initiated',
            );
            $this->sendtheemail($emaildata);
        }
    }

    public function sendtheemail($emaildata)
    {

        $emaildata['from'] = 'saira93jb@gmail.com';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
        $headers .= "From: " . $emaildata['from'] . " \n";
        $headers .= "Reply-To:" . $emaildata['to'];
        $email_template = $this->load->view('email/email', $emaildata, true);

        echo ($emaildata['email_subject'] . '<br>');
        //  echo ($emaildata['from'] . '<br>');
        echo ($emaildata['to'] . '<br>');
        echo ($email_template . '<br>');
        die;
        //
        //    if (false) {
        // $this->email->clear(TRUE);
        // $this->email->from($emaildata['from']);
        // $this->email->to($emaildata['to']);

        // $this->email->subject($emaildata['email_subject']);
        // $this->email->message($email_template);
        // $this->email->set_mailtype("html");
        // $this->email->send();
    }
}