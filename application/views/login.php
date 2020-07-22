<html>

<head>
    <?php $this->load->view("_partials/head_login.php") ?>
</head>

<body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <?php if (isset($error)) {
                    echo $error;
                }; ?>
                <div class="account-wall">
                    <img class="profile-img" src="https://i.ibb.co/NrMCnCd/login.png?sz=120" alt="">
                    <h1 class="text-center login-title">Aplikasi PKL SMKN 1 Glagah</h1>
                    <form class="form-signin" method="POST" action="<?php echo base_url() ?>login">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Nama pengguna" maxlength="15" autofocus>
                            <?php echo form_error('username'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Kata Sandi" maxlength="15">
                            <?php echo form_error('password'); ?>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                            Masuk</button>
                        <div id="error" style="margin-top: 10px"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>

</html>