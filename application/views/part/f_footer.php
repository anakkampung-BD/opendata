<footer class="sticky-footer py-5">
    <div class="pt-2">
        <div class="container">
            <div class="pb-3 mb-3 border-bottom">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h6 class="text-light mb-3">Powered By</h6>
                        <img src="<?= base_url(); ?>public/x/images/logo/2.png" height="30" class="mr-2">
                        <img src="<?= base_url(); ?>public/y/img/logo/kominfo.png" height="30" class="mr-2">
                        <img src="<?= base_url(); ?>public/y/img/logo/satudataindonesia.png" height="30" class="mr-2">
                    </div>
                    <!-- <div class="col-6 col-lg-5">
                        <div class="text-lg-center mt-4 mt-lg-0">
                            <h6 class="text-light mb-3">Kerjasama dengan</h6>
                            <img src="<?= base_url(); ?>public/y/img/logo/pesona_indo.png" height="50" class="mr-2">
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-4">
                        <div class="text-lg-right mt-4 mt-lg-0">
                            <h6 class="title text-light mb-4">Kontak</h6>
                            <ul class="list-unstyled text-light">
                                <li>Dinas Komunikasi dan Informatika</li>
                                <li>Jln. Raya Tuapejat KM. 5 Sipora Utara</li>
                                <li>Telp. (0751) 123456, Fax (0751) 12345678</li>
                                <li>kominfo@mentawaikab.go.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <p class="text-light mb-0"><?= date('Y'); ?> &copy; satudata.mentawaikab.go.id</p>
                <a href="<?= base_url('masuk'); ?>" target="_blank" class="d-inline-flex align-items-center text-light btn btn-sm">
                    <i class="fa fa-hand-lizard-o mr-2 fs-6"></i>Masuk
                    <!-- <i class="bi-box-arrow-in-right mr-2 fs-6"></i> -->
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="floating-toolbar">
    <a href="<?= base_url(); ?>" target="_blank" class="btn toolbar-item bg-success"><i class="fa fa-whatsapp text-white"></i> Contact</a>
    <a href="<?= base_url(); ?>" class="btn toolbar-item bg-success" data-toggle="modal" data-target="#modalDrawerLeft"><i class="fa fa-pen"></i> Isi Survey</a>
</div>

<div class="feedback-outer">
    <a href="<?= base_url();?>fr/call" class="feedback" data-toggle="modal" data-target="#modalDrawer">
        <img src="<?= base_url(); ?>public/y/img/call-center/call-center.png" alt="Image Dataset Suggestion" />
    </a>
</div>

<div class="modal modal-async fade m-drawer is-start" id="modalDrawerLeft" tabindex="-1" aria-labelledby="modalDrawerLeftLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?= base_url(); ?>public/y/img/loading.gif" style="width: 30px" />
            </div>
        </div>
    </div>
</div>
<div class="modal modal-async fade m-drawer is-end" id="modalDrawer" tabindex="-1" aria-labelledby="modalDrawerLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?= base_url(); ?>public/y/img/loading.gif" style="width: 30px" />
            </div>
        </div>
    </div>
</div>

<script>
    var _route = "/device/fingerprint";
</script>
<script type="text/javascript" src="<?= base_url(); ?>public/y/js/device.js"></script>
<script src="<?= base_url(); ?>public/y/js/js.cookie.min.js"></script>
<script src="<?= base_url(); ?>public/y/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>public/y/js/popper.min.js"></script>
<script src="<?= base_url(); ?>public/y/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>public/y/js/main.js"></script>
<script src="<?= base_url(); ?>public/y/js/slick.js"></script>
<script src="<?= base_url(); ?>public/y/js/select2.js"></script>
<script src="<?= base_url(); ?>public/y/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>public/y/js/highcarts.js"></script>
<script src="<?= base_url(); ?>public/y/js/exporting.js"></script>
<script src="<?= base_url(); ?>public/y/js/data.js"></script>
<script src="<?= base_url(); ?>public/y/js/accessibility.js"></script>
<script src="<?= base_url(); ?>public/y/js/leaflet.js"></script>
<script src="<?= base_url(); ?>public/y/js/air.js"></script>
<script src="https://kit.fontawesome.com/8031cd8b80.js" crossorigin="anonymous"></script>

