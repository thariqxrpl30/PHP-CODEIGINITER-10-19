<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<a class="btn btn-success" href="<?= base_url('/admin/kategori/create') ?>" role="button">Tambah Data</a>

<h1><?= $judul;?></h1>

<table class="table">

    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Hapus</th>
        <th>Update</th>
    </tr>

    <?php $no = 1 ?>

    <?php foreach ($kategori as $key => $value): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value['kategori'] ?></td>
        <td><?= $value['keterangan'] ?></td>
        <td><a href="<?= base_url('/admin/kategori/delete/') ?>/<?= $value['idkategori'] ?>" class="btn btn-danger">Hapus</a></td>
        <td><a href="<?= base_url('/admin/kategori/find') ?>/<?= $value['idkategori'] ?>" class="btn btn-success">Update</a></td>
    </tr>
    <?php endforeach; ?>

</table>

<?= $pager->links('group1','bootstrap') ?>

<?= $this->endSection() ?>




