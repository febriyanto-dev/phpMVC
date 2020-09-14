
<div class="row">
    <div class="col-6">
        <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $mhs['nama'] ?>
                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right">Detail</a>
                <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-warning float-right">Edit</a>
                <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" class="badge badge-danger float-right">Detail</a>
            </li>
        <?php endforeach; ?>
        </ul>
        
    </div>
</div>