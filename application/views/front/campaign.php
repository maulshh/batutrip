<div id="section-post" class="section section-full" style="margin-top: 0px">
    <div class="container container-post">
        <div class="col-md-9 block-post section-more-full">
            <div class="block-header">
                <h3>
                    <span class="pull-right">
                        <?php if(!isset($post->number)){?>
                        <a class="btn btn-lg" href="<?=base_url('trips/add_post/'.$post->post_id)?>"><i class="fa fa-plus"></i> Add to My Trip</a>
                        <?php } else {?>
                            Added
                        <?php }?>
                        <a class="btn btn-lg" href="<?=base_url('posts/favs/'.$post->post_id)?>"><i class="fa fa-heart"></i> <?=$post->date?'Unlike':'Like'?></a>
                    </span>
                </h3>
                <h3><span><?= $post->post_type ?></span></h3>
            </div>
            <div class="col-md-12">
                <img class="cover img img-responsive" width=""
                     src="<?=create_url($post->cover);?>">
            </div>
            <div class="block-head col-md-12">
                <h2><?php echo $post->title ?></h2>
            </div>
            <div class="block-body">
                <article class="post">
                    <div class="entry-content">
                        <div class="col-md-12">
                            <p><?php echo $post->preview ?></p>
                            <h4>
                                <?php echo $post->subtitle ?>
                            </h4>
                        </div>
                        <div class="col-md-9">
                            <p><?php echo $post->content ?></p>
                        </div>
                        <div class="col-md-7">
                            <div class="destinasi render_map" id="lokasi">
                                <div id="map_canvas" style="width:100%; height:100%;"></div>
                            </div>
                        </div>
                        <div class="col-md-5 info-akomodasi">
                            <h4>Detail</h4>
                            <p>
                                <?php echo $post->detail ?>
                            </p>
                            <h4>Akomodasi</h4>
                            <p>
                                <?php echo $post->akomodasi ?>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h4>Harga</h4>
                            <table class="table">
                                <?php echo $post->harga ?>
                            </table>
                            <h4>Review</h4>
                            <p>
                                <?php echo $post->review ?>
                            </p>
                            <h4>Trivia</h4>
                            <p>
                                <?php echo $post->trivia ?>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
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
                <?php $le = count($featured);
                for ($i = 0; $i < ($le > 2 ? 3 : $le); $i++) {
                    $post = $featured[$i] ?>
                    <article class="post short" id="<?= $post->permalink ?>">
                        <div class="row">
                            <div class="col-md-5">
                                <p><a data-turbo-target="post-slider"
                                      href="<?= base_url($post->uri) ?>">
                                        <img class="img img-responsive"
                                             src="<?php echo $post->thumbnail == "" ? "http://southasia.oneworld.net/ImageCatalog/no-image-icon/image" : $post->thumbnail; ?>">
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-7" style="padding-left: 0">
                                <h5 class="article-title" style="margin-top: 0">
                                    <a data-turbo-target="post-slider"
                                       href="<?= base_url($post->uri) ?>"><?= $post->title ?></a>
                                </h5>

                                <div style="overflow: hidden; height: 36px">
                                    <small><?= $post->preview ?></small>
                                </div>
                                <footer>
                                    <small class="pull-right">
                                        <a class="article-category"
                                           href="<?= base_url($post->post_type) ?>"><?= $post->post_type ?></a>
                                    </small>
                                    <small class="article-byline"><?= $post->name ?></small>
                                </footer>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <div class="article-container sharable">
                <?php $le = count($featured);
                for ($i = 3; $i < ($le == 5 ? 5 : $le); $i++) {
                    $post = $featured[$i] ?>
                    <article class="post short" id="<?= $post->permalink ?>">
                        <div class="row">
                            <div class="col-md-5">
                                <p><a data-turbo-target="post-slider"
                                      href="<?= base_url($post->uri) ?>">
                                        <img class="img img-responsive"
                                             src="<?php echo $post->thumbnail == "" ? "http://southasia.oneworld.net/ImageCatalog/no-image-icon/image" : $post->thumbnail; ?>">
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-7" style="padding-left: 0">
                                <h5 class="article-title" style="margin-top: 0">
                                    <a data-turbo-target="post-slider"
                                       href="<?= base_url($post->uri) ?>"><?= $post->title ?></a>
                                </h5>

                                <div style="overflow: hidden; height: 36px">
                                    <small><?= $post->preview ?></small>
                                </div>
                                <footer>
                                    <small class="pull-right">
                                        <a class="article-category"
                                           href="<?= base_url($post->post_type) ?>"><?= $post->post_type ?></a>
                                    </small>
                                    <small class="article-byline"><?= $post->name ?></small>
                                </footer>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>var centreGot = false;</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript">
    var map; // Global declaration of the map
    var lat_longs_map = new Array();
    var markers_map = new Array();
    var iw_map;
    iw_map = new google.maps.InfoWindow();
    function initialize_map() {
        var myLatlng = new google.maps.LatLng(<?php echo $post->coordinate ?>);
        var myOptions = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        google.maps.event.addListener(map, "bounds_changed", function (event) {
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
</script>