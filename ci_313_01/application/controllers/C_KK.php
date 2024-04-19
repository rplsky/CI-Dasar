<?php
    //Pembuatan Class C_KK
    class C_KK extends CI_Controller {
        //Pembuatan Construktor
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->model('M_KK');
        }
        //Pembuatan Function index
        function index() {
            $data['data_kk'] = $this->M_KK->Tampil_Data()->result();
            $this->load-view('KK/V_KK', $data);
        }
    }
    
?>