<?php get_header(); ?>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="container">
			<div class="eleven columns">
				<article <?php post_class(); ?> >
					
					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<div id="author">
						Written by <?php the_author_posts_link(); ?>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumb">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<?php endif; ?>
					<?php the_content(); ?>

					<div class="meta">
						<ul>
							<li>Posted  <a href="<?php the_permalink() ?>"><?php the_time('m M Y') ?></a></li>
							<li>Posted in <?php the_category(','); ?></li>
						</ul>
					</div>
				</article>

				<div>
					<?php comments_template(); ?>
				</div>
			</div>
			<div class="five columns">
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
				<p>Sidebar will go here</p>
			</div>	
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>