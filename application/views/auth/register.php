<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                <div class="align-top">
                <a type="submit" href="<?= base_url('/');?>" class="kembali"><i data-feather="arrow-left"></i></a>
                        <figure><img src="<?= base_url();?>/assets/images/logo-laundry.png" alt="sing up image"></figure>
                    </div>
                    <div class="signup-form">
                        <h2 class="form-title">DAFTAR AKUN</h2>
                        <?= $this->session->flashdata('message') ?>
                        <form method="POST" class="register-form" id="register-form">
                        <div class="form-group" hidden>
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <?php $a = rand(1,100); ?>
                                <input type="text" name="id" value="<?php $a ?>" placeholder="<?php echo $a ?>"/>
                            </div>
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="name" placeholder="Nama Lengkap"/>
                                <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="Username"/>
                                <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                                <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-place material-icons-name"></i></label>
                                <input type="text" name="alamat" placeholder="Alamat" />
                                <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-place material-icons-name"></i></label>
                                <input type="text" name="tlp" placeholder="No Telpon" />
                                <?= form_error('tlp', '<small class="text-danger pl-2">', '</small>') ?>
                            </div>
                            <div class="form-group">
                            <div class="form-group form-button">
                                <input type="submit" name="sumbit" class="form-submit" value="Daftar"/>
                                <a href="<?= site_url('auth');?>" class="signup-image-link">Sudah Punya Akun</a>
                            </div>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>