<div class="mx-5 mt-6 md:mx-32 md:my-12">
  <div class="gap-10 md:flex">
    <div class="md:basis-5/12">
      <img class="mx-auto h-52 rounded-sm object-cover object-center md:h-72 md:w-3/4"
        src="{{ asset($bumdes->image) }}" alt="{{ $bumdes->name }}" />
    </div>
    <div class="md:basis-7/12">
      <h1 class="text-center text-2xl font-semibold text-green-700 md:text-left">
        {{ $bumdes->name }}
      </h1>
      <div>
        <div class="text-md flex py-2 font-medium md:text-lg">
          <div class="basis-5/12 text-gray-700 md:basis-4/12">Direktur</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->director }}</div>
        </div>
        <div class="text-md flex py-2 font-medium md:text-lg">
          <div class="basis-5/12 text-gray-700 md:basis-4/12">
            Status Bumdes
          </div>
          <div class="basis-7/12 md:basis-8/12">
            {{ $bumdes->certification_status ? 'Sertifikasi' : 'Belum Sertifikasi' }}
          </div>
        </div>
        <div class="text-md flex py-2 font-medium md:text-lg">
          <div class="basis-5/12 text-gray-700 md:basis-4/12">Unit Usaha</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->unit }}</div>
        </div>
        <div class="text-md flex py-2 font-medium md:text-lg">
          <div class="basis-5/12 text-gray-700 md:basis-4/12">
            Jumlah Pegawai
          </div>
          <div class="basis-7/12 md:basis-8/12">
            {{ $bumdes->total_employee > 0 ? $bumdes->total_employee . ' Orang' : '-' }}
          </div>
        </div>
        <div class="text-md flex py-2 font-medium md:text-lg">
          <div class="basis-5/12 text-gray-700 md:basis-4/12">Kontak</div>
          <div class="basis-7/12 md:basis-8/12">{{ $bumdes->phone }}</div>
        </div>
      </div>
    </div>
  </div>
  <p class="py-6 text-justify indent-10 text-lg">
    {{ $bumdes->description }}
  </p>
</div>
