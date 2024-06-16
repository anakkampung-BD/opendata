<!-- CSS Historic -->
<link rel="stylesheet" href="<?= base_url(); ?>asslog/css/log-style.css">

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title m-b-5">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">User</a></li>
                    <li style="color: rgb(0 2 0 / 0.5)">Data Akomodasi</li>
                    <li class="active">Data Dasar</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xs-12 m-t-15">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs pull-left ml-3" role="tablist">
                            <li role="presentation" class="active nav-item"><a href="#detail" onclick="change_tab(1)" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user text-info"></i></span> <span class="hidden-xs">Detail Profile</span></a></li>
                            <li role="presentation" class=" nav-item"><a href="#tab-2" onclick="change_tab(2)" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog text-info"></i></span> <span class="hidden-xs">Historical Perubahan Data</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content m-t-0">
                    <!-- tab 2 summary -->
                    <div aria-labelledby="detail-tab" id="detail" class="tab-pane fade active show" role="tabpanel">
                        <!-- info maintenance and button-->
                        <div class="col-md-12">
                            <div class="white-box">
                                <div class="printableArea">
                                    <input type="hidden" id="detail-show" value="0">
                                    <div class="row">

                                        <!-- Note -->
                                        <div class="card white-box" style="background-color: #ead2fc;">
                                            <div class="fw-bold">
                                                <p style="text-align: justify;">Data dasar akomodasi anda bersumber dari data yang di entry oleh <b>Administrator Dinas Pariwisata, Pemuda dan Olahraga</b>. Jika terdapat kesalahan pada <b>data nama akomodasi, nama pemilik akomodasi, dan alamat akomodasi</b>, silahkan lakukan perubahan data dengan klik tombol edit. Data yang anda ubah baru akan tampil <b>setelah disetujui oleh Administrator</b>.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-lg-3 col-md-3 col-sm-5">
                                                <div class="pull-left">
                                                    <address>
                                                        <div class="form-group">
                                                            <h5 class="font-bold">ID AKOMODASI</h5>
                                                            <h5 class="font-bold">NAMA AKOMODASI</h5>
                                                            <h5 class="font-bold">NAMA PEMILIK</h5>
                                                            <h5 class="font-bold">ALAMAT</h5>
                                                            <h5 class="font-bold text-uppercase">TGL. Terdaftar</h5>
                                                        </div>
                                                    </address>
                                                </div>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-6">
                                                <div class="pull-right text-right">
                                                    <address>
                                                        <div class="form-group">
                                                            <h5>SM-<?= $user['id']; ?></h5>
                                                            <h5 class="text-uppercase"><?= $user['akomodasi']; ?></h5>
                                                            <h5 class="text-uppercase"><?= $user['name']; ?></h5>
                                                            <h5 class="text-uppercase"><?= $user['kec']; ?></h5>
                                                            <h5 class="text-uppercase"><?= date('d-m-Y', strtotime($user['date_created'])); ?></h5>
                                                        </div>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <p class="small text-danger">Update terakhir: Pukul <?= date('d-m-Y H:i:s', strtotime($user['date_created'])); ?> WIB</p>
                                            </div>
                                            <!-- Space -->
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-12">
                                                <a href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#profileakomodasi">
                                                    Update Data
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info description and file -->
                        <div class="col-md-12">
                            <div class="white-box">
                                <div class="printableArea m-t-10">
                                    <div class="row m-b-20">

                                    </div>
                                </div>
                                <div class="printableArea m-t-10">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <div class="card text-dark">
                                                <div class="card-header">
                                                    <h5 class="font-bold">Notes</h5>
                                                </div>

                                                <ul class="list-group list-group-flush m-b-0">
                                                    <li class="list-group-item">
                                                        <h5 class="font-bold">PMU</h5>
                                                        <div class="col-md-12">
                                                            <!-- <h5 class="font-bold">Request : </h5> -->
                                                            <p> Upgrade kompoenen monitoring Jovian untuk melakukan perbaikan-perbaikan bug pada software NMS Jovian.</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Pros : </h5>
                                                            <p>Komponen Network Operation Control (NOC) pada NMS Jovian akan menggunakan software version yang terbaru, dimana dapat mempermudah kegiatan monitoring, serta perbaikan-perbaikan bug pada software version sebelumnya.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Cons : </h5>
                                                            <p>NMS Jovian tidak dapat diakses.
                                                                Downtime penarikan data Application Programming Interface (API) dari NMS Jovian.
                                                                Downtime Radio Frequency (RF) pada seluruh Spotbeam sesuai rundown.</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Recommendation : </h5>
                                                            <p>Untuk dilakukan pada saat trafik turun sehingga dampak ke end used dapat diminimalkan.
                                                                Untuk dilakukan dengan detail dan terstruktur sehingga tidak terjadi rollback.</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Conclution : </h5>
                                                            <p>Setuju untuk dilakukan kegiatan ini karena untuk menyamankan versi software pada komponen monitoring Jovian dengan versi NMS Jovian.
                                                                Jika ada penurunan SLA terkait kegiatan ini maka akan menjadi tanggung jawab penyedia leased capacity (iForte)</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- <footer>Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info Report -->
                        </div>


                        <div class="clearfix"></div>
                    </div>
                    <!-- tab 3 log -->
                    <div role="tabpanel" class="tab-pane m-t-0 " id="tab-2">
                        <!-- info maintenance and button-->
                        <div class="col-md-12">
                            <div class="white-box m-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="pull-left">
                                                <address>
                                                    <div class="form-group">
                                                        <h3 class="font-bold">LOGS - #MAINTENANCE-195</h3>
                                                    </div>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pull-right text-right">
                                                <h4 class="btn btn-outline btn-info m-r-10">[ Provider Submission - Maintenance Report ]</h4>
                                                <button onclick="history.go(-1)" class="btn btn-primary btn-back">Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="white-box">
                                <ul class="timeline m-t-20">
                                    <li class="">
                                        <div class="timeline-badge "><i class="fa fa-plus-circle"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">
                                                    <b>Provider created Request</b>
                                                    <span class="pull-right">2022-07-12 16:54:38</span>
                                                </h4>
                                            </div>
                                            <div class="timeline-body">
                                                <table class="table table-detail-site no-border">
                                                    <col width="25%">
                                                    <col width="5%">
                                                    <col width="70%">
                                                    <tr>
                                                        <td>User</td>
                                                        <td>:</td>
                                                        <td>IFORTE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td><span style='color:black;font-weight:bold;'>CREATED</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Notes</td>
                                                        <td>:</td>
                                                        <td><textarea class="form-control" rows="2" readonly=""><p class="MsoNormal" style="margin-left:7.1pt;text-align:justify;text-indent:
