<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no ">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/style_sidebar.css') ?>">
    <title>Restoran CI-4</title>
</head>

<body>
    <!-- wrapper sidebar -->
    <div class="d-flex toggled" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Menu Sidebar</div>
            <!-- list group -->
            <div class="list-group list-group-flush">
                <a href="<?= base_url('/frontend/menu') ?>" class="list-group-item list-group-item-action bg-light" role="tab">Menu Makanan</a>
                <a href="<?= base_url('/frontend/orderdetail') ?>" class="list-group-item list-group-item-action bg-light" role="tab">Order Detail</a>
                <a href="<?= base_url('/frontend/order') ?>" class="list-group-item list-group-item-action bg-light" role="tab">Order</a>
            </div>
        </div>

        <div id="page-content-wrapper">

            <!-- navbar text -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary mr-2" id="menu-toggle"><img src="<?= base_url('/icon/list.png') ?>" alt="" style="width:15px;height:20px;"></button>

                <a class="navbar-brand active" href="<?= base_url('/home') ?>">
                    <img src="<?= base_url('/icon/house.svg') ?>" width="30" height="30" class="d-inline-block align-top" alt="">
                    Restoran
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mr-1" href="#">Login <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="<?= base_url('frontpage/login/logout') ?>" role="button">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="col-8 px-2"><?= $this->renderSection('content') ?></div>
            </div>

        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>
<footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3">
        @ 2020 Copyright
    </div>

</footer>

</html>