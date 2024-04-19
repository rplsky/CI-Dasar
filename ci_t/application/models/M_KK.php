<?php
    //Pembuatan CLass M_KK
    class M_KK extends CI_Model {
        //Pembuatan function tampil_data_kk
        function tampil_data_kk($tabel) {
            $query = $this->db->get($tabel);
            return $query;
        }
        //Pembuatan function simpan_data_kk
        function simpan_data_kk($tabel, $data) {
            $this->db->insert($tabel, $data);
        }
        //Pembuatan function edit_data_kk
        function edit_data_kk($tabel, $where) {
            $query = $this->db->get_where($tabel, $where);
            return $query;
        }
        //Pembuatan function update_data_kk
        function update_data_kk($tabel, $data, $where) {
            $this->db->where($where);
            $this->db->update($tabel, $data);
        }
        //Pembuatan function delete_data_kk
        function delete_data_kk($tabel, $where) {
            $this->db->where($where);
            $this->db->delete($tabel);
        }
    }
    
?>