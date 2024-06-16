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

        <!-- Flash Data -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <!-- Disini Content -->
        <div class="col-lg-12 pt-2">
            <div class="white-box">
                <div class="row white-box" style="background-color:#090979;">
                    <!-- Judul Tabel -->
                    <div class="col-md-4">
                        <h3 class="text-white font-bold text-uppercase"> Daftar Pengguna</h3>
                    </div>
                    <!-- Tombol -->
                    <div class="col-md-6 col-sm-12 text-center p-t-15">

                    </div>
                    <div class="col-md-2">
                        <div class="">
                            <a href="#" class="btn btn-success btn-block btn-sm mt-4" data-toggle="modal" data-target="#add_user">
                                Tambah User
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tabel User -->
                <table id="list_user" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-uppercase" style="text-align:center;">No</th>
                            <th class="text-uppercase" style="text-align:center;">Nama</th>
                            <th class="text-uppercase" style="text-align:center;">Email</th>
                            <th class="text-uppercase" style="text-align:center;">Role</th>
                            <th class="text-uppercase" style="text-align:center;">Status</th>
                            <th class="text-uppercase" style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($listUser as $us) : ?>
                            <tr>
                                <td class="text-uppercase" style="text-align:center;"><?= $no; ?></td>
                                <td class="text-uppercase"><?= $us['name']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td class="text-uppercase"><?= $us['akomodasi']; ?></td>

                                <?php if ($us['is_active'] == 1) : ?>
                                    <td class="text-uppercase text-success" style="text-align:center;">Aktif</td>
                                <?php else : ?>
                                    <td class="text-uppercase text-danger" style="text-align:center;">Tidak Aktif</td>
                                <?php endif; ?>

                                <td>
                                    <a href="" class="btn btn-info btn-sm" style="text-align:center;">View</a>
                                    <a href="" class="btn btn-warning btn-sm" style="text-align:center;">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" style="text-align:center;">Delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

    <!-- modal tambah user -->
    <div class="modal fade" id="add_user" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="add_kapalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase fw-bold" id="add_kapalLabel">Tambah Pengguna</h4>
                </div>
                <div class="modal-body">
                    <form action="admin/regProses" method="POST" enctype="multipart/form-data">

                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Level Akses <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <div class="input-group">

                                        <select class="form-control" name="role_id" id="role_id" required>
                                            <option>-- Pilih Level --</option>
                                            <option value="1">Administrator</option>
                                            <option value="3">Mitra</option>
                                            <option value="2">Pelaku Usaha</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="name" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Email</label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark" name="email" id="email" value="<?= set_value('email'); ?>">
                                    <!-- Form Error Validasi -->
                                    <?= form_error('email', '<small class="text-info pl-3">', '</small>'); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 text-uppercase">Nama Instansi <span class="text-danger">*</span></label>
                                <div class="col-md-9 col-xs-12 mb-2">
                                    <input type="text" class="form-control form-control-dark text-uppercase" name="akomodasi" id="akomodasi">
                                    <!-- Input Hidden -->
                                    <input type="hidden" class="form-control form-control-dark text-uppercase" name="password" id="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 col-lg-6 col-md-6 m-t-15">
                                    <div class="" style="text-align:justify;">
                                        Note: <br>
                                        <strong class="text-black">Password Default</strong> <br>
                                        Setiap User yang didaftarkan melalui halaman admin, otomatis menggunakan password default system. Password default system adalah: <br> <strong class="text-danger">simorist2022</strong>. <br> Segera lakukan perubahan password setelah akun terdaftar dan diaktivasi.
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6 m-t-15">
                                    <div class="" style="text-align:justify;"><br>
                                        <strong class="text-black">Photo Profile Default</strong> <br>
                                        Setiap User yang didaftarkan melalui halaman admin, otomatis menggunakan Photo default system. <br>Photo profile dapat diganti pada halaman user. Segera lakukan perubahan photo setelah akun terdaftar dan diaktivasi.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-info btn-block mt-2">Daftarkan</button>
                            <button type="button" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Batal</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>