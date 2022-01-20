    <!-- icon_box-section -->

    <div class="icon-box">
        <div class="container">
            <div class="row">

            <?php if( have_rows('icon-box') ):  
                
                while(have_rows('icon-box')): the_row();
                $image = get_sub_field('image');
                $image_url=$image['url'];
                $title=get_sub_field('title');
                $sub_title=get_sub_field('sub-title');
                
                ?>
                <div class="col-sm-4" id="icon">
                   <img src="<?php echo $image_url; ?>" alt="" >
                   <h1 class="icon_title"><?php echo $title ?></h1>
                   <p class="icon_sub_head"><?php echo $sub_title  ?></h1>

                </div>
                <?php endwhile;

            else:
            endif;  ?>
               
            </div>
        </div>
    </div>

      <!-- icon_box-section  end-->