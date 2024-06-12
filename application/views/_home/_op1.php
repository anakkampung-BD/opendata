<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link rel="shortcut icon" href="https://opendata.jatimprov.go.idhttps://opendata.jatimprov.go.id/brand/icon/open-data-32x32.png" type="image/x-icon" sizes="32x32">
    <title>Open Data</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/assets/plugins/leaflet/leaflet.css" />
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/root.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/select2/select2.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/slick/slick.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/slick/slick-theme.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/main.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/feedback_cutom.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/feedback_header.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/custom.css">
    <link rel="stylesheet" href="https://opendata.jatimprov.go.id/frontend/css/utilities.css">
    <script src="https://opendata.jatimprov.go.id/frontend/js/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

    <header class="header-top is-transparent">
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg is-customized">
                    <!-- bg-dark -->
                    <a class="navbar-brand" href="https://opendata.jatimprov.go.id/frontend/homepage">
                        <img class="logo-header" src="https://opendata.jatimprov.go.id/brand/open-data-logo-text1.png" alt="img-brand-logo" />
                        <img class="logo-header-light" src="https://opendata.jatimprov.go.id/brand/open-data-logo-text-light1.png" alt="img-brand-logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi-list unopen"></i>
                        <i class="bi-x-lg open"></i>
                    </button>

                    <div class="collapse navbar-collapse navbar-offcanvas" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-header">
                            <li class="nav-item">
                                <a class="nav-link" href="https://opendata.jatimprov.go.id/frontend/sektoral" class="nav-link  ">Sektoral</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://opendata.jatimprov.go.id/frontend/dataset" class="nav-link  ">Dataset</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://opendata.jatimprov.go.id/frontend/organisasi" class="nav-link  ">Organisasi</a>
                            </li>
                            <!-- <li class="nav-item">
                        <a href="https://opendata.jatimprov.go.id/frontend/visualisasi/" class="nav-link  ">Visualisasi</a>
                    </li> -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle  " id="infografikNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Library
                                </a>
                                <div class="dropdown-menu" aria-labelledby="infografikNavbarDropdown">
                                    <a class="dropdown-item" href="https://opendata.jatimprov.go.id/frontend/infografik">Infografik</a>
                                    <a class="dropdown-item" href="https://opendata.jatimprov.go.id/frontend/infografik/dinamis">E-Book</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle  " id="linkcepatNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Link Cepat
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="infografikNavbarDropdown">
                                    <a target="_blank" class="dropdown-item" href="http://geoportal.jatimprov.go.id">Geoportal Bappeda Prov. Jatim</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="home-hero position-relative d-flex align-items-center">
            <div class="shape-round"></div>
            <img src="/uploads/4d505ccfe007ba3d7a698d5db194605d.jpg" class="home-hero__img" alt="" />

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-hero__title mb-2 text-center text-white font-weight-bold">
                            Portal Open Data Jawa Timur
                        </div>
                        <div class="home-hero__subtitle mb-4 text-center text-white">
                            Temukan inovasi dan transparansi melalui Open Data.
                        </div>

                        <div class="search-global mb-0">
                            <div class="search-global-inner">
                                <div class="input-group autocomplete-box">
                                    <input id="gsearch" name="gsearch" type="text" class="form-control input-search search-input-text" placeholder="Masukkan Kata Pencarian">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-4 pb-3">
            <div class="container">
                <div class="topic-outer">
                    <h4 class="mb-3">Topik</h4>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 mx-n2 justify-content-center">
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=1" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="<?= base_url();?>assets/assets/images/file-icons/512/001-interface-1.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Ekonomi
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=2" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/569348598c140b86587858b18ac8ce37.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Infrastruktur
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=3" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/e716510b0cd0c15386ea22409876f579.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Ketenagakerjaan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=4" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/a41b3ba8be7d4dab90c9c57a17189350.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Kependudukan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=5" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/018fda9c9e335adab2e243926cf8078a.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Kesehatan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=6" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/b13ab2213080b8ac17d77532c6c838ee.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Lingkungan Hidup
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=7" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/e7f3a7a7449ee0b370ac18e962d5f2b1.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Pariwisata &amp; Kebudayaan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=8" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/963e89d4d2226794c6396b16bdf98133.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Pemerintahan &amp; Desa
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=9" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/b29e50e525b065f2ef66021e6398a387.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Pendidikan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=10" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/1e11dca00b26d48486645e3e1b5636ca.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Sosial
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=11" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/963e89d4d2226794c6396b16bdf98133.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Multisektoral
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/frontend/dataset?kategori=14" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/3ce75323c0584dbb95229f849d2fb9fb.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Kebencanaan
                                </div>
                            </a>
                        </div>
                        <div class="col px-2">
                            <a href="https://opendata.jatimprov.go.id/siapapeka" class="box-topic">
                                <figure class="box-topic__img flex-none m-0 mb-2">
                                    <img src="/uploads/siapapeka-icon.png" alt="" />
                                </figure>
                                <div class="box-topic__content">
                                    Pencegahan Perkawinan Anak (SIAPA PEKA)
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <p id="flash"></p>

        <section class="bg-app-primary statistic-section">
            <img class="statistic-pattern-1" src="https://opendata.jatimprov.go.id/frontend/img/pattern1.png" />
            <img class="statistic-pattern-2" src="https://opendata.jatimprov.go.id/frontend/img/pattern1.png" />
            <div class="container">
                <h3 class="mb-4 text-center text-light font-weight-bold text-app-shadow">Statistik Open Data Jatim</h3>
                <div class="row mx-n2">
                    <div class="col-12 col-lg-4 px-2">
                        <a href="https://opendata.jatimprov.go.id/frontend/dataset" class="box-statistic mb-3 mb-lg-0 bg-app-secondary rounded-app p-4">
                            <div class="text-light text-center h1 font-weight-bold mb-2">36541</div>
                            <div class="text-light text-center h4">Dataset</div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 px-2">
                        <a href="https://opendata.jatimprov.go.id/frontend/infografik" class="box-statistic mb-3 mb-lg-0 bg-app-secondary rounded-app p-4">
                            <div class="text-light text-center h1 font-weight-bold mb-2">223</div>
                            <div class="text-light text-center h4">Infografis</div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 px-2">
                        <a href="https://opendata.jatimprov.go.id/frontend/sektoral" class="box-statistic mb-3 mb-lg-0 bg-app-secondary rounded-app p-4">
                            <div class="text-light text-center h1 font-weight-bold mb-2">65</div>
                            <div class="text-light text-center h4">Sektoral</div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 px-2" style="padding-top: 12px;">
                        <a href="#" class="box-statistic mb-3 mb-lg-0 bg-app-secondary rounded-app p-4">
                            <div class="text-light text-center h1 font-weight-bold mb-2">159655</div>
                            <div class="text-light text-center h4">Visitor</div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 px-2" style="padding-top: 12px;">
                        <a href="#" class="box-statistic mb-3 mb-lg-0 bg-app-secondary rounded-app p-4">
                            <div class="text-light text-center h1 font-weight-bold mb-2">46786</div>
                            <div class="text-light text-center h4">Download</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="blog-grid section-padding">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h4>Highlight Infografik</h4>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="slick-wrapper slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                <div class="slick-slide">
                                    <div class="slick-slide-in" style="width: 100%; display: inline-block;">
                                        <div class="item">
                                            <div class="post-img">
                                                <div class="img">
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/257">
                                                        <img style="width:unset!important;" src="/uploads/c144dc77b6bbc43fd34beb894a5dc751.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="info">
                                                    <a>27 May 2024</a>
                                                </div>
                                                <h5>
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/257" class="max-lines" data-placement="top" data-toggle="tooltip" title="Indonesia Naik 11 Peringkat Hasil Survey e-Government oleh PBB">Indonesia Naik 11 Peringkat Hasil Survey e-Government oleh PBB</a>
                                                </h5>
                                                <a class="more" href="https://opendata.jatimprov.go.id/frontend/infografik/detail/257">
                                                    <span>INFOGRAFIK</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-wrapper slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                <div class="slick-slide">
                                    <div class="slick-slide-in" style="width: 100%; display: inline-block;">
                                        <div class="item">
                                            <div class="post-img">
                                                <div class="img">
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/256">
                                                        <img style="width:unset!important;" src="/uploads/46d69edb9a678455f1a410ad02ae4255.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="info">
                                                    <a>27 May 2024</a>
                                                </div>
                                                <h5>
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/256" class="max-lines" data-placement="top" data-toggle="tooltip" title="Indeks SPBE Nasional">Indeks SPBE Nasional</a>
                                                </h5>
                                                <a class="more" href="https://opendata.jatimprov.go.id/frontend/infografik/detail/256">
                                                    <span>INFOGRAFIK</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-wrapper slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                <div class="slick-slide">
                                    <div class="slick-slide-in" style="width: 100%; display: inline-block;">
                                        <div class="item">
                                            <div class="post-img">
                                                <div class="img">
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/255">
                                                        <img style="width:unset!important;" src="/uploads/b674d0792c83a1be897371772cfa0d37.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="info">
                                                    <a>27 May 2024</a>
                                                </div>
                                                <h5>
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/255" class="max-lines" data-placement="top" data-toggle="tooltip" title="Tingkat Penetrasi Internet di Jatim sebesar 81,79% Lebih Tinggi dari Nasional">Tingkat Penetrasi Internet di Jatim sebesar 81,79% Lebih Tinggi dari Nasional</a>
                                                </h5>
                                                <a class="more" href="https://opendata.jatimprov.go.id/frontend/infografik/detail/255">
                                                    <span>INFOGRAFIK</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-wrapper slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                <div class="slick-slide">
                                    <div class="slick-slide-in" style="width: 100%; display: inline-block;">
                                        <div class="item">
                                            <div class="post-img">
                                                <div class="img">
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/254">
                                                        <img style="width:unset!important;" src="/uploads/3430d922a7fb8ccf636ef6faf7f52bda.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="info">
                                                    <a>22 May 2024</a>
                                                </div>
                                                <h5>
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/254" class="max-lines" data-placement="top" data-toggle="tooltip" title="Warga Jatim Makin Gemar Membaca">Warga Jatim Makin Gemar Membaca</a>
                                                </h5>
                                                <a class="more" href="https://opendata.jatimprov.go.id/frontend/infografik/detail/254">
                                                    <span>INFOGRAFIK</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-wrapper slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                <div class="slick-slide">
                                    <div class="slick-slide-in" style="width: 100%; display: inline-block;">
                                        <div class="item">
                                            <div class="post-img">
                                                <div class="img">
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/253">
                                                        <img style="width:unset!important;" src="/uploads/46aedd2c3968d8058b50eadea5e68638.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="info">
                                                    <a>22 May 2024</a>
                                                </div>
                                                <h5>
                                                    <a href="https://opendata.jatimprov.go.id/frontend/infografik/detail/253" class="max-lines" data-placement="top" data-toggle="tooltip" title="Kunjungan Wisatawan Mancanegara ke Jawa Timur Naik 74,83%">Kunjungan Wisatawan Mancanegara ke Jawa Timur Naik 74,83%</a>
                                                </h5>
                                                <a class="more" href="https://opendata.jatimprov.go.id/frontend/infografik/detail/253">
                                                    <span>INFOGRAFIK</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>


    <div class="detail_modal">
        <div id="feedback" class="modal modal-async fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div style="text-align: center"><img src="/bundles/greenadmin/img/loading.gif" style="width: 20px" /></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer py-5">
        <div class="pt-2">
            <div class="container">
                <div class="pb-3 mb-3 border-bottom">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h3 class="text-light mb-3">Open Data</h3>
                            <img src="https://opendata.jatimprov.go.id/brand/icon/open-data-128x128.png" height="60" class="mr-2">
                            <img src="https://opendata.jatimprov.go.id/brand/sata-jatim-logo.png" height="60" class="mr-2">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="text-lg-center mt-4 mt-lg-0">
                                <h6 class="text-light mb-3">Collaborate With</h6>
                                <img src="https://opendata.jatimprov.go.id/brand/icon/satudataindonesia.png" height="60" class="mr-2">
                                <img src="https://opendata.jatimprov.go.id/brand/icon/bps.png" height="65" class="mr-2">
                                <img src="https://opendata.jatimprov.go.id/brand/icon/bmkg.png" height="62" class="mr-2">
                                <!-- <img src="https://opendata.jatimprov.go.id/brand/icon/kadin.png" height="60" class="mr-2"> -->
                                <img src="https://opendata.jatimprov.go.id/brand/icon/kemenag.png" height="70">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="text-lg-right mt-4 mt-lg-0">
                                <h6 class="title text-light mb-4">Contact Info</h6>
                                <ul class="list-unstyled text-light">
                                    <li>Dinas Komunikasi dan Informatika Prov. Jawa Timur</li>
                                    <li>Jl. A Yani 242-244 Surabaya, Jawa Timur</li>
                                    <li>Telp. (031) 8294608, Fax (031) 8294517</li>
                                    <li>kominfo@jatimprov.go.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-light mb-0">&copy; Open Data 2024</p>
                    <a href="/login" target="_blank" class="d-inline-flex align-items-center text-light btn btn-sm">
                        <i class="bi-box-arrow-in-right mr-2 fs-6"></i> Sign In
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="floating-toolbar px-5">
        <a href="https://opendata.jatimprov.go.id/frontend/tfeedback/form_survey" target="_blank" class="fs-7 btn toolbar-item">
            <i class="icon fs-6 bi-clipboard-minus-fill"></i>
            Survey
        </a>
        <a href="https://opendata.jatimprov.go.id/frontend/top-ranking-activities" class="fs-7 btn toolbar-item" data-toggle="modal" data-target="#modalDrawerLeft">
            <i class="icon fs-6 bi-trophy-fill"></i>
            Top Rank
        </a>
    </div>

    <div class="feedback-outer">
        <a href="https://opendata.jatimprov.go.id/frontend/dataset/request" class="feedback" data-toggle="modal" data-target="#modalDrawer">
            <img src="https://opendata.jatimprov.go.id/frontend/img/dataset-coni.png" alt="Image Dataset Suggestion" />
        </a>
    </div>

    <div class="modal modal-async fade m-drawer is-start" id="modalDrawerLeft" tabindex="-1" aria-labelledby="modalDrawerLeftLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="/bundles/greenadmin/img/loading.gif" style="width: 30px" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-async fade m-drawer is-end" id="modalDrawer" tabindex="-1" aria-labelledby="modalDrawerLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="/bundles/greenadmin/img/loading.gif" style="width: 30px" />
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var _route = "/device/fingerprint";
</script>
<script type="text/javascript" src="/bundles/visitortracking/device.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/js/js.cookie.min.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/js/jquery.min.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/js/popper.min.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/js/bootstrap.min.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/js/main.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/slick/slick.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/select2/select2.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/sweetalert2/sweetalert2.all.min.js"></script>
<script src="/bundles/greenadmin/js/highcarts/highcarts.js"></script>
<script src="/bundles/greenadmin/js/highcarts/exporting.js"></script>
<script src="/bundles/greenadmin/js/highcarts/data.js"></script>
<script src="/bundles/greenadmin/js/highcarts/accessibility.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/assets/plugins/leaflet/leaflet.js"></script>
<script src="https://opendata.jatimprov.go.id/frontend/assets/plugins/leaflet/air.js"></script>
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

<script>
</script>
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



</html>