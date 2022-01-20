    <!--Got questions?  -->

    <?php  
    $heading1=get_sub_field('heading1');
    $heading2=get_sub_field('heading2');
    $content=get_sub_field('content');
    $image=get_sub_field('image');
    ?>
    <div class="or-support-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-sm-3"></div>
                    <div class="col-md-9">
                        
<div class="sub_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <h1 class="got2"><?php echo $heading1 ?></h1>
                <h2 class="support2"><?php echo $heading2 ?></h1>
                    <p class="sub_content"><?php echo $content ?></p>
            </div>

        </div>

    </div>
</div>
                    </div>
                </div>
                <div class="col-md-6" id="">
                    <div class="image-box">
                        <img src="<?php echo $image ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>