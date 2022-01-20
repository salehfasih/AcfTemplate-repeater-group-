  <!-- wwa-section2 start -->

  <div class="wwa-section2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wwa-para1">
                <?php
                
                if(have_rows('Content')):
                while(have_rows('Content')): the_row();
             $text=get_sub_field('text'); ?>
                    <p><?php echo  $text  ?></p>

                    <?php endwhile;
                    else:
                    endif;?>

             <?php if(have_rows('bullets')):
                while(have_rows('bullets')): the_row();
             $text=get_sub_field('text');
             
             ?>
                    
                    <p>
                        <li><?php echo  $text ?></li>
                    </p>
                    
                    <?php endwhile;
                    else:
                    endif; ?>
                    <p><?php
                       $last_head1=get_sub_field('text');
                       $dark_head=get_sub_field('dark-heading');
                    echo  $last_head1 ?></p>
                    <p class="dark-para"><?php echo $dark_head ?></p>


                </div>
            </div>

        </div>
    </div>