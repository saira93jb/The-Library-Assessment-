<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

    }

    public function login()
    {
        if ($this->input->post() && count($this->input->post > 0)) {
            $post = $this->input->post();
            $email = $post['login_email'];
            $password = $post['login_password'];
            if ($email == "admin@library.com" && $password == "password") {
                $this->session->set_userdata('adminEmail', $email);
                $this->session->set_userdata('adminName', "Saira Rasheed");
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('errormessage', "Please try again.");
                redirect(base_url('admin/login'));
            }
        }

        $data['type'] = 'admin';
        $this->load->view('common/login', $data);
    }

    public function dashboard()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function allbooks()
    {
        $q = $this->db->get('books');
        $data['books'] = $q->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/allbooks', $data);
        $this->load->view('admin/footer');
    }
    public function addbook()
    {
        if ($this->input->post()) {
            $post = $this->input->post();
            $data = array(
                'title' => $post['book_title'],
                'subtitle' => ($post['book_subtitle'] ? $post['book_subtitle'] : ""),
                'category' => $post['book_category'],
                'desc' => $post['book_desc'],
                'author' => $post['book_author'],
                'imgUrl' => $post['book_img_url'],
                'isbn_13' => $post['book_isbn13'],
                'pagecount' => $post['book_pagecount'],
                'quantity' => $post['book_stockcount'],
                'previewUrl' => $post['book_previewurl'],
                'timestamp' => time(),
            );
           echo "Data being fetched from google books API";
            $this->print_pre($data);
            $this->db->insert('books', $data);
            if ($this->db->insert_id()) {
                $this->session->set_flashdata('successmessage', "The book has been added to the library.");
                redirect(base_url('admin/addbook'));
            } else {
                $data = $this->input->post();
                $this->session->set_flashdata('errormessage', "There was an error. Please try adding the book again.");
                redirect(base_url('admin/addbook', $data));
            }
        }
        $this->load->view('admin/header');
        $this->load->view('admin/addbook');
        $this->load->view('admin/footer');
    }

    public function users()
    {
        $q = $this->db->get('user');
        $data['users'] = $q->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/users', $data);
        $this->load->view('admin/footer');
    }
    public function print_pre($arr = array())
    {
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
    }
    public function fees()
    {
        $q = $this->db->get('fees');
        $data['fees'] = $q->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/fees', $data);
        $this->load->view('admin/footer');
    }
    public function rentals()
    {
        $query = "select `rented`.*, `books`.`title`, `user`.`name` from `rented`
                    left join `books` on `rented`.book_id= `books`.id
                    left join `user` on `rented`.user_id= `user`.id
                    order by `rented`.id DESC";
        $query_result = $this->db->query($query);
        $data['books'] = $query_result->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/rentals', $data);
        $this->load->view('admin/footer');
    }

    public function checkout()
    {
        $id = $this->input->get('id');
        $months = $this->input->get('months');
        $data = array(
            'dateborrowed' => time(),
            'duedate' => strtotime('+' . $months . ' months', time()),
        );
        $this->db->where('id', $id);
        $this->db->update('rented', $data);

        $this->session->set_flashdata('successmessage', "The book has been checked out.");
        redirect(base_url('admin/rentals'));

    }

    public function checkin()
    {
        $id = $this->input->get('id');
        $data = array(
            'datereturned' => time()
        );
        $this->db->where('id', $id);
        $this->db->update('rented', $data);

        $this->session->set_flashdata('successmessage', "The book has been checked in.");
        redirect(base_url('admin/rentals'));

    }
}