<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO PROFIL ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Ganti dengan foto lanskap asli Desa Kaduela. -->
      <img data-photo-slot="profil-hero" src="<?php echo esc_url( kaduela_asset_uri( 'profil_hero.jpg' ) ); ?>" alt="Lanskap hijau pegunungan Desa Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-4xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.65rem,7.2vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Profil Desa <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= PROFIL SINGKAT ========================= -->
    <section id="deskripsi" class="px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-3xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Profil desa</span>
          <h2 class="mt-3 whitespace-nowrap font-display text-[clamp(1.45rem,6.5vw,3rem)] font-extrabold leading-tight tracking-tight text-forest-900">Mengenal Desa Kaduela</h2>
        </div>

        <div class="mt-10 grid gap-6 lg:grid-cols-[1.06fr_.94fr] lg:items-stretch">
          <article class="reveal flex items-center rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
            <p class="text-justify text-lg leading-8 text-slate-600">Desa Kaduela adalah pelarian dari hiruk-pikuk kota, menghadirkan suasana pedesaan yang autentik dengan pesona alam yang memikat. Dikelilingi perbukitan dan aliran air alami, desa ini mengajak Anda untuk berhenti sejenak, menarik napas dalam-dalam, dan merasakan kedamaian. Tempat ini cocok untuk melepas penat, baik bersama keluarga maupun sendirian. Suasana desa yang asri membuat setiap waktu terasa lebih santai dan menyegarkan.</p>
          </article>

          <!-- Ganti dengan foto asli suasana Desa Kaduela. -->
          <figure class="reveal relative min-h-[320px] overflow-hidden rounded-[2rem] border border-slate-200 bg-forest-900 shadow-soft sm:min-h-[360px] lg:min-h-0">
            <img data-photo-slot="profil-suasana" src="<?php echo esc_url( kaduela_asset_uri( 'profil_suasana.jpg' ) ); ?>" alt="Pemandangan alam Desa Kaduela" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
          </figure>
        </div>
      </div>
    </section>

    <!-- ========================= KONDISI GEOGRAFIS ========================= -->
    <section id="geografis" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-5xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Kondisi geografis</span><h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Kondisi Geografis Desa Kaduela</h2></div>
        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-[.82fr_1.18fr]">
          <!-- Ganti dengan dokumentasi asli bentang alam Desa Kaduela. -->
          <figure class="reveal relative min-h-[390px] overflow-hidden rounded-[2rem] bg-water-800 shadow-soft sm:min-h-[480px] lg:-translate-y-3">
            <img data-photo-slot="profil-geografis" src="<?php echo esc_url( kaduela_asset_uri( 'profil_geografis.jpg' ) ); ?>" alt="Bentang pegunungan dan lembah hijau Desa Kaduela" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
          </figure>

          <div class="grid gap-6">
            <article class="reveal rounded-[2rem] border border-white/10 bg-white/10 p-7 shadow-soft backdrop-blur sm:p-10">
              <div><span class="text-xs font-bold uppercase tracking-[.18em] text-sun-400">Topografi dan iklim</span><h3 class="mt-1 font-display text-2xl font-extrabold tracking-tight text-white">Karakteristik wilayah</h3></div>
              <p class="mt-6 text-lg leading-8 text-white/70">Secara topografis, wilayah Kaduela mencakup dataran rendah dan perbukitan. Variasi ketinggian wilayah memengaruhi karakter lanskap serta suhu udara setempat.</p>
            </article>
            <div class="reveal grid grid-cols-2 gap-4">
              <article class="rounded-[1.5rem] bg-sun-400 p-6 text-forest-900 sm:p-7"><strong class="block font-display text-2xl leading-tight sm:text-3xl">323,08</strong><span class="mt-1.5 block text-sm text-forest-900/65">luas wilayah (hektare)</span></article>
              <article class="rounded-[1.5rem] bg-sun-400 p-6 text-forest-900 sm:p-7"><strong class="block font-display text-2xl leading-tight sm:text-3xl">280–315 mdpl</strong><span class="mt-1.5 block text-sm text-forest-900/65">ketinggian wilayah</span></article>
              <article class="rounded-[1.5rem] bg-sun-400 p-6 text-forest-900 sm:p-7"><strong class="block font-display text-2xl leading-tight sm:text-3xl">20–35 °C</strong><span class="mt-1.5 block text-sm text-forest-900/65">rentang suhu udara</span></article>
              <article class="rounded-[1.5rem] bg-sun-400 p-6 text-forest-900 sm:p-7"><strong class="block font-display text-2xl leading-tight sm:text-3xl">4</strong><span class="mt-1.5 block text-sm text-forest-900/65">dusun dalam wilayah desa</span></article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================= ADMINISTRASI DESA ========================= -->
    <section id="administrasi" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-3xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Wilayah desa</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Administrasi Desa</h2></div>

        <article class="reveal mt-10 rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
          <div class="grid gap-8 lg:grid-cols-[.82fr_1.18fr] lg:items-start">
            <div>
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Pembagian Wilayah</h3>
              <p class="mt-6 text-lg leading-8 text-slate-600">Desa Kaduela memiliki luas wilayah 323,08 hektare yang terbagi atas empat dusun, empat RW, dan delapan RT.</p>
              <div class="mt-6 grid grid-cols-3 gap-3">
                <div class="rounded-2xl border border-forest-200/60 bg-forest-100 p-4 text-center text-forest-900"><strong class="block font-display text-2xl">4</strong><span class="mt-1 block text-xs font-semibold text-forest-800/60">Dusun</span></div>
                <div class="rounded-2xl border border-forest-200/60 bg-forest-100 p-4 text-center text-forest-900"><strong class="block font-display text-2xl">4</strong><span class="mt-1 block text-xs font-semibold text-forest-800/60">RW</span></div>
                <div class="rounded-2xl border border-forest-200/60 bg-forest-100 p-4 text-center text-forest-900"><strong class="block font-display text-2xl">8</strong><span class="mt-1 block text-xs font-semibold text-forest-800/60">RT</span></div>
              </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200">
              <div class="flex flex-col gap-1 border-b border-slate-200 bg-slate-50 px-5 py-4 sm:flex-row sm:items-center sm:justify-between"><h4 class="font-display text-lg font-extrabold text-forest-900">Luas wilayah menurut dusun</h4><span class="text-sm font-semibold text-water-700">Total 323,08 ha</span></div>
              <div class="overflow-x-auto">
                <table class="min-w-full text-left text-sm" aria-label="Luas wilayah menurut dusun di Desa Kaduela">
                  <thead class="bg-white text-xs uppercase tracking-[.12em] text-slate-500"><tr><th scope="col" class="px-5 py-3 font-bold">No.</th><th scope="col" class="px-5 py-3 font-bold">Nama dusun</th><th scope="col" class="px-5 py-3 text-right font-bold">Luas (ha)</th></tr></thead>
                  <tbody class="divide-y divide-slate-100 text-slate-600"><tr><th scope="row" class="px-5 py-3 font-semibold text-forest-800">01</th><td class="px-5 py-3">Bina Loka</td><td class="px-5 py-3 text-right">42,20</td></tr><tr><th scope="row" class="px-5 py-3 font-semibold text-forest-800">02</th><td class="px-5 py-3">Bina Bakti</td><td class="px-5 py-3 text-right">80,98</td></tr><tr><th scope="row" class="px-5 py-3 font-semibold text-forest-800">03</th><td class="px-5 py-3">Bina Warga</td><td class="px-5 py-3 text-right">63,30</td></tr><tr><th scope="row" class="px-5 py-3 font-semibold text-forest-800">04</th><td class="px-5 py-3">Bina Karya</td><td class="px-5 py-3 text-right">136,60</td></tr></tbody>
                  <tfoot class="border-t-2 border-slate-200 bg-slate-50 text-forest-900"><tr><th scope="row" colspan="2" class="px-5 py-3 font-extrabold">Jumlah</th><td class="px-5 py-3 text-right font-extrabold">323,08</td></tr></tfoot>
                </table>
              </div>
            </div>
          </div>
        </article>

        <div id="batas-administratif" class="mt-14">
          <div class="reveal max-w-3xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Batas wilayah</span><h3 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl">Batas Administratif Desa Kaduela</h3></div>
          <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
          <article class="reveal flex h-full flex-col rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card"><h3 class="font-display text-lg font-extrabold text-forest-900">Utara</h3><p class="mt-2 text-sm leading-6 text-slate-500">Desa <strong class="text-forest-800">Mandala</strong>.</p></article>
          <article class="reveal flex h-full flex-col rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card"><h3 class="font-display text-lg font-extrabold text-forest-900">Selatan</h3><p class="mt-2 text-sm leading-6 text-slate-500">Desa <strong class="text-forest-800">Pasawahan</strong>.</p></article>
          <article class="reveal flex h-full flex-col rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card"><h3 class="font-display text-lg font-extrabold text-forest-900">Barat</h3><p class="mt-2 text-sm leading-6 text-slate-500">Desa <strong class="text-forest-800">Cikalahang</strong>.</p></article>
            <article class="reveal flex h-full flex-col rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card"><h3 class="font-display text-lg font-extrabold text-forest-900">Timur</h3><p class="mt-2 text-sm leading-6 text-slate-500">Desa <strong class="text-forest-800">Padamatang</strong>.</p></article>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================= SEJARAH DESA ========================= -->
    <section id="sejarah" class="overflow-hidden bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-3xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Sejarah</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight sm:text-5xl">Sejarah Desa Kaduela</h2></div>

        <div class="mt-10 grid items-stretch gap-7 xl:grid-cols-[1.15fr_.85fr]">
          <article class="reveal h-full rounded-[2rem] bg-white p-7 text-slate-700 shadow-2xl sm:p-10">
            <div class="divide-y divide-slate-100">
              <div class="pb-7"><span class="text-xs font-bold uppercase tracking-[.18em] text-forest-600">1525 Masehi</span><h3 class="mt-2 font-display text-xl font-extrabold text-forest-900">Kedatangan seorang ulama</h3><p class="mt-3 leading-7 text-slate-500">Syech Maulana Makhdum Ibrahim dari Cirebon datang bersama para santri ke lereng Gunung Ciremai untuk menghindari perselisihan paham.</p></div>
              <div class="py-7"><span class="text-xs font-bold uppercase tracking-[.18em] text-forest-600">Masa padepokan</span><h3 class="mt-2 font-display text-xl font-extrabold text-forest-900">Prabu Anom Djanggala Manik</h3><p class="mt-3 leading-7 text-slate-500">Penduduk menerima rombongan tersebut. Padepokan kemudian didirikan dan wilayahnya dikenal sebagai Kaduela.</p></div>
              <div class="pt-7"><span class="text-xs font-bold uppercase tracking-[.18em] text-forest-600">Sekitar 1575 Masehi</span><h3 class="mt-2 font-display text-xl font-extrabold text-forest-900">Warisan yang ditinggalkan</h3><p class="mt-3 leading-7 text-slate-500">Beliau menyebarkan Islam hingga Pajajaran dan Banten, lalu wafat sekitar 1575 dan dimakamkan bersama Nyi Mas Siti Maryam di SiDjanggala, kini Makam Buyut Luhur.</p></div>
            </div>
          </article>

          <aside class="reveal grid gap-5 md:grid-cols-2 xl:grid-cols-1 xl:grid-rows-2">
            <div class="flex h-full min-h-[220px] flex-col justify-center rounded-[2rem] border border-white/10 bg-white/10 p-7 backdrop-blur sm:p-8">
              <h3 class="font-display text-xl font-extrabold leading-tight text-sun-400 sm:text-2xl">Asal usul nama Kaduela</h3>
              <strong class="mt-4 block font-display text-xl text-white sm:text-2xl">“Jauh dari kejelekan.”</strong>
              <p class="mt-3 text-sm leading-6 text-white/70 sm:text-base sm:leading-7"><em>Kadu</em> berarti “jauh” dan <em>Ela</em> berarti “jelek”. Nama ini juga mencerminkan pertemuan budaya Cirebon dan Kuningan.</p>
            </div>
            <div class="flex h-full min-h-[220px] flex-col justify-center rounded-[2rem] border border-white/10 bg-white/10 p-7 backdrop-blur sm:p-8">
              <h3 class="font-display text-xl font-extrabold leading-tight text-sun-400 sm:text-2xl">Asal usul nama Cicerem</h3>
              <p class="mt-4 text-sm leading-6 text-white/70 sm:text-base sm:leading-7">Nama Cicerem dikaitkan dengan <em>Paceureuman</em> (pertemuan) atau <em>Ciri Anu Bakal Ramai</em>, merujuk pada pertemuan Syech Maulana Makhdum Ibrahim dan Syech Haji Abdul Iman.</p>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- ========================= PENGHARGAAN ========================= -->
    <section id="penghargaan" class="px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-3xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Pencapaian</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Penghargaan Desa Kaduela</h2></div>
        <div class="mt-10 grid gap-5 md:grid-cols-2">
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition hover:-translate-y-1 hover:shadow-soft">
            <!-- Ganti dengan dokumentasi penghargaan LDWN yang asli. -->
            <div class="relative h-72 shrink-0 overflow-hidden sm:h-80"><img data-photo-slot="penghargaan-ldwn" src="<?php echo esc_url( kaduela_asset_uri( 'profil_penghargaan_ldwn.jpg' ) ); ?>" alt="Dokumentasi penghargaan Lomba Desa Wisata Nusantara" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105"></div>
            <div class="flex min-h-[150px] flex-1 items-center p-7 sm:p-9">
              <h3 class="font-display text-xl font-extrabold leading-snug tracking-tight text-forest-900 sm:text-2xl">Juara 2 Lomba Desa Wisata Nusantara oleh Kemendes PDTT tahun 2023</h3>
            </div>
          </article>
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition hover:-translate-y-1 hover:shadow-soft">
            <!-- Ganti dengan dokumentasi penghargaan ADWI yang asli. -->
            <div class="relative h-72 shrink-0 overflow-hidden sm:h-80"><img data-photo-slot="penghargaan-adwi" src="<?php echo esc_url( kaduela_asset_uri( 'profil_penghargaan_adwi.jpg' ) ); ?>" alt="Dokumentasi penghargaan Anugerah Desa Wisata Indonesia" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105"></div>
            <div class="flex min-h-[150px] flex-1 items-center p-7 sm:p-9">
              <h3 class="font-display text-xl font-extrabold leading-snug tracking-tight text-forest-900 sm:text-2xl">50 Besar Lomba Anugerah Desa Wisata Indonesia oleh Kemenparekraf tahun 2024</h3>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= CTA ========================= -->
    <section class="px-5 py-20 lg:px-8">
      <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-water-800 px-6 py-14 text-center text-white shadow-soft sm:px-12"><div class="absolute -left-16 -top-24 h-64 w-64 rounded-full bg-forest-500/50 blur-3xl"></div><div class="absolute -bottom-24 -right-16 h-64 w-64 rounded-full bg-sun-400/30 blur-3xl"></div><div class="relative mx-auto max-w-3xl"><h2 class="font-display text-4xl font-extrabold sm:text-5xl">Jelajahi Kaduela.</h2><p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-white/70">Lihat destinasi dan pengalaman lain yang bisa Anda nikmati.</p><a href="<?php echo esc_url( kaduela_page_url( 'destinasi', '' ) ); ?>" class="mt-8 inline-flex items-center rounded-2xl bg-sun-400 px-7 py-4 font-extrabold text-forest-900 transition hover:bg-sun-500">Lihat destinasi</a></div></div>
    </section>
  </main>
<?php get_footer(); ?>
