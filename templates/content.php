<article <?php post_class('postbox'); ?>>
    	<?php if (has_post_thumbnail()): ?>
    		<?php 
    			the_post_thumbnail(array(70,70), array(
    				'class' => 'post-image img-thumbnail'
    			)); 
    		?>
    	<?php endif; ?>

    	<div class="post-right-section"><h3 class="source pull-right">
				<?php print get_post_custom(get_the_ID())['Source'][0]; ?>
			</h3>
    		<?php get_template_part('templates/entry-meta'); ?>
    		
		    <h2 class="entry-title">
		   		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    </h2>
			
		</div>
</article>
