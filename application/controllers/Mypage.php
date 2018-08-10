<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends MY_Controller {
    private $url_name = 'mypage';

    private $link_css = array(
        'href'  => 'assets/mypage/css/main.css',
        'rel'   => 'stylesheet',
        'type'  => 'text/css',
        'media' => 'screen, projection'
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(
            array('array')
        );
        $this->load->helper('html');
        $this->load->helper('directory');
        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('logged_in') == false) {

            // validation not ok, send validation errors to the view
            // $this->load->view('user/login/login');
            redirect('/login');
        } else {
            $data = array(
                'link_css'    => link_tag($this->link_css)
            );
            $this->load->view("{$this->url_name}/index",$data);
        }
    }
}
