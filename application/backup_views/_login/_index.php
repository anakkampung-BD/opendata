<!-- Tangkap flash data -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar" style="overflow-y: scroll;">
        <div class="login-box">

            <form class="form-horizontal form-material" id="login-form" action="<?= base_url('login'); ?>" method="post">
                <a href="javascript:void(0)" class="text-center db m-b-10"><img style="width:150px" src="<?= base_url(); ?>asslog/images/logo-mtw.png" alt="logo-mtw" /></a>
                <!-- EoF alert -->
                <div class="form-group m-t-20">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button id="proses" class="btn btn-info btn-lg btn-block waves-effect waves-light" type="submit">Masuk</button>
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div class="col-sm-12 text-center">
                        <p><strong><?= $brand;?></strong><br><?= $owner;?></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>