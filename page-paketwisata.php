<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Ganti sumber gambar berikut dengan foto rombongan wisata Kaduela. -->
      <img data-photo-slot="paket-hero" src="<?php echo esc_url( kaduela_asset_uri( 'paketwisata_hero.jpg' ) ); ?>" alt="Perjalanan wisata bersama di kawasan alam" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-5xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 font-display text-[clamp(2.25rem,7.2vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Paket Wisata <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= PENGANTAR ========================= -->
    <section class="px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Pilihan paket</span>
          <h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Pilih Waktu Kunjungan</h2>
        </div>

        <div class="mt-8 grid gap-5 md:grid-cols-2">
          <a href="#kaduela-sehari" class="reveal group block rounded-[1.5rem] border border-slate-200 bg-white px-6 py-5 shadow-card transition hover:-translate-y-1 hover:border-forest-200 hover:shadow-soft sm:px-7 sm:py-6">
            <span class="min-w-0"><strong class="block font-display text-lg font-extrabold leading-tight tracking-tight text-forest-900 sm:text-xl">Kaduela Sehari</strong><span class="mt-1.5 block text-sm text-slate-500">Mulai Rp165.000 per orang</span></span>
          </a>
          <a href="#kaduela-bermalam" class="reveal group block rounded-[1.5rem] border border-forest-800 bg-forest-900 px-6 py-5 text-white shadow-card transition hover:-translate-y-1 hover:border-forest-700 hover:bg-forest-800 hover:shadow-soft sm:px-7 sm:py-6">
            <span class="min-w-0"><strong class="block font-display text-lg font-extrabold leading-tight tracking-tight text-white sm:text-xl">Kaduela Bermalam</strong><span class="mt-1.5 block text-sm text-white/60">Mulai Rp240.000 per orang</span></span>
          </a>
        </div>
      </div>
    </section>

    <!-- ========================= KADUELA SEHARI ========================= -->
    <section id="kaduela-sehari" class="scroll-mt-20 bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="grid items-stretch gap-7 lg:grid-cols-[.82fr_1.18fr]">
          <figure class="reveal relative min-h-[390px] overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft sm:min-h-[500px] lg:min-h-0">
            <!-- Ganti sumber gambar berikut dengan dokumentasi paket Kaduela Sehari. -->
            <img data-photo-slot="paket-sehari" src="<?php echo esc_url( kaduela_asset_uri( 'paketwisata_sehari.jpg' ) ); ?>" alt="Kegiatan wisata sehari di kawasan alam" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-forest-900/75 via-transparent to-transparent"></div>
          </figure>

          <div class="reveal rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
            <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Paket sehari</span>
            <h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Kaduela Sehari</h2>
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-600">Paket kunjungan satu hari untuk rombongan yang ingin menikmati dua destinasi wisata, wahana, Jeep Tour, dan dokumentasi perjalanan.</p>

            <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3">
              <article class="rounded-[1.5rem] border border-forest-200/60 bg-forest-100 p-5 text-forest-900 sm:p-6"><strong class="block font-display text-xl leading-tight sm:text-2xl">1 Hari</strong><span class="mt-1.5 block text-sm text-forest-800/60">durasi kunjungan</span></article>
              <article class="rounded-[1.5rem] border border-forest-200/60 bg-forest-100 p-5 text-forest-900 sm:p-6"><strong class="block font-display text-xl leading-tight sm:text-2xl">20–50</strong><span class="mt-1.5 block text-sm text-forest-800/60">pilihan jumlah peserta</span></article>
              <article class="col-span-2 rounded-[1.5rem] border border-forest-200/60 bg-forest-100 p-5 text-forest-900 sm:col-span-1 sm:p-6"><strong class="block font-display text-xl sm:text-2xl">Rp165.000</strong><span class="mt-1.5 block text-sm text-forest-800/60">mulai per orang</span></article>
            </div>
          </div>
        </div>

        <div class="mt-7 grid items-start gap-7 lg:grid-cols-[1.08fr_.92fr]">
          <article class="reveal rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-8">
            <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Fasilitas Paket</h3>
            <ul class="mt-5 grid gap-3 sm:grid-cols-2">
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Tiket masuk dua wisata</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Parkir kendaraan</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Wahana ayunan</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Wahana perahu</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Tiga file foto</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Jeep Tour</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3 sm:col-span-2"><span>Dokumentasi drone, foto, dan video hasil edit</span></li>
            </ul>
          </article>

          <article class="reveal overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <div class="border-b border-slate-200 px-7 py-6 sm:px-10"><h3 class="font-display text-2xl font-extrabold text-forest-900">Harga per Orang</h3><p class="mt-2 text-sm leading-6 text-slate-500">Harga mengikuti jumlah peserta dalam satu rombongan.</p></div>
            <div class="overflow-x-auto">
              <table class="min-w-full text-left" aria-label="Harga paket Kaduela Sehari berdasarkan jumlah peserta">
                <thead class="text-xs uppercase tracking-[.12em] text-slate-500"><tr><th scope="col" class="px-7 py-4 font-bold sm:px-10">Jumlah peserta</th><th scope="col" class="px-7 py-4 text-right font-bold sm:px-10">Harga per orang</th></tr></thead>
                <tbody class="divide-y divide-slate-100 text-slate-600"><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">20 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp180.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">30 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp175.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">40 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp170.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">50 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp165.000</td></tr></tbody>
              </table>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= KADUELA BERMALAM ========================= -->
    <section id="kaduela-bermalam" class="scroll-mt-20 bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="grid items-stretch gap-7 lg:grid-cols-[1.18fr_.82fr]">
          <div class="reveal order-2 rounded-[2rem] border border-white/10 bg-white/10 p-7 shadow-soft backdrop-blur sm:p-10 lg:order-1">
            <span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Paket menginap</span>
            <h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Kaduela Bermalam</h2>
            <p class="mt-5 max-w-3xl text-lg leading-8 text-white/70">Paket kunjungan dengan satu malam menginap di homestay, sarapan, dua destinasi wisata, wahana, Jeep Tour, dan dokumentasi perjalanan.</p>

            <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3">
              <article class="rounded-[1.5rem] bg-sun-400 p-5 text-forest-900 sm:p-6"><strong class="block font-display text-xl leading-tight sm:text-2xl">1 Hari + 1 Malam</strong><span class="mt-1.5 block text-sm text-forest-900/65">durasi kunjungan</span></article>
              <article class="rounded-[1.5rem] bg-sun-400 p-5 text-forest-900 sm:p-6"><strong class="block font-display text-xl sm:text-2xl">20–50</strong><span class="mt-1.5 block text-sm text-forest-900/65">pilihan jumlah peserta</span></article>
              <article class="col-span-2 rounded-[1.5rem] bg-sun-400 p-5 text-forest-900 sm:col-span-1 sm:p-6"><strong class="block font-display text-xl sm:text-2xl">Rp240.000</strong><span class="mt-1.5 block text-sm text-forest-900/65">mulai per orang</span></article>
            </div>
          </div>

          <figure class="reveal relative order-1 min-h-[390px] overflow-hidden rounded-[2rem] bg-water-900 shadow-soft sm:min-h-[500px] lg:order-2 lg:min-h-0">
            <!-- Ganti sumber gambar berikut dengan dokumentasi paket Kaduela Bermalam. -->
            <img data-photo-slot="paket-bermalam" src="<?php echo esc_url( kaduela_asset_uri( 'paketwisata_bermalam.jpg' ) ); ?>" alt="Penginapan untuk paket wisata bermalam" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-water-900/75 via-transparent to-transparent"></div>
          </figure>
        </div>

        <div class="mt-7 grid items-start gap-7 lg:grid-cols-[1.08fr_.92fr]">
          <article class="reveal rounded-[2rem] border border-white/10 bg-white p-7 text-slate-700 shadow-soft sm:p-8">
            <h3 class="font-display text-xl font-extrabold tracking-tight text-forest-900 sm:text-2xl">Fasilitas Paket</h3>
            <ul class="mt-5 grid gap-3 sm:grid-cols-2">
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Tiket masuk dua wisata</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Parkir kendaraan</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Wahana perahu</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Wahana ayunan</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Tiga file foto</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Jeep Tour</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Sarapan satu kali</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3"><span>Homestay satu malam</span></li>
              <li class="flex min-h-[56px] items-center rounded-2xl bg-slate-50 px-4 py-3 sm:col-span-2"><span>Dokumentasi drone, foto, dan video hasil edit</span></li>
            </ul>
          </article>

          <article class="reveal overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <div class="border-b border-slate-200 px-7 py-6 sm:px-10"><h3 class="font-display text-2xl font-extrabold text-forest-900">Harga per Orang</h3><p class="mt-2 text-sm leading-6 text-slate-500">Harga mengikuti jumlah peserta dalam satu rombongan.</p></div>
            <div class="overflow-x-auto">
              <table class="min-w-full text-left" aria-label="Harga paket Kaduela Bermalam berdasarkan jumlah peserta">
                <thead class="text-xs uppercase tracking-[.12em] text-slate-500"><tr><th scope="col" class="px-7 py-4 font-bold sm:px-10">Jumlah peserta</th><th scope="col" class="px-7 py-4 text-right font-bold sm:px-10">Harga per orang</th></tr></thead>
                <tbody class="divide-y divide-slate-100 text-slate-600"><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">20 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp255.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">30 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp250.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">40 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp245.000</td></tr><tr><th scope="row" class="px-7 py-4 font-semibold text-forest-800 sm:px-10">50 orang</th><td class="px-7 py-4 text-right font-bold sm:px-10">Rp240.000</td></tr></tbody>
              </table>
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
          <h2 class="reveal font-display text-2xl font-extrabold sm:text-3xl">Reservasi Paket Wisata</h2>
          <a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" class="reveal inline-flex shrink-0 items-center justify-center rounded-2xl bg-sun-400 px-6 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">0813-8766-6671</a>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
