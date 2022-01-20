    <!-- timeline start -->
<?php $image2=get_sub_field('image');
$BtnTxt=get_sub_field('button-text');

?>
    <div class="section4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if(have_rows('column1')):
                    while(have_rows('column1')): the_row();

                    $image=get_sub_field('image');
                    $title=get_sub_field('title');
                    $content=get_sub_field('content');
                    ?>
                    <div class="row">
                        <div class="col-sm-3" id="sec4_img2">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="col-md-9">
                            <h1 class="icon_title"><?php echo $title ?></h1>
                            <p><?php echo $content ?></p>
                        </div>
                    </div>
                    <?php endwhile;
                    else:
                    endif; ?>
                   <div  class="button-section">
                            <div class="sub_section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-md-10">
                                        <div class="my_btn"><button><?php echo $BtnTxt ?></button></div>
                                            <h1 class="got2">Got questions?</h1>
                                            <h2 class="support2">Contact our dedicated support team</h1>
                                                <p class="sub_content">Our customer service team is available 24/7
                                                    across multiple timezones. We endeavour to respond to all new and
                                                    existing customer queries within 4 hours.</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6" id="passion2">
                    <img src="<?php echo $image2 ?>" alt="">
                </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- timeline end  -->