$(document).ready(function () {

    $('.hapusmenu').on('click', function(e) {
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
            title: 'Hapus?',
            text: "Apakah anda yakin menu ini dihapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                Swal.fire(
                    'Dihapus!',
                    'Menu berhasil dihapus!',
                    'success'
                )
            }
        })

    });

    $('.editmenu').on('click', function () {
        console.log('Anda klik tombol edit');
    });

});