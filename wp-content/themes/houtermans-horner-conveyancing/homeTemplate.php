<?php /* Template Name: Home Page Template */ ?>
<?php get_header(); ?>

<?php if( have_rows('slider') ): ?>
    <?php $slideNumber = 0; ?>
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
    <?php while( have_rows('slider') ): the_row(); 

        // vars
		$image = get_sub_field('slider_image');
		$heading = get_sub_field('slider_heading');
        $link = get_sub_field('slider_link');
        $supportingText = get_sub_field('slider_supporting_text');
        ++$slideNumber;

		?>


          <!-- Slide One - Set the background image for this slide in the line below -->

          <?php if( $image ): ?>
         <div class="carousel-item <?php if($slideNumber == 1) echo 'active'; ?> " style="background-image: url(' <?php echo $image; ?>')">
         <?php endif; ?>
         <?php if( $link ): ?>
            <a href="<?php echo $link; ?>"><div class="carousel-caption d-none d-md-block">
        <?php endif; ?>
        <?php if( $heading ): ?>
                <h3><?php echo $heading; ?></h3>
        <?php endif; ?>
        <?php if( $supportingText ): ?>
                <p><?php echo $supportingText; ?></p>
            <?php endif; ?>
              </a>
            </div>
            </div>
            

      <?php endwhile; ?>
      
        </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <?php endif; ?>

    <!-- Page Content -->
    <div class="container-fluid intro-section black-section">
      <div class="row ">
        <div class="col-lg-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
          <div class="partner-logos-container">
                <?php if( get_field('partner_logo_1') ): ?>    
                        <img class="partner-logo" src="<?php the_field('partner_logo_1'); ?>" />
                <?php endif; ?>
                <?php if( get_field('partner_logo_2') ): ?>    
                        <img class="partner-logo" src="<?php the_field('partner_logo_2'); ?>" />
                <?php endif; ?>
          </div>
          <div class="offset-md-4 col-md-4">
                <?php if( have_rows('intro_button') ): 

                    while( have_rows('intro_button') ): the_row(); 
                        
                        // vars
                        $buttonLink = get_sub_field('intro_button_link');
                        $buttonCopy = get_sub_field('intro_button_copy');
                        
                        ?>
                        <a href="<?php echo $buttonLink; ?>">
                            <div class="intro-cta btn btn-lg btn-secondary btn-block centred">
                                <?php echo $buttonCopy; ?>
                            </div>
                        </a>
                    <?php endwhile; ?>

                <?php endif; ?>




            
          </div>
        </div>
      </div>
    </div>
      <!-- Marketing Icons Section -->
    <div class="container team-section white-section">
        <h3>Our Adelaide based conveyancing team</h3>
      <div class="row ">
        
        <?php if( have_rows('team_member') ): ?>

                <?php while( have_rows('team_member') ): the_row(); 

                    // vars
                    $image = get_sub_field('team_member_photo');
                    $name = get_sub_field('team_member_name');
                    $position = get_sub_field('team_member_position');

                    ?>
            <div class="col-lg-4 mb-4">
                <div class="team-member">
                    <?php if( $image ): ?>
                        <div class="team-member--photo rounded-circle" style="background-image: url('<?php echo $image; ?>"></div>
                    <?php endif; ?> 

                    <div class="team-member-content">
                        <?php if( $name ): ?>
                            <p class="team-member-content--name"><?php echo $name; ?></p>
                        <?php endif; ?> 
                        <?php if( $position ): ?>
                        <p class="team-member-content--position"><?php echo $position; ?></p>
                        <?php endif; ?> 
                    </div>
                    </div>
            </div>

                <?php endwhile; ?>



            <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-4">
                <?php if( have_rows('team_members_button') ): ?>

                    <?php while( have_rows('team_members_button') ): the_row(); 
                        
                        // vars
                        $buttonLink = get_sub_field('team_members_button_link');
                        $buttonCopy = get_sub_field('team_members_button_copy');
                        
                        ?>
                        <a href="<?php echo $buttonLink; ?>">
                            <div class="btn btn-primary btn-lg btn-block">
                                <?php echo $buttonCopy; ?>
                            </div>
                        </a>
                    <?php endwhile; ?>

                <?php endif; ?>
        </div>
      </div>
    </div>


      <!-- /.row -->

      <!-- Services Section -->
<div class="container-fluid black-section services-section">
      <h2>Portfolio Heading</h2>

      <!-- start repeater loop -->
