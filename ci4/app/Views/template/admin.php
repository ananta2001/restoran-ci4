<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/style_sidebar.css') ?>">
    <title>ADMIN PAGE</title>
</head>

<body>

    <div class="container">
        <div class="row mt-1">
            <div class="col">
                <nav class="navbar navbar-light bg-light">

                    <a class="navbar-brand ml-2" href="<?= base_url('/admin') ?>">Dashbohard Admin</a>

                    <div class="nav-item ml-2 mt-1">
                        <?php if (!empty(session()->get('user'))) {
                            echo session()->get('user');
                        } ?>
                    </div>

                    <div class="nav-item ml-2 mt-1">
                        <?php if (!empty(session()->get('email'))) {
                            echo session()->get('email');
                        } ?>
                    </div>

                    <div class="nav-item ml-1 mt-1">Level :
                        <?php if (!empty(session()->get('level'))) {
                            echo session()->get('level');
                            $level = session()->get('level');
                        }
                        ?>
                    </div>

                    <div class="nav-item ml-2 mt-1">
                        <a href="<?= base_url('admin/login/logout') ?>">Logout</a>
                    </div>

                </nav>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4">
                <div class="card" style="width: 19rem;">
                    <ul class="list-group list-group-flush">
                        <?php if ($level == "admin") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">menu</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">pelanggan</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">order</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">order detail</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>">user</a></li>
                        <?php endif ?>

                        <?php if ($level == "kasir") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">order</a></li>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">order detail</a></li>
                        <?php endif ?>

                        <?php if ($level == "koki") : ?>
                            <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">order detail</a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <div class="col-8 px-2"><?= $this->renderSection('content') ?></div>
        </div>
    </div>

</body>

</html>