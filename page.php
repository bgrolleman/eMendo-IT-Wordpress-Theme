<?php get_header(); ?>
				<div id="featured">
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="block">
							<div class="block_inside">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<small><?= __('on') ?> <?php the_time('M d'); ?> <?= __('by'); ?> <?php the_author_posts_link(); ?> 
									(<?php the_category(',') ?>,<?php the_tags(',') ?>)</small>
								<?php the_content('Read More'); ?>
							</div>
						</div>
					<?php endwhile; ?>
						<div id="posts_navigation">
							<?php previous_posts_link(); ?>
							<?php next_posts_link(); ?>
						</div>
					<?php else : ?>
						<div class="block">
							<div class="block_inside">
								<h2><?= __('Not Found'); ?></h2>
								<p><?= __('Sorry, can\'t find a post'); ?></p>
								<?php include(TEMPLATEPATH . '/searchform.php'); ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
