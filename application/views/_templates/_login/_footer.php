<!-- jQuery -->
<script src="<?= base_url(); ?>asslog/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>asslog/js/tether.min.js"></script>
<script src="<?= base_url(); ?>asslog/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>asslog/js/jquery.validate.js"></script>

<!-- Sweetalert 2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js" type="text/javascript"></script>

<script type="text/javascript">
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