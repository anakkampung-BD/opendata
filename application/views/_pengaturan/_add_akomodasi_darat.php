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
                        <h5 class="font-bold text-uppercase mb-4">Tambah Akomodasi
                        </h5>

                        <form class="form-horizontal" method="POST" action="admin/add_akdarat">

                            <div class="form-layout form-layout-1 bform">

                                <div class="form-group ">
                                    <label class="col-md-3 form-control-label">Type Akomodasi <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <select class="form-control" name="type" id="type" required>
                                            <option value="">-- Pilih Type --</option>
                                            <option value="1">Resort</option>
                                            <option value="2">Hotel</option>
                                            <option value="3">Penginapan</option>
                                        </select>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Nama Akomodasi <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="homestay_name" id="homestay_name" placeholder="Diisi tanpa menyebut type akomodasi. Contoh: Queen" required>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Pemilik Akomodasi </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="owner" id="owner" placeholder="Opsional...">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Alamat Lengkap </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Diisi oleh pemilik akomodasi...">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Kecamatan <span class="text-danger">*</span></label>
                                    <div class="col-md-8 input-group-dark">
                                        <select class="form-control" name="kecamatan" id="kecamatan" required>
                                            <option>-- Pilih Kecamatan --</option>
                                            <option>Siberut Barat</option>
                                            <option>Siberut Utara</option>
                                            <option>Siberut Tengah</option>
                                            <option>Siberut Selatan</option>
                                            <option>Siberut Barat Daya</option>
                                            <option>Sipora Utara</option>
                                            <option>Sipora Selatan</option>
                                            <option>Sikakap</option>
                                            <option>Pagai Utara</option>
                                            <option>Pagai Selatan</option>
                                        </select>
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Koordinat Lokasi </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" id="latitude" name="latitude" class="form-control" placeholder="Latitude">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label"></label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" id="longitude" name="longitude" class="form-control" placeholder="Longitude">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Tag Line </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="tagline" id="tagline" placeholder="Diisi oleh pemilik akomodasi...">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Visi </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="visi" id="visi" placeholder="Diisi oleh pemilik akomodasi...">
                                    </div>
                                </div><!-- row -->

                                <div class="form-group">
                                    <label class="col-md-3 form-control-label">Misi </label>
                                    <div class="col-md-8 input-group-dark">
                                        <input type="text" class="form-control" name="misi" id="misi" placeholder="Diisi oleh pemilik akomodasi...">
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