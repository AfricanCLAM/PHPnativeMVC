<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php
            Flasher::flash();
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary showCreateModal" data-bs-toggle="modal" data-bs-target="#formModal">
                tambah Data Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group mb-5">
                <?php foreach ($data['mhs'] as $mahasiswa) : ?>
                    <li class="list-group-item">
                        <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mahasiswa['id'] ?>" onclick="return confirm('Yaking ingin Menghapus data?');" class="badge p-2 text-bg-danger text-decoration-none float-end ms-2">
                            Hapus
                        </a>
                        <?= $mahasiswa['nama'] ?>
                        <a href="<?= BASEURL; ?>mahasiswa/edit/<?= $mahasiswa['id'] ?>" data-id="<?= $mahasiswa['id'] ?>" class="showEditModal badge p-2 text-bg-success text-decoration-none float-end ms-2" data-bs-toggle="modal" data-bs-target="#formModal">
                            Edit
                        </a>
                        <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mahasiswa['id'] ?>" class="badge p-2 text-bg-primary text-decoration-none float-end ms-2">
                            Lihat Detail
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="Form" action="<?= BASEURL ?>mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input name="nrp" type="number" class="form-control" id="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" autocomplete="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Kedokteran">Kedokteran</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="Form" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>