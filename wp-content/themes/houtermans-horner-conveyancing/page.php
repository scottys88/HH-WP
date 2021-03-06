<?php /* Template Name: Content Page Template */ ?>
<?php get_header(); ?>

<?php if( have_rows('header') ): 

while( have_rows('header') ): the_row(); 

	// vars
    $image = get_sub_field('header_image');
    $title = get_sub_field('header_title');
    $description = get_sub_field('header_description');
    
    ?>
<header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" alt="<?php echo $image['alt']; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
                  <div class="carousel-caption d-none d-md-block">
                    <h1><?php the_sub_field('header_title'); ?></h1>
                    <p><?php the_sub_field('header_description'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="mobile-heading d-md-none">
    <div class="container">
      <h1 class="mt-4 mb-3"><?php the_sub_field('header_title'); ?>
      </h1>
      <p><?php the_sub_field('header_description'); ?></p>
    </div>
    </div>

<?php endwhile; ?>

<?php endif; ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php the_title(); ?></li>
      </ol>
    </div>
      <!-- Image Header -->
    <div class="container">
      <div class="content-page--main-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
      </div>
    </div>

      <!-- Testimonials Section -->
    <div class="container-fluid">
    <?php if( have_rows('black_container') ):
        
        // loop through the rows of data
        while ( have_rows('black_container') ) : the_row();

            // check current row layout
        if( get_row_layout() == 'testimonial_blocks' ):

                echo    '<div class="black-section testimonials-section">';
                echo    '<div class="row">';
            if( have_rows('testimonial') ):

                while ( have_rows('testimonial') ) : the_row();

                $image = get_sub_field('testimonial_image');

                echo    '<div class="col-md-4 px-0">';
                echo        '<div class="testimonial-wrapper">';
                echo            '<img class="testimonial--image" src="' . $image['url'] . '" />';
                echo                '<div class="testimonial-content-wrapper">';
                echo                '<span class="testimonial--quote">';
                                    the_sub_field('testimonial_heading');
                echo                '</span>';
                echo                 '<span class="testimonial--author">';
                                    the_sub_field('testimonial_author');
                echo                '</span>';
                echo            '</div>';
                echo        '</div>';
                echo    '</div>';
                endwhile;
            endif;
            echo '</div>';
            echo '</div>';
        endif;

        // check current row layout
        if( get_row_layout() == 'case_study' ):
        
            // check if the nested repeater field has rows of data
            if( have_rows('full_width_case_study') ):
                echo '<div class="case-study-section black-section">';

                while ( have_rows('full_width_case_study') ) : the_row();
                $fullWidthImage = get_sub_field('full_width_image');
                $fullWidthLink = get_sub_field('full_width_link');
            echo  '<div class="row">';
            echo        '<div class="col-md-12">';
            echo            '<a href="' . $fullWidthLink . '">';
            echo                '<div class="case-study-full-width case-study px-0">';
            echo                   '<img class="case-study-full-width--image" src="' . $fullWidthImage['url'] . '">';
            echo                    '<div class="case-study-full-width-content-wrapper case-study-content">';
            echo                         '<p class="case-study-full-width--content">';
                                            the_sub_field('full_width_content');
            echo                        '</p>';
            echo                    '</div>';
            echo                '</div>';
            echo            '</a>';
            echo        '</div>';
            echo    '</div>';
            endwhile;
        endif;

        
        if( have_rows('three_column_case_study') ):
            
            while ( have_rows('three_column_case_study') ): the_row();
                echo '<div class="row">';
                if( have_rows('column_1_case_study') ):

                    while( have_rows('column_1_case_study') ): the_row(); 

                        $image = get_sub_field('column_1_case_study_image');
                        $link = get_sub_field('column_1_case_study_link');
                        $text = get_sub_field('column_1_case_study_copy'); 

                    echo '<div class="col-md-6 px-0">';
                    echo    '<a href="' . $link . '">';
                    echo        '<div class="case-study-half-width case-study">';
                    echo           '<img class="case-study-half-width--image" src="' . $image . '">';
                    echo                '<div class="case-study-half-width-content-wrapper case-study-content">';
                    echo                    '<p class="case-study-half-width--content">';
                                                the_sub_field('column_1_case_study_copy');
                    echo                    '</p>';
                    echo                '</div>';
                    echo             '</div>';
                    echo           '</a>';
                    echo        '</div>';
                endwhile; 
            endif;
            if( have_rows('column_2_case_study') ):

                while( have_rows('column_2_case_study') ): the_row(); 

                    $image = get_sub_field('column_2_case_study_image');
                    $link = get_sub_field('column_2_case_study_link');
                    $text = get_sub_field('column_2_case_study_copy'); 

                echo '<div class="col-md-6 px-0">';
                echo    '<a href="' . $link . '">';
                echo        '<div class="case-study-half-width case-study">';
                echo           '<img class="case-study-half-width--image" src="' . $image . '">';
                echo                '<div class="case-study-half-width-content-wrapper case-study-content">';
                echo                    '<p class="case-study-half-width--content">';
                                            the_sub_field('column_2_case_study_copy');
                echo                    '</p>';
                echo                '</div>';
                echo             '</div>';
                echo           '</a>';
                echo        '</div>';
            endwhile; 
        endif;
        endwhile;
        echo        '</div>';
    endif;
endif;
endwhile;
endif;

?>
    </div>
</div>

    

        

    <!-- Full profile section  -->
    <?php 

// check for rows (parent repeater)
    if( have_rows('full_width') ): ?>
    
    
            

    <?php
    while( have_rows('full_width') ): the_row(); ?>
<div class="container-fluid white-section">
    <div class="full-width-profiles">
            <div class="profile">
                <img class="full-width-profiles--image" src="<?php the_sub_field('full_width_image'); ?>">
                <div class="container">
                    <div class="content-page--main-content profile-content">
                        <?php the_sub_field('full_width_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 

endwhile;
endif;

?>

    <!-- /.container -->












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