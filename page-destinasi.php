<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO DESTINASI ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Ganti dengan foto asli destinasi Desa Kaduela. -->
      <img data-photo-slot="destinasi-hero" src="<?php echo esc_url( kaduela_asset_uri( 'destinasi_hero.jpg' ) ); ?>" alt="Bentang alam destinasi wisata Desa Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-4xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.65rem,8.5vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Destinasi <span class="text-sun-400">Wisata</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= PILIHAN DESTINASI ========================= -->
    <section id="pilihan-destinasi" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Pilihan Wisata di Kaduela</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-2">
          <!-- ========================= TELAGA BIRU CICEREM ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="relative aspect-[16/10] overflow-hidden bg-forest-900">
              <!-- Ganti dengan dokumentasi asli Telaga Biru Cicerem. -->
              <img data-photo-slot="destinasi-telaga" src="<?php echo esc_url( kaduela_asset_uri( 'destinasi_telaga.jpg' ) ); ?>" alt="Telaga Biru Cicerem dengan pepohonan di sekelilingnya" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900 sm:text-3xl">Telaga Biru Cicerem</h3>
              <a href="<?php echo esc_url( kaduela_page_url( 'telaga', '' ) ); ?>" class="mt-auto pt-7">
                <span class="flex min-h-[52px] items-center justify-center rounded-2xl bg-forest-700 px-5 py-3.5 text-center font-extrabold text-white transition hover:bg-forest-800">Lihat Selengkapnya</span>
              </a>
            </div>
          </article>

          <!-- ========================= WISATA SIDE LAND ========================= -->
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="relative aspect-[16/10] overflow-hidden bg-forest-900">
              <!-- Ganti dengan dokumentasi asli Wisata Side Land Kaduela. -->
              <img data-photo-slot="destinasi-sideland" src="<?php echo esc_url( kaduela_asset_uri( 'destinasi_sideland.jpg' ) ); ?>" alt="Kolam renang dan kawasan rekreasi Side Land Kaduela" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900 sm:text-3xl">Wisata Side Land Kaduela</h3>
              <a href="<?php echo esc_url( kaduela_page_url( 'sideland', '' ) ); ?>" class="mt-auto pt-7">
                <span class="flex min-h-[52px] items-center justify-center rounded-2xl bg-forest-700 px-5 py-3.5 text-center font-extrabold text-white transition hover:bg-forest-800">Lihat Selengkapnya</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
