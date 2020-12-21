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

                <form action="<?= base_url() ?>c_admin/update_kecamatan" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="hidden" name="id_kecamatan" class="form-control" value="<?= $kecamatan['id_kecamatan'] ?>">
                            <input type="text" name="nama" class="form-control" value="<?= $kecamatan['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="kode" class="form-control" value="<?= $kecamatan['kode'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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