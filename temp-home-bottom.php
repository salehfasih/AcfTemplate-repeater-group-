<!-- section5-back -->
<div  class="before">
<div class="section5-back">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <h1><?php echo get_sub_field('content'); ?></h1>
                <p  class="seen"><?php echo get_sub_field('sub-title'); ?></p>
            </div>
        </div>
<?php 
$image1=get_sub_field('icon1');
$image2=get_sub_field('icon2');
?>
        <div class="row image-gallary">
            <div class="img1"><img src="<?php  echo $image1['url'] ?>" alt=""></div>
            <div><img src="<?php  echo $image2['url'] ?>" alt=""></div>
        
        </div>
    </div>
</div>
</div>
