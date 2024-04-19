<?php
    //Pembuatan Class C_Hello
    class C_Hello extends CI_Controller{
        
        //Pembuatan Function index
        public function index() {
            $this->load->view('V_Hello');
        }

        //Pembuatan Function FormInput
        public function FormInput() {
            $this->load->view('V_FormInput');
        }

        //Pembuatan Function ProsesInput
        public function ProsesInput() {
            $data = [
                'nis' => $this->input->post('nis'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->load->view('V_Hasil', $data);
        }
    }
?>