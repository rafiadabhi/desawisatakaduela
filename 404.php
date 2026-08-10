<?php
/**
 * Not found page.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama" class="flex min-h-screen items-center bg-slate-50 px-5 pb-20 pt-32 lg:px-8">
	<div class="mx-auto w-full max-w-3xl rounded-[2rem] border border-slate-200 bg-white px-6 py-14 text-center shadow-card sm:px-10">
		<p class="text-sm font-bold uppercase tracking-[.2em] text-water-700">404</p>
		<h1 class="mt-4 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Halaman tidak ditemukan</h1>
		<p class="mx-auto mt-5 max-w-xl leading-8 text-slate-600">Halaman yang Anda cari mungkin telah dipindahkan atau alamatnya tidak tepat.</p>
		<a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="mt-8 inline-flex min-h-[50px] items-center justify-center rounded-2xl bg-sun-400 px-6 py-3 font-extrabold text-forest-900 transition hover:bg-sun-500">Kembali ke Beranda</a>
	</div>
</main>
<?php get_footer(); ?>
