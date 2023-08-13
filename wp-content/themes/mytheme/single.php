<!-- # when someone visits a single blog post -->
<?php get_header();?>


<section class="page-wrap">
	<div class="container">

			<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnal">
			<?php endif;?>

			<h2><?php the_title();?></h2>

			<!-- display section content from section-blogcontent within includes -->				
			<!-- possible to change to content as well -->
			<?php get_template_part('includes/section','blogcontent');?>   



	</div>
</section>

  

<?php get_footer();?>