<div>
  <section
    class="hero grid h-[65vh] place-items-center bg-gray-300 bg-hero1 bg-cover bg-center bg-blend-multiply md:h-[95vh] md:place-items-start">
    <div
      class="flex h-full w-full flex-col justify-center bg-gradient-to-b from-green-100/50 to-green-700 px-5 text-white md:w-1/2 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100% md:pe-32 md:ps-20">
      <p class="pb-5 text-4xl font-semibold opacity-100 md:text-4xl">Bumdes</p>
      <p class="text-justify indent-10 font-medium md:text-lg">
        Bumdes adalah singkatan dari Badan Usaha Milik Desa, sebuah inisiatif di
        mana masyarakat desa mengelola bisnis untuk memajukan ekonomi lokal dan
        meningkatkan kesejahteraan.
      </p>
    </div>
  </section>

  <section id="article-list" class="mx-5 mt-6 md:mx-32 md:my-20">
    @if ($bumdeses->count() > 0)
      <div class="flex flex-wrap justify-between gap-3">
        @foreach ($bumdeses as $bumdes)
          <x-public.bumdes-card :bumdes="$bumdes" wire:key="{{ $bumdes->id }}" />
        @endforeach
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Desa Pariwang" />
      <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
        Belum Ada Bumdes Yang Ditambahkan
      </p>
    @endif
  </section>
</div>
