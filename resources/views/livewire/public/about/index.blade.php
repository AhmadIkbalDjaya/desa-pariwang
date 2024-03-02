<div>
  {{-- Stop trying to control. --}}
  <section
    class="hero bg-cover bg-center bg-blend-multiply md:h-[95vh] h-[65vh] bg-gray-300 grid place-items-center md:place-items-start"
    style="background-image: url('images/profile-1.webp')">
    <div
      class="text-white h-full w-full bg-gradient-to-b from-green-100/50 to-green-700 flex flex-col justify-center px-5
      md:w-1/2 md:ps-20 md:pe-32 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100%">
      <p class="md:text-4xl text-4xl font-semibold opacity-100 pb-5">
        Tentang
      </p>
      <p class="text-justify indent-10 md:text-lg font-medium">
        Dapatkan infomasi lebih lengkap menganai desa pariwang seperti visi misi, perangkat desa, lokasi desa dan
        informasi lainnya
      </p>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:flex md:mx-40 md:my-20 mx-7 my-8">
    <div class="md:basis-1/2 grid place-items-center mb-6 md:mb-0">
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
      <h1 class="text-green-700 text-2xl font-semibold mb-5">Desa {{ $profile->name }}</h1>
      <p class="font-medium text-justify indent-10">
        {{ $profile->description }}
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
    <div class="md:basis-1/2 hidden md:grid place-items-end mb-6">
      <div class="">
        <div class="w-full h-full">
          <div class="relative bottom-0 right-0 bg-gray-200 min-w-[250px] min-h-[250px] rounded-sm">
            <div
              class="absolute bottom-3 right-3 w-[250px] h-[250px] flex justify-center items-end rounded-md transition-transform duration-500 transform hover:translate-x-[-8px] hover:translate-y-[-8px]">
              <img class="w-full h-full object-cover object-center rounded-sm"
                src="{{ asset('images/profile-2.webp') }}" alt="Gambar">
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
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
      <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
        Belum Ada Perangkat Desa Yang Ditambahkan
      </p>
    @endif
  </section>

  <section id="welcome" class="font-plusJakartaSans md:mx-40 md:my-20 mx-7 my-8">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center pb-3">Informasi Desa</h1>
    <div class="md:flex md:gap-5 bg-white md:rounded-sm shadow-sm">
      <div class="md:basis-1/2 pb-0 md:pb-3 p-3 text-lg">
        <div class="flex my-1">
          <div class="basis-1/2 text-gray-500">
            <p class="font-semibold">Nama Desa</p>
          </div>
          <div class="basis-1/2">
            <p class="font-medium">Desa {{ $profile->name }}</p>
          </div>
        </div>
        <div class="flex my-1">
          <div class="basis-1/2 text-gray-500">
            <p class="font-semibold">Status Desa</p>
          </div>
          <div class="basis-1/2">
            <p class="font-medium">{{ $profile->village_status->name }}</p>
          </div>
        </div>
        <div class="flex my-1">
          <div class="basis-1/2 text-gray-500">
            <p class="font-semibold">Alamat</p>
          </div>
          <div class="basis-1/2">
            <p class="font-medium">
              {{ $location->province }} <br>
              Kab. {{ $location->regency }} <br>
              Kec. {{ $location->district }}
            </p>
          </div>
        </div>
        <div class="flex my-1">
          <div class="basis-1/2 text-gray-500">
            <p class="font-semibold">Potensi Desa</p>
          </div>
          <div class="basis-1/2">
            <p class="font-medium">{{ $profile->potency }}</p>
          </div>
        </div>
      </div>
      <div class="md:basis-1/2 md:mt-3 p-3 pt-0 text-lg">
        <div class="flex my-1">
          <div class="basis-1/2 text-gray-500">
            <p class="font-semibold">Jumlah Dusun</p>
          </div>
          <div class="basis-1/2">
            <p class="font-medium">{{ $hamlets->count() }} Dusun</p>
          </div>
        </div>
        @foreach ($hamlets as $index => $hamlet)
          <div class="flex my-1">
            <div class="basis-1/2 text-gray-500">
              {{-- <p class="font-semibold">Dusun {{ $index + 1 }}</p> --}}
            </div>
            <div class="basis-1/2">
              <p class="font-medium">Dusun {{ $hamlet->name }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:mx-40 md:my-20 mx-7 my-8">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center pb-3">Lokasi Desa</h1>
    <div class="md:flex md:gap-5 md:bg-white md:rounded-sm shadow-sm">
      <div class="md:basis-1/2">
        @if ($location->latitude != null && $location->longitude != null)
          <div id="map" style="height: 300px;" class="rounded-2 z-0 rounded-lg"></div>
        @else
          <div class="py-6">
            <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
            <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
              Data Lokasi Belum Ditambahkan
            </p>
          </div>
        @endif
      </div>
      <div class="md:basis-1/2 bg-white p-3 text-lg md:flex md:flex-col md:justify-between md:pb-16">
        <h6 class="font-semibold text-gray-400">
          Batas Desa
        </h6>
        <div class="flex">
          <div class="basis-1/2">
            <p class="font-semibold">Utara</p>
            <p class="font-medium">{{ $location->border_north }}</p>
          </div>
          <div class="basis-1/2">
            <p class="font-semibold">Timur</p>
            <p class="font-medium">{{ $location->border_east }}</p>
          </div>
        </div>
        <div class="flex">
          <div class="basis-1/2">
            <p class="font-semibold">Selatan</p>
            <p class="font-medium">{{ $location->border_south }}</p>
          </div>
          <div class="basis-1/2">
            <p class="font-semibold">Barat</p>
            <p class="font-medium">{{ $location->border_west }}</p>
          </div>
        </div>
        <div class="flex">
          <div class="basis-1/2">
            <h6 class="font-semibold text-gray-400">
              Luas Desa
            </h6>
          </div>
          <div class="basis-1/2">
            <p>{{ $location->area }} m&sup2</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- @push('script')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
      var map = L.map("maps").setView(["{{ $location->latitude }}", "{{ $location->longitude }}"], 10);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
      }).addTo(map);

      var desaLocations = [{
        name: "Desa {{ $profile->name }}",
        latitude: "{{ $location->latitude }}",
        longitude: "{{ $location->longitude }}"
      }, ];

      desaLocations.forEach(function(desa) {
        var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
        marker.bindPopup(`<b>${desa.name}</b>`);
      });
    </script>
  @endpush --}}
  @push('script')
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <script>
      var latitude = "{{ $location->latitude }}"
      var longitude = "{{ $location->longitude }}"
      var map = new maplibregl.Map({
        container: 'map', // container id
        style: 'https://api.maptiler.com/maps/hybrid/style.json?key=get_your_own_OpIi9ZULNHzrESv6T2vL', // satelit
        // style: 'https://api.maptiler.com/maps/basic-v2/style.json?key=59l19GYa3vqXGGIlpAez', // basic
        // style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=59l19GYa3vqXGGIlpAez', // street

        center: [longitude, latitude], // starting position [lng, lat]
        zoom: 12 // starting zoom
      });

      map.addControl(new maplibregl.NavigationControl());
      map.scrollZoom.disable();

      // // markers
      // const monument = [119.8295304629999, -3.672330042457889];
      // // create the popup
      // const popup = new maplibregl.Popup({
      //   offset: 25
      // }).setText(
      //   'Construction on the Washington Monument began in 1848.'
      // );

      // // create DOM element for the marker
      // const el = document.createElement('div');
      // // el.id = 'marker';

      // // create the marker
      // new maplibregl.Marker({
      //     // element: el
      //   })
      //   .setLngLat(monument)
      //   .setPopup(popup) // sets a popup on this marker
      //   .addTo(map);

      // polygon area
      map.on('load', () => {
        map.addSource('maine', {
          'type': 'geojson',
          'data': {
            'type': 'Feature',
            'geometry': {
              'type': 'Polygon',
              'coordinates': [
                [
                  [119.827353, -3.649504],
                  [119.819429, -3.652094],
                  [119.819220, -3.651920],
                  [119.815155, -3.664098],
                  [119.813282, -3.683219],
                  [119.814223, -3.687010],
                  [119.814157, -3.689090],
                  [119.835379, -3.686904],
                  [119.843314, -3.688304],
                  [119.845423, -3.685982],
                  [119.845531, -3.683871],
                  [119.842532, -3.676241],
                  [119.842315, -3.668247],
                  [119.840970, -3.664153],
                  [119.837878, -3.659067],
                  [119.837889, -3.658972],
                  [119.827353, -3.649504],
                ]
              ]
            }
          }
        });
        map.addLayer({
          'id': 'maine',
          'type': 'fill',
          'source': 'maine',
          'layout': {},
          'paint': {
            'fill-color': '#8ff2a9',
            'fill-opacity': 0.25,
          }
        });
      });
    </script>
  @endpush
  @push('style')
    <style>
      .maplibregl-compact {
        display: none !important;
      }

      .maplibregl-popup {
        max-width: 200px;
      }

      .maplibregl-popup-content {
        position: relative !important;
      }

      .maplibregl-popup-close-button {
        position: absolute !important;
        padding: 0px 5px !important;
        font-size: 14px
      }
    </style>
  @endpush
</div>