35.45pt;line-height:150%"><span lang="EN-US" style="font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:EN-US;mso-bidi-font-weight:bold">Untuk melakukan
perbaikan-perbaikan <i>bug</i> pada <i>software version</i> sebelumnya, maka dilakukan
Kegiatan <i>Upgrade </i>pada seluruh komponen <i>Monitoring</i> di NMS Jovian.</span><span lang="IN" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"><o:p></o:p></span></p></textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="timeline-inverted">
                                        <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">
                                                    <b>PMU TA approved Request</b>
                                                    <span class="pull-right">2022-07-13 08:09:09</span>
                                                </h4>
                                            </div>
                                            <div class="timeline-body">
                                                <table class="table table-detail-site no-border">
                                                    <col width="25%">
                                                    <col width="5%">
                                                    <col width="70%">
                                                    <tr>
                                                        <td>User</td>
                                                        <td>:</td>
                                                        <td>Budi - PMU</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td><span style='color:green;font-weight:bold;'>APPROVED</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Notes</td>
                                                        <td>:</td>
                                                        <td><textarea class="form-control" rows="2" readonly="">Upgrade kompoenen monitoring Jovian untuk melakukan perbaikan-perbaikan bug pada software NMS Jovian.</textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="">
                                        <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">
                                                    <b>PMU PM approved Request</b>
                                                    <span class="pull-right">2022-07-13 13:28:53</span>
                                                </h4>
                                            </div>
                                            <div class="timeline-body">
                                                <table class="table table-detail-site no-border">
                                                    <col width="25%">
                                                    <col width="5%">
                                                    <col width="70%">
                                                    <tr>
                                                        <td>User</td>
                                                        <td>:</td>
                                                        <td>I Nengah Wirsana</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td><span style='color:green;font-weight:bold;'>APPROVED</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Notes</td>
                                                        <td>:</td>
                                                        <td><textarea class="form-control" rows="2" readonly="">Upgrade kompoenen monitoring Jovian untuk melakukan perbaikan-perbaikan bug pada software NMS Jovian.</textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="timeline-inverted">
                                        <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">
                                                    <b>Tenaga Ahli approved Request</b>
                                                    <span class="pull-right">2022-07-13 14:05:47</span>
                                                </h4>
                                            </div>
                                            <div class="timeline-body">
                                                <table class="table table-detail-site no-border">
                                                    <col width="25%">
                                                    <col width="5%">
                                                    <col width="70%">
                                                    <tr>
                                                        <td>User</td>
                                                        <td>:</td>
                                                        <td>Widodo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td><span style='color:green;font-weight:bold;'>APPROVED</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Notes</td>
                                                        <td>:</td>
                                                        <td><textarea class="form-control" rows="2" readonly=""></textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="">
                                        <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">
                                                    <b>BAKTI approved Request</b>
                                                    <span class="pull-right">2022-07-13 14:30:54</span>
                                                </h4>
                                            </div>
                                            <div class="timeline-body">
                                                <table class="table table-detail-site no-border">
                                                    <col width="25%">
                                                    <col width="5%">
                                                    <col width="70%">
                                                    <tr>
                                                        <td>User</td>
                                                        <td>:</td>
                                                        <td>Nanda</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>:</td>
                                                        <td><span style='color:green;font-weight:bold;'>APPROVED</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Notes</td>
                                                        <td>:</td>
                                                        <td><textarea class="form-control" rows="2" readonly=""></textarea></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"><i class="fa fa-clock-o"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h3 class="timeline-title d-inline">
                                                    <b><span class='text-muted font-bold'>Waiting Provider make submissions report</span></b>
                                                </h3>
                                                <span class="pull-right">2022-07-13 14:30:54</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal approved request-->
        <div class="modal fade" id="px-admin_maintenance-approved-request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title font-bold" id="exampleModalLabel">Request Detail</h4>
                    </div>
                    <form id="px-admin_maintenance-request-approval-form" method="POST" action="admin_maintenance/maintenance_approved_by">
                        <div class="modal-body">
                            <div class="row d-flex">
                                <div class="bd-gray-400 col-sm-12 m-b-10">
                                    <div class="card ht-100p">
                                        <div class="card-block pd-b-30 pd-t-30">
                                            <div class="pull-left">
                                                <h3 class="mg-b-0 tx-uppercase tx-black-400 tx-mont tx-bold nplr sdt"> IFORTE</h3>
                                            </div>
                                            <div class="pull-right text-right">
                                                <address>
                                                    <h5 class="card-title">Planning Start Date - Planning Finish Date </h5>
                                                    <h5 class="card-title"><span class="font-bold">13 Jul 2022 22:00:00 - 15 Jul 2022 05:00:00</span></h5>
                                                    </h5>
                                                </address>
                                            </div>
                                            <div class="d-flex justify-content-between mg-b-0 p-l-10">
                                                <h3 class="mg-b-0 tx-uppercase tx-black-400 tx-mont tx-bold nplr sdt"> REQUEST-195</h3>
                                            </div>
                                            <div class="mg-b-0">
                                                <h5>Description:</h5>
                                                <p>
                                                <p class="MsoNormal" style="margin-left:7.1pt;text-align:justify;text-indent:
