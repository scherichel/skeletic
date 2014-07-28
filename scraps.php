<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumb">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	</div>
<?php endif; ?>