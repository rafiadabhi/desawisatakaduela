<?php
/**
 * Single news post.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header class="relative isolate flex min-h-[560px] items-end overflow-hidden pt-20 text-white">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'full', array( 'class' => 'absolute inset-0 -z-20 h-full w-full object-cover', 'loading' => 'eager', 'fetchpriority' => 'high' ) ); ?>
				<?php else : ?>
					<img src="<?php echo esc_url( kaduela_asset_uri( 'berita_hero.jpg' ) ); ?>" alt="" class="absolute inset-0 -z-20 h-full w-full object-cover">
				<?php endif; ?>
				<div class="hero-overlay absolute inset-0 -z-10"></div>
				<div class="mx-auto w-full max-w-5xl px-5 pb-14 lg:px-8 lg:pb-20">
					<div class="reveal max-w-4xl">
						<a href="<?php echo esc_url( kaduela_page_url( 'berita' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Berita</a>
						<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>" class="mt-7 block text-sm font-semibold text-sun-400"><?php echo esc_html( get_the_date() ); ?></time>
						<h1 class="mt-4 font-display text-[clamp(2rem,7vw,4.5rem)] font-extrabold leading-[1.08] tracking-[-0.03em]"><?php the_title(); ?></h1>
					</div>
				</div>
			</header>

			<section class="bg-slate-50 px-5 py-16 lg:px-8 lg:py-24">
				<div class="reveal mx-auto max-w-4xl rounded-[2rem] border border-slate-200 bg-white px-6 py-9 shadow-card sm:px-10 sm:py-12 lg:px-14">
					<div class="wp-post-content article-copy text-justify leading-8 text-slate-700"><?php the_content(); ?></div>
				</div>
			</section>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
