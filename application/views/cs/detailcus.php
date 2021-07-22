<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Customer</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Customer</th>
                            <th>Nama Lengkap</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Hp</th>
                            <th>Alamat Lengkap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($user_detail as $row) :
                        ?>
                            <tr>
                                <td><?= $row['no_cus']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['tempat']; ?> <?= $row['tanggal_lahir']; ?></td>
                                <td><?= $row['jenis_kelamin']; ?></td>
                                <td><?= $row['no_hp']; ?></td>
                                <td><?= $row['alamat_lengkap']; ?></td>
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