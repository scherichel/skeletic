<?php get_header(); ?>	
		<section>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="left">
						<div class="date">
							<a href="<?php the_permalink() ?>"><?php the_time('m M Y') ?></a>
						</div>

						<div class="no-comments">
							<?php comments_number(); ?>
						</div>
						<div class="post-auth">
							<?php the_author_posts_link(); ?>
						</div>
						
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumb">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
							</div>
						<?php endif; ?>
					

					</div>
					
					<div class="right">
						<div class="title">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						</div>

						<?php the_content(); ?>
					</div>
					<div class="clear"></div>
					<div class="meta">
						<ul>
							<li></li>
							<!--
							<li>Posted in <?php the_category(','); ?></li>
							<li></li>
							!-->
						</ul>
					</div>
					<div class="clear"></div> 
				</div>
			<?php endwhile; ?>

			<div class="pagination">
				<ul>
					<li class="older"><?php next_posts_link('Older') ?></li>
					<li class="newer"><?php previous_posts_link('Newer') ?></li>
				</ul>
				<div class="clear"></div>
			</div>
			<?php else : ?>

				<div class="post">
					<h2>Nothing found</h2>
					<p>Sorry, but you are looking for something that isnt here</p>
					<p><a href="<?php echo get_option('home'); ?>">Return to the Homepage</a></p>
				</div>

			<?php endif; ?>
		</section>
<?php get_footer(); ?>