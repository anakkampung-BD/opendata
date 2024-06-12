<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Selamat datang <strong class="text-danger text-uppercase"><?= $user['akomodasi']; ?></strong></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">User</li>
                    <li class="active">Beranda</li>
                </ol>
            </div>
        </div>

        <!-- Content disini -->
        <!-- Lapor Wisatawan -->
        <div class="row m-t-15">
            <div class="col-lg-12">
                <div class="white-box">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase text-center">10 Laporan Wisatawan yang terakhir</h4>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="dashboard" class="datatable table-striped" style="font-size: 11px;">
                            <thead>
                                <tr>
                                    <th style="text-align:center">No</th>
                                    <th style="text-align:center">Tanggal Laporan</th>
                                    <th style="text-align:center">ID Laporan</th>
                                    <th style="text-align:center">Topik Laporan</th>
                                    <th style="text-align:center">Status Laporan</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($reportWisatawan as $report) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no; ?></td>
                                        <td class="text-center"><?= date('d-m-Y', strtotime($report['tgl_entry'])); ?></td>
                                        <td class="text-center"><?= base64_encode($report['tgl_entry']); ?>SIMORIST</td>
                                        <td class="text-center">Pelaporan Wisatawan</td>
                                        <td class="text-center text-warning">Terkirim</td>
                                        <td class="text-center small">
                                            <a href="#" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-danger btn-sm">Revoke</a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Lapor Pajak Rumah Makan -->
        <div class="row m-t-15">
            <div class="col-lg-12">
                <div class="white-box">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase text-center">10 Laporan Pajak yang terakhir</h4>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="dashboard" class="datatable table-striped" style="font-size: 11px;">
                            <thead>
                                <tr>
                                    <th style="text-align:center">No</th>
                                    <th style="text-align:center">Tanggal Laporan</th>
                                    <th style="text-align:center">ID Laporan</th>
                                    <th style="text-align:center">Topik Laporan</th>
                                    <th style="text-align:center">Status Laporan</th>
                                    <th style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($reportWisatawan as $report) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no; ?></td>
                                        <td class="text-center"><?= date('d-m-Y', strtotime($report['tgl_entry'])); ?></td>
                                        <td class="text-center"><?= base64_encode($report['tgl_entry']); ?>SIMORIST</td>
                                        <td class="text-center">Pelaporan Pajak</td>
                                        <td class="text-center text-warning">Terkirim</td>
                                        <td class="text-center small">
                                            <a href="#" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-danger btn-sm">Revoke</a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>