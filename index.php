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
							<a href="<?php the_permalink() ?>"><?php the_time('l, F j, Y') ?></a>
						</div>
						<div>
							<?php the_category(', '); ?>
						</div>
						<div class="no-comments">
							<?php comments_number(); ?>
						</div>
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
			<?php dynamic_sidebar("homepage-widgets"); ?>
		</aside>
	</div>

<?php skeleton_pagination(); ?>

<?php get_footer(); ?>