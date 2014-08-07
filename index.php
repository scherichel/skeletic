<?php get_header(); ?>	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article class="container clearfix">

			<div class="four columns">
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
			</div>
		
			<div class="twelve columns">
				<div class="title">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>

				<?php the_content('Read more'); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<div class="pagination container">
		<ul>
			<li class="older"><?php next_posts_link('Older') ?></li>
			<li class="newer"><?php previous_posts_link('Newer') ?></li>
		</ul>
		<div class="clear"></div>
	</div>
	<?php else : ?>

	<?php require_once('content-none.php') ?>

	<?php endif; ?>

<?php get_footer(); ?>