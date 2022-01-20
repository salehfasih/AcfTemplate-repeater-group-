   <!--ws-section1 -->

   <?php
    
   $heading1=get_sub_field('main-heading');
   $sub_heading=get_sub_field('sub-heading');
   $image=get_sub_field('image');
   
   
   ?>

   <div class="ws-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="got"><?php echo  $heading1 ?></h1>
                    <h2><?php echo  $sub_heading ?></h2>
                    <?php if(have_rows('paragraph')):
                    while(have_rows('paragraph')): the_row();
                    $text = get_sub_field('text');
                    ?>
                    
                    <p><?php echo $text ?></p>
                    <?php endwhile;
                    else:
                    endif; ?>
                  
                </div>
                <div class="col-md-6" id="image-bottom">
                    <img src="<?php echo  $image ?>" alt="">
                </div>
            </div>
        </div>
    </div>


