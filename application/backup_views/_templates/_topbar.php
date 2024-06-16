<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<!-- Preloader -->
<div id="loading" class="preloader d-none" style="background-color: rgba(255, 255, 255, 0.39);">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part">
                <a class="logo" href="<?= base_url('admin');?>">
                    <!-- <b>
                        <img src="<?= base_url(); ?>assets/images/logo/logo-mini.png" alt="home" style="width: 40px" />
                    </b> -->
                    <span class="hidden-xs">
                        <img style="width: 80px;" src="<?= base_url(); ?>asslog/images/satudata.png" alt="home"/>
                    </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </li>

                <!-- <li>
                    <?php foreach($identitas as $identity) :?>
                    <h4 class="f-w-300 text-white" style="line-height:40px;"><b> <?= $identity['appsname'];?></b><sup> <?= $identity['version_control'];?></sup></h4>
                    <?php endforeach;?>
                </li> -->
            </ul>
            <div class="pull-right">
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?= base_url('asslog/images/') . $user['image']; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?= $user['name'];?></b></a>
                        <ul class="dropdown-menu dropdown-user scale-up">
                            <li><a href="<?= base_url('user/profile');?>"><i class="fa fa-user" style="color:#fff"></i> My Profile</a></li>
                            <li><a href="<?= base_url('admin/do_logout');?>" class="logout"><i class="fa fa-power-off" style="color:#fff"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>