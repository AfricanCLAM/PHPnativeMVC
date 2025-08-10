<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach($data['mhs'] as $mahasiswa) : ?>
                <ul>
                    <li>Nama : <?= $mahasiswa['nama'] ?></li>
                    <li>NRP : <?= $mahasiswa['nrp'] ?></li>
                    <li>Email : <?= $mahasiswa['email'] ?></li>
                    <li>Jurusan : <?= $mahasiswa['jurusan'] ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>