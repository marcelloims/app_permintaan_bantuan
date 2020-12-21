<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_templates_admin/header') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('_templates_admin/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('_templates_admin/sidebar') ?>
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <h3>Data Kecamatan</h3>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"> Data User</i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Kecamatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url() ?>c_admin/tambah_kecamatan" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama Kecamatan</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Kecamatan">
                                    </div>
                                    <div class="form-group">
                                        <label>kode</label>
                                        <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Kecamatan">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table mt-3">
                    <thead>
                        <tr align="center">
                            <th scope="col">#</th>
                            <th scope="col">ID Kecamatan</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kecamatan as $usr) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td align="center"><?= $usr->id_kecamatan ?></td>
                                <td><?= $usr->nama ?></td>
                                <td><?= $usr->kode ?></td>
                                <td align="center">
                                    <a href="<?= base_url('c_admin/edit_kecamatan/' . $usr->id_kecamatan) ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('c_admin/delete_kecamatan/' . $usr->id_kecamatan) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Main content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php $this->load->view('_templates_admin/footer') ?>
        <!-- footer -->

        <!-- Control Sidebar -->
        <?php $this->load->view('_templates_admin/c_sidebar') ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('_templates_admin/js') ?>
</body>

</html>