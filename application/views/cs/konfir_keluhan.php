<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Keluhan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Customer</th>
                            <th>Level</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>image</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($komplain as $row) :
                        ?>
                            <tr>
                                <td><?= $row['no_cus']; ?></td>
                                <td><?= $row['level']; ?></td>
                                <td><?= $row['judul']; ?></td>
                                <td><?= $row['deskripsi']; ?></td>
                                <td><?= $row['image']; ?></td>
                                <td><?= $row['tanggal']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td>
                                    <a href="<?= base_url('cs/konfir_detail/' . $row['id_kel']); ?>" class="btn btn-success btn-sm fa fa-eye"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->