<div>
  <section
    class="hero bg-cover bg-center bg-blend-multiply md:h-[95vh] h-[65vh] bg-gray-300 grid place-items-center md:place-items-start"
    style="background-image: url('images/village-2.webp')">
    <div
      class="text-white h-full w-full bg-gradient-to-b from-green-100/50 to-green-700 flex flex-col justify-center px-5
      md:w-1/2 md:ps-20 md:pe-32 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100%">
      <p class="md:text-4xl text-4xl font-semibold opacity-100 pb-5">
        Berita & Kegiatan
      </p>
      <p class="text-justify indent-10 md:text-lg font-medium">
        Berita desa meliputi kegiatan, peristiwa, dan perkembangan di desa atau kawasan pedesaan, seperti pembangunan
        infrastruktur, kegiatan sosial, pertanian, pendidikan, kebudayaan, serta permasalahan atau pencapaian yang
        berkaitan dengan kehidupan di desa pariwang.
        {{-- Berita desa sangat penting karena memberikan gambaran tentang kondisi
        dan dinamika kehidupan di pedesaan, serta dapat menjadi sarana untuk memperkuat identitas dan partisipasi
        masyarakat desa dalam pembangunan lokal. --}}
      </p>
    </div>
  </section>

  <section id="article-list" class="md:mx-32 md:my-20 mx-2 mt-6">
    @if ($articles->count() > 0)
      <div class="flex flex-wrap justify-around">
        @foreach ($articles as $article)
          <x-public.article-card responsive='1' :article="$article" />
        @endforeach
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.png') }}" alt="Gambar">
      <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
        Belum Ada Berita Yang Ditambahkan
      </p>
      {{-- <p class="text-center text-base md:text-lg font-medium text-gray-400 pt-3">
        Belum Ada Berita Yang Ditambahkan
      </p> --}}
    @endif
  </section>
</div>
