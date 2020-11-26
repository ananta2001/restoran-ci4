<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col mt-1">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key . " => " . $value;
            echo "<br>";
        }
        echo '</div>';
    }
    ?>
</div>


<div class="col mt-2">
    <h3> INSERT DATA </h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/user/insert') ?>" method="POST">
        <div class="form-group">
            <label for="user">User</label>
            <input type="text" name="user" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Email</label>
            <input type="email" name="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Password</label>
            <input type="password" name="password" required class="form-control">
        </div>
        <div class="form-group">
            <label for="kategori">Level</label>
            <select class="form-control" name="level" id="idkategori">
                <?php foreach ($level as $key) : ?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>
<?= $this->endSection() ?>