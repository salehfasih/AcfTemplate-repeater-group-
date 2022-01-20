    <!-- faq-section1 -->

<?php  
$suf=1;
?>
    <div class="faq-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="got"><?php echo get_sub_field('faq-heading1') ?></h1>
                    <ul class="accordion-list">
                        <?php 
                        if(have_rows('accordian-1')):
                        while(have_rows('accordian-1')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                            <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        
                        <?php endwhile; else:  endif; ?>
                       
                    </ul>

                    <h1 class="got"><?php echo get_sub_field('faq-heading2') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian2')):
                        while(have_rows('accordian2')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                        
                    </ul>


                    <h1 class="got"><?php echo get_sub_field('faq-heading-3') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian3')):
                        while(have_rows('accordian3')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                      
                    </ul>

                    <h1 class="got"><?php echo get_sub_field('faq-heading-4') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian4')):
                        while(have_rows('accordian4')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                    </ul>
                    <h1 class="got"><?php echo get_sub_field('faq-heading-5') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian')):
                        while(have_rows('accordian')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                        
                    </ul>

                    <h1 class="got"><?php echo get_sub_field('faq-heading-6') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian6')):
                        while(have_rows('accordian6')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                        

                    </ul>
                    <h1 class="got"><?php echo get_sub_field('faq-heading-7') ?></h1>
                    <ul class="accordion-list">
                    <?php 
                        if(have_rows('accordian-7')):
                        while(have_rows('accordian-7')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                       

                    </ul>
                    <h1 class="got"><?php echo get_sub_field('faq-heading-8') ?></h1>
                    <ul class="accordion-list">
                        <?php 
                        if(have_rows('accordian-8')):
                        while(have_rows('accordian-8')): the_row();

                        $title=get_sub_field('title');
                        $content=get_sub_field('content'); ?>
                        <li>
                        <h3><?php echo  $title ?></h3>
                            <div class="answer">
                                <p><?php echo  $content ?></p>

                            </div>
                        </li>
                        <?php endwhile; else:  endif; ?>
                        
                    </ul>

                        </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-3"></div>
    <?php if( have_rows('column2') ): ?>
    <?php while( have_rows('column2') ): the_row(); 
    
    $main_heading=get_sub_field('main-heading');
    $sub_heading=get_sub_field('sub-heading');
    $content=get_sub_field('content');
    ?>
                        <div class="col-md-9">
                            <div class="sub_section faq-section2">
                            <h1 class="got2"><?php echo $main_heading ?></h1>
                            <h2 class="support2"><?php echo $sub_heading ?></h1>
                            <p class="sub_content"><?php echo $content ?></p>
                        </div>
                        <?php endwhile;
                        else:
                        endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>