<?php 

$heading1=get_sub_field('top-heading');
$image=get_sub_field('image');
$top_tagline=get_sub_field('top-tagline');
$bottom_tagline=get_sub_field('bottom-tagline');
$image=get_sub_field('image'); 
?>

<div class="wwa-section1">
        <div class="container">
            <div class="row">
            <div class="col-md-6">

            <h1><?php echo $heading1 ?></h1>

            <?php 
            if( have_rows('repeat-content') ):  
                
                while(have_rows('repeat-content')): the_row();
                $text = get_sub_field('text');
                ?>
                    <p>
                        <?php echo $text ?>
                    </p>

                    <?php endwhile;
                    else:
                    endif; 
                        ?>

<?php 
            if( have_rows('bullet') ):  
                
                while(have_rows('bullet')): the_row();
                $text = get_sub_field('text');
                ?>

                    <p>
                        <li><?php echo $text ?></li>
                    </p>
                    <?php endwhile;
                    else:
                    endif; 
                        ?>
        </div>

        <div class="col-md-6" id="image-top">
                   
                    <h2 id="img-para"><?php echo  $top_tagline ?></h2>
                    <img src="<?php echo $image['url'] ?>" alt="" class="img2">
                    <h2 class="sky-head"><?php echo  $bottom_tagline ?></h2>
                </div>

            </div>
        </div>
    </div>
