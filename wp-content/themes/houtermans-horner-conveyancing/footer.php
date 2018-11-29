<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Houtermans_Horner_Conveyancing
 */

?>

	</div><!-- #content -->

<div class="call-to-action-footer  black-section">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-md-4 offset-md-4">
            <div class="call-to-action">

				<?php if( have_rows('get_a_quote_button') ): 

				while( have_rows('get_a_quote_button') ): the_row(); 
					
					// vars
					$text = get_sub_field('button_text');
					$link = get_sub_field('button_link');
					?>

              <p><?php the_sub_field('call_to_action'); ?></p>
			  <a class="btn btn-lg btn-secondary btn-block" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
			  
			  <?php endwhile; ?>
	
			  <?php endif; ?>


            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="footer-image-wrapper">
			<?php 

$image = get_field('footer_image');

if( !empty($image) ): ?>

	<img class="footer-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>


            </div>
            </div>
            <div class="col-md-4">
              <div class="footer-copyright-wrapper">
                <p>&copy; Houtermans Horner Conveyancing</p>
              </div>
            </div>
          </div>
        </div>

          <!-- <p class="footer-copyright m-0 text-center text-white">Copyright &copy; Houtermans Horner Conveyancing 2018</p> -->
        </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
