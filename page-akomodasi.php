<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO AKOMODASI ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Ganti dengan foto asli homestay Desa Kaduela. -->
      <img data-photo-slot="akomodasi-hero" src="<?php echo esc_url( kaduela_asset_uri( 'akomodasi_hero.jpg' ) ); ?>" alt="Ruang tamu homestay warga di Desa Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-5xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.2rem,6.2vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Akomodasi Desa <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= DAFTAR HOMESTAY ========================= -->
    <section id="homestay" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Homestay Desa Kaduela</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 lg:grid-cols-3">
          <!-- ========================= HOMESTAY 01 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-askam-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_askam_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Bapak Askam" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-askam-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_askam_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Bapak Askam" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-askam-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_askam_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Bapak Askam" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-askam-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_askam_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Bapak Askam" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Bapak Askam"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Bapak Askam"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="askam" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Bapak Askam</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 15 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>

          <!-- ========================= HOMESTAY 02 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-bai-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_bai_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Abah Ba'i" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-bai-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_bai_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Abah Ba'i" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-bai-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_bai_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Abah Ba'i" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-bai-dapur" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_bai_dapur.jpg' ) ); ?>" alt="Dapur Homestay Abah Ba'i" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-bai-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_bai_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Abah Ba'i" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Abah Ba'i"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Abah Ba'i"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="bai" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Abah Ba'i</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 9 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>

          <!-- ========================= HOMESTAY 03 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-hindun-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_hindun_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Ibu Hindun" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-hindun-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_hindun_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Ibu Hindun" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-hindun-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_hindun_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Ibu Hindun" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-hindun-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_hindun_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Ibu Hindun" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Ibu Hindun"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Ibu Hindun"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="hindun" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Ibu Hindun</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 9 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>

          <!-- ========================= HOMESTAY 04 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-ita-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_ita_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Ibu Ita" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-ita-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_ita_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Ibu Ita" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-ita-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_ita_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Ibu Ita" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-ita-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_ita_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Ibu Ita" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Ibu Ita"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Ibu Ita"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="ita" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Ibu Ita</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 9 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>

          <!-- ========================= HOMESTAY 05 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-iyet-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_iyet_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Ibu Iyet" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-iyet-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_iyet_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Ibu Iyet" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-iyet-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_iyet_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Ibu Iyet" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-iyet-dapur" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_iyet_dapur.jpg' ) ); ?>" alt="Dapur Homestay Ibu Iyet" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-iyet-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_iyet_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Ibu Iyet" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Ibu Iyet"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Ibu Iyet"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="iyet" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Ibu Iyet</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 9 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>

          <!-- ========================= HOMESTAY 06 ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-homestay-gallery class="relative aspect-[4/3] overflow-hidden bg-forest-900">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="homestay-wati-depan" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_wati_depan.jpg' ) ); ?>" alt="Tampak depan Homestay Ibu Wati" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-wati-tamu" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_wati_ruang_tamu.jpg' ) ); ?>" alt="Ruang tamu Homestay Ibu Wati" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-wati-kamar" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_wati_kamar_tidur.jpg' ) ); ?>" alt="Kamar tidur Homestay Ibu Wati" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-wati-dapur" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_wati_dapur.jpg' ) ); ?>" alt="Dapur Homestay Ibu Wati" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="homestay-wati-kamar-mandi" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_wati_kamar_mandi.jpg' ) ); ?>" alt="Kamar mandi Homestay Ibu Wati" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto sebelumnya untuk Homestay Ibu Wati"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/70 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Foto berikutnya untuk Homestay Ibu Wati"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 data-owner-field="wati" class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Homestay Ibu Wati</h3>
              <dl class="mt-6 divide-y divide-slate-100 border-y border-slate-100 text-sm">
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Kapasitas</dt><dd class="text-right font-semibold text-forest-900">Maks. 6 orang</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Tarif</dt><dd class="text-right font-semibold text-forest-900">Rp75.000 / orang / malam</dd></div>
                <div class="flex items-center justify-between gap-4 py-3"><dt class="text-slate-500">Sarapan</dt><dd class="text-right font-semibold text-forest-900">Sudah termasuk</dd></div>
              </dl>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= RESERVASI ========================= -->
    <section id="reservasi" class="px-5 py-12 lg:px-8 lg:py-14">
      <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-water-800 px-6 py-8 text-white shadow-soft sm:px-10 sm:py-9 lg:px-12">
        <div class="absolute -left-12 -top-20 h-48 w-48 rounded-full bg-forest-500/50 blur-3xl"></div>
        <div class="absolute -bottom-20 -right-12 h-48 w-48 rounded-full bg-sun-400/30 blur-3xl"></div>
        <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
          <h2 class="reveal font-display text-2xl font-extrabold sm:text-3xl">Reservasi Homestay</h2>
          <a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" class="reveal inline-flex shrink-0 items-center justify-center rounded-2xl bg-sun-400 px-6 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">0813-8766-6671</a>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
