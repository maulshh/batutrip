        <div id="bg_utama">
            <center>
                <img src="" id="img_background" alt="element">
            </center>
        </div>
        <div id="pencarian" class="large">
            <div class="col-lg-12">
                <input type="text" id="cari" placeholder="masukan pencarian">
                <input type="hidden" id="filter">
            </div>

            <div class="col-lg-10 pull-right attr_pencarian" id="menu_cari">
                <div class="btn-group">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle menu_cari"
                       aria-expanded="false" id="cari_mode"><span class="caret"></span> Pilih Filter</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">Filter Pencarian</li>
                        <li id="cari_event"><a href="#">Event</a></li>
                        <li id="cari_kuliner"><a href="#">Kuliner</a></li>
                        <li id="cari_destinasi"><a href="#">Destinasi</a></li>
                        <li id="cari_clear"><a href="#">Tanpa Filter</a></li>
                    </ul>
                </div>
                <div id="icon_cari" class="col-lg-2 attr_pencarian">
                    <img src="<?= base_url('ui/public') ?>/search.png" alt="element" class="cari">
                </div>
            </div>
        </div>

        <div id="pencarian" class="mobile">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <input type="text" id="cari_mobile" placeholder="masukan pencarian">
                <input type="hidden" id="filter_mobile">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="btn-group pull-left">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle menu_cari"
                       aria-expanded="false" id="cari_mode_mobile"><span class="caret"></span> Pilih Filter</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header" id="cari_mode">Filter Pencarian</li>
                        <li id="cari_event_mobile"><a href="#">Event</a></li>
                        <li id="cari_kuliner_mobile"><a href="#">Kuliner</a></li>
                        <li id="cari_destinasi_mobile"><a href="#">Destinasi</a></li>
                        <li id="cari_clear_mobile"><a href="#">Tanpa Filter</a></li>
                    </ul>
                </div>
                <div type="button" class="btn btn-info pull-right" id="bt_cari"><i class="fa fa-search"></i> Cari</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div id="top_event">
                        <div class="col-lg-12">
                            <h1 class="primary text-center">Top Events</h1>
                        </div>
                        <div style="margin-left:0px; margin-right:-20px">
                            <a href="http://www.pontianakite.com/url/batu-event-project-2015">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class='wrapper area_wrap' id="area_img_event_1">
                                        <img
                                            src="http://www.pontianakite.com/storage-low/event/19f3cd308f1455b3fa09a282e0d496f4d9d4f495e875a2e075a1a4a6e1b9770f/331f9f9d3fb1f8b380ede763749c5b8d.jpg"
                                            class="top_event" id="img_event_1" alt="pontianak_event_project_2015">

                                        <div class='description evn1'>
                                            <span id="" class="col-xs-4">
                                                <div class="hari top_event">Jum</div>
                                                <div class="tgl top_event">07</div>
                                                <div class="bln top_event">Agu</div>
                                            </span>
                                            <span id="" class="col-xs-8">
                                                <div class="judul top_event">BATU EVENT PROJECT 2015</div>
                                                <div class="lokasi top_event"><span
                                                        class="fa fa-map-marker marker_icon"></span>
                                                    Rumah Adat Radakng,
                                                    Jl.Sultan Syahrir
                                                    Batu Jawa Timur.
                                                </div>
                                            </span>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="http://www.pontianakite.com/url/setetes-darah-sejuta-harapan-bersama-best-western-kota-baru">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class='wrapper area_wrap' id="area_img_event_2">
                                        <img
                                            src="http://www.pontianakite.com/storage-low/event/642e92efb79421734881b53e1e1b18b6642e92efb79421734881b53e1e1b18b6/19f620f93d7784fbe43fce26f478d565.jpg"
                                            class="top_event" id="img_event_2"
                                            alt="setetes_darah_sejuta_harapan_bersama_best_western_kota_baru">

                                        <div class='description evn2'>
                                            <span id="" class="col-xs-4">
                                                <div class="hari top_event">Sab</div>
                                                <div class="tgl top_event">26</div>
                                                <div class="bln top_event">Sep</div>
                                            </span>
                                            <span id="" class="col-xs-8">
                                                <div class="judul top_event">Setetes Darah Sejuta Harapan Bersama BEST
                                                    WESTERN Kota Baru
                                                </div>
                                                <div class="lokasi top_event"><span
                                                        class="fa fa-map-marker marker_icon"></span>
                                                    Jalan Sultan Abdurrachman No.72 - 74 Batu, East Java 78116,
                                                    Indonesia

                                                </div>
                                            </span>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="http://www.pontianakite.com/url/vocal-dream">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class='wrapper area_wrap' id="area_img_event_3">
                                        <img
                                            src="http://www.pontianakite.com/storage-low/event/642e92efb79421734881b53e1e1b18b6f457c545a9ded88f18ecee47145a72c0/8a9b5d202610738034e95f6ca4ca3922.jpg"
                                            class="top_event" id="img_event_3" alt="vocal_dream">

                                        <div class='description evn3'>
                                            <span id="" class="col-xs-4">
                                                <div class="hari top_event">Rab</div>
                                                <div class="tgl top_event">30</div>
                                                <div class="bln top_event">Sep</div>
                                            </span>
                                            <span id="" class="col-xs-8">
                                                <div class="judul top_event">VOCAL DREAM</div>
                                                <div class="lokasi top_event"><span
                                                        class="fa fa-map-marker marker_icon"></span>
                                                    Batu, Sintang, Sanggau, Mempawah, Singkawang, Sambas &amp;
                                                    Ketapang.
                                                </div>
                                            </span>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="http://www.pontianakite.com/url/batu-cinte-satwa">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class='wrapper area_wrap' id="area_img_event_4">
                                        <img
                                            src="http://www.pontianakite.com/storage-low/event/642e92efb79421734881b53e1e1b18b66c8349cc7260ae62e3b1396831a8398f/4f3277c253d1e1968f9018cc02b9e7b7.JPG"
                                            class="top_event" id="img_event_4" alt="pontianak_cinte_satwa">

                                        <div class='description evn4'>
                                        <span id="" class="col-xs-4">
                                            <div class="hari top_event">Rab</div>
                                            <div class="tgl top_event">01</div>
                                            <div class="bln top_event">Jul</div>
                                        </span>
                                        <span id="" class="col-xs-8">
                                            <div class="judul top_event">Batu Cinte Satwa</div>
                                            <div class="lokasi top_event"><span
                                                    class="fa fa-map-marker marker_icon"></span>
                                                Taman Gitananda
                                            </div>
                                        </span>

                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="spacer_event">
                        <div class="overlay_event">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="<?=base_url('event')?>" class="normal">
                                    <div id="more_event">
                                        Selengkapnya
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row normal">
                    <div class="col-lg-6 normal home" id="destination">
                        <h1 class="primary text-center">Top Destination</h1>
                        <a href="http://www.pontianakite.com/url/perpustakaan-jawa-timur">
                            <div class="col-sm-6 col-md-6 col-lg-12 ds1" id="area_destination">
                                <div class="normal col-lg-6 col-md-12 image_dest" id="area_img_dest_1">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg"
                                        class="top_destination" id="img_dest_1" alt="perpustakaan_kalimantan_barat">
                                </div>
                                <div class="col-lg-6 col-md-12 text_dest" id="text_dest_1">
                                    <h2 class="title_destination">Perpustakaan Jawa Timur</h2>

                                    <div class="lokasi top_destination home">
                                        <h3 class="home">
                                            <span class="fa fa-map-marker marker_icon"></span>
                                            Jl. Letjen Sutoyo No. 6 Batu
                                        </h3>
                                    </div>
                                    <p class="deskripsi destination">

                                    <p>Jam Layanan dari 08.00 s.d 22.00 Wib</p>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/keraton-kadriyah">
                            <div class="col-sm-6 col-md-6 col-lg-12 ds2" id="area_destination">
                                <div class="normal col-lg-6 col-md-12 image_dest" id="area_img_dest_2">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/destinasi/c81e728d9d4c2f636f067f89cc14862ca87ff679a2f3e71d9181a67b7542122c/fcd4daef9cf6cec58358fe5b89ae3470.jpg"
                                        class="top_destination" id="img_dest_2" alt="keraton_kadriyah">
                                </div>
                                <div class="col-lg-6 col-md-12 text_dest" id="text_dest_2">
                                    <h2 class="title_destination">Keraton Kadriyah</h2>

                                    <div class="lokasi top_destination home">
                                        <h3 class="home">
                                            <span class="fa fa-map-marker marker_icon"></span>
                                            Jl.Tanjung Raya Kampung Beting, Kelurahan Dalam Bugis
                                        </h3>
                                    </div>
                                    <p class="deskripsi destination">Keraton Kadriyah adalah Keraton Batu yang ada pada
                                        tempo dulu dijadikan Pusat Pemerintahan Kesultanan Batu.</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/masjid-al-jihad-batu">
                            <div class="col-sm-6 col-md-6 col-lg-12 ds3" id="area_destination">
                                <div class="normal col-lg-6 col-md-12 image_dest" id="area_img_dest_3">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/destinasi/3416a75f4cea9109507cacd8e2f2aefcd3d9446802a44259755d38e6d163e820/fd9059ef9e5da8250819f65e1e436736.jpg"
                                        class="top_destination" id="img_dest_3" alt="masjid_al_jihad_pontianak">
                                </div>
                                <div class="col-lg-6 col-md-12 text_dest" id="text_dest_3">
                                    <h2 class="title_destination">Masjid Al Jihad Batu</h2>

                                    <div class="lokasi top_destination home">
                                        <h3 class="home">
                                            <span class="fa fa-map-marker marker_icon"></span>
                                            Jl.Sumatra / Jl.Moh. Sohor
                                        </h3>
                                    </div>
                                    <p class="deskripsi destination">Masjid Al-Jihad adalah satu di antara masjid yang bercorak
                                        Melayu yang terdapat di Kota Batu. Masjid ini terletak di sudut pertemuan Jalan
                                        Sultan Abdurahman dan Jala...</p>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/pusat-oleh-oleh-psp">
                            <div class="col-sm-6 col-md-6 col-lg-12 ds4" id="area_destination">
                                <div class="normal col-lg-6 col-md-12 image_dest" id="area_img_dest_4">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/destinasi/3416a75f4cea9109507cacd8e2f2aefc45c48cce2e2d7fbdea1afc51c7c6ad26/151e28fde175906f3e79c0519b0c7083.jpg"
                                        class="top_destination" id="img_dest_4" alt="pusat_oleh_oleh_psp">
                                </div>
                                <div class="col-lg-6 col-md-12 text_dest" id="text_dest_4">
                                    <h2 class="title_destination">Pusat Oleh-Oleh PSP</h2>

                                    <div class="lokasi top_destination home">
                                        <h3 class="home">
                                            <span class="fa fa-map-marker marker_icon"></span>
                                            Jl.Patimura
                                        </h3>
                                    </div>
                                    <p class="deskripsi destination">Di kawasan ini terdapat lebih dari 30 kios yang menjual
                                        berbagai jenis aneka makanan khas, aksesoris, dan cinderamata.</p>
                                </div>
                            </div>
                        </a>

                        <div class="row">
                            <div id="spacer_culinary">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <a href="<?=base_url('destination')?>" class="normal">
                                        <div id="more_destination">
                                            Selengkapnya
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 normal home" id="culinary">
                        <h1 class="primary text-center">Top Culinary</h1>
                        <a href="http://www.pontianakite.com/url/nasi-goreng-seafood-artomoro">
                            <div class="col-md-6 col-lg-12 col-sm-6 cl1" id="area_culinary">
                                <div class="normal col-lg-6 image_culin" id="area_img_culin_1">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/kuliner/a2557a7b2e94197ff767970b67041697c20ad4d76fe97759aa27a0c99bff6710/332986e7b9ac93d69b40e3cf99472fb2.jpg"
                                        class="top_culinary" id="img_culin_1" alt="nasi_goreng_seafood_artomoro">
                                </div>
                                <div class="col-md-12 col-lg-6 text_culin" id="text_culin_1">
                                    <h2 class="title_culinary">Nasi Goreng Seafood Artomoro</h2>

                                    <div class="col-xs-12 col-md-12 col-lg-12 harga home">
                                        <h3>
                                            Rp. 11.000
                                            -
                                            Rp. 15.000
                                        </h3>
                                    </div>
                                    <div class="col-md-12 col-lg-12 lokasi top_destination culinary">
                                        <h3>
                                            <span class="fa fa-map-marker marker_icon home"></span>
                                            Jl. Merdeka Barat, didepan Kampus STMIK
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/mie-pangsit-warung-joko">
                            <div class="col-md-6 col-lg-12 col-sm-6 cl2" id="area_culinary">
                                <div class="normal col-lg-6 image_culin" id="area_img_culin_2">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/kuliner/a2557a7b2e94197ff767970b670416976512bd43d9caa6e02c990b0a82652dca/b3e0b6455a031690825a60ff1b322790.jpg"
                                        class="top_culinary" id="img_culin_2" alt="mie_pangsit_warung_joko">
                                </div>
                                <div class="col-md-12 col-lg-6 text_culin" id="text_culin_2">
                                    <h2 class="title_culinary">Mie Pangsit Warung Joko</h2>

                                    <div class="col-xs-12 col-md-12 col-lg-12 harga home">
                                        <h3>
                                            Rp. 12.000
                                            -
                                            Rp. 15.000
                                        </h3>
                                    </div>
                                    <div class="col-md-12 col-lg-12 lokasi top_destination culinary">
                                        <h3>
                                            <span class="fa fa-map-marker marker_icon home"></span>
                                            Jl. H. Abbas 2, perempatan ditengah Jl. Setia Budi, didepan Datacom
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/floating-barbeque">
                            <div class="col-md-6 col-lg-12 col-sm-6 cl3" id="area_culinary">
                                <div class="normal col-lg-6 image_culin" id="area_img_culin_3">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/kuliner/c4ca4238a0b923820dcc509a6f75849b1f0e3dad99908345f7439f8ffabdffc4/678120c0425419d9ab5194828ad08f7f.jpg"
                                        class="top_culinary" id="img_culin_3" alt="floating_barbeque">
                                </div>
                                <div class="col-md-12 col-lg-6 text_culin" id="text_culin_3">
                                    <h2 class="title_culinary">Floating Barbeque</h2>

                                    <div class="col-xs-12 col-md-12 col-lg-12 harga home">
                                        <h3>
                                            Rp. 85.000
                                        </h3>
                                    </div>
                                    <div class="col-md-12 col-lg-12 lokasi top_destination culinary">
                                        <h3>
                                            <span class="fa fa-map-marker marker_icon home"></span>
                                            Hotel best western kota baru, jl. sultan syahrir.
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.pontianakite.com/url/bakso-pak-nanok">
                            <div class="col-md-6 col-lg-12 col-sm-6 cl4" id="area_culinary">
                                <div class="normal col-lg-6 image_culin" id="area_img_culin_4">
                                    <img
                                        src="http://www.pontianakite.com/storage-low/kuliner/a2557a7b2e94197ff767970b67041697c51ce410c124a10e0db5e4b97fc2af39/523cc3a4721da059d7c382429785ff96.jpg"
                                        class="top_culinary" id="img_culin_4" alt="bakso_pak_nanok">
                                </div>
                                <div class="col-md-12 col-lg-6 text_culin" id="text_culin_4">
                                    <h2 class="title_culinary">Bakso Pak Nanok</h2>

                                    <div class="col-xs-12 col-md-12 col-lg-12 harga home">
                                        <h3>
                                            Rp. 12.000
                                            -
                                            Rp. 13.000
                                        </h3>
                                    </div>
                                    <div class="col-md-12 col-lg-12 lokasi top_destination culinary">
                                        <h3>
                                            <span class="fa fa-map-marker marker_icon home"></span>
                                            Jl. Tabrani Ahmad, samping Kantor Camat
                                            Jl. H. Rais A. Rahman, Komp. Pasar Dahlia
                                            Jl. Husein Hamzah
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="row">
                            <div id="spacer_culinary">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <a href="<?=base_url('culinary')?>" class="normal">
                                        <div id="more_culinary">
                                            Selengkapnya
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row normal">
            <div class="col-lg-12" id="alasan">
                <div class="col-lg-12">
                    <h2 class="primary colptk">Why Choose Us?</h2>
                </div>
                <div class="col-lg-4 area_alasan">
                    <img src="<?= base_url('ui/public') ?>/footer/1.png" alt="element">

                    <h2 class="primary alasan">Disini tempat terbaik untuk mengecek setiap tempat</h2>

                    <div class="deskripsi alasan">
                        Dengan informasi lengkap, daftar tempat, fasilitas, harga, jam buka dan peta
                    </div>
                </div>
                <div class="col-lg-4 area_alasan">
                    <img src="<?= base_url('ui/public') ?>/footer/2.png" alt="element">

                    <h2 class="primary alasan">Tempat ulasan untuk mendapat informasi tambahan</h2>

                    <div class="deskripsi alasan">
                        Lihat info yang relevan dan temukan tempat dan acara baru yang terbaik
                    </div>
                </div>
                <div class="col-lg-4 area_alasan">
                    <img src="<?= base_url('ui/public') ?>/footer/3.png" alt="element">

                    <h2 class="primary alasan">Dari Anda untuk Dunia</h2>

                    <div class="deskripsi alasan">
                        Tulis dan bagikan pengalaman Anda kepada pengguna lainnya melalui jejaring sosial
                    </div>
                </div>
            </div>
        </div>

