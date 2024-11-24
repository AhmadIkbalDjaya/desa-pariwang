<div>
  <section
    class="hero grid h-[65vh] place-items-center bg-gray-300 bg-hero1 bg-cover bg-center bg-blend-multiply md:h-[95vh] md:place-items-start">
    <div
      class="flex h-full w-full flex-col justify-center bg-gradient-to-b from-green-100/50 to-green-700 px-5 text-white md:w-1/2 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100% md:pe-32 md:ps-20">
      <p class="pb-5 text-4xl font-semibold opacity-100 md:text-4xl">
        Berita & Kegiatan
      </p>
      <p class="text-justify indent-10 font-medium md:text-lg">
        Berita desa meliputi kegiatan, peristiwa, dan perkembangan di desa atau
        kawasan pedesaan, seperti pembangunan infrastruktur, kegiatan sosial,
        pertanian, pendidikan, kebudayaan, serta permasalahan atau pencapaian
        yang berkaitan dengan kehidupan di desa.
      </p>
    </div>
  </section>

  <section id="article-list" class="mx-2 mt-6 md:mx-32 md:my-20">
    @if ($articles->count() > 0)
      <div class="flex flex-wrap justify-around">
        @foreach ($articles as $article)
          <x-public.article-card responsive="1" :article="$article" wire:key="{{ $article->id }}" />
        @endforeach
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Desa Pariwang" />
      <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
        Belum Ada Berita Yang Ditambahkan
      </p>
    @endif
  </section>
</div>
