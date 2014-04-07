<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
    }

    public function airasia() {
        $data = array();
        $data['page'] = "airasia";
        $this->load->view('v_header',$data);
//        untuk kasih nama tiap view bagian isi nya tambahakan -isi- v_ISI_home!
        $this->load->view('v_isi_home');
        $this->load->view('v_footer');
    }
    public function jetstar() {
        $data = array();
        $data['page'] = "jetstar";
        $this->load->view('v_header',$data);
//        untuk kasih nama tiap view bagian isi nya tambahakan -isi- v_ISI_home!
        $this->load->view('v_isi_jetstar');
        $this->load->view('v_footer');
    }
    public function mandala() {
        $data = array();
        $data['page'] = "mandala-tiger";
        $this->load->view('v_header',$data);
//        untuk kasih nama tiap view bagian isi nya tambahakan -isi- v_ISI_home!
        $this->load->view('v_isi_mandala');
        $this->load->view('v_footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */