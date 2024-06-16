<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase"><?= $title; ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('admin');?>">Dashboard</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Admin</li>
                    <li class="active"><?= $title; ?></li>
                </ol>
            </div>
        </div>

        <!-- Tangkap flash data -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <!-- Disini konten -->
        <?php foreach ($identitas as $identity) : ?>
            <form class="form-horizontal" action="admin/identitas_edit" method="POST" id="px-system-my-profile-form" enctype="multipart/form-data">
                <div class="row white-box m-t-15">

                    <!-- Logo Utama -->
                    <div class="col-md-3 col-xs-3 col-sm-6 m-t-15 mb-auto mt-auto">

                        <h5 class="text-uppercase fw-bold">Logo Aplikasi</h5>
                        <div class="white-box">

                            <div class="" style="background-color: #d597fc;">
                                <div class="text-center">
                                    <img id="logo-utama" src="<?= base_url('asslog/images/') . $identity['apps_logo']; ?>" class="img-fluid img-logo col-xs-12">
                                </div>
                            </div>

                            <div class="form-group pt-5 mt-4">
                                <input type="file" class="form-control-file ml-3 mt-2" id="apps_logo" name="apps_logo">
                                <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                            </div>

                        </div>
                    </div>

                    <!-- Logo PEMDA -->
                    <div class="col-md-3 m-t-15 mb-auto mt-auto">

                        <h5 class="text-uppercase fw-bold">Logo Pemda</h5>
                        <div class="white-box">

                            <div class="panel-box">
                                <div class="text-center">
                                    <img id="logo-pemda" src="<?= base_url('asslog/images/') . $identity['apps_logo_founder']; ?>" class="img-fluid img-pemda">
                                </div>
                            </div>

                            <div class="form-group pt-3">
                                <input type="file" class="form-control-file ml-3 mt-2" id="apps_logo_founder" name="apps_logo_founder">
                            </div>

                        </div>
                    </div>

                    <!-- Logo Founder -->
                    <div class="col-md-3 m-t-15">

                        <h5 class="text-uppercase fw-bold">Logo Founder</h5>
                        <div class="white-box">

                            <div class="panel-box">
                                <div class="text-center no-padding">
                                    <img src="<?= base_url('asslog/images/') . $identity['apps_logo_founder_1']; ?>" style="width: 260px;height:auto;padding-left:0px;" class="img-fluid">
                                </div>
                            </div>

                            <div class="form-group pt-2">
                                <input type="file" class="form-control-file ml-3 mt-2" id="exampleFormControlFile1">
                                <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                            </div>

                        </div>
                    </div>

                    <!-- Favicon -->
                    <div class="col-md-3 m-t-15">

                        <h5 class="text-uppercase fw-bold">Logo Favicon</h5>
                        <div class="white-box">

                            <div class="panel-box">
                                <div class="text-center">
                                    <img src="<?= base_url('asslog/images/') . $identity['apps_fav']; ?>" style="width: 109px;height:auto;">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file ml-3 mt-2" id="exampleFormControlFile1">
                                <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                            </div>

                        </div>
                    </div>

                    <!-- Background Login Page -->
                    <div class="col-md-6 m-t-15">

                        <h5 class="text-uppercase fw-bold">Background Halaman Login</h5>
                        <div class="white-box">

                            <div class="panel-box">
                                <div class="text-center">
                                    <img src="<?= base_url('asslog/images/') . $identity['bg_login']; ?>" style="width: 280px;height:auto;">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file ml-3 mt-2" id="exampleFormControlFile1">
                                <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                            </div>

                        </div>
                    </div>

                    <!-- Logo Form Login -->
                    <div class="col-md-6 m-t-15">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="text-uppercase fw-bold">Logo Form Login</h5>
                                <div class="white-box">

                                    <div class="panel-box">
                                        <div class="text-center">
                                            <img src="<?= base_url('asslog/images/') . $identity['logo_login']; ?>" style="width: 250px;height:auto;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control-file ml-3 mt-2" id="exampleFormControlFile1">
                                        <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="text-uppercase fw-bold">Logo Form Login</h5>
                                <div class="white-box">

                                    <div class="panel-box">
                                        <div class="text-center">
                                            <img src="<?= base_url('asslog/images/') . $identity['logo_login']; ?>" style="width: 250px;height:auto;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control-file ml-3 mt-2" id="exampleFormControlFile1">
                                        <input type="hidden" name="id" id="id" value="<?= $identity['id']; ?>">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-12 col-xs-12 float-right">
                            <!-- Tombol Submit -->
                            <div class="form-group mt-3 pt-3">
                                <div class="col-md-12 col-xs-12">
                                    <button type="submit" class="btn btn-info">Update Data</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        <?php endforeach; ?>

    </div>
</div>