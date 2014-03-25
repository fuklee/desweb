<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('v_header');
//        untuk kasih nama tiap view bagian isi nya tambahakan -isi- v_ISI_home!
        $this->load->view('v_isi_home');
        $this->load->view('v_footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */