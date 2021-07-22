<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Komplain Pending</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Level</th>
                            <th>Judul Komplain</th>
                            <th>Tanggal Komplain</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($komplain as $row) :
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['level']; ?></td>
                                <td><?= $row['judul']; ?></td>
                                <td><?= date('d M Y h:i', $row['tanggal']); ?></td>
                                <td>
                                    <span class="badge badge-primary">Proses</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Chat</a>
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