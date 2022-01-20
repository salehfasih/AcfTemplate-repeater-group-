<div class="hero-section">

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hero-head">
                    <h1><?php   echo get_sub_field('Heading') ?></h1>
                </div>
                <div class="list">
                    <ul>
                        <?php if(have_rows('icon-list')):
                        while(have_rows('icon-list')): the_row()
                        ?>
                        <li><?php echo get_sub_field('list') ?></li>
                       <?php endwhile  ;           
                         else:
                         endif; ?>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-6"  id="form1">

               
            <p><?php gravity_form( 1 );?> 
        
          <span  class="note">Note: Interest rates are fixed for the term of the investment. Customers may extend by providing 30 days notice in writing otherwise the Bill of Exchange falls due at maturity. *An optional 
            corporate guarantee is available for principal and interest payments.</span>
        
        </p>

            </div>
        </div>
    </div>
</div>
</div>