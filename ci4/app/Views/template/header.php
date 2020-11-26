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
    <div class="container-fluid">
        <div class="row-cols-1">
            <!-- navbar text -->
            <nav class="navbar navbar-expand navbar-light flex-md-row bd-navbar border-right bg-light">
                <a class="navbar-brand active" href="<?= base_url('/frontpage/homepage') ?>">
                    <img src="<?= base_url('/icon/house.svg') ?>" width="30" height="30" class="d-inline-block align-top" alt="">
                    Restoran
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mr-1" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#" role="button">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- wrapper sidebar -->
            <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <!-- list group -->
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Shortcuts</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Overview</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Events</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light" role="tab">Status</a>
                    </div>
                </div>
                <!-- <div class="row mt-2">
                <div class="col-4">
                    <div class="card" style="width: 19rem;">
                        <ul class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                        </ul>
                    </div>
                </div>
            </div> -->
            </div>
        </div>