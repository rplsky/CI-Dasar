<?php

    //Pembuatan Class C_Keluarga
    class C_Keluarga extends CI_Controller {
        //Deklarasi Atribut
        var $no_kk;
        var $nik;
        var $nama_lengkap;
        var $jenis_kelamin;
        var $tempat_lahir;
        var $tanggal_lahir;
        var $agama;
        var $pendidikan;
        var $jenis_pekerjaan;
        var $golongan_darah;

        //Pembuatan Construktor
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->model('M_Keluarga');
        }

        //Pembuatan Function index
        function index($id) {
            //Mengambil data dari parameter
            $data = ['n_kk' => $id];
            //Proses pengambilan data input dengan menggunakan data array
            $this->no_kk = ['no_kk' => $id];
            //Proses mengambil data dengan menggunakan model
            $data['data_keluarga'] = $this->M_Keluarga->tampil_data_keluarga('tbl_keluarga', $this->no_kk)->result();
            //Menampil View
            $this->load->view('Keluarga/V_Keluarga', $data);
        }

        //Pembuatan Function form_input_keluarga
        function form_input_keluarga($id) {
            //Mengambil data dari parameter
            $data = ['n_kk' => $id];
            //Menampil View
            $this->load->view('Keluarga/V_Form_Input_Keluarga', $data);
        }

        //Pembuatan Function proses_tambah_keluarga
        function proses_tambah_keluarga() {
            //Proses Input
            $this->no_kk = $this->input->post('no_kk');
            $this->nik = $this->input->post('nik');
            $this->nama_lengkap = $this->input->post('nama_lengkap');
            $this->jenis_kelamin = $this->input->post('jenis_kelamin');
            $this->tempat_lahir = $this->input->post('tempat_lahir');
            $this->tanggal_lahir = $this->input->post('tanggal_lahir');
            $this->agama = $this->input->post('agama');
            $this->pendidikan = $this->input->post('pendidikan');
            $this->jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
            $this->golongan_darah = $this->input->post('golongan_darah');
            //Proses pengambilan data input dengan menggunakan data array
            $data = [
                     'no_kk' => $this->no_kk,
                     'nik' => $this->nik,
                     'nama_lengkap' => $this->nama_lengkap,
                     'jenis_kelamin' => $this->jenis_kelamin,
                     'tempat_lahir' => $this->tempat_lahir,
                     'tanggal_lahir' => $this->tanggal_lahir,
                     'agama' => $this->agama,
                     'pendidikan' => $this->pendidikan,
                     'jenis_pekerjaan' => $this->jenis_pekerjaan,
                     'golongan_darah' => $this->golongan_darah
                   ];
            //Proses simpan data dengan menggunakan model
            $this->M_Keluarga->simpan_data_keluarga('tbl_keluarga', $data);
            //Pengalihan halaman ke Controller C_Keluarga dengan function index()
            redirect('C_Keluarga/index/'.$this->no_kk);
        }

        //Pembuatan Function form_edit_keluarga
        function form_edit_keluarga($id) {
            //Proses pengambilan data input dengan menggunakan data array
            $this->nik = ['nik' => $id];
            //Proses mengambil data dengan menggunakan model
		    $data['data_keluarga'] = $this->M_Keluarga->edit_data_keluarga('tbl_keluarga', $this->nik)->result();
		    //Menampil View
            $this->load->view('Keluarga/V_Form_Edit_Keluarga',$data);
        }

        //Pembuatan Function proses_update_keluarga
        function proses_update_keluarga(){
            //Proses Input
            $n_nik = $this->input->post('n_nik');
            $this->no_kk = $this->input->post('no_kk');
            $this->nik = $this->input->post('nik');
            $this->nama_lengkap = $this->input->post('nama_lengkap');
            $this->jenis_kelamin = $this->input->post('jenis_kelamin');
            $this->tempat_lahir = $this->input->post('tempat_lahir');
            $this->tanggal_lahir = $this->input->post('tanggal_lahir');
            $this->agama = $this->input->post('agama');
            $this->pendidikan = $this->input->post('pendidikan');
            $this->jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
            $this->golongan_darah = $this->input->post('golongan_darah');
            //Proses pengambilan data input dengan menggunakan data array
            $where = ['nik' => $n_nik];
            $data = [
                        'no_kk' => $this->no_kk,
                        'nik' => $this->nik,
                        'nama_lengkap' => $this->nama_lengkap,
                        'jenis_kelamin' => $this->jenis_kelamin,
                        'tempat_lahir' => $this->tempat_lahir,
                        'tanggal_lahir' => $this->tanggal_lahir,
                        'agama' => $this->agama,
                        'pendidikan' => $this->pendidikan,
                        'jenis_pekerjaan' => $this->jenis_pekerjaan,
                        'golongan_darah' => $this->golongan_darah
                    ];
            //Proses update data dengan menggunakan model
            $this->M_Keluarga->update_data_keluarga('tbl_keluarga', $data, $where);
            //Pengalihan halaman ke Controller C_Keluarga dengan function index()
            redirect('C_Keluarga/index/'.$this->no_kk);
        }

        //Pembuatan Function hapus_keluarga
        function hapus_keluarga($id, $n_kk){
            //Proses pengambilan data input dengan menggunakan data array
           $this->nik = ['nik' => $id];
           //Proses delete data dengan menggunakan model
           $this->M_Keluarga->delete_data_keluarga('tbl_keluarga', $this->nik);
           //Pengalihan halaman ke Controller C_Keluarga dengan function index()
           redirect('C_Keluarga/index/'.$n_kk);
       }
    }
?>