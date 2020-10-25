<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>ADMIN PAGE</title>
</head>

<body>

    <div class="container">
        <div class="row mt-1">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="<?= base_url('/admin') ?>">Admin Page</a>
                </nav>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">menu</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">pelanggan</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">order</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">order detail</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>">user</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8 px-2"><?= $this->renderSection('content') ?></div>
        </div>
    </div>
</body>

</html>