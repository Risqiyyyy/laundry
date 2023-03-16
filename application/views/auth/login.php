<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css">
</head>
<body>


    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="w-25">
                    <a type="submit" href="<?= base_url('/');?>" class="kembali"><i data-feather="arrow-left"></i></a>
                        <figure><img src="<?= base_url();?>/assets/images/logo-laundry.png" alt="sing up image"></figure>
                    </div>
                    <?= $this->session->flashdata('error') ?>
                    <div class="signin-form">
                        <h2 class="form-title">MASUK AKUN</h2>
                        <form action="<?= base_url('auth/login');?>" method="POST" class="register-form">
                            <div class="form-group">
                                <label><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" placeholder="Username" />
                                <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Password" />
                                <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" class="form-submit" value="Masuk"/>
                                <!-- <a href="<?= site_url('auth/register');?>" class="signup-image-link">Membuat Akun</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script>
      feather.replace()
    </script>
    <script src="<?= base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/assetst/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>