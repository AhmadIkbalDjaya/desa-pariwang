<div x-data="navbar" class="fixed left-0 top-0 z-10 w-full bg-white shadow">
  <header class="px-0 py-0 md:flex md:items-baseline md:gap-x-3 md:px-20 md:py-3">
    <!-- Logo & Toggle Menu -->
    <div class="flex items-center justify-between px-3 py-3 md:px-0 md:py-0">
      <a wire:navigate.hover href="{{ route('home') }}"
        class="whitespace-nowrap font-justMeAgainDownHere text-3xl font-bold uppercase text-green-700">
        DESA {{ $profile->name }}
      </a>
      <i @click="toggle()" :class="open ? 'ti-menu-2' : 'ti-menu-deep'"
        class="ti ti-menu-2 cursor-pointer text-2xl text-green-700 md:hidden"></i>
    </div>
    <!-- Menu Navigasi -->
    <div :class="open ? 'top-15 opacity-100' : 'top-[-400px] opacity-0 md:opacity-100'"
      class="absolute w-full grow justify-center bg-white px-3 py-1 transition-all duration-500 ease-in md:static md:flex md:items-baseline md:justify-end md:px-0 md:py-0">
      <ul class="gap-4 md:flex">
        @foreach ($menuItems as $item)
          <li class="my-3 md:my-0">
            <div class="relative pb-1 text-center">
              <span
                class="{{ Request::is($item['active']) ? 'block' : 'hidden' }} absolute inset-x-1/2 bottom-0 h-1 w-8 -translate-x-1/2 rounded-lg bg-green-700 md:inset-x-0 md:w-2/4 md:translate-x-0"></span>
              <a wire:navigate.hover href="{{ route($item['route']) }}"
                class="gap-x-1 font-plusJakartaSans text-base font-semibold text-green-700 md:flex">
                {{ $item['label'] }}
              </a>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </header>
</div>

@script
  <script>
    Alpine.data('navbar', () => {
      return {
        open: false,
        toggle() {
          this.open = !this.open;
        },
      };
    });
  </script>
@endscript
