<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kota Batu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Official Tourism Website Batu City">
    <meta name="keywords" content="batu, kota batu, jawa timur, kota wisata">
    <meta name="author" content="Batutrip">
    <meta name="google-site-verification" content="rPsHxh-0JRwPUnZJ0mbtYSOOE6jr_N7RvUINpVyzgHc"/>
    <link rel="icon" href="http://www.pontianakite.com/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/core.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/jstarbox.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/jstarbox_static.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/_home.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/_kuliner.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/_event.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/_destinasi.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/_pencarian.css"/>
    <script type="text/javascript" src="<?= base_url('ui/public') ?>/js/plugins/jquery/jquery.min.js"></script>
</head>
<body>
<div class="page-container page-navigation-top">
    <div class="page-content">
        <ul class="x-navigation x-navigation-horizontal front">
            <li class="xn-logo front">
                <a href="<?=base_url()?>">Batutrip</a>
                <a href="<?=base_url()?>" class="x-navigation-control"></a>
            </li>
            <?php
            $depth = 1;
            //print_r($menus);
            foreach ($menus as $menu){
            $pos = explode('-', $menu->position);
            if($depth > count($pos)){?>
                </ul>
            </li>
            <?php 	}
            $depth = count($pos);
            if($menu->uri != '#'){?>
            <li title="<?php echo $menu->title?>" <?php if($pages == $menu->content) echo 'class="active"'?>>
                <a href="<?php echo base_url($menu->uri);?>">
                    <span class="xn-text"><?php echo $menu->content?></span>
                </a>
            </li>
        <?php 	} else {?>
            <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu->content?> <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <?php 	}
                }?>
            </ul>

        <div class="content">
            <?=$content?>
        </div>

        <div class="row normal" id="footer">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12 area_footer">
                    <h2 class="primary footer">Tentang Batutrip</h2>
                    Batutrip.com adalah Website Resmi Kebudayaan dan Pariwisata Kota Batu yang bekerjasama
                    dengan Pemerintah Kota Batu, Forum Komunikasi Bujang Dare Batu dan UBDS Digital Agency.
                    Aplikasi ini dirancang khusus untuk Media Promosi serta Inventori Pariwisata dimana masyarakat dapat
                    berkontribusi informasi secara langsung dan memudahkan para wisatawan untuk mencari Informasi
                    Pariwisata di Kota Batu Khususnya dan Jawa Timur pada Umumnya.


                    <div id="social_media">
                        <a href="https://twitter.com/pontianakite" data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="twitter">
                            <span class="fa fa-twitter fa-2x social_media"></span>
                        </a>
                        <a href="https://www.facebook.com/pontianakite" data-toggle="tooltip" data-placement="top"
                           title="" data-original-title="facebook">
                            <span class="fa fa-facebook fa-2x social_media"></span>
                        </a>
                        <a href="https://instagram.com/pontianakite/" data-toggle="tooltip" data-placement="top"
                           title="" data-original-title="instagram">
                            <span class="fa fa-instagram fa-2x social_media"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="google+">
                            <span class="fa fa-google-plus fa-2x social_media"></span>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest">
                            <span class="fa fa-pinterest fa-2x social_media"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 area_footer" id="sitemap">
                    <h2 class="primary footer">Sitemap</h2>
                    <ul class="footer">
                        <div class="col-md-6 col-xs-6">
                            <?php foreach ($site_menus as $menu){?>
                            <li class="footer">
                                <a href="<?php echo base_url($menu->uri)?>" class="footer" data-toggle="tooltip"
                                   data-placement="right" title=""
                                   data-original-title="<?php echo $menu->title?>"><?php echo $menu->content?></a>
                            </li>
                            <?php }?>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 normal area_footer">
                    <h2 class="primary footer">Powered by</h2>
                    <a href="http://www.kalbarprov.go.id/" class="blank">
                            <span>
                                <img src="<?= base_url('ui/public') ?>/logo/pemprov.png" class="logo_footer"
                                     alt="provinsi_kalbar" data-toggle="tooltip" data-placement="bottom" title=""
                                     data-original-title="Pemerintah Provinsi">
                            </span>
                    </a>
                    <a href="http://www.pontianakkota.go.id/html/index.php" target="blank">
                            <span>
                                <img src="<?= base_url('ui/public') ?>/logo/pemkot.png" class="logo_footer"
                                     alt="pemkot_kota" data-toggle="tooltip" data-placement="bottom" title=""
                                     data-original-title="Pemerintah Kota">
                            </span>
                    </a>
                    <a href="http://ubds.co.id/" class="blank">
                            <span>
                                <img src="<?= base_url('ui/public') ?>/logo/ubds.png" class="logo_footer"
                                     alt="ubds_co_id" data-toggle="tooltip" data-placement="bottom" title=""
                                     data-original-title="UBDS Digital Agency">
                            </span>
                    </a>

                    <div id="company">
                        Hak Cipta dan Kelola oleh:<br>
                        <b>PT. Usaha Bangun Dua Sekawan</b><br>
                        Jalan Imam bonjol Paralel Tol Kapuas No. 24F<br>
                        Batu, Jawa Timur<br>
                        <br>
                        Email :<br>
                        <a href="mailto:support@batutrip.com" class="footer" alt="twitter" data-toggle="tooltip"
                           data-placement="right" title=""
                           data-original-title="Hubungi Kami">support@batutrip.com</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="col-lg-5">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <div class="col-lg-12 text-center" id="copyright">
                <div itemscope itemtype="http://ubds.co.id">
                    &copy; 2015 <b><a href="http://ubds.co.id" class="ubds footer">
                            <span itemprop="company">Batutrip Creative Media</span></a></b>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/plugins/icheck/icheck.min.js"></script>
<script type="text/javascript"
        src="<?= base_url('ui/public') ?>/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('ui') ?>/js_plugins"></script>
<script type="text/javascript" src="<?= base_url('ui') ?>/js_core"></script>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/actions.js"></script>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/jstarbox_static.js"></script>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/jstarbox.js"></script>
</html>
<script>
    $("#event").removeClass("active");
    $("#event").removeClass("active");
    $("#kuliner").removeClass("active");
    $("#kuliner").removeClass("active");
    $("#destinasi").removeClass("active");
    $("#destinasi").removeClass("active");
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-62010003-1', 'auto');
    ga('send', 'pageview');
</script>

