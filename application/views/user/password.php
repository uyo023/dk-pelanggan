<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Change Password -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('user/password'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="current_password"> Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1"> New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2"> Repeat Password </label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat Password">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"> Change Password</button>
                </div>
            </form>
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