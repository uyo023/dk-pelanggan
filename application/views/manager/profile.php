<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="content-wrapper" style="min-height: 434.047px;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $user['image'];; ?>" alt="User profile picture">
                                </div>
                                <h6 class="profile-username text-center"><?= $user['nama']; ?></h6>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Default box -->
                    <div class="col-12 col-md-12 col-lg-9 order-1 order-md-2">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-md text-muted">
                                        <p class="text-sm">
                                            <b class="d-block">Id Manager</b>
                                            <?= $user['id']; ?>
                                        </p>
                                        <p class="text-sm">
                                            <b class="d-block">Nama Lengkap</b>
                                            <?= $manager_detail['nama']; ?>
                                        </p>

                                        <p class="text-sm">
                                            <b class="d-block">Jenis Kelamin</b>
                                            <?= $manager_detail['jenis_kelamin']; ?>
                                        </p>
                                    </div>
                                    <div class="col col-md text-muted">
                                        <p class="text-sm">
                                            <b class="d-block">No. Hp</b>
                                            <?= $manager_detail['no_tlp']; ?>
                                        </p>
                                        <p class="text-sm">
                                            <b class="d-block">Alamat</b>
                                            <?= $manager_detail['alamat']; ?>
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url('manager/profile_detail'); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pen"></i>
                                    <b>Ubah Profile</b>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->