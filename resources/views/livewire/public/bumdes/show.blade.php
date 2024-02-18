<div class="md:mx-32 md:my-12 mx-5 mt-6">
  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  <div class="md:flex gap-10">
    <div class="md:basis-5/12">
      <img class="mx-auto md:w-3/4 h-52 md:h-72 object-cover object-center rounded-sm"
        src="{{ asset('images/village-2.webp') }}" alt="Gambar">
    </div>
    <div class="md:basis-7/12">
      <h1 class="text-green-700 font-semibold text-2xl text-center md:text-left">{{ $bumdes->name }}</h1>
      <div>
        <div class="flex text-md md:text-lg font-medium py-2">
          <div class="basis-5/12 md:basis-4/12 text-gray-700">Direktur</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->director }}</div>
        </div>
        <div class="flex text-md md:text-lg font-medium py-2">
          <div class="basis-5/12 md:basis-4/12 text-gray-700">Status Bumdes</div>
          <div class="basis-7/12 md:basis-8/12">
            {{ $bumdes->certification_status ? 'Sertifikasi' : 'Belum Sertifikasi' }}</div>
        </div>
        <div class="flex text-md md:text-lg font-medium py-2">
          <div class="basis-5/12 md:basis-4/12 text-gray-700">Unit Usaha</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->unit }}</div>
        </div>
        <div class="flex text-md md:text-lg font-medium py-2">
          <div class="basis-5/12 md:basis-4/12 text-gray-700">Jumlah Pegawai</div>
          <div class="basis-7/12 md:basis-8/12">
            {{ $bumdes->total_employee > 0 ? $bumdes->total_employee . ' Orang' : '-' }}</div>
        </div>
        <div class="flex text-md md:text-lg font-medium py-2">
          <div class="basis-5/12 md:basis-4/12 text-gray-700">Kontak</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->phone }}</div>
        </div>
      </div>
    </div>
  </div>
  <p class="py-6 indent-10 text-lg text-justify ">
    {{ $bumdes->description }}
  </p>
</div>
