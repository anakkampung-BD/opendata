<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title; ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Admin</li>
                    <li class="active"><?= $title; ?></li>
                </ol>
            </div>
        </div>

        <!-- Disini konten -->
        <div class="row">

            <!-- Tangkap flash data -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

            <!-- Input Form -->
            <div class="col-lg-9 col-xs-12 m-t-15">
                <div class="white-box">
                    <div class="panel-body tarif">
                        <!-- Form surfing international -->
                        <div class="col-lg-12">
                            <h3 class="font-bold text-uppercase">Update Tarif</h3>

                            <div class="card white-box" style="background-color: #d597fc;">
                                <div class="text-white fw-bold">
                                    <p style="text-align: justify;">Lakukan penyesuaian data tarif jika terdapat perubahan sesuai peraturan daerah. Perubahan pada bagian tarif, akan mempengaruhi seluruh perhitungan pada jumlah PAD.</p>
                                </div>
                            </div>

                            <div class="form-layout form-layout-1 bform">
                                <?php foreach ($tarif as $tr) : ?>
                                    <form class="form-horizontal" method="post" action="<?= base_url('admin/update_tarif/') . $tr['id']; ?>">
                                        <div class="form-group">
                                            <label class="col-md-3 form-control-label text-uppercase">Tarif Surfing Wisatawan Internasional: <span class="tx-danger">*</span></label>
                                            <div class="col-md-9  input-group-dark">
                                                <input type="hidden" id="id" name="id" value="<?= $tr['id']; ?>">
                                                <input type="text" id="surf_int" name="surf_int" value="<?= $tr['surf_int']; ?>" class="form-control">
                                            </div>
                                        </div><!-- row -->

                                        <div class="form-group">
                                            <label class="col-md-3 form-control-label text-uppercase">Tarif Surfing Wisatawan Nasional: <span class="tx-danger">*</span></label>
                                            <div class="col-md-9  input-group-dark">
                                                <input type="text" id="surf_nas" name="surf_nas" class="form-control" value="<?= $tr['surf_nas']; ?>">
                                            </div>
                                        </div><!-- row -->

                                        <div class="form-group">
                                            <label class="col-md-3 form-control-label text-uppercase">Rate Pajak Rumah Makan: <span class="tx-danger">*</span></label>
                                            <div class="col-md-9 input-group-dark">
                                                <input type="text" id="pjk_rm" name="pjk_rm" class="form-control" name="date_end" value="<?= $tr['pjk_rm']; ?>">
                                            </div>
                                        </div>

                                        <div class="pt-5">
                                            <button class="btn btn-info btn-sm waves-effect waves-light float-right" type="submit">Update</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- View Database -->
            <?php foreach ($tarif as $tr) : ?>
                <div class="col-lg-3 col-xs-12 m-t-15 white-box">
                    <div class="card white-box panel-body m-t-2 align-content-center">
                        <!-- Surfing Internasional Panel -->
                        <div class="col-md-12 col-sm-6" style="background-color: #fff;padding:5px 5px 25px 5px;">
                            <div class="card-header">
                                <p> TARIF SURFING - WISATAWAN INTERNATIONAL</p>
                            </div>
                            <div class="card-body">
                                <h5 class="text-center text-black fw-bold mt-5 mb-5" style="font-size: 22px;">Rp. <?= number_format($tr['surf_int']); ?><sub class="text-danger" style="font-size: 14px;"> /Orang</sub></h5>
                            </div>
                            <div class="card-footer" style="background-color: #fff;">
                                <p class="text-danger small">Last update : </p>
                            </div>
                        </div>
                        <!-- Surfing Nasional Panel -->
                        <div class="col-md-12 col-sm-6 pt-3" style="background-color: #fff;">
                            <div class="card-header">
                                <p> TARIF SURFING - WISATAWAN NASIONAL</p>
                            </div>
                            <div class="card-body">
                                <h5 class="text-center text-black fw-bold mt-5 mb-5" style="font-size: 22px;">Rp. <?= number_format($tr['surf_nas']); ?><sub class="text-danger" style="font-size: 14px;"> /Orang</sub></h5>
                            </div>
                            <div class="card-footer" style="background-color: #fff;">
                                <p class="text-danger small">Last update : </p>
                            </div>
                        </div>
                        <!-- Pajak Rumah Makan Panel -->
                        <div class="col-md-12 col-sm-6 pt-3" style="background-color: #fff;">
                            <div class="card-header">
                                <p> RATE PAJAK RUMAH MAKAN</p>
                            </div>
                            <div class="card-body">
                                <h5 class="text-center text-black fw-bold mt-5 mb-5" style="font-size: 22px;"><?= number_format($tr['pjk_rm']); ?> <sub class="text-danger" style="font-size: 14px;"> % dari seluruh transaksi</sub></h5>
                            </div>
                            <div class="card-footer" style="background-color: #fff;">
                                <p class="text-danger small">Last update : </p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-6">
                            <p class="small pl-2 pt-2 pb-2 pr-2" style="border-radius: 5px;background-color:#fdf6ce;">Rate Pajak bisa disesuaikan mengikuti kebijakan terbaru</p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- <style>
            .dropzone {
                border-style: dashed;
                border-width: 1px;
            }
        </style> -->


    </div>
</div>