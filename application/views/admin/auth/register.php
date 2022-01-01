<section class="signup-content">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-dark text-center font-weight-bold text-capitalize mb-3">Form Registrasi</h3>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Isi Nama anda" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Isi Email anda" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" id="password" placeholder="Isi Password" />
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Ulangi password anda" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Daftarkan Akun</button>
                                <p class="text-secondary mt-2 float-right">Sudah punya akun ? <a href="<?php echo base_url('admin/auth') ?>" class="hide-link">masuk disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>