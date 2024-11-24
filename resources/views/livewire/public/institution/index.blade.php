<div>
  {{-- Stop trying to control. --}}
  <section
    class="hero grid h-[65vh] place-items-center bg-gray-300 bg-hero1 bg-cover bg-center bg-blend-multiply md:h-[95vh] md:place-items-start">
    <div
      class="flex h-full w-full flex-col justify-center bg-gradient-to-b from-green-100/50 to-green-700 px-5 text-white md:w-1/2 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100% md:pe-32 md:ps-20">
      <p class="pb-5 text-4xl font-semibold opacity-100 md:text-4xl">
        Kelembagaan
      </p>
      <p class="text-justify indent-10 font-medium md:text-lg">
        Kelembagaan desa merujuk pada struktur organisasi dan badan-badan yang
        bertanggung jawab atas pemerintahan dan pengelolaan di tingkat desa. Ini
        termasuk badan perwakilan desa, lembaga kemasyarakatan (seperti karang
        taruna), dan lembaga adat atau kearifan lokal.
      </p>
    </div>
  </section>

  <section id="article-list" class="mx-5 mt-6 md:mx-32 md:my-20">
    @if ($institutions->count() > 0)
      @foreach ($institutions as $institution)
        <x-public.institution-container :institution="$institution" wire:key="{{ $institution->id }}" />
      @endforeach
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar" />
      <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
        Belum Ada Lembaga Yang Ditambahkan
      </p>
    @endif
  </section>
</div>
