<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1>  <?= $judul; ?> </h1>

<?php foreach ($kategori as $key => $value): ?>

<h2><?= $value ?></h2>

<?php endforeach; ?>

<h1><?= $kategori[1] ?></h1>

<?= $this->endSection() ?>