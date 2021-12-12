<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

    public function signup()
    {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->print_pre($post);
            $data = array(
                'name' => $post['user_name'],
                'email' => $post['user_email'],
                'password' => md5($post['user_pass']), //123456
                'timecreated' => time(),
                'active' => 1,
            );
            $this->db->insert('user', $data);
            if ($this->db->insert_id()) {
                $id = $this->db->insert_id();
                $this->session->set_userdata('userID', $id);
                $this->session->set_userdata('UserEmail', $post['user_email']);
                $this->session->set_userdata('userName', $post['user_name']);

                $this->session->set_flashdata('successmessage', "Welcome to the Library");
                redirect(base_url());
            } else {
                $this->session->set_flashdata('successmessage', "Something went wrong, please try again.");
                redirect(base_url('user/signup'));
            }

        }
        $this->load->view('front/header');
        $this->load->view('user/signup');
        $this->load->view('front/footer');
    }
    public function login()
    {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->print_pre($post);
            $login_email = $post['login_email'];
            $login_pass = $post['login_pass'];
            $this->db->insert('user', $data);
            if ($this->db->insert_id()) {
                $this->session->set_flashdata('successmessage', "Welcome to The Library");
                redirect(base_url('user/login'));
            } else {
                $this->session->set_flashdata('errormessage', "Something went wrong, please try again.");
                redirect(base_url('user/login'));
            }

        }
        $this->load->view('front/header');
        $this->load->view('user/login');
        $this->load->view('front/footer');
    }
    public function print_pre($arr = array())
    {
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
    }
    public function dashboard()
    {
        $this->load->view('user/header');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
    }
    public function borrowbook()
    {
        if ($this->session->userdata('userName')) {
            $q = $this->db->get('fees');
            $data['fees'] = $q->result_array()[0];
            $data['book_id'] = $this->input->get('id');
            $this->load->view('user/header');
            $this->load->view('user/borrowbook', $data);
            $this->load->view('user/footer');
        } else {
            $this->session->set_flashdata('errormessage', "To request a book, please login.");
            redirect(base_url('user/login'));
        }
    }

    public function payments()
    {
        if ($this->input->post()) {
            $post = $this->input->post();

            $data = array(
                'book_id' => $post['book_id'],
                'user_id' => $this->session->userdata('userID'),
                'months' => $post['totalmonths'],
                'bill' => $post['bill'],
                'cardname' => $post['username'],
                'cardnum' => $post['cardnum'],
                'expiry' => $post['expiry'],
                'type' => 'rent',
                'daterequested' => time(),
        
            );
            $this->db->insert('rented', $data);
            if ($this->db->insert_id()) {
                $this->session->set_flashdata('successmessage', "Please visit the Library to pick up the  book");
                redirect(base_url('user/userbooks'));
            }
        }
    }
    public function userbooks()
    {
        $user_id = $this->session->userdata('userID');
        $query = "select `rented`.*, `books`.`title` from `rented` 
        left join `books` on `rented`.book_id= `books`.id 
        where `rented`.user_id=" . $user_id;
        $query_result = $this->db->query($query);
        $data['books'] = $query_result->result_array();
        $this->load->view('user/header');
        $this->load->view('user/userbooks', $data);
        $this->load->view('user/footer');
    }
    public function paymenthistory()
    {
        $user_id = $this->session->userdata('userID');
        $this->db->where('user_id',  $user_id );
        $q = $this->db->get('rented');
        $data['rented'] = $q->result_array();
        $this->load->view('user/header');
        $this->load->view('user/paymenthistory', $data);
        $this->load->view('user/footer');
    }
}
