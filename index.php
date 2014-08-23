<?php get_header(); ?>
<div class="container">
	<div class="eleven columns">	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
				<div class="title">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>

				<div class="meta">
					<div class="post-auth">
						<?php the_author_posts_link(); ?>
					</div>
					<div class="date">
						<a href="<?php the_permalink() ?>"><?php the_time('m M Y') ?></a>
					</div>

					<div class="no-comments">
						<?php comments_number(); ?>
					</div>
					<span>
						<?php the_category(', '); ?>
					</span>
				</div>

				<div class="content">
					<?php the_excerpt(); ?>
				</div>

		</article>
	<?php endwhile; ?>

	<?php else : ?>
		<?php require_once('content-none.php') ?>
	<?php endif; ?>
	</div>

	<aside class="five columns">
		<h2>Side Bar</h2>

		<p>Aenean dictum lectus mi, vitae bibendum quam condimentum nec. Aliquam purus libero, egestas at lectus et, malesuada luctus magna. 
		Curabitur imperdiet id magna quis auctor. Donec cursus feugiat tellus, a maximus orci lacinia vitae. 
		Phasellus pretium diam id metus semper accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
		Nulla elementum ligula quam, venenatis lobortis odio bibendum a.</p>
	</aside>
</div>

	<div class="pagination container">
		<ul>
			<li class="older"><?php next_posts_link('Older') ?></li>
			<li class="newer"><?php previous_posts_link('Newer') ?></li>
		</ul>
	</div>

<?php get_footer(); ?>