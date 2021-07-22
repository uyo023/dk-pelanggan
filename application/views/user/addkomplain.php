<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input Komplain</h1>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Default box -->
                <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
                    <div class="card card-primary card-outline">
                    </div>
                    <!-- Form Start -->
                    <form class="input" method="post" action="<?= base_url('user/addkomplain'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="level_komplain">Level komplain</label>
                            <select class="form-control form-control-sm" id="level" name="level" placeholder="Level komplain">
                                <option selected> Choose...</option>
                                <option>Level 1</option>
                                <option>Level 2</option>
                                <option>Level 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul komplain</label>
                            <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul Komplain">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi komplain</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Komplain" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Pilih file</label>
                            <input type="file" class="form-control-file" id="image" name="image" placeholder="Pilih File">
                            <small class="text-danger pl-3">
                                <?= $this->session->flashdata('image'); ?>
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary float-right btn-sm" name="simpan">Simpan</button>
                    </form>
                    <!-- Form Finish -->
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->