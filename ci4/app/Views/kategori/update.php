<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
    ?>
</div>

<div class="col-2">
    <h3> Update Data </h3>
</div>

<div class="col-4">
    <form action="<?= base_url() ?>/admin/kategori/update" method="POST">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
        </div>
        <input type="hidden" value="<?= $kategori['idkategori'] ?>" name="idkategori">
        <div class="form-group">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>