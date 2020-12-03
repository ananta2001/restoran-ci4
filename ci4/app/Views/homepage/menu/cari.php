<?= $this->extend('template/home') ?>

<?= $this->section('content') ?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row">

    <div class="col">
        <h2> <?= $judul; ?> </h2>
    </div>

</div>

<div class="row mt-1">
    <div class="col-6">
        <form action="<?= base_url('/frontend/menu/read') ?>" method="get">
            <?= view_cell('App\Controllers\Frontend\Menu::option') ?>
        </form>
    </div>
</div>

<div class="row mt-2">

    <div class="col">

        <table class="table">

            <tr>
                <th>No.</th>
                <th>Menu</th>
                <th>Foto</th>
                <th>Harga</th>
            </tr>

            <?php $no ?>

            <?php foreach ($menu as $key => $value) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><img style="width: 70px;" src="<?= base_url('/upload/' . $value['gambar'] . ''); ?>" alt=""></td>
                    <td><?= number_format($value['harga']) ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

        <?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>

    </div>
</div>

<?= $this->endSection() ?>