<script>
    function observeSuggestion() {
        const footerElement = document.querySelector('footer');
        const suggestionElement = document.querySelector('.feedback-outer');
        const footerElementHeight = footerElement.getBoundingClientRect().height;
        const optionsIntersection = {
            root: null,
            threshold: 0,
            rootMargin: `-${footerElementHeight / 2}px`
        };

        const suggestionObserver = new IntersectionObserver((entries) => {
            const [entry] = entries;
            if (!entry.isIntersecting) {
                suggestionElement.style.bottom = 'calc(36px + 0.5rem)';
            } else {
                suggestionElement.style.bottom = `${footerElementHeight + 15}px`;
            }
        }, optionsIntersection);
        suggestionObserver.observe(footerElement);
    }
    observeSuggestion();

    $(function() {
        Src.Init();

        const SHOWN_CONSTRUCTION = 'od_jatim_construction';
        $('#infoConstruction .btn-close-construction').on('click', function() {
            if (Cookies.get(SHOWN_CONSTRUCTION)) {
                return;
            }
            Cookies.set(SHOWN_CONSTRUCTION, true, {
                expires: 1,
                path: '/'
            });
        });

        if (!Cookies.get(SHOWN_CONSTRUCTION)) {
            $('#infoConstruction').modal('show');
        }
    });
</script>
<script>
    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ],

        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
</script>
<script>
    $('.slider-notplay').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ],

        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
</script>

<script>
    $('.slider-infographics').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2500,
    });
</script>

<script>
    $('.slider-notplay3').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ],

        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
</script>
<script>
    $(document).ready(function() {
        $(".select21").select2();
    });
</script>

<script>
    $(document).ready(function() {
        $(".select2").select2({
            allowClear: true,

        });
    });
</script>

<script type="text/javascript">
    $(function() {

        $('body').on('show.bs.modal', '.modal.modal-async', function(event) {
            $(this).find(".modal-content").load(event.relatedTarget.href);
        });

        $('body').on('hidden.bs.modal', '.modal.modal-async', function(event) {
            const markup = `
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <img src="/bundles/greenadmin/img/loading.gif" style="width: 30px" />
                    </div>
                `;
            $(this).find(".modal-content").html(markup);
        });
    });
</script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    // document.getElementById("defaultOpen").click();
</script>

<script>
    /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
    function dropDown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<!-- <script>
    </script> -->
<script>
    jQuery(document).ready(function($) {

        $('.search-input-text').on('keyup click', function() {
            var value = $('.search-input-text').val();
            if ($('.autocomplete-items').length || !value) {
                $('.autocomplete-items').remove();
            }
            if (value) {
                $.ajax({
                    type: "GET",
                    url: 'https://opendata.jatimprov.go.id/frontend/gsearch' + '?key=' + value,
                    success: function(r) {
                        if ($('.autocomplete-items').length) {
                            $('.autocomplete-items').remove();
                        }
                        var data = r;
                        // alert(data.length);
                        $('.autocomplete-box').append('<div id="autocomplete-list" class="autocomplete-items"></div>');
                        if (data.length == 0) {
                            var url = "https://opendata.jatimprov.go.id/frontend/dataset/request";
                            $('#autocomplete-list').append('<div><a href="' + url + '" class="text-primary">-- Permohonan Data --</a></div>');
                        } else {
                            $.each(data, function(index, element) {
                                var url = '';
                                if (element.tipe == 'INFOGRAFIK') {
                                    url = "https://opendata.jatimprov.go.id/frontend/infografik" + '?judul=' + element.judulx;
                                } else {
                                    url = "https://opendata.jatimprov.go.id/frontend/dataset" + '?judul=' + element.judulx;
                                }
                                $('#autocomplete-list').append('<div><a href="' + url + '">' + element.judul + '</a></div>');
                            });
                        }
                    }
                });

                // alert(value);
            }
        });



    });
</script>

</body>

</html>