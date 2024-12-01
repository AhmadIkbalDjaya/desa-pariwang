<div class="w-[160px] ps-10 pt-5">
  <div class="h-full w-full">
    <div class="relative bottom-0 right-0 min-h-[150px] min-w-[150px] rounded-sm bg-gray-200">
      <div
        class="absolute bottom-3 right-3 flex h-[150px] w-[150px] transform items-end justify-center rounded-md bg-gray-300 p-3 pb-0 transition-transform duration-500 hover:translate-x-[-8px] hover:translate-y-[-8px]">
        <img class="h-full w-full rounded-sm object-cover object-center"
          src="{{ asset($villageAparatus->photo_url) }}"
          alt="{{ $villageAparatus->name }}" />
      </div>
    </div>
    <div class="mt-1">
      <p class="text-center text-xs">{{ $villageAparatus->name }}</p>
      <p class="text-center text-xs font-bold text-green-700">
        {{ $villageAparatus->position }}
      </p>
    </div>
  </div>
</div>
