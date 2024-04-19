<?php
    //Pembuatan Class C_Hello
    class C_Hello extends CI_Controller { 
        //Deklarasi Atribut
        var $nis;
        var $nama_siswa;
        var $alamat;
        
        //Pembuatan Function index
        public function index() {
            //Menampilkan View
            $this->load->view('V_Hello');
            //echo "Ini tampilan dari controller di CI";
            
        }

        //Pembuatan Function FormInput
        public function FormInput() {
            //Menampilkan View
            $this->load->view('V_FormInput');
        }

        //Pembuatan Function ProsesInput
        public function ProsesInput() {
            //Proses Input
            $this->nis = $this->input->post('nis');
            $this->nama_siswa = $this->input->post('nama_siswa');
            $this->alamat = $this->input->post('alamat');

            //Proses pengambilan data input dengan menggunakan data array
            $data = [
                        'nis' => $this->nis,
                        'nama_siswa' => $this->nama_siswa,
                        'alamat' => $this->alamat
                    ];
            //Menampilkan View
            $this->load->view('V_Hasil', $data);
        }
    }
?>