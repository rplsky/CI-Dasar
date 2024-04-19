<?php
    //Pembuatan CLass M_Keluarga
    class M_Keluarga extends CI_Model {
        //Pembuatan function tampil_data_keluarga
        function tampil_data_keluarga($tabel, $where) {
            $query = $this->db->get_where($tabel, $where);
            return $query;
        }

        //Pembuatan function simpan_data_keluarga
        function simpan_data_keluarga($tabel, $data) {
            $this->db->insert($tabel, $data);
        }

        //Pembuatan function edit_data_keluarga
        function edit_data_keluarga($tabel, $where) {
            $query = $this->db->get_where($tabel, $where);
            return $query;
        }
        //Pembuatan function update_data_keluarga
        function update_data_keluarga($tabel, $data, $where) {
            $this->db->where($where);
            $this->db->update($tabel, $data);
        }
        //Pembuatan function delete_data_keluarga
        function delete_data_keluarga($tabel, $where) {
            $this->db->where($where);
            $this->db->delete($tabel);
        }
    }
    
?>