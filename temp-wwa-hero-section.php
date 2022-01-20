    <!--wwa-section1 -->

<?php
$top_heading=get_sub_field('top-heading');
$sub_heading=get_sub_field('sub-heading');
$content=get_sub_field('content');
$image=get_sub_field('image'); ?>
    <div class="wwa-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="got"><?php  echo $top_heading ?></h1>
                    <h2><?php echo $sub_heading ?></h2>
                    <p><?php echo $content ?></p>
                   
                </div>
                <div class="col-md-6" id="image-top">
                    <img src="<?php echo $image['url']; ?> " alt="" class="img1">
                    
                </div>
            </div>
        </div>
    </div>