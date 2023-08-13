<!-- it contains all the blog posts -->

<?php if(have_posts() ): while( have_posts() ): the_post();?>

	<div class="card mb-3 mt-3">
		<div class="card-body mb-3">

			<div class="row">
				<div class="col-md-4">
						<?php if(has_post_thumbnail()):?>
							<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnal">
						<?php endif;?>
				</div>	
				<div class="col-md-8">
					
						<div>
							<h2><?php the_title();?></h2>

							<!-- this will display limited content of blog post -->
							<?php the_excerpt();?>   

							<!-- <?php the_content();?>  it will display whole content on blog post-->

							<a href="<?php the_permalink();?>" class="btn btn-success"> Read More </a>
						</div>
				</div>
			</div>

		</div>
	</div>

<?php endwhile; else: endif;?>