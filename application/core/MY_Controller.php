<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Config $config
 * @property CI_Session $session
 */
class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load_lang();
        $this->load->helper('fn_test');
    }
    /**
    * return module language file
    */
    protected function load_lang() {

        $this->load->library(array('session'));
        $this->load->helper(array('url'));


        if ($this->uri->segment(1) == 'en' ||
            $this->uri->segment(1) == 'cht'||
            $this->uri->segment(1) == 'chs'||
            $this->uri->segment(1) == 'es'
        ) {
            $this->session->set_userdata("lang", $this->uri->segment(1));
            redirect($this->session->flashdata('redirectToCurrent'));
        }

        if ($this->session->userdata('lang') == "es") {
            $lang = "spanish";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'es');
        } elseif ($this->session->userdata('lang') == "cht") {
            $lang = "chinese_tw";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'cht');
        } elseif ($this->session->userdata('lang') == "chs") {
            $lang = "chinese_cn";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'chs');
        } else {
            $lang = "english";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'en');
        }

        //  $this->lang->load($moduleName, $lang);
    }

}
?>