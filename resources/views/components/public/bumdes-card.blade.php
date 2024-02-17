<div class="md:basis-[48%] basis-full mb-6 bg-white shadow-lg rounded-lg overflow-hidden p-3 flex gap-6">
  <div class="basis-4/12">
    <img class="w-full h-32 md:h-40 object-cover object-center" src="{{ asset('images/village-2.webp') }}" alt="Gambar">
  </div>
  <div class="basis-8/12 flex flex-col justify-between">
    <h1 class="text-base font-semibold text-gray-800">Judul Card</h1>
    <p class="mt-2 text-gray-600 text-justify text-xs line-clamp-3 indent-8">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis totam quidem tenetur eveniet in? Sit optio
      asperiores quae sequi unde!
    </p>
    <div class="flex items-center text-gray-500 gap-2">
      <i class="ti ti-brand-whatsapp"></i>
      <p class="">+621241250245</p>
    </div>
    <div class="text-end">
      <a href="{{ route('bumdes.show', ['bumdes' => '1']) }}" wire:navigate
        class="text-xs text-green-700 font-semibold">
        Baca Selengkapnya
      </a>
    </div>
  </div>
</div>
