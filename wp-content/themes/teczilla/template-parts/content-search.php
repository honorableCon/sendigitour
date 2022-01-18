<div class="post post-full" id="post-<?php the_ID(); ?>">
<div class="blog-wrap shadow mb-70 xs-mb-50">
	<?php if(has_post_thumbnail()) : ?>
    <div class="image-part">
		<?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="content-part">
        <h3 class="title mb-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
        <ul class="blog-meta mb-22">
            <?php teczilla_posted_by(); ?>
            <?php teczilla_posted_on(); ?>
        </ul>
			<?php the_excerpt(); ?>
                            <div class="btn-part">
            <a class="readon-arrow" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More','teczilla');?></a>
        </div>
    </div>
</div>
</div><!-- .post -->