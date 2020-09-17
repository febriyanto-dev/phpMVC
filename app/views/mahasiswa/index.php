
<div class="row">
    <div class="col-12">

    <h3>Daftar Mahasiswa Pertanggal <?= $data['dateNow'] ?></h3>

    <div class="table-responsive-sm">
        <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">NRP</th>
                <th scope="col">EMAIL</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($data['mhs'] as $mhs) : ?>
                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td class="text-center"><?= $mhs['nrp']; ?></td>
                    <td><?= $mhs['email']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td class="text-center">
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $data['hashids']->encode($mhs['id']); ?>" class="badge badge-primary mr-1">Detail</a>
                        <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-warning mr-1">Edit</a>
                        <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" class="badge badge-danger">Detail</a>
                    </td>
                </tr>
            <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>

    </div>
</div>