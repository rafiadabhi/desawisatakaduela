<?php
/**
 * Required fallback template.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama" class="min-h-screen bg-slate-50 px-5 pb-20 pt-32 lg:px-8">
	<div class="mx-auto max-w-7xl">
		<h1 class="font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl"><?php echo is_search() ? esc_html( sprintf( 'Hasil pencarian: %s', get_search_query() ) ) : 'Berita Desa Kaduela'; ?></h1>
		<?php if ( have_posts() ) : ?>
			<div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 lg:grid-cols-3">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/news', 'card' ); ?>
				<?php endwhile; ?>
			</div>
			<nav class="kaduela-pagination mt-12" aria-label="Navigasi halaman"><?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => 'Sebelumnya', 'next_text' => 'Berikutnya' ) ); ?></nav>
		<?php else : ?>
			<div class="mt-10 rounded-[2rem] border border-slate-200 bg-white px-6 py-12 text-center shadow-card"><p class="font-display text-xl font-extrabold text-forest-900">Belum ada berita yang dipublikasikan.</p></div>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
