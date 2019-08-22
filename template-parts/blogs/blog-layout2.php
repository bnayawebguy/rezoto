<?php
/**
 * Blog Layout 2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rezoto
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( has_post_thumbnail() ) : ?>
		<?php
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
		?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
			</a>
		</div>
	<?php endif; ?>

	<div class="blog-post-contents">

		<div class="post-title-metas">
			<div class="post-metas">
				<?php rezoto_posted_by( $author_avatar = false ); ?>
				<?php rezoto_posted_on(); ?>
				<?php rezoto_comment_box(); ?>
			</div>

			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

		</div><!-- .entry-header -->

		<div class="entry-content">

			<?php echo esc_html( get_the_excerpt() ); ?>
			
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rezoto' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
			$readmore_text = get_theme_mod( 'rezoto_blog_readmore_text', 'Continue Reading' );

			if( $readmore_text ) {
				?>
				<a class="readmore-btn" href="<?php the_permalink(); ?>"><?php echo esc_html( $readmore_text ); ?></a>
				<?php
			}
		?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
