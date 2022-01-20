<!-- section4 start -->

<div class="section4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <?php if( have_rows('icon-box') ):
             while( have_rows('icon-box') ) : the_row();
               $image = get_sub_field('image');
               $image_url=$image['url'];
               $title=get_sub_field('title');
               $content=get_sub_field('content');
               ?>

             <div class="row">
                 <div  class="col-sm-2" id="sec4_img">
                     <img src="<?php echo  $image_url; ?>" alt="">
                 </div>
                 <div  class="col-md-10">
                    <h1 class="icon_title"><?php echo  $title ?></h1>
                    <p><?php  echo $content ?></p>
                 </div>
             </div>   

             <?php endwhile;
             else:
             endif; ?>
           
            </div>  
            <div class="col-md-6"  id="passion">
                <?php $image=get_sub_field('image'); ?>
                <img src="<?php  echo $image['url'];?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- section4 end  -->