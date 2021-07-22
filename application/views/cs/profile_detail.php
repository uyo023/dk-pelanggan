<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Default box -->
            <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
                <div class="card card-primary card-outline">
                    <!-- form start -->
                    <form class="form-group" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group row">
                                        <label for="nis" class="col-sm-4 col-form-label">Id Cs</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control form-control-sm " name="no_cs" id="no_cs" value="<?= $user['id']; ?>" placeholder="Id Cs" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control form-control-sm <?= form_error('nama') ? 'is-invalid' : ''; ?>" name="nama" id="nama" value="<?= $user['nama']; ?>" placeholder="Nama Lengkap">
                                            <div class="invalid-feedback">
                                                <?= form_error('nama'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="form-check col-sm-4 ml-2">
                                            <label class="form-check-label" for="laki_laki">
                                                <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="Laki-laki" <?= $cs_detail['jenis_kelamin'] == '' ?  'checked' : ''; ?><?= $cs_detail['jenis_kelamin'] == 'Laki-laki' ?  'checked' : ''; ?>>Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-2 ml-2">
                                            <label class="form-check-label" for="perempuan">
                                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" <?= $cs_detail['jenis_kelamin'] == 'Perempuan' ?  'checked' : ''; ?>>Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-5 ml-5">
                                    <div class="form-group row">
                                        <label for="no_hp_ayah" class="col-sm-4 col-form-label">No. Handphone</label>
                                        <div class="col-sm">
                                            <input type="number" class="form-control form-control-sm <?= form_error('nama') ? 'is-invalid' : ''; ?>" name="no_hp" id="no_hp" value="<?= $cs_detail['no_hp']; ?>" placeholder="No.Hp">
                                            <div class="invalid-feedback">
                                                <?= form_error('nama'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm <?= form_error('nama') ? 'is-invalid' : ''; ?>">
                                            <textarea class="form-control form-control-sm  mb-1" rows="2" name="alamat" id="alamat" placeholder="Alamat Lengkap"><?= $cs_detail['alamat']; ?></textarea>
                                            <div class="invalid-feedback">
                                                <?= form_error('nama'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">Picture</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="<?= base_url("assets/img/profile/") . $user['image']; ?>" class="img-thumbnail">
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Pilih file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('cs/profile'); ?>" type="submit" class="btn btn-primary btn-sm">Batal</a>
                                <button type="submit" class="btn btn-primary btn-sm float-right" name="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->
    </div>
</section>