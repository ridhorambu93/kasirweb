<div class="container">
    <div class="card-body m-3" style="background: #79B5F0">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form">
                    <h3 class="text-center text-dark font-weight-bold text-capitalize mb-3">form registrasi</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="fullname" id="fullName" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Alamat Email" tabindex="4">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phoneNumber" class="form-control input-lg" placeholder="Nomor Handphone" tabindex="2">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="adress" id="adress" placeholder="Alamat Lengkap" class="form-control cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="3">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="passwordConfirmation" class="form-control input-lg" placeholder="Konfirmasi Password" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">Daftar</button></div>
                        <div class="col-xs-12 col-md-6"><a href="<?php echo base_url('admin/auth'); ?>" class="btn btn-success btn-block btn-lg">Masuk ke akun</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>