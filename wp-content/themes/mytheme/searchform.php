<!-- this page will show up when someone uses the search bar -->

<form action="/" method="get">
	<label for="searh"></label>
	<input type="text" name="s" id="search" value="<?php the_search_query()?>" required>
	<button type="submit">Search  Now!</button>	
</form>