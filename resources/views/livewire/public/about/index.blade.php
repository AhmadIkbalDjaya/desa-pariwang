<div>
  {{-- Stop trying to control. --}}
  <section class="hero bg-cover bg-center bg-blend-multiply md:h-[93vh] h-[50vh] bg-gray-400 grid place-items-center"
    style="background-image: url('images/village-2.webp')">
    <div class="text-center text-white font-protestStrike">
      <p class="md:text-6xl text-5xl">
        Tentang
      </p>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:flex md:mx-40 md:my-20 mx-7 my-8">
    <div class="md:basis-1/2 grid place-items-center mb-6">
      <div class="">
        <div class="w-full h-full">
          <div class="relative bottom-0 right-0 bg-gray-200 min-w-[250px] min-h-[250px] rounded-sm">
            <div
              class="absolute bottom-3 right-3 w-[250px] h-[250px] flex justify-center items-end rounded-md transition-transform duration-500 transform hover:translate-x-[-8px] hover:translate-y-[-8px]">
              <img class="w-full h-full object-cover object-center rounded-sm"
                src="{{ asset('images/village-2.webp') }}" alt="Gambar">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="md:basis-1/2">
      <h1 class="text-green-700 text-2xl font-semibold mb-5">Desa Pariwang</h1>
      <p class="font-medium text-justify indent-10">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias porro
        aliquam, cum laborum facilis aliquid dolor repudiandae reprehenderit deleniti enim cumque eius, dicta beatae
        nulla nemo velit quidem, illum molestiae corrupti itaque incidunt vitae.
      </p>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:flex md:mx-40 md:my-20 mx-7 my-8">
    <div class="md:basis-1/2">
      <div class="">
        <h1 class="text-green-700 text-2xl font-semibold mb-5">Visi</h1>
        <p class="font-medium text-justify">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sapiente amet debitis cumque a, nihil odio
          aspernatur explicabo cum aliquid consequuntur consectetur minus eaque saepe?
        </p>
      </div>
      <div class="mt-3">
        <h1 class="text-green-700 text-2xl font-semibold mb-5">Misi</h1>
        <ol class="ms-5 font-medium text-justify list-decimal">
          <li class="my-2">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi
            quae!
          </li>
          <li>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi
            quae!
          </li>
        </ol>
      </div>
    </div>
    <div class="md:basis-1/2 grid place-items-end mb-6">
      <div class="">
        <div class="w-full h-full">
          <div class="relative bottom-0 right-0 bg-gray-200 min-w-[250px] min-h-[250px] rounded-sm">
            <div
              class="absolute bottom-3 right-3 w-[250px] h-[250px] flex justify-center items-end rounded-md transition-transform duration-500 transform hover:translate-x-[-8px] hover:translate-y-[-8px]">
              <img class="w-full h-full object-cover object-center rounded-sm"
                src="{{ asset('images/village-2.webp') }}" alt="Gambar">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="village-aparatus" class="md:mx-32 md:my-20 mx-3 mt-6">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center">Perangkat Desa</h1>
    @if ($village_aparatus->count() > 0)
      <div class="flex flex-wrap gap-x-3 md:gap-x-10 py-3">
        @foreach ($village_aparatus as $aparatus)
          <x-public.village-aparatus-card :villageAparatus="$aparatus" />
        @endforeach
      </div>
    @else
      <p class="text-center text-base md:text-lg font-medium text-gray-400 pt-3">
        Belum Ada Aparat Desa Yang Ditambahkan
      </p>
    @endif
  </section>

  <section id="welcome" class="font-plusJakartaSans md:mx-40 md:my-20 mx-7 my-8">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center pb-3">Lokasi Desa</h1>
    <div class="md:flex md:gap-5 md:bg-white md:rounded-sm shadow-sm">
      <div class="md:basis-1/2">
        {{-- @if ($profile->latitude != null && $profile->longitude != null) --}}
        <div id="maps" style="height: 300px;" class="rounded-2 z-0 rounded-lg"></div>
        {{-- @else
          <h5 class="text-center my-5">
            Data Lokasi Belum Ditambahkan
          </h5>
        @endif --}}
      </div>
      <div class="md:basis-1/2 bg-white p-3 text-lg md:flex md:flex-col md:justify-between md:pb-16">
        <h6 class="font-semibold text-gray-400">
          Batas Desa
        </h6>
        <div class="flex">
          <div class="basis-1/2">
            <p class="font-semibold">Utara</p>
            <p class="font-medium">Desa Palakka/Limbuang</p>
          </div>
          <div class="basis-1/2">
            <p class="font-semibold">Timur</p>
            <p class="font-medium">Desa Kaluppang</p>
          </div>
        </div>
        <div class="flex">
          <div class="basis-1/2">
            <p class="font-semibold">Selatan</p>
            <p class="font-medium">Desa Batu Mila</p>
          </div>
          <div class="basis-1/2">
            <p class="font-semibold">Barat</p>
            <p class="font-medium">Desa Karrang</p>
          </div>
        </div>
        <div class="flex">
          <div class="basis-1/2">
            <h6 class="font-semibold text-gray-400">
              Luas Desa
            </h6>
          </div>
          <div class="basis-1/2">
            <p>10.330.000 m</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('script')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
      var map = L.map("maps").setView(["-3.670752842865715", "119.83000797006216"], 10);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
      }).addTo(map);

      var desaLocations = [{
        nama: "Desa A",
        latitude: "-3.670752842865715",
        longitude: "119.83000797006216"
      }, ];

      desaLocations.forEach(function(desa) {
        var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
        marker.bindPopup(`<b>${desa.name}</b>`);
      });
    </script>
  @endpush
</div>
