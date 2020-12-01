<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>LOGIN PAGE</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-6 mx-auto">

                <div class="col">
                    <?php
                    if (!empty($info)) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $info;
                        echo '</div>';
                    }
                    ?>
                </div>

                <span>
                    <h1>LOGIN Restoran</h1>
                </span>
                <hr>
                <form action="<?= base_url('/admin/login') ?>" method="POST">
                    <div class="form-group">
                        <label for="login">E-mail</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>