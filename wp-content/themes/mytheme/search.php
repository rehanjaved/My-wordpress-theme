<!-- t his page will show up when someone uses the search bar -->

<?php get_header();?>


<section class="page-wrap">
	<div class="container">
		

				<h1>Search Results <?php echo get_search_query();?></h1> 

				<?php get_template_part('includes/section','archive');?>

				<!-- Add pagination for posts -->
		 		
		 		<?php previous_posts_link();?>
				<?php next_posts_link();?>
						<br>
						<br>
				<?php the_posts_pagination();?>	

	</div>
</section>
  


<?php get_footer();?>