<div class="mb-6 flex basis-full gap-6 overflow-hidden rounded-lg bg-white p-3 shadow-lg md:basis-[48%]">
  <div class="basis-4/12">
    <img class="h-32 w-full object-cover object-center md:h-40"
      src="{{ $bumdes->image ? asset('storage/' . $bumdes->image) : asset('images/bumdes-icon2.webp') }}"
      alt="{{ $bumdes->name }}" />
  </div>
  <div class="flex basis-8/12 flex-col justify-between">
    <h1 class="line-clamp-1 text-base font-semibold text-gray-800">
      {{ $bumdes->name }}
    </h1>
    <p class="mt-2 line-clamp-2 text-justify indent-8 text-xs text-gray-600 md:line-clamp-3">
      {{ $bumdes->description }}
    </p>
    <div class="flex items-center gap-2 text-gray-500">
      <i class="ti ti-brand-whatsapp"></i>
      <a href="{{ $bumdes->phone ? 'https://wa.me/' . $bumdes->phone : '' }}" class="">
        {{ $bumdes->phone ?? '-' }}
      </a>
    </div>
    <div class="text-end">
      <a href="{{ route('bumdes.show', ['bumdes' => $bumdes->id]) }}" wire:navigate
        class="text-xs font-semibold text-green-700">
        Baca Selengkapnya
      </a>
    </div>
  </div>
</div>
