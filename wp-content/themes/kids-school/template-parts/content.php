<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids School
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                <?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php kids_school_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
            </div><!-- .featured-image -->
		<?php } ?>

		<div class="entry-container">
			<div class="entry-meta">
                <?php kids_school_entry_meta(); ?>
            </div><!-- .entry-meta -->
                            
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<?php $readmore_text = kids_school_get_option( 'readmore_text' );?>
            <?php if (!empty($readmore_text) ) :?>
                <div class="read-more">
                    <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                </div><!-- .read-more -->
            <?php endif; ?>
		</div><!-- .entry-container -->
	</div><!-- .post-item -->
</article><!-- #post-## -->
