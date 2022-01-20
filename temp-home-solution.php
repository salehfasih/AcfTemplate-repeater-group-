
      <!-- image-section3 -->

      <div class="section3">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <?php 
                       $image2=get_sub_field('image');
                       
                       ?>
                      <img src="<?php echo $image2['url']; ?>" alt="">
                  </div>
                  <div class="col-md-6 text">

                    <h1>
                    <?php echo get_sub_field('content'); ?>
                    </h1>
                  </div>
              </div>
          </div>
      </div>