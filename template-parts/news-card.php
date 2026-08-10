<?php
/**
 * Reusable news card for WordPress Posts.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class( 'reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card' ); ?>>
	<a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden bg-slate-200" aria-label="<?php echo esc_attr( sprintf( 'Baca %s', get_the_title() ) ); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'kaduela-news-card', array( 'class' => 'h-full w-full object-cover transition duration-700 hover:scale-105', 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
		<?php else : ?>
			<img src="<?php echo esc_url( kaduela_asset_uri( 'berita_hero.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 hover:scale-105">
		<?php endif; ?>
	</a>
	<div class="flex flex-1 flex-col p-6 sm:p-7">
		<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>" class="block text-sm font-semibold text-water-700"><?php echo esc_html( get_the_date() ); ?></time>
		<h3 class="mt-3 font-display text-xl font-extrabold leading-snug tracking-tight text-forest-900 sm:text-2xl"><a href="<?php the_permalink(); ?>" class="transition hover:text-water-700"><?php the_title(); ?></a></h3>
		<p class="article-copy mt-4 line-clamp-3 leading-7 text-slate-600"><?php echo esc_html( kaduela_excerpt( 28 ) ); ?></p>
		<a href="<?php the_permalink(); ?>" class="mt-auto pt-6 font-bold text-water-700 transition hover:text-water-600">Baca Selengkapnya</a>
	</div>
</article>
