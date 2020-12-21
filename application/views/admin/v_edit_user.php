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
                <h3>Data User</h3>

                <form action="<?= base_url() ?>c_admin/update_user" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id_user" class="form-control" value="<?= $user['id_user'] ?>">
                            <input type="text" name="nama_user" class="form-control" value="<?= $user['nama_user'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" value="<?= $user['password'] ?>">
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