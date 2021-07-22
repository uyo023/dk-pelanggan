<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/komplain/') . $komplain['image']; ?>" alt="User profile picture">
                            </div>
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
                                        <b class="d-block">No Customer</b>
                                        <?= $komplain['no_cus']; ?>
                                    </p>
                                    <p class="text-sm">
                                        <b class="d-block">judul Keluhan</b>
                                        <?= $komplain['judul']; ?>
                                    </p>
                                    <p class="text-sm">
                                        <b class="d-block">Deskripsi Keluhan</b>
                                        <?= $komplain['deskripsi']; ?>
                                    </p>
                                </div>
                                <div class="col col-md text-muted">
                                    <p class="text-sm">
                                        <b class="d-block">Tanggal Keluhan</b>
                                        <?= $komplain['tanggal']; ?>
                                    </p>
                                    <p class="text-sm">
                                        <b class="d-block">Status</b>
                                        <?= $komplain['status']; ?>
                                    </p>
                                </div>
                            </div>
                            <?php if ($komplain['status'] == '0') : ?>
                                <!-- link di tombol ini nge link ke fungsi proses yang ada di kontroler cs sambil kirim data id nya,  -->
                                <a href="<?= base_url('cs/proses/' . $komplain['id_kel']); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pen"></i>
                                    <b>Proses</b>
                                </a>
                            <?php elseif ($komplain['status'] == 'proses') : ?>
                                <a href="<?= base_url('cs/selesai/' . $komplain['id_kel']); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pen"></i>
                                    <b>Selesai</b>
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->