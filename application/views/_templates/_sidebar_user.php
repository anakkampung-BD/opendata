<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect text-black"><img src="<?= base_url('asslog/images/') . $user['image']; ?>" alt="user-img" class="img-circle"> <span class="hide-menu"><?= $user['name']; ?><span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('user/uprofile'); ?>" class="text-black"><i class="fa fa-user"></i> Profil Saya</a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/do_logout'); ?>" class="text-black logout">
                            <i class="fa fa-power-off"></i> Keluar
                        </a>
                    </li>
                </ul>
            </li>

            <li class="active">
                <a class="waves-effect waves-light active" href="user">
                    <i data-icon="O" class="fa fa-dashboard"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            <li class="">
                <a class="waves-effect waves-light active+" href="#">
                    <i data-icon="O" class="fa fa-home"></i> <span class="hide-menu">
                        Data Akomodasi <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="user/baseData"> Data Dasar </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light active+" href="#">
                    <i data-icon="O" class="fa fa-money"></i> <span class="hide-menu">
                        Transaksi <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="user/transaksi"> Log Transaksi </a>
                    </li>
                    <li class="">
                        <a href="admin/tx_int"> Wisatawan </a>
                    </li>
                    <li class="">
                        <a href="admin/tx_nas"> Rumah Makan </a>
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
                        <a href="admin/wisatawan"> Log Laporan </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="admin/chatting">
                    <i data-icon="O" class="fa fa-comment"></i>
                    <span class="hide-menu">Pesan Masuk </span><span class="notify"><span class="heartbit"></span><span class="point">
                </a>
            </li>

            <li class="">
                <a class="waves-effect waves-light " href="#">
                    <i data-icon="O" class="fa fa-cog"></i> <span class="hide-menu">
                        System <span class="fa arrow"></span>
                    </span></a>
                <ul class="nav nav-second-level">
                    <li class="">
                        <a href="<?= base_url('user/do_logout'); ?>" class="logout"><i class="fa fa-power-off"></i> Keluar </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>