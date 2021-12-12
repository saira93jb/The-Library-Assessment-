<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
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
        $this->db->distinct();
        $this->db->select('category');
        $q = $this->db->get('books');
        $data['categories'] = $q->result_array();
        $this->load->view('front/header');
        $this->load->view('front/home',  $data);
        $this->load->view('front/footer');
    }

    public function bookpage()
    {
        $id=$this->input->get('id');
        $this->db->where('id', $id);
        $q = $this->db->get('books');
        $books = $q->result_array();
        $data['book']=$books[0];
        $this->load->view('front/header');
        $this->load->view('front/bookpage',  $data);
        $this->load->view('front/footer');
    }
    public function filteredbooks(){
        $title = '';
        $author = '';
        $category = '';
        $titleFilter='';
        $authorFilter='';
        $categoryFilter='';
   
        if ($this->input->post('title')) {
            $title = $this->input->post('title');
            $titleFilter=" AND `title` Like '%$title%' ";
        }
        if ($this->input->post('author')) {
            $author = $this->input->post('author');
            $authorFilter=" AND `author` Like '%$author%' ";
        }        
        if ($this->input->post('category')) {
            $category = $this->input->post('category');
            $categoryFilter=" AND `category` = '$category' ";
        }
        $query = "Select * from books WHERE 1  $titleFilter $authorFilter $categoryFilter order by id ASC";
        $query_result = $this->db->query($query);
        $data['books'] = $query_result->result_array();  
        if ($data['books']) {
            $res = $this->load->view('front/filteredbooks', $data, true);
            echo $res;
        } else {
            echo 0;
        }
        die;
    }
}