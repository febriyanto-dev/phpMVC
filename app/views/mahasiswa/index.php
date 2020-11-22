
<div class="row">

    <div class="col-12 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMahasiswa">
        Tmabah Mahasiswa
        </button>
    </div>

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

<!-- Modal -->

<div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="input nama">
                    </div>
                    <div class="form-group">
                        <label for="email">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" placeholder="input nrp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="input email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informasi">Teknik Informasi</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>