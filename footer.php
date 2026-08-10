<?php
/**
 * Shared site footer.
 *
 * @package Desa_Wisata_Kaduela
 */

defined( 'ABSPATH' ) || exit;
?>
<footer class="bg-forest-900 px-5 pb-8 pt-16 text-white lg:px-8">
	<div class="mx-auto grid max-w-7xl gap-12 border-b border-white/10 pb-12 md:grid-cols-2 lg:grid-cols-[1.25fr_.65fr_1.35fr] lg:gap-14">
		<section aria-labelledby="footer-brand-title">
			<h2 id="footer-brand-title" class="font-display text-xl font-extrabold tracking-tight">Desa Wisata Kaduela</h2>
			<p class="mt-5 max-w-xl text-justify text-sm leading-7 text-white/60">Desa Wisata Kaduela merupakan portal informasi resmi seputar wisata, kegiatan warga, dan usaha lokal di Desa Kaduela, Kecamatan Pasawahan, Kabupaten Kuningan. Dikelola bersama oleh masyarakat melalui BUM Desa Arya Kamuning Kaduela, situs ini menyajikan informasi perjalanan, cerita warga, dan usaha lokal Desa Wisata Kaduela sebagai bagian dari upaya memperkenalkan potensi dan kekayaan desa kepada pengunjung.</p>
		</section>

		<nav aria-labelledby="footer-navigation-title">
			<h2 id="footer-navigation-title" class="font-display text-lg font-bold">Jelajahi</h2>
			<ul class="mt-5 space-y-3 text-sm text-white/65">
				<?php foreach ( kaduela_nav_items() as $slug => $label ) : ?>
					<?php if ( 'beranda' === $slug ) continue; ?>
					<li><a class="transition hover:text-white" href="<?php echo esc_url( kaduela_page_url( $slug ) ); ?>"><?php echo esc_html( $label ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<section class="md:col-span-2 lg:col-span-1" aria-labelledby="footer-contact-title">
			<h2 id="footer-contact-title" class="font-display text-lg font-bold">Info Kontak</h2>
			<address class="mt-5 not-italic text-sm leading-7 text-white/65">
				<p>
					<strong class="font-semibold text-white/85">Alamat Kantor BUM Desa:</strong><br>
					<a href="https://www.google.com/maps/search/?api=1&amp;query=Jl.+Wisata+Telaga+Remis+Km.+1+Desa+Kaduela+Kecamatan+Pasawahan+Kabupaten+Kuningan+Jawa+Barat+45559" target="_blank" rel="noopener noreferrer" class="transition hover:text-sun-400">Jl. Wisata Telaga Remis Km. 1 Desa Kaduela Kecamatan Pasawahan Kabupaten Kuningan Provinsi Jawa Barat, Kode Pos 45559</a>
				</p>
				<ul class="mt-4 space-y-2.5">
					<li><a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" class="transition hover:text-sun-400">0813-8766-6671</a></li>
					<li><a href="mailto:bumdesaryakamuning20@gmail.com" class="break-all transition hover:text-sun-400">bumdesaryakamuning20@gmail.com</a></li>
					<li><a href="https://www.facebook.com/643132902527524" target="_blank" rel="noopener noreferrer" class="transition hover:text-sun-400">Facebook: Telaga Biru Cicerem</a></li>
					<li><a href="https://www.instagram.com/telagabiruciceremofficial/" target="_blank" rel="noopener noreferrer" class="transition hover:text-sun-400">Instagram: telagabiruciceremofficial</a></li>
					<li><a href="https://www.youtube.com/channel/UC-NvNIeba7PzwGHOluJI1qQ" target="_blank" rel="noopener noreferrer" class="transition hover:text-sun-400">YouTube: BUM Desa Arya Kamuning Kaduela</a></li>
				</ul>
			</address>
		</section>
	</div>
	<div class="mx-auto max-w-7xl pt-7 text-xs text-white/40">
		<p class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between sm:gap-8">
			<span>© 2026 Desa Wisata Kaduela</span>
			<span class="sm:text-right">Dibangun bersama masyarakat Desa Kaduela dan Tim Kasera</span>
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
