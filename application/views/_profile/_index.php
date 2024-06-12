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

        <!-- Disini Content -->

        <div class="col-md-12 m-t-15">
            <div class="white-box">
                <form class="form-horizontal" action="admin_system/my_profile_edit" method="POST" id="px-system-my-profile-form" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="px-system-my-profile-form-id" value="3">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12" for="#px-system-my-profile-form-realname">Realname</label>
                            <div class="col-md-9 col-xs-12">
                                <input type="text" class="form-control form-control-dark" name="realname" id="px-system-my-profile-form-realname" value="IFORTE">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12" for="#px-system-my-profile-form-username">Username</label>
                            <div class="col-md-9 col-xs-12">
                                <input type="text" class="form-control form-control-dark" name="username" id="px-system-my-profile-form-username" value="iforte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12" for="#px-system-my-profile-form-password">Password</label>
                            <div class="col-md-9 col-xs-12">
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-dark" name="password" id="px-system-my-profile-form-password" value="" autocomplete="off">
                                    <span class="input-group-addon"><i class="btn-show-pass fa fa-eye-slash" data-status="hidden"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12" for="#px-system-my-profile-form-c-password">Confirm Password</label>
                            <div class="col-md-9 col-xs-12">
                                <input type="password" class="form-control form-control-dark" name="c-password" id="px-system-my-profile-form-c-password" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12" for="#px-system-my-profile-form-email">Email</label>
                            <div class="col-md-9 col-xs-12">
                                <input type="text" class="form-control form-control-dark" name="email" id="px-system-my-profile-form-email" value="konsorsium.hts@iforte.co.id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12">Profile Pic</label>
                            <div class="col-md-9 col-xs-12">
                                <input type="hidden" name="old_photo" value="https://storage.googleapis.com/nmslc.teknusa.com/assets/uploads/admin/1/6000387b100c3-original.png">
                                <input type="hidden" name="photo">
                                <label for="file-upload-file" class="btn btn-primary btn-upload" data-target="photo">Browse</label>
                            </div>
                            <div class="gallery col-md-3 col-xs-12 offset-md-3 no-padding" id="preview_photo">
                                <a class="gallery-item" href="https://storage.googleapis.com/nmslc.teknusa.com/assets/uploads/admin/1/6000387b100c3-original.png" title="Gambar Profil" data-gallery>
                                    <div class="image p-2">
                                        <img src="https://storage.googleapis.com/nmslc.teknusa.com/assets/uploads/admin/1/6000387b100c3-original.png" alt="Photo" class="img-responsive" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="form-group">
						<label class="col-md-3 col-xs-12">Photo</label>
						<div class="col-md-3 col-xs-12">
							<input type="file" name="photo" class="dropify" data-default-file="assets/backend_assets/img/users/admin.png" data-old-filename="">
						</div>
					</div> -->
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <button type="submit" class="btn btn-info">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>