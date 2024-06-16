<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Beranda</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Mitra</li>
                    <li class="active">Beranda</li>
                </ol>
            </div>
        </div>

        <!-- PAD Stats -->
        <?php
        // Cari Jumlah Peselancar International
        $surfing = $this->mitra_model->getSurfer()->num_rows();
        // Cari Jumlah Peselancar Nasional
        $surfNas = $this->mitra_model->getNasSurfer()->num_rows();

        foreach ($tarif as $duit);

        // Hitung Retribusi Surfing International
        $surfInt = ($surfing - $surfNas) * $duit['surf_int'];
        // Hitung Retribusi Surfing Nasional
        $surfingNas = $surfNas * $duit['surf_nas'];
        // Hitung Jumlah PAD Surfing
        $pad = $surfInt + $surfingNas;
        ?>
        <div class="row mt-3 text-center white-box" style="border-radius: 5px;background-color:#231a56;">
            <div class="col-md-4 pt-2">
                <h5 class="text-primary spinner-grow te"><a href="<?= base_url('admin/lap_surfing'); ?>" style="text-decoration: none;color:#fff;"> Jumlah Retribusi Sufring International</a></h5>
                <h5 class="text-white"><a href="<?= base_url('admin/lap_surfing'); ?>" style="text-decoration: none;color:#fff;"> Rp. <strong><?= number_format($surfInt, 2, ',', '.'); ?></strong></a></h5>
            </div>
            <div class="col-md-4 pt-2">
                <h5 class="text-white">Jumlah Retribusi Surfing Nasional</h5>
                <h5 class="text-white"><a href="<?= base_url('admin/lap_nonsurfing'); ?>" style="text-decoration: none;color:#fff;">Rp. <strong><?= number_format($surfingNas, 2, ',', '.'); ?></strong></a></h5>
            </div>
            <div class="col-md-4 pt-2">
                <h5 class="text-white">Total PAD Surfing</h5>
                <h5 class="text-white"><a href="<?= base_url('admin/lap_retribusi'); ?>" style="text-decoration: none;color:#fff;"></a> Rp. <strong><?= number_format($pad, 2, ',', '.'); ?></strong></h5>
            </div>
        </div>

        <!-- Wisatawan & Akomodasi Stats -->
        <div class="row pt-3 pb-3">
            <!-- User Stats -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fas fa-users text-white"></i> Total Wisatawan</p>
                </div>
                <div class="card-body">
                    <?php $tot = $this->mitra_model->get_tamu('nama')->num_rows(); ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $tot; ?><sub class="text-danger" style="font-size: 14px;"> Orang</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p class="text-danger small">Last update : </p>
                </div>
            </div>
            <!-- Homestay🤣 -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fas fa-home text-white"></i> Jumlah Homestay</p>
                </div>
                <div class="card-body">
                    <?php $ad = $this->mitra_model->get_homestay('homestay_name')->num_rows(); ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $ad; ?><sub class="text-danger" style="font-size: 14px;"> Unit</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p class="text-danger small">Last update : </p>
                </div>
            </div>
            <!-- Kapal -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fas fa-ship text-white"></i> Jumlah Kapal</p>
                </div>
                <div class="card-body">
                    <?php $al = $this->mitra_model->get_ship('ship_name')->num_rows(); ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $al; ?><sub class="text-danger" style="font-size: 14px;"> Unit</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p class="text-danger small">Last update : </p>
                </div>
            </div>
            <!-- Permintaan Data -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fas fa-file text-white"></i> Permintaan Data</p>
                </div>
                <div class="card-body">
                    <?php $al = $this->mitra_model->get_ship('ship_name')->num_rows(); ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $al; ?><sub class="text-danger" style="font-size: 14px;"> Permintaan</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p class="text-danger small">Last update : </p>
                </div>
            </div>
        </div>

        <!-- Content Space -->
        <div class="row">
            <!-- Jumlah Wisatawan -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fas fa-switcase"></i> Jumlah Wisatawan Internasional</p>
                </div>
                <div class="card-body">
                    <?php
                    $tot = $this->mitra_model->getSurfer('nama')->num_rows();
                    $nas = $this->mitra_model->getNasSurfer('jenis_kunjungan')->num_rows();

                    $total = $tot - $nas;
                    ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $total; ?><sub class="text-danger" style="font-size: 14px;"> Orang</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p>Ini adalah card footer</p>
                </div>
            </div>
            <!-- Jumlah Peselancar -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fa fa-cogs text-warning"></i> Jumlah Wisatawan Nasional</p>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $nas; ?><sub class="text-danger" style="font-size: 14px;"> Orang</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p>Ini adalah card footer</p>
                </div>
            </div>
            <!-- Jumlah Non-Peselancar -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p><i class="fa fa-line-chart text-warning"></i> Wisatawan Non-Surfing</p>
                </div>
                <div class="card-body">
                    <?php $nonSurf = $this->mitra_model->getNonSurfer('jenis_kunjungan')->num_rows(); ?>
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4"><?= $nonSurf; ?><sub class="text-danger" style="font-size: 14px;"> Orang</sub></h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p>Ini adalah card footer</p>
                </div>
            </div>
            <!-- Jumlah Retribusi -->
            <div class="col-md-3 col-sm-6 pt-3" style="background-color: #fff;">
                <div class="card-header">
                    <p>
                        <i class="fa fa-money text-warning"></i> Jumlah PAD<span class="notify" style="background-color:crimson;"><span class=" heartbit" style="background-color:crimson;"></span><span class=" point" style="background-color:crimson;"></span></span>
                    </p>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-black fw-bold mt-5 mb-5 ml-4">
                        <strong>Rp.</strong> <?= number_format($pad, 2, ',', '.'); ?>
                    </h3>
                </div>
                <div class="card-footer" style="background-color: #fff;">
                    <p class="text-center">Seratus Dua Puluh Empat Juta Rupiah</p>
                </div>
            </div>
        </div>


        <div class="col-lg-12 pt-2">


            <hr style="background-color: #ae33f9">

            <div class="row">
                <!-- Retribusi Stats -->
                <div class="col-lg-12 col-xs-12 m-t-15">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="font-bold text-uppercase"> Data Maintenance</h3>
                            </div>
                            <div class="col-md-8 p-t-15">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <input id="px-admin_maintenance-maintenance-order" type="hidden" name="order" value="0">
                                        <button class="btn btn-outline btn-info btn-sm dropdown-toggle waves-effect waves-light btn-order" aria-expanded="false" type="button" data-toggle="dropdown">Order By<span class="caret"></span></button>
                                        <ul class="dropdown-menu animated slideInRight m-t-10" role="menu">
                                            <li><a class="order" data-order="0" style="cursor: pointer;">Order By</a></li>
                                            <li><a class="order" data-order="1" style="cursor: pointer;"> Priority - Very Urgent to Not Urgent</a></li>
                                            <li><a class="order" data-order="2" style="cursor: pointer;"> Priority - Not Urgent to Very Urgent</a></li>
                                            <li><a class="order" data-order="3" style="cursor: pointer;"> Date Created - Earliest to Latest</a></li>
                                            <li><a class="order" data-order="4" style="cursor: pointer;"> Date Created - Latest to Earliest</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline btn-info btn-sm dropdown-toggle waves-effect waves-light btn-user_group" aria-expanded="false" type="button" data-toggle="dropdown">Status <span class="caret"></span></button>
                                        <input type="hidden" name="status">
                                        <ul class="dropdown-menu animated slideInRight m-t-10" role="menu">
                                            <li><a class="user_group" data-number="1">All</a></li>
                                            <li><a class="user_group" data-number="2">Approval PMU</a></li>
                                            <li><a class="user_group" data-number="3">Approval Tenaga Ahli</a></li>
                                            <li><a class="user_group" data-number="4">Approval BAKTI</a></li>
                                            <li><a class="user_group" data-number="5">Report</a></li>
                                            <li><a class="user_group" data-number="6">Rejected</a></li>
                                            <li><a class="user_group" data-number="7">Approved</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <input id="px-admin_maintenance-maintenance-priority" type="hidden" name="level" value="0">
                                        <button class="btn btn-outline btn-info btn-sm dropdown-toggle waves-effect waves-light btn-prority" aria-expanded="false" type="button" data-toggle="dropdown">Priority <span class="caret"></span></button>
                                        <ul class="dropdown-menu animated slideInRight m-t-10" role="menu">
                                            <li><a class="priority" data-level="0" style="cursor: pointer;">All Priority</a></li>
                                            <li><a class="priority" data-level="3" style="cursor: pointer;">Very Urgent</a></li>
                                            <li><a class="priority" data-level="2" style="cursor: pointer;">Urgent</a></li>
                                            <li><a class="priority" data-level="1" style="cursor: pointer;">Not Urgent</a></li>
                                        </ul>
                                    </div>
                                    <input id="userGroup" type="hidden" value="3">
                                    <a class="btn btn-success btn-sm" href="admin_maintenance/maintenance_form">Add New</a>
                                </div>
                            </div>
                        </div>
                        <!-- <hr> -->
                        <div class="table-responsive">
                            <table id="dashboard" class="datatable table-striped" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">No</th>
                                        <th style="text-align:center">Provider</th>
                                        <th style="text-align:center">Maintenance ID</th>
                                        <th style="text-align:center">Date</th>
                                        <th style="text-align:center">Created</th>
                                        <th style="text-align:center">Subject</th>
                                        <th style="text-align:center">Status</th>
                                        <th style="text-align:center">Priority</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Simorist</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .label {
                    font-size: 0.9em;
                    font-weight: 400;
                }
            </style>
        </div>


    </div>