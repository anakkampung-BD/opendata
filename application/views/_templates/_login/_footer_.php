    <!-- <script src="<?= base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script> -->
    <!-- <script src="<?= base_url(); ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>assets/js/misc.js"></script>
    <script src="<?= base_url(); ?>assets/js/todolist.js"></script>
    <script src="<?= base_url(); ?>assets/js/settings.js"></script> -->

    <!-- Sweetalert2 Js -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/alert/myjs.js"></script>

    <!-- SweetAlert 2 -->
    <script>
        $('flashData').ready(function() {

            const flashData = $('.flash-data').data('flashdata');

            if (flashData) {
                console.log(flashData);
                Swal.fire({
                    title: 'Oopps!',
                    text: flashData,
                    icon: 'warning'
                });
            };
        })
    </script>


    </body>

    </html>