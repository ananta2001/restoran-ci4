<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Layout</title>
</head>
<body>
    
<nav>
    <ul>
        <a href="<?= base_url() ?>/admin/kategori"> <li>select</li> </a>
        <a href="<?= base_url() ?>/admin/kategori/form"> <li>Insert</li> </a>
        <a href="<?= base_url() ?>/admin/kategori/update/5"> <li>Update</li> </a>
    </ul>
</nav>

    <?= $this->renderSection('content') ?>
    
</body>
</html>