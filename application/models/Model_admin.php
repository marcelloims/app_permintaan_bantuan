<?php

class Model_admin extends CI_Model
{
    // Model Data User
    public function data_user()
    {
        return $this->db->get('tb_user');
    }

    public function tambah_user($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_user($data, $table)
    {
        return $this->db->get_where($table, $data)->row_array();
    }

    public function update_user($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }
    // Model Data User





    // Model Data kecamatan
    public function data_kecamatan()
    {
        return $this->db->get('tb_kecamatan');
    }

    public function tambah_kecamatan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kecamatan($data, $table)
    {
        return $this->db->get_where($table, $data)->row_array();
    }

    public function update_kecamatan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_kecamatan($id)
    {
        $this->db->where('id_kecamatan', $id);
        $this->db->delete('tb_kecamatan ');
    }
    // Model Data kecamatan





    // Model Data Desa

    // Model Data Desa 
}
