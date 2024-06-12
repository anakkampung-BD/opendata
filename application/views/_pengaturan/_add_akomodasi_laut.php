<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title; ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Pengaturan</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Akomodasi</li>
                    <li class="active"><?= $title; ?></li>
                </ol>
            </div>
        </div>

        <!-- Flash Data -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <div class="row">
            <div class="col-lg-12 col-xs-12 m-t-15">
                <div class="white-box">
                    <div class="panel-body">
                        <h5 class="font-bold text-uppercase mb-4">Tambah Akomodasi Laut
                        </h5>

                        <form class="form-horizontal" method="POST" action="admin/add_akdarat">

                            <div class="form-layout form-layout-1 bform">

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Nama Kapal <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="ship_name" id="ship_name" required>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">No. GT </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="noGT" id="noGT" placeholder="Diisi oleh pemilik akomodasi...">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Nama Pemilik Kapal <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Nama Kapten Kapal <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" id="latitude" name="latitude" class="form-control" required>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <div class="col-md-1 mt-4">
                                        <button class="btn btn-info btn-sm btn-block" type="submit">Simpan</button>
                                    </div>
                                    <div class="col-md-1 mt-4">
                                        <button onclick="history.go(-1);" class="btn btn-block btn-danger btn-sm">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>