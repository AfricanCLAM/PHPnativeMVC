$(function () {
    const BASEURL = "http://phpmvc.test/public/"

    $('.showCreateModal').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan Data');
        $('#Form').attr('action', BASEURL + 'mahasiswa/tambah');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

    $('.showEditModal').on('click', function () {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('#Form').attr('action', BASEURL + 'mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: BASEURL + "mahasiswa/getubah",
            data: { id: id },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })
    });

});