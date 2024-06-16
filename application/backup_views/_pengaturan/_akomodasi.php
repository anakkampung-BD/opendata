<!-- Flash Data -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title; ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('admin'); ?>">Admin</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Pengaturan</li>
                    <li class="active"><?= $title; ?></li>
                </ol>
            </div>
        </div>

        <!-- Disini Content -->
        <!-- Tabel Homestay/Resort/Penginapan -->
        <div class="col-lg-12 pt-2">
            <div class="white-box">
                <div class="row white-box" style="background-color: #231a56;">
                    <!-- Judul Tabel -->
                    <div class="col-md-4">
                        <h3 class="text-white font-bold text-uppercase"> List Akomodasi Darat</h3>
                    </div>
                    <!-- Tombol -->
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-2">
                        <div class="">
                            <a class="btn btn-success btn-block btn-sm tambah_darat" href="admin/add_akdarat">Tambah Data</a>

                            <div class="dropdown button m-t-10">
                                <a class="btn btn-success btn-sm btn-block dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Download
                                </a>

                                <div class="dropdown-menu dr_button">
                                    <a class="dropdown-item text-center" href="#"><i class="fa fa-file-pdf-o text-danger"></i>&nbsp; PDF</a>
                                    <a class="dropdown-item text-center" href="#"><i class="fa fa-table text-success"></i>&nbsp; CSV</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <table id="akomodasiDarat" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-uppercase" style="text-align: center;">No</th>
                            <th class="text-uppercase" style="text-align: center;">Nama Akomodasi</th>
                            <th class="text-uppercase" style="text-align: center;">Alamat</th>
                            <th class="text-uppercase" style="text-align: center;">Kecamatan</th>
                            <th class="text-uppercase" style="text-align: center;">Latitude</th>
                            <th class="text-uppercase" style="text-align: center;">Longitude</th>
                            <th class="text-uppercase" style="text-align: center;">Status</th>
                            <th class="text-uppercase" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($homestay as $stay) :
                            $id = $stay['id'];
                        ?>
                            <tr>
                                <td class="text-uppercase" style="text-align: center;"><?= $no; ?></td>
                                <td class="text-uppercase"><?= $stay['homestay_name']; ?></td>
                                <td class="text-uppercase"><?= $stay['alamat']; ?></td>
                                <td class="text-uppercase"><?= $stay['kecamatan']; ?></td>
                                <?php if ($stay['latitude'] == null) : ?>
                                    <td class="text-uppercase text-danger text-center">Data perlu diupdate</td>
                                <?php else : ?>
                                    <td class="text-uppercase text-danger"><?= $stay['latitude']; ?></td>
                                <?php endif; ?>
                                <?php if ($stay['longitude'] == null) : ?>
                                    <td class="text-uppercase text-danger text-center">Data perlu diupdate</td>
                                <?php else : ?>
                                    <td class="text-uppercase"><?= $stay['longitude']; ?></td>
                                <?php endif; ?>
                                <?php if ($stay['status'] == 0) : ?>
                                    <td class="text-success text-uppercase" style="text-align: center;">Aktif</td>
                                <?php else : ?>
                                    <td class="text-success text-uppercase" style="text-align: center;">Tidak Aktif</td>
                                <?php endif; ?>
                                <td style="text-align: center;">
                                    <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#tampil_data<?= $id; ?>">
                                        View
                                    </a>
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Tabel Kapal -->
        <div class="col-lg-12 pt-2">
            <div class="white-box">
                <div class="row white-box" style="background-color:#090979;">
                    <!-- Judul Tabel -->
                    <div class="col-md-4">
                        <h3 class="text-white font-bold text-uppercase"> List Akomodasi Laut</h3>
                    </div>
                    <!-- Tombol -->
                    <div class="col-md-6 col-sm-12 text-center p-t-15">

                    </div>
                    <div class="col-md-2">
                        <div class="">
                            <a href="#" class="btn btn-success btn-block btn-sm" data-toggle="modal" data-target="#add_kapal">
                                Tambah Data
                            </a>

                            <div class="dropdown button m-t-10">
                                <a class="btn btn-success btn-sm btn-block dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Download
                                </a>

                                <div class="dropdown-menu dr_button">
                                    <a class="dropdown-item text-center" href="#"><i class="fa fa-file-pdf-o text-danger"></i>&nbsp; PDF</a>
                                    <a class="dropdown-item text-center" href="#"><i class="fa fa-table text-success"></i>&nbsp; CSV</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <table id="akomodasiDarat" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-uppercase">No</th>
                            <th class="text-uppercase">Nama Kapal</th>
                            <th class="text-uppercase">No. GT</th>
                            <th class="text-uppercase">Nama Pemilik</th>
                            <th class="text-uppercase">Nama Kapten</th>
                            <th class="text-uppercase">Status</th>
                            <th class="text-uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($kapal as $ship) : ?>
                            <tr>
                                <td class="text-uppercase"><?= $no; ?></td>
                                <td class="text-uppercase"><?= $ship['ship_name']; ?></td>

                                <?php if ($ship['noGT'] == null) : ?>
                                    <td class="text-uppercase text-danger">Data Perlu dilengkapi</td>
                                <?php else : ?>
                                    <td class="text-uppercase"><?= $ship['noGT']; ?></td>
                                <?php endif; ?>

                                <?php if ($ship['owner'] == null) : ?>
                                    <td class="text-uppercase text-danger">Data Perlu Dilengkapi</td>
                                <?php else : ?>
                                    <td class="text-uppercase"><?= $ship['owner']; ?></td>
                                <?php endif; ?>

                                <?php if ($ship['kapten'] == null) : ?>
                                    <td class="text-uppercase text-danger">Data Perlu Dilengkapi</td>
                                <?php else : ?>
                                    <td class="text-uppercase"><?= $ship['kapten']; ?></td>
                                <?php endif; ?>

                                <?php if ($stay['status'] == 0) : ?>
                                    <td class="text-success text-uppercase">Aktif</td>
                                <?php else : ?>
                                    <td class="text-success text-uppercase">Tidak Aktif</td>
                                <?php endif; ?>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">View</a>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

    <!-- Modal Tambah Kapal -->
    <div class="modal fade" id="add_kapal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="add_kapalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase fw-bold" id="add_kapalLabel">Update Data Akomodasi</h4>
                </div>
                <div class="modal-body">
                    <form action="admin/add_aklaut" method="POST" enctype="multipart/form-data">

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Kapal <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="ship_name" id="ship_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">No. GT Kapal</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="noGT" id="noGT">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Pemilik Kapal <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-dark text-uppercase" name="owner" id="owner" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Kapten Kapal <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="kapten" id="kapten" required>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-info btn-block mt-2">Update</button>
                            <button type="button" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Batal</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tampil Data -->
    <?php foreach ($homestay as $home) :
        $id = $home['id'];
        $type = $home['type'];
    ?>
        <div class="modal fade" id="tampil_data<?= $id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tampil_dataLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-uppercase fw-bold" id="tampil_dataLabel">Data Detail ID : SM-<?= $id; ?></h4>
                    </div>
                    <div class="modal-body">

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">ID Akomodasi</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase text-black font-weight-bold" value="SM-<?= $home['id']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Type Akomodasi <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <?php if ($type == null) {
                                        $val = 'Lengkapi data pada database';
                                    } else if ($type == 1) {
                                        $val = 'Resort';
                                    } else if ($type == 2) {
                                        $val = 'Homestay';
                                    } else {
                                        $val = 'Penginapan';
                                    }
                                    ?>
                                    <input type="text" class="form-control form-control-dark text-uppercase" value="<?= $val; ?>" readonly>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Akomodasi <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" value="<?= $home['homestay_name']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Pemilik <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <?php if ($home['owner'] !== null) : ?>
                                        <input type="text" class="form-control form-control-dark text-uppercase" value="<?= $home['owner']; ?>" readonly>
                                    <?php else : ?>
                                        <input type="text" class="form-control form-control-dark text-danger" value="Lengkapi Data" readonly>
                                    <?php endif; ?>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Kembali</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>