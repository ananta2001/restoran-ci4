<?= $this->extend('template/home') ?>

<?= $this->section('content') ?>

<?php

if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
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

<div class="row mt-2">

    <div class="col">

        <table class="table">

            <tr>
                <th>No.</th>
                <th>kategori</th>
                <th>keterangan</th>
            </tr>

            <?php $no ?>

            <?php foreach ($kategori as $key => $value) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['kategori'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

        <?= $pager->links('page', 'bootstrap') ?>

    </div>
</div>

<?= $this->endSection() ?>