<?php if( have_rows('services_section') ): ?>

   
    <?php while( have_rows('services_section') ): the_row(); ?>

                
        <?php if( have_rows('service_text_left_image_right_text') ): ?>

            
            
                    <?php while( have_rows('service_text_left_image_right_text') ): the_row(); 

                        // vars
                        $textLeftHeading = get_sub_field('text_left_heading');
                        $textLeftContent = get_sub_field('text_left_content');
                        $imageRight = get_sub_field('image_right');
                    
                    ?>

                    <div class="row text-left-image-right">
                        <div class="col-lg-4 offset-lg-2 col-sm-6 text-left">
               
                        <div class="text-left-content">

                            <?php if( $textLeftHeading ): ?>
                                <h4 class="text-left-content--heading"><?php echo $textLeftHeading; ?></h4>
                            <?php endif; ?>

                            <?php if( $textLeftContent ): ?>
                                <p class="text-left-content--content"><?php echo $textLeftContent; ?></p>
                            <?php endif; ?>

                        
                        <?php if( have_rows('text_left_button') ): ?>
                        
                            <?php while( have_rows('text_left_button') ): the_row();
                        
                        	// vars
                            $buttonText = get_sub_field('text_left_button_text');
                            $link = get_sub_field('text_left_button_url');
                            ?>
                                <div>
                                    <a href="<?php echo $link; ?>"><div class="btn btn-secondary btn-lg"><?php echo $buttonText; ?></div></a>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                </div>              
            </div>
                <?php if( $imageRight ): ?>
                            
                    <div class="col-lg-5 col-sm-6 image-right">
                        <div class="image-right-wrapper">
                            <img src="<?php echo $imageRight; ?>" class="image-right--image img-fluid rounded">
                        </div>
                    </div>
                
                <?php endif; ?>

                    </div>

            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('services_section') ): ?>

    <?php while( have_rows('services_section') ): the_row(); ?>

                
        <?php if( have_rows('service_left_image_right_text') ): ?>


   

                    <?php while( have_rows('service_left_image_right_text') ): the_row(); 


                        // vars
                        $textRightHeading = get_sub_field('text_right_heading');
                        $textRightContent = get_sub_field('text_right_content');
                        $imageLeft = get_sub_field('image_left');
                    
                        ?>
                    <div class="row text-right-image-left">
                        <div class="col-lg-5 offset-lg-1 col-sm-6 image-left">

                        <?php if( $imageLeft ): ?>
                            <div class="image-left-wrapper">
                                <img src="<?php echo $imageLeft; ?>" class="image-left--image img-fluid rounded">
                            </div>
                        <?php endif; ?>
                
                </div>

                <?php if( $textRightHeading ): ?>
                    <div class="col-lg-4  col-sm-6 text-right">
                        <div class="text-right-content">
                            <h4 class="text-right-content--heading"><?php echo $textRightHeading; ?></h4>
                <?php endif; ?>

                    <?php if( $textRightContent ): ?>
                        <p class="text-right-content--content"><?php echo $textRightContent; ?></p>
                    <?php endif; ?>


                    <?php if( have_rows('text_right_button') ):
                        
                        while( have_rows('text_right_button') ): the_row();
                        
                        	// vars
                            $buttonText = get_sub_field('text_right_button_text');
                            $link = get_sub_field('text_right_button_url');
                            
                        ?>
                            <div>
                                <a href="<?php echo $link; ?>"><div class="btn btn-secondary btn-lg"><?php echo $buttonText; ?></div></a>
                            </div>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                        
                        </div>
                    </div>
                    </div>
                    
                  <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>









      <!-- Footer -->
      <div class="container-fluid black-section footer-section">

        <?php if( have_rows('contact_details') ): 

        while( have_rows('contact_details') ): the_row(); 
            
            // vars
            $contactSentence = get_sub_field('contact_sentence');
            $contactPhone = get_sub_field('contact_phone');
            $contactPhone = get_sub_field('contact_email');

            
            ?>


        <h4> <?php the_sub_field('contact_sentence'); ?></h4>
        <div class="row">
          <div class="col-md-4 offset-md-4">
          <div class="contact-wrapper">
            <!-- phone -->
            <div class="contact-method">
              <div class="contact-method--icon">
                  <a href="tel:<?php the_sub_field('contact_phone'); ?>"><i class="fas fa-phone"></i></a>
              </div>
              <div class="contact-method--details">
                <a href="tel:<?php the_sub_field('contact_phone'); ?>"><?php the_sub_field('contact_phone'); ?></a>
              </div>
            </div>
            <!-- email -->
            <div class="contact-method">
                <div class="contact-method--icon">
                  <a href="mailto:<?php the_sub_field('contact_email'); ?>"><i class="fas fa-envelope"></i></a>
                </div>
                <div class="contact-method--details">
                  <a href="mailto:<?php the_sub_field('contact_email'); ?>"><?php the_sub_field('contact_email'); ?></a>
                </div>
              </div>
              <!-- address -->
              <?php if( have_rows('contact_address') ): 

                while( have_rows('contact_address') ): the_row(); 
                    
                    // vars
                    $addressText = get_sub_field('address_text');
                    $addressLink = get_sub_field('address_link');
                    
                    ?>

              <div class="contact-method">
                <div class="contact-method--icon">
                  <a href="<?php the_sub_field('address_link'); ?>"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="contact-method--details">
                  <a href="<?php the_sub_field('address_link'); ?>"><?php the_sub_field('address_text'); ?></a>
                </div>
              </div>

          </div>
        </div>
        <?php endwhile; ?>
                
                <?php endif; ?>
        <?php endwhile; ?>
	
    <?php endif; ?>
      </div>
      <!-- Map -->
      <div class="row">
        <div class="col-lg-12">
          <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7875.957898724966!2d138.6359149676975!3d-34.87140396349787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87db513eca67371d!2sHoutermans+Horner+Conveyancing!5e0!3m2!1sen!2sau!4v1542508809940" width="800" height="600" frameborder="0" style="border:10px solid #99dbec; border-radius: 5px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      </div>
<?php
      get_footer();