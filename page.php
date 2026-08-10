<?php
/**
 * Fallback for manually-created WordPress pages.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama" class="min-h-screen bg-slate-50 px-5 pb-20 pt-32 lg:px-8">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'mx-auto max-w-4xl rounded-[2rem] border border-slate-200 bg-white px-6 py-10 shadow-card sm:px-10 lg:px-14' ); ?>>
			<h1 class="font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl"><?php the_title(); ?></h1>
			<div class="wp-post-content article-copy mt-8 text-justify leading-8 text-slate-700"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
