<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3 class="font-weight-bold text-capitalize text-center">Aplikasi kasir warung</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group mt-3">
                    <p class="hide-link">Belum punya akun?<br>
                        <a href="<?php echo base_url('admin/auth/register'); ?>" class="hide-link">Daftar disini</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <!-- background image -->
        </div>
    </div>
</div>