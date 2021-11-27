<?php get_header(); ?>
 	<h1>Le blog</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="post row">
				<div class="col s12">
					<div class="card blue-grey darken-1">
						<?php if(has_post_thumbnail()): ?>
							<div class="card-image">  
								<?php the_post_thumbnail(); ?>
								<span class="card-title"><?php the_title(); ?></span>
							</div>
						<?php endif; ?>
						<div class="card-content white-text">
							<?php if(!has_post_thumbnail()): ?>
								<span class="card-title"><?php the_title(); ?></span>
							<?php endif; ?>
					
							<p class="post__meta">
								Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
								par <?php the_author(); ?> • <?php comments_number(); ?>
							</p>
							<p><?php the_excerpt(); ?></p>
						</div>
						<div class="card-action">
							<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
						</div>
					</div>
				</div>
		</article>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>