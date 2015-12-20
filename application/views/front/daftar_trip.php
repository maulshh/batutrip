<div id="section-post" class="section section-full" style="margin-top: 0px">
    <div class="container container-post">
        <div class="col-md-9 block-post" style="padding:25px 60px;">
            <div class="block-header">
            </div>
            <div class="block-head">
                <h2 class="entry-title">
                    Riwayat Trip
                </h2>
            </div>
            <div class="section-more-full block-body">
                <div class="entry-content">
                    <?php foreach ($all as $post) { ?>
                        <div class="col-xs-12">
                            <h4>
                                <a href="<?= base_url($post->uri) ?>"  style="padding-left:20px;"><?php echo $post->title ?></a>
                                <small class="pull-right"><b><?php $tgl = explode("-", substr($post->created, 0, 10));
                                        echo date('d M Y', mktime(0,0,0,$tgl[2],$tgl[0],$tgl[1]))?></b></small>
                            </h4>
                        </div>
                        <article class="col-md-12">
                            <p><?php echo $post->content ?><br><a href="<?= base_url($post->uri) ?>">read more</a></p>
                        </article>
                        <hr>
                    <?php } ?>
                </div>
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
                <?php $le = count($featured); for ($i = 0; $i < ($le>2?3:$le); $i++) {
                    $trip = $featured[$i]?>
                    <article class="post short" id="<?=$trip->permalink?>">
                        <div class="row">
                            <div class="col-md-5">
                                <p><a data-turbo-target="post-slider"
                                      href="<?=base_url($trip->uri)?>">
                                        <img class="img img-responsive"
                                             src="<?php echo $trip->thumbnail==""?"http://southasia.oneworld.net/ImageCatalog/no-image-icon/image":$trip->thumbnail;?>">
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-7" style="padding-left: 0">
                                <h5 class="article-title" style="margin-top: 0">
                                    <a data-turbo-target="post-slider"
                                       href="<?=base_url($trip->uri)?>"><?=$trip->title?></a>
                                </h5>
                                <div style="overflow: hidden; height: 36px">
                                    <small><?=$trip->preview?></small>
                                </div>
                                <footer>
                                    <small class="pull-right">
                                        <a class="article-category" href="<?=base_url($trip->post_type)?>"><?=$trip->post_type?></a>
                                    </small>
                                    <small class="article-byline"><?=$trip->name?></small>
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
