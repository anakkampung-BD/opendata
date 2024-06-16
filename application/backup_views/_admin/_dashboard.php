<!-- Tangkap flash data -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Beranda</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Admin</li>
                    <li class="active">Beranda</li>
                </ol>
            </div>
        </div>

        <!-- PAD Stats -->
        <?php
        // Cari Jumlah Peselancar International
        $surfing = $this->admin_model->getSurfer()->num_rows();
        // Cari Jumlah Peselancar Nasional
        $surfNas = $this->admin_model->getNasSurfer()->num_rows();

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
                    <?php $tot = $this->admin_model->get_tamu('nama')->num_rows(); ?>
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
                    <?php $ad = $this->admin_model->get_homestay('homestay_name')->num_rows(); ?>
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
                    <?php $al = $this->admin_model->get_ship('ship_name')->num_rows(); ?>
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
                    <?php $al = $this->admin_model->get_ship('ship_name')->num_rows(); ?>
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
                    $tot = $this->admin_model->getSurfer('nama')->num_rows();
                    $nas = $this->admin_model->getNasSurfer('jenis_kunjungan')->num_rows();

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
                    <?php $nonSurf = $this->admin_model->getNonSurfer('jenis_kunjungan')->num_rows(); ?>
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
    </div>