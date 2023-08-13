<!-- # when someone visits a single blog post -->
<?php get_header();?>


<section class="page-wrap">
	<div class="container">

		<div class="row">
			<div class="col-md-6 car-left">

				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnal">
				<?php endif;?>

		<!-- display car gallery from custom fields -->
		<?php 
		$images = get_field('car_gallery');
		if( $images ): ?>	
		        <?php foreach( $images as $image ): ?>		       
	                <div class="gallery">
	                	<a href="<?php echo esc_url($image['url']); ?>">
	                     <img src="<?php echo esc_url($image['sizes']['blog-small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid img-thumbnail"/>
	                 	</a>
	                </div>
	                <p><?php echo esc_html($image['caption']); ?></p>
		        <?php endforeach; ?>
		<?php endif; ?>

			</div>
			
			<div class="col-md-6 car-right">
				<h2 class="mb-3"><?php the_title();?></h2>

				<!-- using function get post data This does not work when we have advanced custom fields -->
				<!-- <ul class="list-group mb-3">
					<li class="list-group-item list-group-item-dark">Color : <?php echo get_post_meta($post->ID, 'Color' , true);?>
					</li>
					<li class="list-group-item list-group-item-dark">Registration : <?php echo get_post_meta($post->ID, 'Registration' , true);?>						
					</li>
					<li class="list-group-item list-group-item-dark">Price : $<?php echo get_post_meta($post->ID, 'Price' , true);?>						
					</li>
				</ul> -->

				<!-- Displaying data using custom fields -->
				<ul class="list-group mb-3">
					<li class="list-group-item list-group-item-dark"> 
						Color : <?php the_field('color');?>					
					</li>
					<li class="list-group-item list-group-item-dark"> 
						Registration : <?php the_field('registration');?>					
					</li>
					<li class="list-group-item list-group-item-dark">
					 Price : <?php the_field('price');?>					
					</li>					
				</ul>
				<!-- display section content from section-blogcontent within includes -->				
				<!-- possible to change to content as well -->
				<?php get_template_part('includes/section','cars');?>  

				<h3>Features</h3>

				<?php if(have_rows('features')): ?>
				    <ul class="list-group list-group-flush">
				        <?php 
				        	while (have_rows('features')): the_row();
				            $feature = get_sub_field('feature');
				        ?>
				        <li class="list-group-item"> 
				            <?php echo $feature;?>				
				        </li>
				        <?php endwhile; ?>
				    </ul>
				<?php endif; ?>


				<?php gravity_form(1, 'Enquire about this car', null, false, [], true, 100, true);?>
			</div>
		</div>

			

		


			 

			

	</div>
</section>

  

<?php get_footer();?>