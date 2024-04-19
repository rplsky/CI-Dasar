<?php

    //Pembuatan Class C_KK
    class C_KK extends CI_Controller {
        //Deklarasi Atribut
        var $no_kk;
        var $nama_kk;
        var $alamat;
        var $rt;
        var $rw;
        var $desakelurahan;
        var $kecamatan;
        var $kabupatenkota;
        var $provinsi;
        var $kodepos;
        var $tgl_keluar;
        var $kepala_dukcapil;        
        
        //Pembuatan Construktor
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->model('M_KK');
        }

        //Pembuatan Function index
        function index() {
            //Proses mengambil data dengan menggunakan model
            $data['data_kk'] = $this->M_KK->tampil_data_kk('tbl_kk')->result();
            //Menampil View
            $this->load->view('KK/V_KK', $data);
        }

        //Pembuatan Function form_input_kk
        function form_input_kk() {
            //Menampil View
            $this->load->view('KK/V_Form_Input_KK');
        }

        //Pembuatan Function proses_tambah_kk
        function proses_tambah_kk() {
            //Proses Input
            $this->no_kk = $this->input->post('no_kk');
            $this->nama_kk = $this->input->post('nama_kk');
            $this->alamat = $this->input->post('alamat');
            $this->rt = $this->input->post('rt');
            $this->rw = $this->input->post('rw');
            $this->desakelurahan = $this->input->post('desakelurahan');
            $this->kecamatan = $this->input->post('kecamatan');
            $this->kabupatenkota = $this->input->post('kabupatenkota');
            $this->provinsi = $this->input->post('provinsi');
            $this->kodepos = $this->input->post('kodepos');
            $this->tgl_keluar = $this->input->post('tgl_keluar');
            $this->kepala_dukcapil = $this->input->post('kepala_dukcapil');
            //Proses pengambilan data input dengan menggunakan data array
            $data = [
                     'no_kk' => $this->no_kk,
                     'nama_kk' => $this->nama_kk,
                     'alamat' => $this->alamat,
                     'rt' => $this->rt,
                     'rw' => $this->rw,
                     'desakelurahan' => $this->desakelurahan,
                     'kecamatan' => $this->kecamatan,
                     'kabupatenkota' => $this->kabupatenkota,
                     'provinsi' => $this->provinsi,
                     'kodepos' => $this->kodepos,
                     'tgl_keluar' => $this->tgl_keluar,
                     'kepala_dukcapil' => $this->kepala_dukcapil
                   ];
            //Proses simpan data dengan menggunakan model
            $this->M_KK->simpan_data_kk('tbl_kk', $data);
            //Pengalihan halaman ke Controller C_KK dengan function index()
            redirect('C_KK/index');
        }
        
        //Pembuatan Function form_edit_kk
        function form_edit_kk($id) {
            //Proses pengambilan data input dengan menggunakan data array
            $this->no_kk = ['no_kk' => $id];
            //Proses mengambil data dengan menggunakan model
		    $data['data_kk'] = $this->M_KK->edit_data_kk('tbl_kk', $this->no_kk)->result();
		    //Menampil View
            $this->load->view('KK/V_Form_Edit_KK',$data);
        }

        //Pembuatan Function proses_update_kk
        function proses_update_kk(){
            //Proses Input
            $this->no_kk = $this->input->post('no_kk');
            $this->nama_kk = $this->input->post('nama_kk');
            $this->alamat = $this->input->post('alamat');
            $this->rt = $this->input->post('rt');
            $this->rw = $this->input->post('rw');
            $this->desakelurahan = $this->input->post('desakelurahan');
            $this->kecamatan = $this->input->post('kecamatan');
            $this->kabupatenkota = $this->input->post('kabupatenkota');
            $this->provinsi = $this->input->post('provinsi');
            $this->kodepos = $this->input->post('kodepos');
            $this->tgl_keluar = $this->input->post('tgl_keluar');
            $this->kepala_dukcapil = $this->input->post('kepala_dukcapil');
            //Proses pengambilan data input dengan menggunakan data array
            $where = ['no_kk' => $this->no_kk];
            $data = [
                        'nama_kk' => $this->nama_kk,
                        'alamat' => $this->alamat,
                        'rt' => $this->rt,
                        'rw' => $this->rw,
                        'desakelurahan' => $this->desakelurahan,
                        'kecamatan' => $this->kecamatan,
                        'kabupatenkota' => $this->kabupatenkota,
                        'provinsi' => $this->provinsi,
                        'kodepos' => $this->kodepos,
                        'tgl_keluar' => $this->tgl_keluar,
                        'kepala_dukcapil' => $this->kepala_dukcapil
                    ];
            //Proses update data dengan menggunakan model
            $this->M_KK->update_data_kk('tbl_kk', $data, $where);
            //Pengalihan halaman ke Controller C_KK dengan function index()
            redirect('C_KK/index');
        }

        //Pembuatan Function hapus_kk
        function hapus_kk($id){
             //Proses pengambilan data input dengan menggunakan data array
            $this->no_kk = ['no_kk' => $id];
            //Proses delete data dengan menggunakan model
            $this->M_KK->delete_data_kk('tbl_kk', $this->no_kk);
            //Pengalihan halaman ke Controller C_KK dengan function index()
            redirect('C_KK/index');
        }
    }
    
?>