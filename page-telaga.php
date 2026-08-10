<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <img data-photo-slot="telaga-hero" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_hero.jpg' ) ); ?>" alt="Pemandangan telaga dan pepohonan" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-4xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.45rem,7vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Telaga Biru <span class="text-sun-400">Cicerem</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <section class="relative z-10 mx-auto -mt-10 max-w-7xl px-5 lg:px-8">
      <div class="grid gap-4 sm:grid-cols-3">
        <article class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card sm:p-7"><span class="block text-xs font-bold uppercase tracking-[.16em] text-water-600">Jam buka</span><strong class="mt-5 block font-display text-2xl text-forest-900 sm:text-3xl">07.00–17.00</strong><span class="mt-1 block text-sm text-slate-500">Setiap hari</span></article>
        <article class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card sm:p-7"><span class="block text-xs font-bold uppercase tracking-[.16em] text-water-600">HTM</span><strong class="mt-5 block font-display text-2xl text-water-700 sm:text-3xl">Rp15.000</strong><span class="mt-1 block text-sm text-slate-500">Per orang</span></article>
        <article class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-card sm:p-7"><span class="block text-xs font-bold uppercase tracking-[.16em] text-water-600">Rating Google</span><strong class="mt-5 block font-display text-2xl text-forest-900 sm:text-3xl">4,5 / 5</strong><span class="mt-1 block text-sm text-slate-500">9.000+ ulasan</span></article>
      </div>
    </section>

    <section id="tentang" class="px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-5xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Tentang destinasi</span><h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Tentang Telaga</h2></div>
        <div class="mt-10 grid gap-6 lg:grid-cols-[1.06fr_.94fr] lg:items-stretch">
          <article class="reveal flex items-center rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
            <div class="space-y-5 text-justify text-lg leading-8 text-slate-600">
              <p>Telaga Biru Cicerem berada di Desa Kaduela, Kecamatan Pasawahan, Kabupaten Kuningan. Air telaga yang jernih dan lingkungan yang teduh memberi ruang untuk berjalan, berfoto, menikmati perahu, atau beristirahat bersama keluarga.</p>
              <p>Beberapa layanan tambahan tersedia di lokasi, mulai dari wahana foto hingga sewa gazebo, pendopo, dan kayak transparan dengan jasa fotografer.</p>
            </div>
          </article>
          <figure class="reveal relative min-h-[320px] overflow-hidden rounded-[2rem] border border-slate-200 bg-forest-900 shadow-soft sm:min-h-[360px] lg:min-h-0">
            <img data-photo-slot="telaga-sekilas" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_sekilas.jpg' ) ); ?>" alt="Sekilas lanskap Telaga Biru Cicerem" class="absolute inset-0 h-full w-full object-cover">
          </figure>
        </div>
      </div>
    </section>

    <section id="harga" class="px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-3xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Informasi kunjungan</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Tarif dan Layanan Telaga</h2></div>
        <div class="mt-10 grid gap-7 lg:grid-cols-2">
          <article class="reveal overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <div class="border-b border-slate-100 p-6 sm:p-9"><h3 class="font-display text-2xl font-extrabold text-forest-900">Tiket Masuk dan Parkir</h3></div>
            <div class="overflow-x-auto">
              <table class="min-w-[480px] text-left text-sm sm:min-w-full">
                <thead class="bg-forest-50 text-xs uppercase tracking-wider text-forest-800"><tr><th scope="col" class="px-5 py-4 font-bold sm:px-7">Keterangan</th><th scope="col" class="px-5 py-4 text-right font-bold sm:px-7">Tarif</th></tr></thead>
                <tbody class="divide-y divide-slate-100">
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Tarif masuk orang</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp15.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Parkir motor</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp3.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Parkir mobil pribadi</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp5.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Parkir mobil Hiace</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp10.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Parkir bus</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp25.000</td></tr>
                </tbody>
              </table>
            </div>
          </article>
          <article class="reveal overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <div class="border-b border-slate-100 p-6 sm:p-9"><h3 class="font-display text-2xl font-extrabold text-forest-900">Wahana, Dokumentasi, dan Sewa</h3></div>
            <div class="overflow-x-auto">
              <table class="min-w-[520px] text-left text-sm sm:min-w-full">
                <thead class="bg-water-50 text-xs uppercase tracking-wider text-water-800"><tr><th scope="col" class="px-5 py-4 font-bold sm:px-7">Layanan</th><th scope="col" class="px-5 py-4 text-right font-bold sm:px-7">Tarif</th></tr></thead>
                <tbody class="divide-y divide-slate-100">
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Wahana Spot Foto</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp10.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Wahana Perahu</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp10.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Video Drone</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp150.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Tebus Foto</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp10.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Tebus Video</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp10.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Sewa Gazebo</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp50.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Sewa Pendopo</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp300.000</td></tr>
                  <tr><th scope="row" class="px-5 py-4 font-medium text-slate-600 sm:px-7">Sewa kayak transparan + jasa fotografer</th><td class="px-5 py-4 text-right font-bold text-forest-900 sm:px-7">Rp250.000</td></tr>
                </tbody>
              </table>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="galeri" class="bg-slate-50 py-20 lg:py-24">
      <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="reveal mx-auto max-w-3xl text-center"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Dokumentasi</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Galeri Telaga</h2></div>
      </div>
      <div class="gallery-marquee reveal mt-10 w-full" data-gallery-marquee>
        <div class="gallery-marquee-track" data-gallery-marquee-track>
          <div class="flex shrink-0 gap-5 pr-5" data-gallery-marquee-set>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-01" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_01.jpg' ) ); ?>" alt="Air telaga dan pepohonan" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-02" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_02.jpg' ) ); ?>" alt="Pemandangan air dan perbukitan" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-03" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_03.jpg' ) ); ?>" alt="Lanskap hijau di sekitar telaga" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-04" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_04.jpg' ) ); ?>" alt="Perbukitan dengan suasana sejuk" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-05" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_05.jpg' ) ); ?>" alt="Jalur berjalan di lingkungan alami" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-06" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_06.jpg' ) ); ?>" alt="Telaga dengan latar pegunungan" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-07" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_07.jpg' ) ); ?>" alt="Aliran air di kawasan hijau" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-08" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_08.jpg' ) ); ?>" alt="Pepohonan rindang di sekitar kawasan wisata" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-09" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_09.jpg' ) ); ?>" alt="Lanskap perbukitan yang sejuk" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[9/16] w-[68vw] max-w-[300px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="telaga-10" src="<?php echo esc_url( kaduela_asset_uri( 'telaga_galeri_10.jpg' ) ); ?>" alt="Suasana alami menjelang sore" class="h-full w-full object-cover">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section id="jeep-tour" class="bg-white py-20 lg:py-24">
      <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="reveal mx-auto max-w-3xl text-center">
          <h2 class="font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Jeep Tour</h2>
        </div>
        <div class="mx-auto mt-10 grid max-w-3xl gap-5 sm:grid-cols-2">
          <article class="reveal rounded-[2rem] border border-slate-200 bg-slate-50 p-7 shadow-card sm:p-8">
            <h3 class="font-display text-xl font-extrabold text-forest-900">Rute 4 Kilometer</h3>
            <p class="mt-5 font-display text-3xl font-extrabold tracking-tight text-water-800">Rp400.000<span class="ml-1 text-base font-semibold text-slate-500">/jeep</span></p>
          </article>
          <article class="reveal rounded-[2rem] border border-slate-200 bg-slate-50 p-7 shadow-card sm:p-8">
            <h3 class="font-display text-xl font-extrabold text-forest-900">Rute 6 Kilometer</h3>
            <p class="mt-5 font-display text-3xl font-extrabold tracking-tight text-water-800">Rp600.000<span class="ml-1 text-base font-semibold text-slate-500">/jeep</span></p>
          </article>
        </div>
      </div>

      <div class="mx-auto mt-20 max-w-7xl px-5 lg:px-8">
        <div class="reveal mx-auto max-w-3xl text-center">
          <h3 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl">Galeri Jeep Tour</h3>
        </div>
      </div>
      <div class="gallery-marquee reveal mt-10 w-full" data-gallery-marquee>
        <div class="gallery-marquee-track" data-gallery-marquee-track>
          <div class="flex shrink-0 gap-5 pr-5" data-gallery-marquee-set>
            <figure class="relative aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="jeep-tour-01" src="<?php echo esc_url( kaduela_asset_uri( 'jeep_tour_01.jpg' ) ); ?>" alt="Jeep melintasi jalur wisata" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="jeep-tour-02" src="<?php echo esc_url( kaduela_asset_uri( 'jeep_tour_02.jpg' ) ); ?>" alt="Perjalanan jeep di kawasan terbuka" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="jeep-tour-03" src="<?php echo esc_url( kaduela_asset_uri( 'jeep_tour_03.jpg' ) ); ?>" alt="Suasana perjalanan menggunakan jeep" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="jeep-tour-04" src="<?php echo esc_url( kaduela_asset_uri( 'jeep_tour_04.jpg' ) ); ?>" alt="Jeep di rute perjalanan desa" class="h-full w-full object-cover">
            </figure>
            <figure class="relative aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="jeep-tour-05" src="<?php echo esc_url( kaduela_asset_uri( 'jeep_tour_05.jpg' ) ); ?>" alt="Kendaraan untuk kegiatan Jeep Tour" class="h-full w-full object-cover">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="px-5 py-12 lg:px-8 lg:py-14">
      <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-water-800 px-6 py-8 text-white shadow-soft sm:px-9">
        <div class="absolute -left-16 -top-24 h-64 w-64 rounded-full bg-forest-500/50 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-16 h-64 w-64 rounded-full bg-sun-400/30 blur-3xl"></div>
        <div class="reveal relative flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">
          <h2 class="font-display text-2xl font-extrabold sm:text-3xl">Lokasi Telaga Biru Cicerem</h2>
          <a href="https://share.google/V1KeXTX31SMgrXjfI" target="_blank" rel="noopener" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-sun-400 px-5 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">Lihat lokasi di Maps</a>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
