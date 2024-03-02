<div class="mb-12">
  <h1 class="text-xl font-plusJakartaSans font-bold text-green-700 mb-2">{{ $institution->name }}</h1>
  @if ($institution->members->count() > 0)
    <div class="flex gap-x-10 overflow-x-auto pb-2">
      @foreach ($institution->members as $member)
        <x-public.institution-member-card :member="$member" />
      @endforeach
    </div>
  @else
    <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
    <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
      Belum Ada Anggota {{ $institution->name }}
    </p>
  @endif
</div>
