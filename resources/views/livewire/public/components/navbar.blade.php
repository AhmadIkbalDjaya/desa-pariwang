<div class="shadow w-full fixed top-0 left-0 z-10 bg-white">
  <header class="px-0 md:px-20 py-0 md:py-3 md:flex md:items-baseline md:gap-x-3">
    <div class="flex justify-between items-center py-3 md:py-0 px-3 md:px-0">
      <a wire:navigate href=""
        class="text-green-700 text-3xl font-justMeAgainDownHere whitespace-nowrap font-bold">
        DESA PARIWANG
      </a>
      @if ($open)
        <i wire:click='clickOpen' class="ti ti-menu-2 md:hidden text-green-700 cursor-pointer text-2xl"></i>
      @else
        <i wire:click='clickOpen' class="ti ti-menu-deep md:hidden text-green-700 cursor-pointer text-2xl"></i>
      @endif
    </div>
    <div
      class="bg-white grow py-1 px-3 md:px-0 md:py-0 md:flex md:justify-end justify-center w-full md:items-baseline absolute md:static
      w-full transition-all duration-500 ease-in {{ $open ? 'top-15 opacity-100' : 'top-[-400px] opacity-0 md:opacity-100' }}">
      <ul class="md:flex gap-4">
        <li class="my-3 md:my-0">
          <div class="relative pb-1 text-center">
            <span
              class="{{ Request::is('/') ? 'block' : 'hidden' }} bg-green-700 h-1 md:w-2/4 w-8 absolute bottom-0 rounded-lg inset-x-1/2 -translate-x-1/2 md:inset-x-0 md:translate-x-0"></span>
            <a wire:navigate href="{{ route('home') }}" wire:navigate
              class="md:flex gap-x-1 font-plusJakartaSans font-semibold text-base text-green-700">
              Home
            </a>
          </div>
        </li>
        <li class="my-3 md:my-0">
          <div class="relative pb-1 text-center">
            <span
              class="{{ Request::is('berita-&-kegiatan*') ? 'block' : 'hidden' }} bg-green-700 h-1 md:w-2/4 w-8 absolute bottom-0 rounded-lg inset-x-1/2 -translate-x-1/2 md:inset-x-0 md:translate-x-0"></span>
            <a wire:navigate href="{{ route('article') }}" wire:navigate
              class="md:flex gap-x-1 font-plusJakartaSans font-semibold text-base text-green-700">
              Berita
            </a>
          </div>
        </li>
        <li class="my-3 md:my-0">
          <div class="relative pb-1 text-center">
            <span
              class="{{ Request::is('bumdes*') ? 'block' : 'hidden' }} bg-green-700 h-1 md:w-2/4 w-8 absolute bottom-0 rounded-lg inset-x-1/2 -translate-x-1/2 md:inset-x-0 md:translate-x-0"></span>
            <a wire:navigate href="{{ route('bumdes') }}" wire:navigate
              class="md:flex gap-x-1 font-plusJakartaSans font-semibold text-base text-green-700">
              Bumdes
            </a>
          </div>
        </li>
        <li class="my-3 md:my-0">
          <div class="relative pb-1 text-center">
            <span
              class="{{ Request::is('kelembagaan') ? 'block' : 'hidden' }} bg-green-700 h-1 md:w-2/4 w-8 absolute bottom-0 rounded-lg inset-x-1/2 -translate-x-1/2 md:inset-x-0 md:translate-x-0"></span>
            <a wire:navigate href="{{ route('institution') }}" wire:navigate
              class="md:flex gap-x-1 font-plusJakartaSans font-semibold text-base text-green-700">
              Kelembagaan
            </a>
          </div>
        </li>
        <li class="my-3 md:my-0">
          <div class="relative pb-1 text-center">
            <span
              class="{{ Request::is('tentang') ? 'block' : 'hidden' }} bg-green-700 h-1 md:w-2/4 w-8 absolute bottom-0 rounded-lg inset-x-1/2 -translate-x-1/2 md:inset-x-0 md:translate-x-0"></span>
            <a wire:navigate href="{{ route('about') }}" wire:navigate
              class="md:flex gap-x-1 font-plusJakartaSans font-semibold text-base text-green-700">
              Tentang
            </a>
          </div>
        </li>
      </ul>
    </div>
  </header>
</div>
