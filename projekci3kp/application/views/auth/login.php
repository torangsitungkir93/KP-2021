<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url(); ?>assets/auth/images/img-01.png" alt="IMG">
            </div class>
            <form class="login100-form validate-form" action="<?= base_url(); ?>auth" method="POST">
                <span class="">
                    <?= $this->session->flashdata('message'); ?>
                </span>
                <span class="login100-form-title">
                    Member Login
                </span>

                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="email" id="email" placeholder="Email" autocomplete=""
                        value="<?= set_value('email'); ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <span><?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?></span>

                <div class="wrap-input100 ">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <span><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></span>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
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

                <div class="text-center p-t-136">
                    <a class="txt2" href="<?= base_url(); ?>auth/register">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>