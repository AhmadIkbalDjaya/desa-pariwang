<div class="mb-12">
  <h1 class="mb-2 font-plusJakartaSans text-xl font-bold text-green-700">
    {{ $institution->name }}
  </h1>
  @if ($institution->members->count() > 0)
    <div class="flex gap-x-10 overflow-x-auto pb-2">
      @foreach ($institution->members as $member)
        <x-public.institution-member-card :member="$member" wire:key="{{ $member->id }}" />
      @endforeach
    </div>
  @else
    <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Desa Pariwang" />
    <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
      Belum Ada Anggota {{ $institution->name }}
    </p>
  @endif
</div>
