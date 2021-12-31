<div class="head-login p-3 m-3 bg-default">
    <div class="background-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex">
                    <div class="m-5">
                        <div class="contents order-2 order-md-1">
                            <div class="col-md-12 col-sm-6 col-xs-4">
                                <h3 class="text-light font-weight-bold text-capitalize mb-3">Aplikasi kasir warung</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="#" method="POST">
                                            <div class="form-group mb-3">
                                                <label for="username">Username</label>
                                                <input required type="text" class="form-control" name="username" placeholder="Username anda" id="Username">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="password">Password</label>
                                                <input required type="password" class="form-control" name="password" placeholder="Password anda" id="Password">
                                            </div>
                                            <!-- <div class="mb-2 font-italic" style="font-size: 12px">
                                                <a href="#" class="text-secondary" style="text-decoration:none">Lupa Password</a>
                                            </div> -->
                                            <button class="col-12 btn btn-sm btn-primary">Masuk</button>
                                        </form>
                                        <div class="mt-3">
                                            <small>Belum punya akun ?<br>
                                                <a href="<?php echo base_url('admin/auth/register'); ?>" class="hide-link">daftar disini</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>