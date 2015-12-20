<link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/slick.css"/>
<link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('ui/public') ?>/css/slick-theme.css"/>
<script type="text/javascript" src="<?= base_url('ui/public') ?>/js/slick.js"></script>
<div id="section-post" class="section section-full" style="margin-top: 0px">
    <div class="container container-post">
        <div class="col-md-9 block-post section-more-full">
            <div class="block-header">
                <h3><span>detail trip</span></h3>
            </div>
            <div class="col-md-12">
                <div class="fader">
                    <?php $dua_posts = array_merge($dest_posts, $cul_posts);
                    foreach(($posts = array_merge($dua_posts, $event_posts)) as $post){?>
                        <div>
                            <img src="<?=create_url($post->cover);?>" alt="<?=$post->permalink?>">
                        </div>
                    <?php }?>
                </div>
            </div>
            <form action="<?=base_url('trips/checkout/'.$trip_id)?>" method="post" id="checkout-form">
            <div class="block-head col-md-12">
                <h2 class="entry-title">
                    <?=$trip->title ?>
                </h2>
            </div>
            <div class="section-more-full block-body">
                <div class="entry-content">
                    <article class="post">
                        <div class="entry-content">
                            <div class="col-md-8">
                                <h3>
                                    Wisata dan Kuliner
                                </h3>
                                <?php foreach($dua_posts as $post){?>
                                    <h4><?=$post->title?></h4>
                                    <p>
                                        <?=$post->preview?> <a href="<?=base_url('trips/delete_post/'.$post->post_id)?>"><strong>x</strong> Hapus post dari trip</a>
                                    </p>
                                <?php }?>
                            </div>
                            <div class="col-md-4">
                                <h3>
                                    Events
                                </h3>
                                <?php foreach($event_posts as $post){?>
                                    <h4><?=$post->title?></h4>
                                    <p>
                                        <?=$post->note?>  <a href="<?=base_url('trips/delete_post/'.$post->post_id)?>"><strong>x</strong> Hapus post dari trip</a>
                                    </p>
                                <?php }?>
                                <p>&nbsp;</p>
                                <h3>
                                    Hotel & Reservations
                                </h3>
                                <h4>Coming Soon</h4>
                            </div>
                            <div class="col-md-7">
                                <div class="destinasi render_map" id="lokasi">
                                    <div id="map_canvas" style="width:100%; height:100%;"></div>
                                </div>
                            </div>
                            <div class="col-md-5 info-akomodasi">
                                <div class="akomodasi">
                                    <?php foreach($posts as $post){?>
                                        <div>
                                            <h3>
                                                <?=$post->title?>
                                            </h3>
                                            <h4>Detail</h4>
                                            <p>
                                                <?=$post->detail?>
                                            </p>
                                            <h4>Akomodasi</h4>
                                            <p>
                                                <?=$post->akomodasi?>
                                            </p>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Harga</h3>
                                <table class="table">
                                    <?php foreach($posts as $post){?>
                                        <?=$post->akomodasi?>
                                    <?php }?>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <h3>Ringkasan Perjalanan</h3>
                                <div class="form-group">
                                    <textarea class="form-control" name="content" placeholder="Rencana perjalanan" rows="6"><?=$trip->content?></textarea>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Jumlah Orang</label>
                                <input class="form-control input-lg" name="people_count" value="<?=$trip->people_count?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Jumlah Hari</label>
                                <input class="form-control input-lg" name="day_count" value="<?=$trip->day_count?>">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-default" type="button" id="checkout"><i class="fa fa-check"></i> Checkout</button>
                                <br><div id="result"></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            </form>
        </div>

        <div class="col-md-3 block-side-post">
            <div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text">

                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article-container sharable">
                <div class="block-header">
                    <h4><span>Featured Posts</span></h4>
                </div>
                <?php $le = count($featured); for ($i = 0; $i < ($le>2?3:$le); $i++) {
                    $post = $featured[$i]?>
                    <article class="post short" id="<?=$post->permalink?>">
                        <div class="row">
                            <div class="col-md-5">
                                <p><a data-turbo-target="post-slider"
                                      href="<?=base_url($post->uri)?>">
                                        <img class="img img-responsive"
                                             src="<?php echo $post->thumbnail==""?"http://southasia.oneworld.net/ImageCatalog/no-image-icon/image":$post->thumbnail;?>">
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-7" style="padding-left: 0">
                                <h5 class="article-title" style="margin-top: 0">
                                    <a data-turbo-target="post-slider"
                                       href="<?=base_url($post->uri)?>"><?=$post->title?></a>
                                </h5>
                                <div style="overflow: hidden; height: 36px">
                                    <small><?=$post->preview?></small>
                                </div>
                                <footer>
                                    <small class="pull-right">
                                        <a class="article-category" href="<?=base_url($post->post_type)?>"><?=$post->post_type?></a>
                                    </small>
                                    <small class="article-byline"><?=$post->name?></small>
                                </footer>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <div class="article-container sharable">
                <?php $le = count($featured); for ($i = 3; $i < ($le==5?5:$le); $i++) {
                    $post = $featured[$i]?>
                    <article class="post short" id="<?=$post->permalink?>">
                        <div class="row">
                            <div class="col-md-5">
                                <p><a data-turbo-target="post-slider"
                                      href="<?=base_url($post->uri)?>">
                                        <img class="img img-responsive"
                                             src="<?php echo $post->thumbnail==""?"http://southasia.oneworld.net/ImageCatalog/no-image-icon/image":$post->thumbnail;?>">
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-7" style="padding-left: 0">
                                <h5 class="article-title" style="margin-top: 0">
                                    <a data-turbo-target="post-slider"
                                       href="<?=base_url($post->uri)?>"><?=$post->title?></a>
                                </h5>
                                <div style="overflow: hidden; height: 36px">
                                    <small><?=$post->preview?></small>
                                </div>
                                <footer>
                                    <small class="pull-right">
                                        <a class="article-category" href="<?=base_url($post->post_type)?>"><?=$post->post_type?></a>
                                    </small>
                                    <small class="article-byline"><?=$post->name?></small>
                                </footer>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?=$loginmodal?>

<script type='text/javascript'>
    var centreGot = false;
    $('.fader').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        adaptiveHeight: true
    });
    var akom = $('.akomodasi').slick({
        fade: true,
        cssEase: 'linear'
    });

    $('#checkout').click(function(e){
        e.preventDefault();
        $.ajax({
            url: "<?php echo base_url('trips/checkout/'.$trip_id)?>",
            method: "post",
            data: $('#checkout-form').serialize(),
            success: function (result) {
                if(result == 'Reply sukses'){
                    $('#result').html("<span class='text-green'>Data trips anda berhasil disimpan</span>");
                } else if(result == "harap login terlebih dahulu"){
                    $('#showlogin').click();
                } else $('#result').html("<code>"+result+"</code>");
            }
        });
        return false;;
    });
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript">
    var map; // Global declaration of the map
    var lat_longs_map = new Array();
    var markers_map = new Array();
    var iw_map = new google.maps.InfoWindow();
    function initialize_map() {
        var myLatlng = new google.maps.LatLng(<?php echo $posts[0]->coordinate ?>);
        var myOptions = {
            zoom: 15-<?=count($posts)?>,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        <?php $i = 0; foreach($posts as $post){?>
        var marker_<?=$i;?> = new google.maps.Marker({
            position: new google.maps.LatLng(<?=$post->coordinate?>),
            map: map,
            title: '<?=$post->permalink?>'
        });
        marker_<?=$i;?>.addListener('click', function() {
            map.setCenter(marker_<?=$i;?>.getPosition());
            map.setZoom(15);
            akom.slick('slickGoTo', <?=$i++;?>)
        });
        <?php }?>
    }
    function createMarker_map(markerOptions) {
        var marker = new google.maps.Marker(markerOptions);
        markers_map.push(marker);
        lat_longs_map.push(marker.getPosition());
        return marker;
    }
    google.maps.event.addDomListener(window, "load", initialize_map);
</script>
