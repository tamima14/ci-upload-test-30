<?php
//application/controllers/Index.php

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->config->set_item('title','Our Main Home Page!');
        $data['title'] = 'Main Home Page';
        $this->load->view('index/index', $data);
    }

}