35.45pt;line-height:150%"><span lang="EN-US" style="font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:EN-US;mso-bidi-font-weight:bold">Untuk melakukan
                                                        perbaikan-perbaikan <i>bug</i> pada <i>software version</i> sebelumnya, maka dilakukan
                                                        Kegiatan <i>Upgrade </i>pada seluruh komponen <i>Monitoring</i> di NMS Jovian.</span><span lang="IN" style="font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">
                                                        <o:p></o:p>
                                                    </span></p>
                                                </p>
                                                <h5 style="margin-bottom: -3px;" class="text-right"><b>Created:</b> <i class="fa fa-calendar"></i> 2022-07-12 16:54:38</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <div class="col-md-12">
                                    <label>Notes :</label>
                                    <div class="card">
                                        <textarea class="form-control" rows="5" aria-label="With textarea" name="pmu_approval_notes" id="notesRequest" placeholder="Add notes..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Files :</label>
                                <div class="input-group-dark">
                                    <div class="dropzone" id="dropzone-request">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                    <label id="err-file-size1" class="size-error d-none">Exceeded maximum file size</label>
                                    <div id="files_uploaded_wrapper">
                                    </div>
                                </div>
                            </div><!-- row -->

                            <div id="message-request">
                                <div class="alert alert-success hidden"><strong>Success! </strong><span></span></div>
                                <div class="alert alert-warning hidden"><strong>Processing! </strong><span>Please wait...</span></div>
                                <div class="alert alert-danger hidden"><strong>Failed! </strong><span></span></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="pull-right">
                                <div id="px-admin_maintenance-approved-request">
                                    <input type="hidden" name="id" value="187">
                                    <input type="hidden" name="id_maintenance" value="195">
                                    <input type="hidden" name="provider_id" value="1">
                                    <input type="hidden" name="status">
                                    <button class="btn btn-primary btn-req-approved btn-approve" status="3" type="button">Approve</button>
                                    <button class="btn btn-danger btn-req-approved btn-reject" status="2" type="button">Reject</button>
                                    <button class="btn btn-primary btn-req-approved btn-save hidden" status="1" type="button">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end approved Modal request-->

        <!-- modal approved report-->
        <div id="px-admin_maintenance-approved-report" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title font-bold" id="classModalLabel">
                            Maintenance Report
                        </h4>
                    </div>
                    <form id="px-admin_maintenance-report-approval-form" method="POST" action="admin_maintenance/maintenance_report_approved">

                        <div class="modal-body">
                            <div class="row d-flex">
                                <div class="bd-gray-400 col-lg-12">
                                    <div class="card ht-100p">
                                        <div class="card-block pd-b-30 pd-t-30">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="pull-left">
                                                        <address>
                                                            <h3><b>IFORTE</b> MAINTENACE-195</h3>
                                                            <!-- <h3 class="mg-b-0 tx-black-400 nplr sdt">unprocessed</h3> -->
                                                            </p>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="pull-right text-right">
                                                        <address>
                                                            <p>Maintenance Start - Maintenance Finish</p>
                                                            <p class="font-bold">
                                                                2022-07-13 22:00:00 - 2022-07-15 05:00:00</p>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Report:</h5>
                                                    <p>-
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 m-t-20">
                                    <div class="card pidie">
                                        <div class="widget-2">
                                            <div class="card-header">
                                                <b class="card-title">Affected Beams</b>
                                                <a href=""><i class="icon ion-android-more-horizontal tx-white"></i></a>
                                            </div>
                                            <div class="card-block p-t-0">
                                                <div class="table-wrapper">
                                                    <table class="dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">No</th>
                                                                <th class="text-center">Beam Name</th>
                                                                <th class="text-center">Alias</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3  m-t-20">
                                    <div class="card pidie">
                                        <div class="widget-2">
                                            <div class="card-header">
                                                <b class="card-title">Affected Services</b>
                                            </div>
                                            <div class="card-block bd-color-gray-lighter">
                                                <b>
                                                </b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row m-b-10 m-t-10">
                                <div class="col-md-12">
                                    <label>Notes :</label>
                                    <div class="card">
                                        <textarea class="form-control" aria-label="With textarea" rows="5" name="pmu_approval_notes" id="notesReport" placeholder="Add notes..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-dark">
                                    <div class="dropzone" id="dropzone-report">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                    <label id="err-file-size2" class="size-error d-none">Exceeded maximum file size</label>
                                    <div id="files_uploaded_wrapper_report">
                                    </div>
                                </div>
                            </div><!-- row -->
                            <div id="message-report" class="m-t-10">
                                <div class="alert alert-success hidden"><strong>Success! </strong><span></span></div>
                                <div class="alert alert-warning hidden"><strong>Processing! </strong><span>Please wait...</span></div>
                                <div class="alert alert-danger hidden"><strong>Failed! </strong><span></span></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="maintenance_id" value="195"><!-- id maintenance -->
                            <input type="hidden" name="id" value=""><!-- id report maintenance -->
                            <input type="hidden" name="id_req_maintenance" value="187"><!-- id request maintenance -->
                            <input type="hidden" name="provider_id" value="1">
                            <button type="button" class="btn btn-primary btn-report" status="4">Approve</button>
                            <button type="button" class="btn btn-danger btn-report" status="5">Reject</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .dropzone {
            border-style: dashed;
            border-width: 1px;
        }
    </style>

    <!-- Modal Edit Data Akomodasi -->
    <div class="modal fade" id="profileakomodasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="profileakomodasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase fw-bold" id="profileakomodasiLabel">Update Data Akomodasi</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">ID Akomodasi</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="hidden" id="id" name="id" value="<?= $user['id']; ?>">
                                    <input type="text" class="form-control form-control-dark" name="realname" id="px-system-my-profile-form-realname" value="SM-<?= $user['id']; ?>" readonly>
                                    <p class="text-danger small">Data tidak dapat diubah</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Akomodasi</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="username" id="px-system-my-profile-form-username" value="<?= $user['akomodasi']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Pemilik</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-dark text-uppercase" name="password" id="px-system-my-profile-form-password" value="<?= $user['name']; ?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Alamat</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="c-password" id="px-system-my-profile-form-c-password" value="<?= $user['kec']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Kecamatan</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="c-password" id="px-system-my-profile-form-c-password" value="<?= $user['kec']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Tgl. terdaftar</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="c-password" id="px-system-my-profile-form-c-password" value="<?= date('d-m-Y', strtotime($user['date_created'])); ?>" readonly>
                                    <p class="text-danger small">Data tidak dapat diubah</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="white-box">
                                <div class="printableArea m-t-10">
                                    <div class="row m-b-20">

                                    </div>
                                </div>
                                <div class="printableArea m-t-10">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <div class="text-dark">
                                                <div class="card-header">
                                                    <h5 class="font-bold text-white text-uppercase">Visi & Misi</h5>
                                                </div>

                                                <ul class="list-group list-group-flush m-b-0">
                                                    <li class="list-group-item">
                                                        <h5 class="font-bold">PMU</h5>
                                                        <div class="col-md-12">
                                                            <!-- <h5 class="font-bold">Request : </h5> -->
                                                            <p> Upgrade kompoenen monitoring Jovian untuk melakukan perbaikan-perbaikan bug pada software NMS Jovian.</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <h5 class="font-bold">Pros : </h5>
                                                                <p>Komponen Network Operation Control (NOC) pada NMS Jovian akan menggunakan software version yang terbaru, dimana dapat mempermudah kegiatan monitoring, serta perbaikan-perbaikan bug pada software version sebelumnya.
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <h5 class="font-bold">Cons : </h5>
                                                                <p>NMS Jovian tidak dapat diakses.
                                                                    Downtime penarikan data Application Programming Interface (API) dari NMS Jovian.
                                                                    Downtime Radio Frequency (RF) pada seluruh Spotbeam sesuai rundown.</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <h5 class="font-bold">Recommendation : </h5>
                                                                <p>Untuk dilakukan pada saat trafik turun sehingga dampak ke end used dapat diminimalkan.
                                                                    Untuk dilakukan dengan detail dan terstruktur sehingga tidak terjadi rollback.</p>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <h5 class="font-bold">Conclution : </h5>
                                                                <p>Setuju untuk dilakukan kegiatan ini karena untuk menyamankan versi software pada komponen monitoring Jovian dengan versi NMS Jovian.
                                                                    Jika ada penurunan SLA terkait kegiatan ini maka akan menjadi tanggung jawab penyedia leased capacity (iForte)</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- <footer>Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info Report -->
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