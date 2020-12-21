<?php

class C_admin extends CI_Controller
{
    // Controller Data User
    public function data_user()
    {
        $data['user'] = $this->Model_admin->data_user()->result();
        // var_dump($data);
        // die;
        $this->load->view('admin/v_data_user', $data);
    }

    public function tambah_user()
    {
        $nama_user  = $this->input->post('nama_user');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $data = [
            'nama_user' => $nama_user,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 2
        ];

        // var_dump($data);
        // die;

        $this->Model_admin->tambah_user($data, 'tb_user');
        redirect('c_admin/data_user');
    }

    public function edit_user($id)
    {
        $where = ['id_user' => $id];
        $data['user'] = $this->Model_admin->edit_user($where, 'tb_user');
        $this->load->view('admin/v_edit_user', $data);
    }

    public function update_user()
    {
        $id_user    = $this->input->post('id_user');
        $nama_user  = $this->input->post('nama_user');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $data = [
            'nama_user' => $nama_user,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 2
        ];

        $where = ['id_user' => $id_user];
        // var_dump($where, $data);
        // die;
        $this->Model_admin->update_user($where, $data, 'tb_user');
        redirect('c_admin/data_user');
    }

    public function delete_user($id)
    {
        $this->Model_admin->delete_user($id);
        redirect('c_admin/data_user');
    }
    // Controller Data User





    // Controller Kecamatan
    public function data_kecamatan()
    {
        $data['kecamatan'] = $this->Model_admin->data_kecamatan()->result();
        $this->load->view('admin/v_data_kecamatan', $data);
    }

    public function tambah_kecamatan()
    {
        $nama  = $this->input->post('nama');
        $kode  = $this->input->post('kode');

        $data = [
            'nama' => $nama,
            'kode'  => $kode,
        ];

        // var_dump($data);
        // die;

        $this->Model_admin->tambah_kecamatan($data, 'tb_kecamatan');
        redirect('c_admin/data_kecamatan');
    }

    public function edit_kecamatan($id)
    {
        $where = ['id_kecamatan' => $id];
        $data['kecamatan'] = $this->Model_admin->edit_kecamatan($where, 'tb_kecamatan');
        $this->load->view('admin/v_edit_kecamatan', $data);
    }

    public function update_kecamatan()
    {
        $id_kecamatan = $this->input->post('id_kecamatan');
        $nama  = $this->input->post('nama');
        $kode  = $this->input->post('kode');

        $data = [
            'nama' => $nama,
            'kode'  => $kode,
        ];

        $where = ['id_kecamatan' => $id_kecamatan];

        // var_dump($data);
        // die;

        $this->Model_admin->update_kecamatan($where, $data, 'tb_kecamatan');
        redirect('c_admin/data_kecamatan');
    }

    public function delete_kecamatan($id)
    {
        $this->Model_admin->delete_kecamatan($id);
        redirect('c_admin/data_kecamatan');
    }
    // Controller Kecamatan





    // Controller Desa
    public function data_desa()
    {
    }
    // Controller Desa





    // Controller Penerima Bantuan
    public function data_penerima_bantuan()
    {
        $this->load->view('admin/v_penerima_bantuan');
    }
    // Controller Penerima Bantuan
}
