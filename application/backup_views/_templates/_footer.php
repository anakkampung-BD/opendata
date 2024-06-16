<link href="<?= base_url(); ?>asslog/css/dashboard-admin.css" rel="stylesheet" type="text/css" />

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js" type="text/javascript"></script>


<script type="text/javascript" src="<?= base_url(); ?>asslog/js/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>asslog/js/Chart.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG2aG4E6ouoDjrQs8GAzuN1rAvdRjCWck"></script>
<script src="<?= base_url(); ?>asslog/js/gmaps.min.js"></script>
<script src="<?= base_url(); ?>asslog/js/getWidthBrowser.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?= base_url(); ?>asslog/js/dashboard.js"></script>

<!-- Datatable -->
<script>
    // $(document).ready(function() {
    //     $('#dashboard, #dashboard_2, #akomodasiDarat').DataTable();
    // });
    $(document).ready(function() {
        var table = $('#dashboard, #akomodasiDarat, #list_user').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>

<script>
    const flashData = $('.flash-data').data('flashdata');

    if (flashData) {
        // console.log(flashData);
        Swal.fire({
            title: 'Success!',
            text: flashData,
            icon: 'success'
        });
    };
</script>

<script>
    $('.logout').on('click', function(e) {
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
            title: 'Keluar?',
            text: "Apakah anda yakin ingin keluar?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, keluar!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                Swal.fire(
                    'Berhasil!',
                    'Anda berhasil keluar dari system!',
                    'success'
                )
            }
        })
    });

    $('.tambah_darat').on('click', function(e) {
        e.preventDefault();

        const url = $(this).attr('href');

        Swal.fire({
            title: 'Tambah Data?',
            text: "Apakah Data Akomodasi sudah anda siapkan?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, sudah siap!'
        }).then((result) => {
            if (result.value) {
                document.location.href = url;
            }
        })
    });

    $('.tambah_laut').on('click', function(e) {
        e.preventDefault();

        const url = $(this).attr('href');

        Swal.fire({
            title: 'Tambah Data?',
            text: "Apakah Data Kapal sudah anda siapkan?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, sudah siap!'
        }).then((result) => {
            if (result.value) {
                document.location.href = url;
            }
        })
    });
</script>

<!-- begin idle timeout modal  -->
<div id="idle-timeout-dialog" data-backdrop="static" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Session anda berakhir sebentar lagi!</h4>
            </div>
            <div class="modal-body">
                <p>
                    <i class="fa fa-warning font-red"></i> Anda akan keluar dari sistem dalam
                    <span id="idle-timeout-counter"></span> detik.
                </p>
                <p> Apakah anda ingin melanjutkan session ini? </p>
            </div>
            <div class="modal-footer text-center">
                <button id="idle-timeout-dialog-keepalive" type="button" class="btn btn-outline btn-success" data-dismiss="modal">Ya, saya masih bekerja!</button>
            </div>
        </div>
    </div>
</div>
<!-- end idle timeout modal  -->
</div>
<footer class="footer text-center"> <?= $brand;?> - <?= $owner;?> | Code by <a href="https://aks-network.co.id" target="_blank">AnakKampung</a> &copy; <?= date('Y'); ?></footer>
</div>
<!-- /#wrapper -->
<audio id="audio-fail" src="<?= base_url(); ?>asslog/audio/fail.mp3" preload="auto"></audio>
<audio id="audio-alert" src="<?= base_url(); ?>asslog/audio/alert.mp3" preload="auto"></audio>
<script src="<?= base_url(); ?>asslog/js/custom-general.js"></script>
</body>

</html>