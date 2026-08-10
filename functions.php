<?php
/**
 * Theme functions for Desa Wisata Kaduela.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;

define( 'KADUELA_THEME_VERSION', '1.0.0' );

function kaduela_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_image_size( 'kaduela-news-card', 960, 600, true );
}
add_action( 'after_setup_theme', 'kaduela_theme_setup' );

function kaduela_enqueue_assets() {
	$css_path = get_template_directory() . '/assets/css/theme.css';
	$js_path  = get_template_directory() . '/assets/js/theme.js';

	wp_enqueue_style(
		'kaduela-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'kaduela-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array( 'kaduela-fonts' ),
		file_exists( $css_path ) ? (string) filemtime( $css_path ) : KADUELA_THEME_VERSION
	);

	wp_enqueue_script(
		'kaduela-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		file_exists( $js_path ) ? (string) filemtime( $js_path ) : KADUELA_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kaduela_enqueue_assets' );

function kaduela_asset_uri( $path ) {
	return get_template_directory_uri() . '/assets/images/' . ltrim( (string) $path, '/' );
}

function kaduela_page_url( $slug, $fragment = '' ) {
	$fragment = (string) $fragment;

	if ( 'beranda' === $slug ) {
		return home_url( '/' ) . $fragment;
	}

	$page = get_page_by_path( sanitize_title( $slug ), OBJECT, 'page' );
	$url  = $page instanceof WP_Post ? get_permalink( $page ) : home_url( '/' . sanitize_title( $slug ) . '/' );

	return $url . $fragment;
}

function kaduela_nav_items() {
	return array(
		'beranda'      => 'Beranda',
		'profil'       => 'Profil',
		'destinasi'    => 'Destinasi',
		'paketwisata'  => 'Paket Wisata',
		'akomodasi'    => 'Akomodasi',
		'suvenir'      => 'Suvenir',
		'budaya'       => 'Budaya',
		'bumdes'       => 'BUMDes',
		'berita'       => 'Berita',
	);
}

function kaduela_is_nav_active( $slug ) {
	if ( 'beranda' === $slug ) {
		return is_front_page();
	}

	if ( 'destinasi' === $slug ) {
		return is_page( array( 'destinasi', 'telaga', 'sideland' ) );
	}

	if ( 'berita' === $slug ) {
		return is_page( 'berita' ) || is_home() || is_singular( 'post' ) || is_archive() || is_search();
	}

	return is_page( $slug );
}

function kaduela_excerpt( $words = 28 ) {
	return wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), absint( $words ), '…' );
}

function kaduela_install_pages() {
	$pages = array(
		'beranda'     => 'Beranda',
		'profil'      => 'Profil',
		'destinasi'   => 'Destinasi',
		'telaga'      => 'Telaga Biru Cicerem',
		'sideland'    => 'Wisata Side Land',
		'paketwisata' => 'Paket Wisata',
		'akomodasi'   => 'Akomodasi',
		'suvenir'     => 'Suvenir',
		'budaya'      => 'Budaya',
		'bumdes'      => 'BUMDes',
		'berita'      => 'Berita',
	);
	$page_ids = array();

	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug, OBJECT, 'page' );

		if ( $existing instanceof WP_Post ) {
			$page_ids[ $slug ] = (int) $existing->ID;
			continue;
		}

		$page_id = wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_author'  => get_current_user_id(),
				'post_content' => '<!-- Konten halaman disediakan oleh theme Desa Wisata Kaduela. -->',
			),
			true
		);

		if ( ! is_wp_error( $page_id ) ) {
			$page_ids[ $slug ] = (int) $page_id;
		}
	}

	if ( ! empty( $page_ids['beranda'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_ids['beranda'] );
		update_option( 'page_for_posts', 0 );
	}

	update_option( 'kaduela_theme_installed_version', KADUELA_THEME_VERSION );
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'kaduela_install_pages' );

function kaduela_meta_description() {
	if ( is_admin() ) {
		return;
	}

	$descriptions = array(
		'profil'       => 'Profil Desa Kaduela di Kabupaten Kuningan, meliputi kondisi geografis, administrasi, sejarah, dan penghargaan desa.',
		'destinasi'    => 'Informasi destinasi wisata Desa Kaduela, Telaga Biru Cicerem dan Wisata Side Land.',
		'telaga'       => 'Informasi Telaga Biru Cicerem, tarif, layanan, galeri, Jeep Tour, dan lokasi.',
		'sideland'     => 'Informasi Wisata Side Land Kaduela, tarif, layanan, galeri, Jeep Tour, dan lokasi.',
		'paketwisata'  => 'Pilihan paket Kaduela Sehari dan Kaduela Bermalam di Desa Wisata Kaduela.',
		'akomodasi'    => 'Informasi homestay warga Desa Kaduela, kapasitas, tarif, galeri, dan reservasi.',
		'suvenir'      => 'Informasi snack dan suvenir Desa Kaduela beserta harga dan kontak penjual.',
		'budaya'       => 'Warisan budaya, tradisi, legenda, dan situs cagar budaya Desa Kaduela.',
		'bumdes'       => 'Profil, unit usaha, legalitas, dan galeri BUMDes Arya Kamuning Kaduela.',
		'berita'       => 'Berita dan kegiatan terbaru dari Desa Kaduela.',
	);

	$description = 'Portal resmi Desa Wisata Kaduela, Kecamatan Pasawahan, Kabupaten Kuningan.';
	foreach ( $descriptions as $slug => $text ) {
		if ( is_page( $slug ) ) {
			$description = $text;
			break;
		}
	}

	if ( is_singular( 'post' ) && has_excerpt() ) {
		$description = wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 28, '…' );
	}

	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
}
add_action( 'wp_head', 'kaduela_meta_description', 1 );
