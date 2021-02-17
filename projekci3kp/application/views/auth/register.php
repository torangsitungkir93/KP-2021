    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url(); ?>assets/auth/images/img-03.png" alt="IMG">
                </div>

                <form action="<?= base_url() ?>auth/register" class="login100-form validate-form" method="POST">
                    <span class="login100-form-title">
                        Member Registration
                    </span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="name" id="name" placeholder="Nama"
                            value="<?= set_value('name'); ?>" autocomplete="">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span><?= form_error('name', '<small class="pl-3 text-danger">', '</small>'); ?></span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" name="email" id="email" placeholder="Email"
                            value="<?= set_value('email'); ?>" autocomplete="">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="false"></i>
                        </span>
                    </div>
                    <span><?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?></span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="password" name="password1" id="password1" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span><?= form_error('password1', '<small class="pl-3 text-danger">', '</small>'); ?></span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="password" name="password2" id="password2"
                            placeholder="Ulangi Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span><?= form_error('password2', '<small class="pl-3 text-danger">', '</small>'); ?></span>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Registration
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="<?= base_url(); ?>auth">
                            Login your Account
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>