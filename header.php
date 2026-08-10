<?php
/**
 * Shared site header.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
$kaduela_nav_items = kaduela_nav_items();
?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'font-sans text-slate-700 antialiased selection:bg-sun-400 selection:text-forest-900' ); ?>>
<?php wp_body_open(); ?>
<a href="#konten-utama" class="fixed left-4 top-4 z-[100] -translate-y-24 rounded-xl bg-white px-4 py-3 font-semibold text-forest-800 shadow-lg transition focus:translate-y-0">Lewati ke konten</a>

<header id="site-header" class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-forest-900/90 text-white backdrop-blur-lg">
	<nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-8" aria-label="Navigasi utama">
		<a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="flex shrink-0 items-center gap-2.5" aria-label="Desa Wisata Kaduela - Beranda">
			<img src="<?php echo esc_url( kaduela_asset_uri( 'logo_hero.png' ) ); ?>" alt="" class="h-9 w-9 shrink-0 object-contain">
			<span class="whitespace-nowrap text-base font-extrabold tracking-tight text-white sm:text-lg">Desa Wisata Kaduela</span>
		</a>

		<div class="hidden items-center gap-3.5 lg:flex xl:gap-6">
			<?php foreach ( $kaduela_nav_items as $slug => $label ) : ?>
				<?php $active = kaduela_is_nav_active( $slug ); ?>
				<a href="<?php echo esc_url( kaduela_page_url( $slug, 'beranda' === $slug ? '#home' : '' ) ); ?>" <?php echo $active ? 'aria-current="page"' : ''; ?> class="<?php echo esc_attr( $active ? 'text-sm font-semibold text-sun-400 transition hover:text-sun-400' : 'text-sm font-medium text-white/75 transition hover:text-white' ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</div>

		<button type="button" data-menu-button class="inline-flex min-h-11 items-center justify-center rounded-xl border border-white/15 px-4 text-sm font-bold text-white transition hover:bg-white/10 lg:hidden" aria-expanded="false" aria-controls="mobile-menu">Menu</button>
	</nav>

	<div id="mobile-menu" data-mobile-menu class="hidden border-t border-white/10 bg-forest-900 px-5 pb-5 pt-3 lg:hidden">
		<nav class="mx-auto grid max-w-7xl gap-1" aria-label="Navigasi seluler">
			<?php foreach ( $kaduela_nav_items as $slug => $label ) : ?>
				<?php $active = kaduela_is_nav_active( $slug ); ?>
				<a href="<?php echo esc_url( kaduela_page_url( $slug, 'beranda' === $slug ? '#home' : '' ) ); ?>" <?php echo $active ? 'aria-current="page"' : ''; ?> class="<?php echo esc_attr( $active ? 'rounded-xl bg-white/10 px-4 py-3 font-semibold text-sun-400' : 'rounded-xl px-4 py-3 text-white/80 transition hover:bg-white/10' ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
	</div>
</header>