<script>
    $(document).load(function () {
        var resolution = $(window).width();
        var width_area_img_event_1 = $("#area_img_event_1").width();
        var height_area_img_event_1 = $("#area_img_event_1").height();
        var width_img_event_1 = $("#img_event_1").width();
        var height_img_event_1 = $("#img_event_1").height();

        if (height_img_event_1 > 180) {
            var mrg1 = height_img_event_1 - 180;
            mrg1 = -mrg1;
            $("#img_event_1").css("margin-top", mrg1);
        }
        else {
            var mrg1 = 180 - height_img_event_1;
            mrg1 = mrg1 / 2;
            $("#img_event_1").css("margin-top", mrg1);
        }
        var width_area_img_event_2 = $("#area_img_event_2").width();
        var height_area_img_event_2 = $("#area_img_event_2").height();
        var width_img_event_2 = $("#img_event_2").width();
        var height_img_event_2 = $("#img_event_2").height();

        if (height_img_event_2 > 180) {
            var mrg2 = height_img_event_2 - 180;
            mrg2 = -mrg2;
            $("#img_event_2").css("margin-top", mrg2);
        }
        else {
            var mrg2 = 180 - height_img_event_2;
            mrg2 = mrg2 / 2;
            $("#img_event_2").css("margin-top", mrg2);
        }
        var width_area_img_event_3 = $("#area_img_event_3").width();
        var height_area_img_event_3 = $("#area_img_event_3").height();
        var width_img_event_3 = $("#img_event_3").width();
        var height_img_event_3 = $("#img_event_3").height();

        if (height_img_event_3 > 180) {
            var mrg3 = height_img_event_3 - 180;
            mrg3 = -mrg3;
            $("#img_event_3").css("margin-top", mrg3);
        }
        else {
            var mrg3 = 180 - height_img_event_3;
            mrg3 = mrg3 / 2;
            $("#img_event_3").css("margin-top", mrg3);
        }
        var width_area_img_event_4 = $("#area_img_event_4").width();
        var height_area_img_event_4 = $("#area_img_event_4").height();
        var width_img_event_4 = $("#img_event_4").width();
        var height_img_event_4 = $("#img_event_4").height();

        if (height_img_event_4 > 180) {
            var mrg4 = height_img_event_4 - 180;
            mrg4 = -mrg4;
            $("#img_event_4").css("margin-top", mrg4);
        }
        else {
            var mrg4 = 180 - height_img_event_4;
            mrg4 = mrg4 / 2;
            $("#img_event_4").css("margin-top", mrg4);
        }

        var max_dest = 0;
        var hdiv_dest = 0;
        var w_dest = $("#area_img_dest_1").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_1").css("height", h_dest);

        var width_img_dest_1 = $("#img_dest_1").width();
        var height_img_dest_1 = $("#img_dest_1").height();

        if (height_img_dest_1 > h_dest) {
            var mrg = height_img_dest_1 - h_dest;
            mrg = mrg / 2;
            $("#img_dest_1").css("margin-top", -mrg);
        }
        else {
            var mrg = h_dest - height_img_dest_1;
            mrg = mrg / 2;
            $("#img_dest_1").css("margin-top", mrg);
        }
        var w_dest = $("#area_img_dest_2").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_2").css("height", h_dest);

        var width_img_dest_2 = $("#img_dest_2").width();
        var height_img_dest_2 = $("#img_dest_2").height();

        if (height_img_dest_2 > h_dest) {
            var mrg = height_img_dest_2 - h_dest;
            mrg = mrg / 2;
            $("#img_dest_2").css("margin-top", -mrg);
        }
        else {
            var mrg = h_dest - height_img_dest_2;
            mrg = mrg / 2;
            $("#img_dest_2").css("margin-top", mrg);
        }
        var w_dest = $("#area_img_dest_3").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_3").css("height", h_dest);

        var width_img_dest_3 = $("#img_dest_3").width();
        var height_img_dest_3 = $("#img_dest_3").height();

        if (height_img_dest_3 > h_dest) {
            var mrg = height_img_dest_3 - h_dest;
            mrg = mrg / 2;
            $("#img_dest_3").css("margin-top", -mrg);
        }
        else {
            var mrg = h_dest - height_img_dest_3;
            mrg = mrg / 2;
            $("#img_dest_3").css("margin-top", mrg);
        }
        var w_dest = $("#area_img_dest_4").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_4").css("height", h_dest);

        var width_img_dest_4 = $("#img_dest_4").width();
        var height_img_dest_4 = $("#img_dest_4").height();

        if (height_img_dest_4 > h_dest) {
            var mrg = height_img_dest_4 - h_dest;
            mrg = mrg / 2;
            $("#img_dest_4").css("margin-top", -mrg);
        }
        else {
            var mrg = h_dest - height_img_dest_4;
            mrg = mrg / 2;
            $("#img_dest_4").css("margin-top", mrg);
        }

        var hdiv_cul = 0;
        var w_culin = $("#area_img_culin_1").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_1").css("height", h_culin);

        var width_img_culin_1 = $("#img_culin_1").width();
        var height_img_culin_1 = $("#img_culin_1").height();

        if (height_img_culin_1 > h_culin) {
            var mrg = height_img_culin_1 - h_culin;
            mrg = mrg / 2;
            $("#img_culin_1").css("margin-top", -mrg);
        }
        else {
            var mrg = h_culin - height_img_culin_1;
            mrg = mrg / 2;
            $("#img_culin_1").css("margin-top", mrg);
        }
        var w_culin = $("#area_img_culin_2").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_2").css("height", h_culin);

        var width_img_culin_2 = $("#img_culin_2").width();
        var height_img_culin_2 = $("#img_culin_2").height();

        if (height_img_culin_2 > h_culin) {
            var mrg = height_img_culin_2 - h_culin;
            mrg = mrg / 2;
            $("#img_culin_2").css("margin-top", -mrg);
        }
        else {
            var mrg = h_culin - height_img_culin_2;
            mrg = mrg / 2;
            $("#img_culin_2").css("margin-top", mrg);
        }
        var w_culin = $("#area_img_culin_3").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_3").css("height", h_culin);

        var width_img_culin_3 = $("#img_culin_3").width();
        var height_img_culin_3 = $("#img_culin_3").height();

        if (height_img_culin_3 > h_culin) {
            var mrg = height_img_culin_3 - h_culin;
            mrg = mrg / 2;
            $("#img_culin_3").css("margin-top", -mrg);
        }
        else {
            var mrg = h_culin - height_img_culin_3;
            mrg = mrg / 2;
            $("#img_culin_3").css("margin-top", mrg);
        }
        var w_culin = $("#area_img_culin_4").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_4").css("height", h_culin);

        var width_img_culin_4 = $("#img_culin_4").width();
        var height_img_culin_4 = $("#img_culin_4").height();

        if (height_img_culin_4 > h_culin) {
            var mrg = height_img_culin_4 - h_culin;
            mrg = mrg / 2;
            $("#img_culin_4").css("margin-top", -mrg);
        }
        else {
            var mrg = h_culin - height_img_culin_4;
            mrg = mrg / 2;
            $("#img_culin_4").css("margin-top", mrg);
        }


        if (resolution >= 768) {
            if (hdiv_dest >= hdiv_cul) {
                $(".cl1").css("height", hdiv_dest + 20);
                $(".ds1").css("height", hdiv_dest + 20);
            }
            else {
                $(".cl1").css("height", hdiv_cul + 20);
                $(".ds1").css("height", hdiv_cul + 20);
            }
        }

        if (resolution >= 768) {
            if (hdiv_dest >= hdiv_cul) {
                $(".cl2").css("height", hdiv_dest + 20);
                $(".ds2").css("height", hdiv_dest + 20);
            }
            else {
                $(".cl2").css("height", hdiv_cul + 20);
                $(".ds2").css("height", hdiv_cul + 20);
            }
        }

        if (resolution >= 768) {
            if (hdiv_dest >= hdiv_cul) {
                $(".cl3").css("height", hdiv_dest + 20);
                $(".ds3").css("height", hdiv_dest + 20);
            }
            else {
                $(".cl3").css("height", hdiv_cul + 20);
                $(".ds3").css("height", hdiv_cul + 20);
            }
        }

        if (resolution >= 768) {
            if (hdiv_dest >= hdiv_cul) {
                $(".cl4").css("height", hdiv_dest + 20);
                $(".ds4").css("height", hdiv_dest + 20);
            }
            else {
                $(".cl4").css("height", hdiv_cul + 20);
                $(".ds4").css("height", hdiv_cul + 20);
            }
        }
    });

    $(document).ready(function () {
        var resolution = $(window).width();
        $("#cari_event").click(function () {
            $("#cari_mode").html('<span class="caret"></span> Event');
            $("#filter").val('1');
        });

        $("#cari_kuliner").click(function () {
            $("#cari_mode").html('<span class="caret"></span> Kuliner');
            $("#filter").val('2');
        });

        $("#cari_destinasi").click(function () {
            $("#cari_mode").html('<span class="caret"></span> Destinasi');
            $("#filter").val('3');
        });

        $("#cari_clear").click(function () {
            $("#cari_mode").html('<span class="caret"></span> Pilih Filter');
            $("#filter").val('0');
        });


        $("#cari_event_mobile").click(function () {
            $("#cari_mode_mobile").html('<span class="caret"></span> Event');
            $("#filter_mobile").val('1');
        });

        $("#cari_kuliner_mobile").click(function () {
            $("#cari_mode_mobile").html('<span class="caret"></span> Kuliner');
            $("#filter_mobile").val('2');
        });

        $("#cari_destinasi_mobile").click(function () {
            $("#cari_mode_mobile").html('<span class="caret"></span> Destinasi');
            $("#filter_mobile").val('3');
        });

        $("#cari_clear_mobile").click(function () {
            $("#cari_mode_mobile").html('<span class="caret"></span> Pilih Filter');
            $("#filter_mobile").val('0');
        });

        $(document).keypress(function (e) {
            var val = $("#cari").val();
            if (val == "") {

            }
            else {
                if (e.which == 13) {
                    var filter = $("#filter").val();
                    var kode = "";
                    if (filter == "1") {
                        kode = "event";
                    }
                    if (filter == "2") {
                        kode = "kuliner";
                    }
                    if (filter == "3") {
                        kode = "destinasi";
                    }
                    if (filter == "0") {
                        kode = "all";
                    }
                    if (filter == "") {
                        kode = "all";
                    }
                    var query = "cari/" + kode + "/" + val;
                    window.location.replace("http://www.pontianakite.com/" + query);
                }
            }
        });

        $("#icon_cari").click(function () {
            var val = $("#cari").val();
            var filter = $("#filter").val();
            var kode = "";
            if (filter == "1") {
                kode = "event";
            }
            if (filter == "2") {
                kode = "kuliner";
            }
            if (filter == "3") {
                kode = "destinasi";
            }
            if (filter == "0") {
                kode = "all";
            }
            if (filter == "") {
                kode = "all";
            }
            var query = "cari/" + kode + "/" + val;
            window.location.replace("http://www.pontianakite.com/" + query);
        });

        $("#bt_cari").click(function () {
            var val = $("#cari_mobile").val();
            if (val == "") {

            }
            else {
                var filter_mobile = $("#filter_mobile").val();
                var kode = "";
                if (filter_mobile == "1") {
                    kode = "event";
                }
                if (filter_mobile == "2") {
                    kode = "kuliner";
                }
                if (filter_mobile == "3") {
                    kode = "destinasi";
                }
                if (filter_mobile == "0") {
                    kode = "all";
                }
                if (filter_mobile == "") {
                    kode = "all";
                }
                var query = "cari/" + kode + "/" + val;
                window.location.replace("http://www.pontianakite.com/" + query);
            }
        });

        if (resolution >= 768) {
            $("#img_background").attr("src", "http://villahotelbatu.com/wp-content/uploads/2015/09/Mengenal-Kota-Wisata-Batu.jpg");
            $("#img_background").addClass('large');
        }
        else {
            $("#img_background").attr("src", "<?=base_url('ui/public')?>/utama_mobile.jpg");
            $("#img_background").css('margin-top', '-40px');
        }

        var width_area_img_event_1 = $("#area_img_event_1").width();
        var height_area_img_event_1 = $("#area_img_event_1").height();
        var width_img_event_1 = $("#img_event_1").width();
        var height_img_event_1 = $("#img_event_1").height();

        if (height_img_event_1 > 180) {
            var mrg1 = height_img_event_1 - 180;
            mrg1 = -mrg1;
        }
        else {
            var mrg1 = 180 - height_img_event_1;
            mrg1 = mrg1 / 2;
        }

        $("#area_img_event_1").mouseenter(function () {
            $(".description.evn1").css("background", "rgba(0,0,0,0.9)");
        }).mouseleave(function () {
            $(".description.evn1").css("background", "rgba(0,0,0,0.7)");
        });
        var width_area_img_event_2 = $("#area_img_event_2").width();
        var height_area_img_event_2 = $("#area_img_event_2").height();
        var width_img_event_2 = $("#img_event_2").width();
        var height_img_event_2 = $("#img_event_2").height();

        if (height_img_event_2 > 180) {
            var mrg2 = height_img_event_2 - 180;
            mrg2 = -mrg2;
        }
        else {
            var mrg2 = 180 - height_img_event_2;
            mrg2 = mrg2 / 2;
        }

        $("#area_img_event_2").mouseenter(function () {
            $(".description.evn2").css("background", "rgba(0,0,0,0.9)");
        }).mouseleave(function () {
            $(".description.evn2").css("background", "rgba(0,0,0,0.7)");
        });
        var width_area_img_event_3 = $("#area_img_event_3").width();
        var height_area_img_event_3 = $("#area_img_event_3").height();
        var width_img_event_3 = $("#img_event_3").width();
        var height_img_event_3 = $("#img_event_3").height();

        if (height_img_event_3 > 180) {
            var mrg3 = height_img_event_3 - 180;
            mrg3 = -mrg3;
        }
        else {
            var mrg3 = 180 - height_img_event_3;
            mrg3 = mrg3 / 2;
        }

        $("#area_img_event_3").mouseenter(function () {
            $(".description.evn3").css("background", "rgba(0,0,0,0.9)");
        }).mouseleave(function () {
            $(".description.evn3").css("background", "rgba(0,0,0,0.7)");
        });
        var width_area_img_event_4 = $("#area_img_event_4").width();
        var height_area_img_event_4 = $("#area_img_event_4").height();
        var width_img_event_4 = $("#img_event_4").width();
        var height_img_event_4 = $("#img_event_4").height();

        if (height_img_event_4 > 180) {
            var mrg4 = height_img_event_4 - 180;
            mrg4 = -mrg4;
        }
        else {
            var mrg4 = 180 - height_img_event_4;
            mrg4 = mrg4 / 2;
        }

        $("#area_img_event_4").mouseenter(function () {
            $(".description.evn4").css("background", "rgba(0,0,0,0.9)");
        }).mouseleave(function () {
            $(".description.evn4").css("background", "rgba(0,0,0,0.7)");
        });

        var max_dest = 0;
        var hdiv_dest = 0;
        var w_dest = $("#area_img_dest_1").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_1").css("height", h_dest);

        var width_img_dest_1 = $("#img_dest_1").width();
        var height_img_dest_1 = $("#img_dest_1").height();

        if (height_img_dest_1 > h_dest) {
            var mrg = height_img_dest_1 - h_dest;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_dest - height_img_dest_1;
            mrg = mrg / 2;
        }

        var ds1 = $(".ds1").height();
        if ((ds1 > hdiv_dest) && (ds1 != null)) {
            hdiv_dest = ds1
        }

        var up_dest1 = height_img_dest_1;
        up_dest1 = "-" + up_dest1 + "px";

        $(".ds1").mouseenter(function () {
            $("#img_dest_1").fadeTo("medium", 0.33);
            $("#zoom1.dest").animate({"margin-top": up_dest1});
        }).mouseleave(function () {
            $("#img_dest_1").fadeTo("medium", 1);
            $("#zoom1.dest").animate({"margin-top": "100px"});
        });
        var w_dest = $("#area_img_dest_2").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_2").css("height", h_dest);

        var width_img_dest_2 = $("#img_dest_2").width();
        var height_img_dest_2 = $("#img_dest_2").height();

        if (height_img_dest_2 > h_dest) {
            var mrg = height_img_dest_2 - h_dest;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_dest - height_img_dest_2;
            mrg = mrg / 2;
        }

        var ds2 = $(".ds2").height();
        if ((ds2 > hdiv_dest) && (ds2 != null)) {
            hdiv_dest = ds2
        }

        var up_dest2 = height_img_dest_2;
        up_dest2 = "-" + up_dest2 + "px";

        $(".ds2").mouseenter(function () {
            $("#img_dest_2").fadeTo("medium", 0.33);
            $("#zoom2.dest").animate({"margin-top": up_dest2});
        }).mouseleave(function () {
            $("#img_dest_2").fadeTo("medium", 1);
            $("#zoom2.dest").animate({"margin-top": "100px"});
        });
        var w_dest = $("#area_img_dest_3").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_3").css("height", h_dest);

        var width_img_dest_3 = $("#img_dest_3").width();
        var height_img_dest_3 = $("#img_dest_3").height();

        if (height_img_dest_3 > h_dest) {
            var mrg = height_img_dest_3 - h_dest;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_dest - height_img_dest_3;
            mrg = mrg / 2;
        }

        var ds3 = $(".ds3").height();
        if ((ds3 > hdiv_dest) && (ds3 != null)) {
            hdiv_dest = ds3
        }

        var up_dest3 = height_img_dest_3;
        up_dest3 = "-" + up_dest3 + "px";

        $(".ds3").mouseenter(function () {
            $("#img_dest_3").fadeTo("medium", 0.33);
            $("#zoom3.dest").animate({"margin-top": up_dest3});
        }).mouseleave(function () {
            $("#img_dest_3").fadeTo("medium", 1);
            $("#zoom3.dest").animate({"margin-top": "100px"});
        });
        var w_dest = $("#area_img_dest_4").width();
        h_dest = w_dest / 2 + 30;
        $("#area_img_dest_4").css("height", h_dest);

        var width_img_dest_4 = $("#img_dest_4").width();
        var height_img_dest_4 = $("#img_dest_4").height();

        if (height_img_dest_4 > h_dest) {
            var mrg = height_img_dest_4 - h_dest;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_dest - height_img_dest_4;
            mrg = mrg / 2;
        }

        var ds4 = $(".ds4").height();
        if ((ds4 > hdiv_dest) && (ds4 != null)) {
            hdiv_dest = ds4
        }

        var up_dest4 = height_img_dest_4;
        up_dest4 = "-" + up_dest4 + "px";

        $(".ds4").mouseenter(function () {
            $("#img_dest_4").fadeTo("medium", 0.33);
            $("#zoom4.dest").animate({"margin-top": up_dest4});
        }).mouseleave(function () {
            $("#img_dest_4").fadeTo("medium", 1);
            $("#zoom4.dest").animate({"margin-top": "100px"});
        });

        var hdiv_cul = 0;
        var w_culin = $("#area_img_culin_1").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_1").css("height", h_culin);

        var width_img_culin_1 = $("#img_culin_1").width();
        var height_img_culin_1 = $("#img_culin_1").height();

        if (height_img_culin_1 > h_culin) {
            var mrg = height_img_culin_1 - h_culin;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_culin - height_img_culin_1;
            mrg = mrg / 2;
        }

        var cl1 = $(".cl1").height();
        if ((cl1 > hdiv_cul) && (cl1 != null)) {
            hdiv_cul = cl1
        }

        var up_culin1 = height_img_culin_1;
        up_culin1 = "-" + up_culin1 + "px";

        $(".cl1").mouseenter(function () {
            $("#img_culin_1").fadeTo("medium", 0.33);
            $("#zoom1.culin").animate({"margin-top": up_culin1});
        }).mouseleave(function () {
            $("#img_culin_1").fadeTo("medium", 1);
            $("#zoom1.culin").animate({"margin-top": "100px"});
        });
        var w_culin = $("#area_img_culin_2").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_2").css("height", h_culin);

        var width_img_culin_2 = $("#img_culin_2").width();
        var height_img_culin_2 = $("#img_culin_2").height();

        if (height_img_culin_2 > h_culin) {
            var mrg = height_img_culin_2 - h_culin;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_culin - height_img_culin_2;
            mrg = mrg / 2;
        }

        var cl2 = $(".cl2").height();
        if ((cl2 > hdiv_cul) && (cl2 != null)) {
            hdiv_cul = cl2
        }

        var up_culin2 = height_img_culin_2;
        up_culin2 = "-" + up_culin2 + "px";

        $(".cl2").mouseenter(function () {
            $("#img_culin_2").fadeTo("medium", 0.33);
            $("#zoom2.culin").animate({"margin-top": up_culin2});
        }).mouseleave(function () {
            $("#img_culin_2").fadeTo("medium", 1);
            $("#zoom2.culin").animate({"margin-top": "100px"});
        });
        var w_culin = $("#area_img_culin_3").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_3").css("height", h_culin);

        var width_img_culin_3 = $("#img_culin_3").width();
        var height_img_culin_3 = $("#img_culin_3").height();

        if (height_img_culin_3 > h_culin) {
            var mrg = height_img_culin_3 - h_culin;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_culin - height_img_culin_3;
            mrg = mrg / 2;
        }

        var cl3 = $(".cl3").height();
        if ((cl3 > hdiv_cul) && (cl3 != null)) {
            hdiv_cul = cl3
        }

        var up_culin3 = height_img_culin_3;
        up_culin3 = "-" + up_culin3 + "px";

        $(".cl3").mouseenter(function () {
            $("#img_culin_3").fadeTo("medium", 0.33);
            $("#zoom3.culin").animate({"margin-top": up_culin3});
        }).mouseleave(function () {
            $("#img_culin_3").fadeTo("medium", 1);
            $("#zoom3.culin").animate({"margin-top": "100px"});
        });
        var w_culin = $("#area_img_culin_4").width();
        h_culin = w_culin / 2 + 30;
        $("#area_img_culin_4").css("height", h_culin);

        var width_img_culin_4 = $("#img_culin_4").width();
        var height_img_culin_4 = $("#img_culin_4").height();

        if (height_img_culin_4 > h_culin) {
            var mrg = height_img_culin_4 - h_culin;
            mrg = mrg / 2;
        }
        else {
            var mrg = h_culin - height_img_culin_4;
            mrg = mrg / 2;
        }

        var cl4 = $(".cl4").height();
        if ((cl4 > hdiv_cul) && (cl4 != null)) {
            hdiv_cul = cl4
        }

        var up_culin4 = height_img_culin_4;
        up_culin4 = "-" + up_culin4 + "px";

        $(".cl4").mouseenter(function () {
            $("#img_culin_4").fadeTo("medium", 0.33);
            $("#zoom4.culin").animate({"margin-top": up_culin4});
        }).mouseleave(function () {
            $("#img_culin_4").fadeTo("medium", 1);
            $("#zoom4.culin").animate({"margin-top": "100px"});
        });
    });
</script>