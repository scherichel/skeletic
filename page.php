<?php get_header(); ?>
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="container">
			<div class="eleven columns">
				<article <?php post_class(); ?> >
					<div class="title">
						<h2><?php the_title(); ?></h2>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
					<div class="thumb">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<div class="content">
						<?php the_content(); ?>
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