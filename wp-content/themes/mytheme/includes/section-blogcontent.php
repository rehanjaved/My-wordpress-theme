<!-- This represents the sinlge blog page content -->

<?php if(have_posts() ): while( have_posts() ): the_post();?>

	<!-- find out more ways to display date and time by Googlinh PHP date  -->
	<p><?php echo get_the_date('l jS F, Y');?></p>

	<?php the_content();?>

	<!-- this is will display admin at the end of the post -->
	<?php the_author();?>
	<br>

	<!-- we want the name of the publisher at the end of blog post -->
	<?php 
	$fname =	get_the_author_meta ('first_name');
	$lname =	get_the_author_meta ('last_name');
	echo $fname . ' ' . $lname;
	 ?>

	 <!-- to display posted by name -->
	 <p>Posted By <?php echo $fname;?> <?php echo $lname;?> </p>

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


	<?php comments_template();?>
	
<?php endwhile; else: endif;?>