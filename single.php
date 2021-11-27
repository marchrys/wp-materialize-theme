<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
						<?php if(has_post_thumbnail()): ?>
								<?php the_post_thumbnail(); ?>
            <?php endif; ?>
						<h1><?php the_title(); ?></h1>
							
            <p>
              <i class="far fa-calendar"></i> Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
              par <?php the_author(); ?> 
            </p>
            <p><i class="far fa-comments"></i> <?= get_comments_number(); ?></p>
            <p>Catégories: <?php the_category(', '); ?></p>
            <p><i class="fas fa-tag"></i> Etiquettes: <?php the_tags(); ?></p>
              
							<div class="post-content"><?php the_content(); ?></div>
		</article>

    <?php comments_template(); // Par ici les commentaires ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>