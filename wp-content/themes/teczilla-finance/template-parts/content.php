<?php 
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>


<div class="blog-wrap mb-70 xs-mb-50">
	<?php if(has_post_thumbnail()) : ?>
    <div class="image-part">
		<?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="content-part">
        <ul class="blog-meta mb-22">
            <?php teczilla_posted_by(); ?>
            <?php teczilla_posted_on(); ?>
        </ul>
        <h3 class="title mb-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
		<?php the_excerpt(); ?>
        <div class="btn-part">
            <a class="readon-arrow" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More','teczilla-finance');?></a>
        </div>
    </div>
</div>