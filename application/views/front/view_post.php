<ul class="breadcrumb">
    <li><a href="http://www.pontianakite.com">Halaman Utama</a></li>
    <li class="active">Destinasi</li>
</ul>
<div class="row">
    <div class="col-md-8 col-md-offset-1" style="background-color: white; border-radius: 12px;">
        <div id="area_responsive">
            <div class="col-md-8 col-lg-8">
                <div id="txt_header_konten" class="destinasi">
                    Perpustakaan Jawa Timur
                </div>
                <div id="alamat" class="destinasi">
                    <div id="marker_lokasi" class="destinasi">
                        <i class="fa fa-map-marker fa-2x"></i>
                    </div>
                    <div id="lokasi" class="destinasi">
                        Jl. Letjen Sutoyo No. 6 Batu
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div id="profil_utama" class="pull-right">
                    <div id="avatar_profil">
                        <img src="http://www.pontianakite.com/storage/avatar/2.png" alt="perpustakaan-jawa-timur" id="avatar_normal">
                    </div>
                    <div id="nama_profil">
                        PERPUS KALBAR
                    </div>
                </div>
            </div>
        </div>
        <div class="row normal">
            <div class="col-lg-12 content destinasi">
                <div class="normal col-lg-3 col-md-4">
                    <a class="gallery-item" href="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg" title="Perpustakaan Jawa Timur" data-gallery="">
                        <div class="col-lg-12 main destinasi">
                            <img src="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg" alt="perpustakaan-jawa-timur" class="main destinasi" id="primary_image">
                        </div>
                    </a>
                    <div class="col-lg-12 destinasi" id="main_rating">
                    </div>
                    <div class="shape starbox_static ghosting autoupdate" data-start-value="0"></div>
                    <p id="jumlah_rating">0</p>
                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-5 review">
                        <div class="col-xs-12 ulasan" id="ulasan_large">2 Ulasan</div>
                        <div class="col-xs-12 ulasan" id="ulasan_small">2</div>
                    </div>
                    <div class="col-lg-12 destinasi render_map" id="lokasi">
                        <html><head><script type='text/javascript'>var centreGot = false;</script>
                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                            <script type="text/javascript">
                                //<![CDATA[

                                var map; // Global declaration of the map
                                var lat_longs_map = new Array();
                                var markers_map = new Array();
                                var iw_map;

                                iw_map = new google.maps.InfoWindow();

                                function initialize_map() {

                                    var myLatlng = new google.maps.LatLng(-0.047855, 109.341203);
                                    var myOptions = {
                                        zoom: 15,
                                        center: myLatlng,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP}
                                    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                                    google.maps.event.addListener(map, "bounds_changed", function(event) {
                                        if (!centreGot) {
                                            var mapCentre = map.getCenter();
                                            marker_0.setOptions({
                                                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                                            });
                                        }
                                        centreGot = true;
                                    });

                                    var markerOptions = {
                                        map: map
                                    };
                                    marker_0 = createMarker_map(markerOptions);


                                }


                                function createMarker_map(markerOptions) {
                                    var marker = new google.maps.Marker(markerOptions);
                                    markers_map.push(marker);
                                    lat_longs_map.push(marker.getPosition());
                                    return marker;
                                }

                                google.maps.event.addDomListener(window, "load", initialize_map);

                                //]]>
                            </script></head><body><div id="map_canvas" style="width:100%; height:100%;"></div></body></html>
                    </div>
                </div>
                <div class="normal col-lg-9 col-md-8">
                    <div class="normal col-lg-12 col-md-12 col-sm-12 col-xs-12 text_normal destinasi" id="text_deskripsi" style="min-height: 300px">
                        <p>Jam Layanan dari 08.00 s.d 22.00 Wib</p>

                    </div>
                    <div class="nol-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="fb-share-button" data-href="http://pontianakite.com/url/perpustakaan-jawa-timur" data-layout="button_count" id="share_facebook">
                        </div>
                        <div id="share_twitter">
                            <a class="twitter-share-button" href="http://pontianakite.com/url/perpustakaan-jawa-timur"> Tweet </a>
                        </div>

                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=1710121405881140";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, "script", "facebook-jssdk"));

                            window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
                        </script>

                    </div>
                    <div class="normal col-lg-12">
                        <div class="normal col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-left info_destinasi" id="hotline">
                            <p class="text_judul keterangan">
                                Hotline : <span class="destinasi light_text"></span>
                            </p>
                        </div>
                        <div class="normal col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right info_destinasi" id="htm">
                            <p class="text_judul keterangan">
                                HTM : <span class="destinasi light_text">Rp. 0</span>
                            </p>
                        </div>
                    </div>
                    <div class="normal col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <a class="gallery-item" href="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/032d0eb379f35fe13294cd6a01ef295e.jpg" title="Perpustakaan Jawa Timur" data-gallery="">
                            <div class="col-sm-3 col-xs-6  col-lg-3 col-md-3 secondary destinasi" id="img_secondary_0">
                                <img src="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/032d0eb379f35fe13294cd6a01ef295e.jpg" alt="perpustakaan-jawa-timur" class="secondary destinasi">
                            </div>
                        </a>
                        <a class="gallery-item" href="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/2b0105e138901f36b3ae1f846170e17f.jpg" title="Perpustakaan Jawa Timur" data-gallery="">
                            <div class="col-sm-3 col-xs-6  col-lg-3 col-md-3 secondary destinasi" id="img_secondary_1">
                                <img src="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/2b0105e138901f36b3ae1f846170e17f.jpg" alt="perpustakaan-jawa-timur" class="secondary destinasi">
                            </div>
                        </a>
                        <a class="gallery-item" href="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/54ef4fcf1e6b4fcb922cc771e06af389.jpg" title="Perpustakaan Jawa Timur" data-gallery="">
                            <div class="col-sm-3 col-xs-6  col-lg-3 col-md-3 secondary destinasi" id="img_secondary_2">
                                <img src="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/54ef4fcf1e6b4fcb922cc771e06af389.jpg" alt="perpustakaan-jawa-timur" class="secondary destinasi">
                            </div>
                        </a>
                        <a class="gallery-item" href="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/7d4280eb58b35a7b0824e8fe7f7f70ac.jpg" title="Perpustakaan Jawa Timur" data-gallery="">
                            <div class="col-sm-3 col-xs-6  col-lg-3 col-md-3 secondary destinasi" id="img_secondary_3">
                                <img src="http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/7d4280eb58b35a7b0824e8fe7f7f70ac.jpg" alt="perpustakaan-jawa-timur" class="secondary destinasi">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row normal destinasi" id="komentar_orang">
            <form action="http://www.pontianakite.com/destinasi/komentar" method="post" id="form_komentar">
                <div class="normal col-lg-9 col-md-9 text_normal">
                    <div class="col-lg-12">
                        <div class="col-lg-3 normal pull-right" id="rating_penilaian_anda">
                            <div class="col-xs-12 col-md-12 col-lg-12 rating">
                                <div class="shape starbox ghosting autoupdate" data-start-value="0"></div><p id="jumlah_rating" class="komentar kirim">0</p>
                            </div>
                        </div>
                        <div class="normal col-lg-2 col-xs-12 col-md-3 pull-right" id="penilaian_anda">
                            <p class="text_judul">Penilaian Anda:</p>
                        </div>
                        <div class="normal col-lg-6 col-xs-12 col-md-4" id="ulasan_anda">
                            <p class="text_judul">Ulasan Anda:</p>
                        </div>
                        <div class="normal col-lg-12" id="text_tulisan">
                            <input type="hidden" id="value_rating" name="rating" value="0">
                            <input type="hidden" name="id_dest" value="13">
                            <textarea class="komentar" onkeyup="countChar(this)" name="komentar" style="border: solid gainsboro 1px"></textarea>
                            <div class="col-lg-2 normal">
                                <p class="pull-left" id="jumlah_komentar">
                                    1 / 50
                                </p>
                            </div>
                            <div class="col-lg-10 normal">
                                <button type="button" id="btn_komentar" class="btn btn-primary pull-right mb-control" data-box="#message-box-info">Kirim</button>
                                <p class="text-right">
                                    <small id="instruksi_large">
                                        anda harus menilai sebelum mengirim dan<br>
                                        ulasan minimal sepanjang 50 karakter
                                    </small>

                                    <small id="instruksi_mobile">
                                        minimal 50 karakter
                                    </small>
                                </p>
                            </div>
                        </div>
                        <div class="row" id="area_komentar">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div id="profil_komentar" class="pull-left">
                                    <div id="avatar_komentar">
                                        <img src="http://www.pontianakite.com/storage/avatar/1.png" id="avatar_small">
                                    </div>
                                    <div id="nama_komentar">
                                        M. Rizki Samsul
                                    </div>
                                </div>
                                <div class="pull-right komentar" id="value_rating">5</span></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12 isi_komentar">
                                destinasi terbaik untuk pelajar dan mahasiswa atau kaum akademisi,,  tempat mencari referensi lengkap untuk skripsi dengan pelayanan optimal..
                                <div id="waktu_komentar" class="normal col-md-12">06 Mei 2015 20:33:49,-</div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="pull-left komentar mobile" id="value_rating">5</span></div>
                                <div class="normal col-md-12">
                                    <a href="http://www.pontianakite.com/konfirmasi/report/tambah/3/1/13">
                                        <div type="button" class="report btn btn-default pull-right mini_button"><i class="fa fa-warning"></i></div>
                                    </a>
                                    <div type="button" id="dlk0"class="like btn btn-default pull-right mini_button " url="http://www.pontianakite.com/destinasi/komentar/dislike/1/13"><i class="fa fa-thumbs-o-down"></i>
                                    <span class="dlk0">
                                        0
                                    </span>
                                    </div>
                                    <div type="button" id="lk0" class="dislike btn btn-default pull-right mini_button " url="http://www.pontianakite.com/destinasi/komentar/like/1/13"><i class="fa fa-thumbs-o-up"></i>
                                    <span class="lk0">
                                        0
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="area_komentar">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div id="profil_komentar" class="pull-left">
                                    <div id="avatar_komentar">
                                        <img src="http://www.pontianakite.com/storage/avatar/37aa5ab79e523b79eee4dd417eb65e65.jpg" id="avatar_small">
                                    </div>
                                    <div id="nama_komentar">
                                        Hermawan Sulaiman
                                    </div>
                                </div>
                                <div class="pull-right komentar" id="value_rating">1</span></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12 isi_komentar">
                                untuk mahasiswa, organisasi ataupun komunitas dapat menggunakan ruang meeting secara gratis lho!
                                <div id="waktu_komentar" class="normal col-md-12">10 Mei 2015 14:03:55,-</div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="pull-left komentar mobile" id="value_rating">1</span></div>
                                <div class="normal col-md-12">
                                    <a href="http://www.pontianakite.com/konfirmasi/report/tambah/3/3/13">
                                        <div type="button" class="report btn btn-default pull-right mini_button"><i class="fa fa-warning"></i></div>
                                    </a>
                                    <div type="button" id="dlk2"class="like btn btn-default pull-right mini_button " url="http://www.pontianakite.com/destinasi/komentar/dislike/3/13"><i class="fa fa-thumbs-o-down"></i>
                                    <span class="dlk2">
                                        0
                                    </span>
                                    </div>
                                    <div type="button" id="lk2" class="dislike btn btn-default pull-right mini_button " url="http://www.pontianakite.com/destinasi/komentar/like/3/13"><i class="fa fa-thumbs-o-up"></i>
                                    <span class="lk2">
                                        1
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="normal col-lg-3 col-md-3">
                <div class="col-lg-12 col-md-12 col-sm-6 text_normal">
                    <div class="panel panel-default" id="last_post">
                        <div class="panel-body">
                            <p class="text_judul">Destinasi Terbaru</p>
                            <div class="links small">
                                <a href="http://www.pontianakite.com/url/perpustakaan-jawa-timur">Perpustakaan Jawa Timur</a>
                                <a href="http://www.pontianakite.com/url/masjid-al-jihad-batu">Masjid Al Jihad Batu</a>
                                <a href="http://www.pontianakite.com/url/pusat-oleh-oleh-psp">Pusat Oleh-Oleh PSP</a>
                                <a href="http://www.pontianakite.com/url/rumah-adat-melayu-batu">Rumah Adat Melayu Batu</a>
                                <a href="http://www.pontianakite.com/url/replika-rumah-betang-batu">Replika Rumah Betang Batu</a>
                                <a href="http://www.pontianakite.com/url/keraton-kadriyah">Keraton Kadriyah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 text_normal">
                    <div class="panel panel-default" id="last_post">
                        <div class="panel-body">
                            <p class="text_judul">Random Post</p>
                            <div class="links small">
                                <a href="http://www.pontianakite.com/url/biofest-2015-biology-festival">BioFest 2015 (Biology Festival) </a>
                                <a href="http://www.pontianakite.com/url/pentas-seni-generasi-berencana">Pentas Seni Generasi Berencana</a>
                                <a href="http://www.pontianakite.com/url/floating-barbeque">Floating Barbeque</a>
                                <a href="http://www.pontianakite.com/url/mie-tiaw-apollo">Mie Tiaw Apollo</a>
                                <a href="http://www.pontianakite.com/url/perpustakaan-jawa-timur">Perpustakaan Jawa Timur</a>
                                <a href="http://www.pontianakite.com/url/rumah-adat-melayu-batu">Rumah Adat Melayu Batu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <div class="message-box message-box-info animated fadeIn" id="message-box-info">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title">Informasi</div>
                    <div class="mb-content">
                        <p id="pemberitahuan_komentar"></p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        var width_primary_image = $("#primary_image").width();
        var height_primary_image = $("#primary_image").height();
        var resolution = $(window).width();
        if((resolution <= 1024) && (resolution > 768))
        {
            if(height_primary_image > 200)
            {
                var mrg = height_primary_image - 200;
                mrg = mrg / 2;
                $("#primary_image").css("margin-top", -mrg);
            }
            else
            {
                var mrg = 200 - height_primary_image;
                mrg = mrg / 2;
                $("#primary_image").css("margin-top", mrg);
            }
        }

        var width_img_secondary_0 = $("#img_secondary_0").width();
        var height_img_secondary_0 = $("#img_secondary_0").height();
        img_secondary_0 = $("#img_secondary_0").height();
        var resolution = $(window).width();
        if(resolution <= 320)
        {
            $("#img_secondary_0").css('height', "83px");
        }
        if((resolution > 320) && (resolution <= 360))
        {
            $("#img_secondary_0").css('height', "94px");
        }
        if((resolution > 360) && (resolution <= 375))
        {
            $("#img_secondary_0").css('height', "98px");
        }
        if((resolution > 375) && (resolution <= 414))
        {
            $("#img_secondary_0").css('height', "105px");
        }
        if((resolution > 414) && (resolution <= 480))
        {
            $("#img_secondary_0").css('height', "126px");
        }
        if((resolution > 480) && (resolution <= 568))
        {
            $("#img_secondary_0").css('height', "151px");
        }
        if((resolution > 568) && (resolution <= 640))
        {
            $("#img_secondary_0").css('height', "170px");
        }
        if((resolution > 640) && (resolution <= 667))
        {
            $("#img_secondary_0").css('height', "178px");
        }
        var width_img_secondary_1 = $("#img_secondary_1").width();
        var height_img_secondary_1 = $("#img_secondary_1").height();
        img_secondary_1 = $("#img_secondary_1").height();
        var resolution = $(window).width();
        if(resolution <= 320)
        {
            $("#img_secondary_1").css('height', "83px");
        }
        if((resolution > 320) && (resolution <= 360))
        {
            $("#img_secondary_1").css('height', "94px");
        }
        if((resolution > 360) && (resolution <= 375))
        {
            $("#img_secondary_1").css('height', "98px");
        }
        if((resolution > 375) && (resolution <= 414))
        {
            $("#img_secondary_1").css('height', "105px");
        }
        if((resolution > 414) && (resolution <= 480))
        {
            $("#img_secondary_1").css('height', "126px");
        }
        if((resolution > 480) && (resolution <= 568))
        {
            $("#img_secondary_1").css('height', "151px");
        }
        if((resolution > 568) && (resolution <= 640))
        {
            $("#img_secondary_1").css('height', "170px");
        }
        if((resolution > 640) && (resolution <= 667))
        {
            $("#img_secondary_1").css('height', "178px");
        }
        var width_img_secondary_2 = $("#img_secondary_2").width();
        var height_img_secondary_2 = $("#img_secondary_2").height();
        img_secondary_2 = $("#img_secondary_2").height();
        var resolution = $(window).width();
        if(resolution <= 320)
        {
            $("#img_secondary_2").css('height', "83px");
        }
        if((resolution > 320) && (resolution <= 360))
        {
            $("#img_secondary_2").css('height', "94px");
        }
        if((resolution > 360) && (resolution <= 375))
        {
            $("#img_secondary_2").css('height', "98px");
        }
        if((resolution > 375) && (resolution <= 414))
        {
            $("#img_secondary_2").css('height', "105px");
        }
        if((resolution > 414) && (resolution <= 480))
        {
            $("#img_secondary_2").css('height', "126px");
        }
        if((resolution > 480) && (resolution <= 568))
        {
            $("#img_secondary_2").css('height', "151px");
        }
        if((resolution > 568) && (resolution <= 640))
        {
            $("#img_secondary_2").css('height', "170px");
        }
        if((resolution > 640) && (resolution <= 667))
        {
            $("#img_secondary_2").css('height', "178px");
        }
        var width_img_secondary_3 = $("#img_secondary_3").width();
        var height_img_secondary_3 = $("#img_secondary_3").height();
        img_secondary_3 = $("#img_secondary_3").height();
        var resolution = $(window).width();
        if(resolution <= 320)
        {
            $("#img_secondary_3").css('height', "83px");
        }
        if((resolution > 320) && (resolution <= 360))
        {
            $("#img_secondary_3").css('height', "94px");
        }
        if((resolution > 360) && (resolution <= 375))
        {
            $("#img_secondary_3").css('height', "98px");
        }
        if((resolution > 375) && (resolution <= 414))
        {
            $("#img_secondary_3").css('height', "105px");
        }
        if((resolution > 414) && (resolution <= 480))
        {
            $("#img_secondary_3").css('height', "126px");
        }
        if((resolution > 480) && (resolution <= 568))
        {
            $("#img_secondary_3").css('height', "151px");
        }
        if((resolution > 568) && (resolution <= 640))
        {
            $("#img_secondary_3").css('height', "170px");
        }
        if((resolution > 640) && (resolution <= 667))
        {
            $("#img_secondary_3").css('height', "178px");
        }
    });

    $(document).keypress(function(e) {
        var val = $("#bar_pencarian").val();
        if(val == ""){
        }
        else
        {
            if(e.which == 13) {
                var filter = $("#filter").val();
                var query = "cari/destinasi/query="+val;
                window.location.replace("http://www.pontianakite.com/"+query);
            }
        }
    });

    $("#btn_komentar").click(function() {
        $("#pemberitahuan_komentar").html("Anda harus login untuk memberikan rating dan ulasan");
    });

    $("#lk0").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){

            },
            error:function(){

            }
        });

        var check_lk0 = $("#lk0").hasClass("active");
        if(check_lk0 == false)
        {
            var vlk0 = parseInt($(".lk0").html());
            var like0 = vlk0 + 1;
            $(".lk0").html(like0);
            $("#lk0").addClass('active');
        }

        var check_dlk0 = $("#dlk0").hasClass("active");
        if(check_dlk0 == true)
        {
            var vdlk0 = parseInt($(".dlk0").html());
            var dislike0 = vdlk0 - 1;
            $(".dlk0").html(dislike0);
            $("#dlk0").removeClass('active');
        }

    });

    $("#dlk0").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){
            },
            error:function(){

            }
        });

        var check0 = $("#dlk0").hasClass("active");
        if(check0 == false)
        {
            var vlk0 = parseInt($(".lk0").html());
            var vdlk0 = parseInt($(".dlk0").html());
            var like0 = vlk0 - 1;
            var dislike0 = vdlk0 + 1;
            $(".lk0").html(like0);
            $(".dlk0").html(dislike0);
            $("#lk0").removeClass('active');
            $("#dlk0").addClass('active');
        }
    });
    $("#lk1").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){

            },
            error:function(){

            }
        });

        var check_lk1 = $("#lk1").hasClass("active");
        if(check_lk1 == false)
        {
            var vlk1 = parseInt($(".lk1").html());
            var like1 = vlk1 + 1;
            $(".lk1").html(like1);
            $("#lk1").addClass('active');
        }

        var check_dlk1 = $("#dlk1").hasClass("active");
        if(check_dlk1 == true)
        {
            var vdlk1 = parseInt($(".dlk1").html());
            var dislike1 = vdlk1 - 1;
            $(".dlk1").html(dislike1);
            $("#dlk1").removeClass('active');
        }

    });

    $("#dlk1").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){
            },
            error:function(){

            }
        });

        var check1 = $("#dlk1").hasClass("active");
        if(check1 == false)
        {
            var vlk1 = parseInt($(".lk1").html());
            var vdlk1 = parseInt($(".dlk1").html());
            var like1 = vlk1 - 1;
            var dislike1 = vdlk1 + 1;
            $(".lk1").html(like1);
            $(".dlk1").html(dislike1);
            $("#lk1").removeClass('active');
            $("#dlk1").addClass('active');
        }
    });
    $("#lk2").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){

            },
            error:function(){

            }
        });

        var check_lk2 = $("#lk2").hasClass("active");
        if(check_lk2 == false)
        {
            var vlk2 = parseInt($(".lk2").html());
            var like2 = vlk2 + 1;
            $(".lk2").html(like2);
            $("#lk2").addClass('active');
        }

        var check_dlk2 = $("#dlk2").hasClass("active");
        if(check_dlk2 == true)
        {
            var vdlk2 = parseInt($(".dlk2").html());
            var dislike2 = vdlk2 - 1;
            $(".dlk2").html(dislike2);
            $("#dlk2").removeClass('active');
        }

    });

    $("#dlk2").click(function() {
        var target = $(this).attr('url');
        $.ajax({
            url: target,
            type: "GET",
            data: "",
            success: function(ret){
            },
            error:function(){

            }
        });

        var check2 = $("#dlk2").hasClass("active");
        if(check2 == false)
        {
            var vlk2 = parseInt($(".lk2").html());
            var vdlk2 = parseInt($(".dlk2").html());
            var like2 = vlk2 - 1;
            var dislike2 = vdlk2 + 1;
            $(".lk2").html(like2);
            $(".dlk2").html(dislike2);
            $("#lk2").removeClass('active');
            $("#dlk2").addClass('active');
        }
    });
</script>
