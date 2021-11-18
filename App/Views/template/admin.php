<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" >
    <title>Admin Page</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= base_url('/admin') ?>">Admin Page</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>" class="text-decoration-none"> Kategori </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>" class="text-decoration-none"> Menu </a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>" class="text-decoration-none"> User </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

</body>
</html>