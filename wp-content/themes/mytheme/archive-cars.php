<!-- when we have blog archive contains all the blog posts -->

<?php get_header();?>


<section class="page-wrap">
	<div class="container">
		
		<section class="row">
			<div class="col-lg-3">
				<?php if ( is_active_sidebar('blog-sidebar') ):?>
					<?php dynamic_sidebar('blog-sidebar');?>
				<?php endif;?>
			</div>
			
			<div class="col-lg-9">
				<h1><?php echo single_cat_title();?></h1>

				<?php get_template_part('includes/section','archive');?>

				<!-- Add pagination for posts -->
		 		
		 		<?php previous_posts_link();?>
				<?php next_posts_link();?>
						<br>
						<br>
				<?php the_posts_pagination();?>	
     		</div>


	</div>
</section>
  


<?php get_footer();?>