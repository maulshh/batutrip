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
                            <?php foreach($event_post as $post){?>
                            <a href="<?=base_url($post->uri)?>">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class='wrapper area_wrap' id="area_img_event_1">
                                        <img
                                            src="<?=create_url($post->thumbnail)?>"
                                            class="top_event" id="img_event_1" alt="<?=$post->permalink?>">

                                        <div class='description evn1'>
                                            <span id="" class="col-xs-4">
                                                <?php $tgl = explode("-", $post->note);?>
                                                <div class="hari top_event"><?=$tgl[0]?></div>
                                                <div class="tgl top_event"><?=$tgl[1]?></div>
                                                <div class="bln top_event"><?=$tgl[2]?></div>
                                            </span>
                                            <span id="" class="col-xs-8">
                                                <div class="judul top_event"><?=$post->title?></div>
                                                <div class="lokasi top_event"><span
                                                        class="fa fa-map-marker marker_icon"></span>
                                                    <?=$post->location?>
                                                </div>
                                            </span>
                                            <div style="clear:both"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php }?>
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
                        <?php foreach($dest_post as $post){?>
                        <a href="<?=base_url($post->uri)?>">
                            <div class="col-sm-6 col-md-6 col-lg-12 ds1" id="area_destination">
                                <div class="normal col-lg-6 col-md-12 image_dest" id="area_img_dest_1">
                                    <img
                                        src="<?=create_url($post->thumbnail)?>"
                                        class="top_destination" id="img_dest_1" alt="<?=$post->permalink//strtolower(str_replace(' ', '-', $post->title))?>">
                                </div>
                                <div class="col-lg-6 col-md-12 text_dest" id="text_dest_1">
                                    <h2 class="title_destination"><?=$post->title?></h2>

                                    <div class="lokasi top_destination home">
                                        <h3 class="home">
                                            <span class="fa fa-map-marker marker_icon"></span>
                                            <?=$post->location?>
                                        </h3>
                                    </div>
                                    <p class="deskripsi destination">

                                    <?=$post->preview?>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <?php }?>
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
                        <?php foreach($cul_post as $post){?>
                        <a href="<?=base_url($post->uri)?>">
                            <div class="col-md-6 col-lg-12 col-sm-6 cl1" id="area_culinary">
                                <div class="normal col-lg-6 image_culin" id="area_img_culin_1">
                                    <img
                                        src="<?=create_uri($post->thumbnail)?>"
                                        class="top_culinary" id="img_culin_1" alt="<?=$post->permalink//strtolower(str_replace(' ', '-', $post->title))?>">
                                </div>
                                <div class="col-md-12 col-lg-6 text_culin" id="text_culin_1">
                                    <h2 class="title_culinary"><?=$post->title?></h2>

                                    <div class="col-xs-12 col-md-12 col-lg-12 harga home">
                                        <h3>
                                            <?=$post->note?>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 col-lg-12 lokasi top_destination culinary">
                                        <h3>
                                            <span class="fa fa-map-marker marker_icon home"></span>
                                            <?=$post->location?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }?>
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
                    window.location.replace("<?=base_url('posts')?>/" + query);
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
            window.location.replace("<?=base_url('posts')?>/" + query);
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
                window.location.replace("<?=base_url('posts')?>/" + query);
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