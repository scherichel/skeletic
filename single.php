<?php get_header(); ?>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="container">
			<div class="eleven columns">
				<article <?php post_class(); ?> >
					<div class="title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div id="author">
						Written by <?php the_author_posts_link(); ?>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
					<div class="thumb">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<div class="content">
						<?php the_content(); ?>
					</div>
					<div class="meta">
						<ul>
							<li>Posted  <a href="<?php the_permalink() ?>"><?php the_time('m M Y') ?></a></li>
							<li>Posted in <?php the_category(','); ?></li>
						</ul>
					</div>
				</article>

				<div class="comments">
					<?php comments_template(); ?>
				</div>
			</div>
			<div class="five columns">
				<?php dynamic_sidebar("left-widgets"); ?>
			</div>	
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>