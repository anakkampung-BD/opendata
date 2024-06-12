<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect text-black"><img src="<?= base_url('asslog/images/') . $user['image']; ?>" alt="user-img" class="img-circle"> <span class="hide-menu"><?= $user['name']; ?><span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('admin/profile'); ?>" class="text-black"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="<?= base_url('login/keluar'); ?>" class="text-black logout">
                            <i class="fa fa-power-off"></i> Keluar
                        </a>
                    </li>
                </ul>
            </li>

            <li class="active">
                <a class="waves-effect waves-light active" href="mitra">
                    <i data-icon="O" class="fa fa-dashboard"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            <li class="">
                <a class="waves-effect waves-light active+" href="#">
                    <i data-icon="O" class="fa fa-money"></i> <span class="hide-menu">
                        Transaksi <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="admin/transaksi"> Seluruh Transaksi </a>
                    </li>
                    <li class="">
                        <a href="admin/tx_int"> Surfing International </a>
                    </li>
                    <li class="">
                        <a href="admin/tx_nas"> Surfing Nasional </a>
                    </li>
                    <li class="">
                        <a href="admin/rm"> Pajak Rumah Makan </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="#">
                    <i data-icon="O" class="fa fa-folder-open"></i>
                    <span class="hide-menu">Data Analitis
                        <span class="fa arrow"></span>
                    </span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="admin/grafik_analitik"> Grafik </a>
                    </li>
                    <li class="">
                        <a href="admin/tabel_analitik"> Tabel </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="#">
                    <i data-icon="O" class="fa fa-adjust"></i>
                    <span class="hide-menu">Laporan
                        <span class="fa arrow"></span>
                    </span>
                </a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="admin/wisatawan"> Wisatawan </a>
                    </li>
                    <li class="">
                        <a href="admin/retribusi_pad"> PAD Retribusi Surfing </a>
                    </li>
                    <li class="">
                        <a href="admin/retribusi_rm"> PAD Rumah Makan </a>
                    </li>
                    <li class="">
                        <a href="admin/retribusi_akomodasi"> PAD Akomodasi </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="admin/chatting">
                    <i data-icon="O" class="fa fa-comment"></i>
                    <span class="hide-menu">Pesan Masuk </span>
                </a>
            </li>


            <li class="">
                <a class="waves-effect waves-light " href="#">
                    <i data-icon="O" class="fa fa-bell"></i> <span class="hide-menu">
                        Request Data <span class="notify"><span class="heartbit"></span><span class="point"></span></span>
                        <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="admin/request"> Permintaan Data
                            <span class="label label-rouded label-info pull-right">12</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="admin/approve"> Permintaan Disetujui
                            <span class="label label-rouded label-success pull-right">12</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="admin/reject"> Permintaan Ditolak
                            <span class="label label-rouded label-danger pull-right">12</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="#">
                    <i data-icon="O" class="fa fa-cog"></i> <span class="hide-menu">
                        System <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="<?= base_url('login/keluar'); ?>" class="logout"><i class="fa fa-power-off"></i> Keluar </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>