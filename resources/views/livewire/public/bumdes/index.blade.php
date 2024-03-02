<div>
  {{-- Stop trying to control. --}}
  <section
    class="hero bg-cover bg-center bg-blend-multiply md:h-[95vh] h-[65vh] bg-gray-300 grid place-items-center md:place-items-start"
    style="background-image: url('images/profile-1.webp')">
    <div
      class="text-white h-full w-full bg-gradient-to-b from-green-100/50 to-green-700 flex flex-col justify-center px-5
      md:w-1/2 md:ps-20 md:pe-32 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100%">
      <p class="md:text-4xl text-4xl font-semibold opacity-100 pb-5">
        Bumdes
      </p>
      <p class="text-justify indent-10 md:text-lg font-medium">
        Bumdes adalah singkatan dari Badan Usaha Milik Desa, sebuah inisiatif di mana masyarakat desa mengelola bisnis
        untuk memajukan ekonomi lokal dan meningkatkan kesejahteraan.
      </p>
    </div>
  </section>

  <section id="article-list" class="md:mx-32 md:my-20 mx-5 mt-6">
    @if ($bumdeses->count() > 0)
      <div class="flex flex-wrap justify-between gap-3">
        @foreach ($bumdeses as $bumdes)
          <x-public.bumdes-card :bumdes="$bumdes" />
        @endforeach
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
      <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
        Belum Ada Bumdes Yang Ditambahkan
      </p>
    @endif
  </section>
</div>
