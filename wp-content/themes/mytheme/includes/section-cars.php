<!-- This represents the sinlge car page content -->

<?php if(have_posts() ): while( have_posts() ): the_post();?>

	<!-- find out more ways to display date and time by Googlinh PHP date  -->

	<?php the_content();?>

	<?php
		$tags = get_the_tags();

if (is_array($tags) || is_object($tags)) {
    foreach ($tags as $tag) :
        $tag_link = get_tag_link($tag->term_id);
        echo '<a href="' . $tag_link . '" class="btn btn-success">' . $tag->name . '</a> ';
    endforeach;
}

	?>


	<?php
		$categories = get_the_category();
		foreach ($categories as $cat) :
		    $cat_link = get_category_link($cat->term_id);
		    echo '<a href="' . $cat_link . '" class="btn btn-primary">' . $cat->name . '</a> ';
		endforeach;
	?>


	<p><?php echo get_the_date('l jS F, Y');?></p>
	


	
<?php endwhile; else: endif;?>