<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO SUVENIR ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <img data-photo-slot="suvenir-hero" src="<?php echo esc_url( kaduela_asset_uri( 'suvenir_hero.jpg' ) ); ?>" alt="Produk suvenir Desa Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover object-center">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-5xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.35rem,7vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Suvenir Desa <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= SNACK ========================= -->
    <section id="snack" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Snack Kaduela</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 lg:grid-cols-3">
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-dodol" src="<?php echo esc_url( kaduela_asset_uri( 'snack_dodol.png' ) ); ?>" alt="Dodol Kaduela dalam kemasan" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Dodol</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp65.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Dodol melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-stik-pisang-nangka" src="<?php echo esc_url( kaduela_asset_uri( 'snack_stik_pisang_nangka.png' ) ); ?>" alt="Stik pisang nangka dalam kemasan" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Stik Pisang Nangka</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp55.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Stik Pisang Nangka melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-sistik-biji-durian" src="<?php echo esc_url( kaduela_asset_uri( 'snack_sistik_biji_durian.png' ) ); ?>" alt="Sistik biji durian dalam kemasan" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Sistik Biji Durian</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp65.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Sistik Biji Durian melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-kripcok-lumer" src="<?php echo esc_url( kaduela_asset_uri( 'snack_kripcok_lumer.png' ) ); ?>" alt="Kripcok lumer dalam kemasan" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Kripcok Lumer</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp65.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Kripcok Lumer melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-keripik-sukun" src="<?php echo esc_url( kaduela_asset_uri( 'snack_keripik_sukun.png' ) ); ?>" alt="Keripik sukun dalam kemasan" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Keripik Sukun</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp60.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Keripik Sukun melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-square overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-keripik-pisang-nangka" src="<?php echo esc_url( kaduela_asset_uri( 'snack_keripik_pisang_nangka.png' ) ); ?>" alt="Keripik pisang nangka" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Keripik Pisang Nangka</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp55.000 / kg</p>
              <a href="https://wa.me/6285295930064" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Keripik Pisang Nangka melalui WhatsApp di 0852-9593-0064" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0852-9593-0064</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= MERCH ========================= -->
    <section id="merch" class="border-t border-slate-200 bg-slate-50 px-5 py-16 lg:px-8 lg:py-20">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Merch Kaduela</h2>
        </div>

        <div class="mt-8 grid items-stretch gap-7 md:grid-cols-2">
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[3/2] overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="suvenir-gantungan-kunci" src="<?php echo esc_url( kaduela_asset_uri( 'merch_gantungan_kunci.png' ) ); ?>" alt="Gantungan kunci bertema Telaga Biru Cicerem" loading="lazy" decoding="async" class="h-full w-full object-contain transition duration-500 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-5 sm:p-6">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Gantungan Kunci Kaduela</h3>
              <p class="mt-3 font-semibold text-slate-600">Rp5.000</p>
              <a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Gantungan Kunci Kaduela melalui WhatsApp di 0813-8766-6671" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0813-8766-6671</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure data-product-gallery tabindex="0" aria-label="Galeri delapan desain Baju Kaduela" class="relative aspect-[3/2] overflow-hidden bg-slate-300 focus:outline-none focus:ring-4 focus:ring-inset focus:ring-sun-400">
              <div data-gallery-track class="flex h-full w-full transition-transform duration-500 ease-out">
                <img data-photo-slot="suvenir-baju-01" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_01.jpg' ) ); ?>" alt="Desain pertama Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-02" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_02.jpg' ) ); ?>" alt="Desain kedua Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-03" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_03.jpg' ) ); ?>" alt="Desain ketiga Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-04" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_04.jpg' ) ); ?>" alt="Desain keempat Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-05" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_05.jpg' ) ); ?>" alt="Desain kelima Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-06" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_06.jpg' ) ); ?>" alt="Desain keenam Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-07" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_07.jpg' ) ); ?>" alt="Desain ketujuh Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
                <img data-photo-slot="suvenir-baju-08" src="<?php echo esc_url( kaduela_asset_uri( 'merch_baju_08.jpg' ) ); ?>" alt="Desain kedelapan Baju Kaduela" loading="lazy" decoding="async" class="h-full w-full shrink-0 object-cover">
              </div>
              <button data-gallery-prev type="button" class="absolute left-3 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/75 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Lihat desain baju sebelumnya"><span aria-hidden="true">←</span></button>
              <button data-gallery-next type="button" class="absolute right-3 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-forest-900/75 text-xl font-semibold text-white shadow-lg backdrop-blur transition hover:bg-forest-900 focus:outline-none focus:ring-2 focus:ring-sun-400" aria-label="Lihat desain baju berikutnya"><span aria-hidden="true">→</span></button>
            </figure>
            <div class="flex flex-1 flex-col p-5 sm:p-6">
              <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Baju Kaduela</h3>
              <p class="mt-3 whitespace-nowrap text-[13px] font-semibold text-slate-600 sm:text-sm">Regular Rp100.000 <span class="mx-1 text-slate-300" aria-hidden="true">|</span> Kids Rp60.000</p>
              <a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" aria-label="Hubungi penjual Baju Kaduela melalui WhatsApp di 0813-8766-6671" class="mt-auto flex items-center justify-between gap-4 border-t border-slate-100 pt-5 text-sm font-bold text-forest-700 transition hover:text-forest-900">
                <span>Hubungi Penjual</span>
                <span class="whitespace-nowrap font-semibold text-slate-500">0813-8766-6671</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
