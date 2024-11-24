<div class="bg-white pb-5 pt-8">
  {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
  <p class="whitespace-nowrap text-center font-justMeAgainDownHere text-3xl font-bold uppercase text-green-700">
    DESA {{ $profile->name }}
  </p>
  <div class="contact mx-12 mt-4 flex flex-wrap justify-around md:mx-60">
    <div class="mb-5 flex basis-full items-center gap-2 md:basis-auto">
      <i class="ti ti-phone text-3xl text-gray-300"></i>
      <div>
        <p class="text-sm text-gray-400">Telepon</p>
        <p class="text-sm font-bold text-green-700">{{ $profile->contact }}</p>
      </div>
    </div>
    <div class="mb-5 flex basis-full items-center gap-2 md:basis-auto">
      <i class="ti ti-mail text-3xl text-gray-300"></i>
      <div>
        <p class="text-sm text-gray-400">Email</p>
        <p class="text-sm font-bold text-green-700">{{ $profile->email }}</p>
      </div>
    </div>
    <div class="mb-5 flex basis-full items-center gap-2 md:basis-auto">
      <i class="ti ti-map-pin text-3xl text-gray-300"></i>
      <div>
        <p class="text-sm text-gray-400">Alamat</p>
        <p class="text-sm font-bold capitalize text-green-700">
          Kec. {{ $location->district }} Kab. {{ $location->regency }}
        </p>
      </div>
    </div>
  </div>
  <span class="mx-5 block h-[0.5px] bg-gray-300 md:mx-10"></span>
  <div class="mx-20 mt-4 flex flex-wrap justify-center md:justify-between">
    <div class="flex gap-4 font-semibold">
      <a wire:navigate href="{{ route('home') }}" class="text-xs text-gray-700">
        Beranda
      </a>
      <a wire:navigate href="{{ route('article') }}" class="text-xs text-gray-700">
        Berita
      </a>
      <a wire:navigate href="{{ route('bumdes') }}" class="text-xs text-gray-700">
        Bumdes
      </a>
      <a wire:navigate href="{{ route('institution') }}" class="text-xs text-gray-700">
        Kelembagaan
      </a>
      <a wire:navigate href="{{ route('about') }}" class="text-xs text-gray-700">
        Tentang
      </a>
    </div>
    <p class="mt-2 flex flex-wrap justify-center text-xs font-medium text-gray-700">
      &copy;2024, Develop by&nbsp;
      <span class="font-semibold text-green-700">POSKO 11 KKN UINAM 74</span>
    </p>
  </div>
</div>
