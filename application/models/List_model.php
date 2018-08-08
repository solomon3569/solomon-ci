<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class List_model extends CI_Model {

    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->database('default', TRUE);
    }

    /**
     * create_user function.
     *
     * @access public
     * @param mixed $username
     * @param mixed $email
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function art_list($user='') {

        // $this->load->select();
        // $this->load->from('ci_news');
        // $this->load->order_by('ne_id','ASC');

        $rs = $this->db->get('ci_news');
        // echo "<pre>" . print_r($rs->result_array(), TRUE). "</pre>";
        // die();
        return $rs->row_array();

    }


}
