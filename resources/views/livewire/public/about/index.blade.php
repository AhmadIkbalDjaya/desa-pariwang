<div>
  <section id="hero"
    class="hero grid h-[65vh] place-items-center bg-gray-300 bg-hero1 bg-cover bg-center bg-blend-multiply md:h-[95vh] md:place-items-start">
    <div
      class="flex h-full w-full flex-col justify-center bg-gradient-to-b from-green-100/50 to-green-700 px-5 text-white md:w-1/2 md:bg-gradient-to-r md:from-green-600/[.80] md:from-95% md:to-green-300/50 md:to-100% md:pe-32 md:ps-20">
      <p class="pb-5 text-4xl font-semibold opacity-100 md:text-4xl">Tentang</p>
      <p class="text-justify indent-10 font-medium md:text-lg">
        Dapatkan infomasi lebih lengkap menganai desa pariwang seperti visi
        misi, perangkat desa, lokasi desa dan informasi lainnya
      </p>
    </div>
  </section>

  <section id="village-description" class="mx-7 my-8 font-plusJakartaSans md:mx-40 md:my-20 md:flex">
    <div class="mb-6 grid place-items-center md:mb-0 md:basis-1/2">
      <div class="">
        <div class="h-full w-full">
          <div class="relative bottom-0 right-0 min-h-[250px] min-w-[250px] rounded-sm bg-gray-200">
            <div
              class="absolute bottom-3 right-3 flex h-[250px] w-[250px] transform items-end justify-center rounded-md transition-transform duration-500 hover:translate-x-[-8px] hover:translate-y-[-8px]">
              <img class="h-full w-full rounded-sm object-cover object-center"
                src="{{ asset('images/village-2.webp') }}" alt="Desa {{ $profile->name }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="md:basis-1/2">
      <h1 class="mb-5 text-2xl font-semibold text-green-700">
        Desa {{ $profile->name }}
      </h1>
      <p class="text-justify indent-10 font-medium">
        {{ $profile->description }}
      </p>
    </div>
  </section>

  <section id="visi-misi" class="mx-7 my-8 font-plusJakartaSans md:mx-40 md:my-20 md:flex">
    <div class="md:basis-1/2">
      <div class="">
        <h1 class="mb-5 text-2xl font-semibold text-green-700">Visi</h1>
        <p class="text-justify font-medium">
          {{ $visi->content }}
        </p>
      </div>
      <div class="mt-3">
        <h1 class="mb-5 text-2xl font-semibold text-green-700">Misi</h1>
        <ol class="ms-5 list-decimal text-justify font-medium">
          @foreach ($mision as $misi)
            <li>
              {{ $misi->content }}
            </li>
          @endforeach
        </ol>
      </div>
    </div>
    <div class="mb-6 hidden place-items-end md:grid md:basis-1/2">
      <div class="">
        <div class="h-full w-full">
          <div class="relative bottom-0 right-0 min-h-[250px] min-w-[250px] rounded-sm bg-gray-200">
            <div
              class="absolute bottom-3 right-3 flex h-[250px] w-[250px] transform items-end justify-center rounded-md transition-transform duration-500 hover:translate-x-[-8px] hover:translate-y-[-8px]">
              <img class="h-full w-full rounded-sm object-cover object-center"
                src="{{ asset('images/profile-2.webp') }}" alt="Desa {{ $profile->name }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="village-aparatus" class="mx-3 mt-6 md:mx-32 md:my-20">
    <h1 class="text-center font-plusJakartaSans text-3xl font-bold text-green-700">
      Perangkat Desa
    </h1>
    @if ($village_aparatus->count() > 0)
      <div class="flex flex-wrap gap-x-3 py-3 md:gap-x-10">
        @foreach ($village_aparatus as $aparatus)
          <x-public.village-aparatus-card :villageAparatus="$aparatus" wire:key="{{ $aparatus->id }}" />
        @endforeach
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Empty Data" />
      <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
        Belum Ada Perangkat Desa Yang Ditambahkan
      </p>
    @endif
  </section>

  <section id="information" class="mx-7 my-8 font-plusJakartaSans md:mx-40 md:my-20">
    <h1 class="pb-3 text-center font-plusJakartaSans text-3xl font-bold text-green-700">
      Informasi Desa
    </h1>
    <div class="bg-white shadow-sm md:flex md:gap-5 md:rounded-sm">
      <div class="p-3 pb-0 text-lg md:basis-1/2 md:pb-3">
        <div class="my-1 flex">
          <div class="basis-5/12 text-gray-500">
            <p class="font-semibold">Nama Desa</p>
          </div>
          <div class="basis-7/12">
            <p class="font-medium">Desa {{ $profile->name }}</p>
          </div>
        </div>
        <div class="my-1 flex">
          <div class="basis-5/12 text-gray-500">
            <p class="font-semibold">Status Desa</p>
          </div>
          <div class="basis-7/12">
            <p class="font-medium">{{ $profile->village_status->name }}</p>
          </div>
        </div>
        <div class="my-1 flex">
          <div class="basis-5/12 text-gray-500">
            <p class="font-semibold">Alamat</p>
          </div>
          <div class="basis-7/12">
            <p class="font-medium">
              {{ $location->province }}
              <br />
              Kab. {{ $location->regency }}
              <br />
              Kec. {{ $location->district }}
            </p>
          </div>
        </div>
        <div class="my-1 flex">
          <div class="basis-5/12 text-gray-500">
            <p class="font-semibold">Potensi Desa</p>
          </div>
          <div class="basis-7/12">
            <p class="font-medium">{{ $profile->potency }}</p>
          </div>
        </div>
      </div>
      <div class="p-3 pt-0 text-lg md:mt-3 md:basis-1/2">
        <div class="my-1 flex">
          <div class="basis-5/12 text-gray-500">
            <p class="font-semibold">Jumlah Dusun</p>
          </div>
          <div class="basis-7/12">
            <p class="font-medium">{{ $hamlets->count() }} Dusun</p>
          </div>
        </div>
        @foreach ($hamlets as $index => $hamlet)
          <div class="my-1 flex">
            <div class="basis-5/12 text-gray-500">
              {{-- <p class="font-semibold">Dusun {{ $index + 1 }}</p> --}}
            </div>
            <div class="basis-7/12">
              <ul>
                <li class="list-inside list-disc font-medium">
                  Dusun {{ $hamlet->name }}
                </li>
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="location" class="mx-7 my-8 font-plusJakartaSans md:mx-40 md:my-20">
    <h1 class="pb-3 text-center font-plusJakartaSans text-3xl font-bold text-green-700">
      Lokasi Desa
    </h1>
    <div class="shadow-sm md:flex md:gap-5 md:rounded-sm md:bg-white">
      <div class="md:basis-1/2">
        @if ($location->latitude != null && $location->longitude != null)
          <div id="map" style="height: 300px" class="rounded-2 z-0 rounded-lg"></div>
        @else
          <div class="py-6">
            <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar" />
            <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
              Data Lokasi Belum Ditambahkan
            </p>
          </div>
        @endif
      </div>
      <div class="bg-white p-3 text-lg md:flex md:basis-1/2 md:flex-col md:justify-between md:pb-16">
        <h6 class="font-semibold text-gray-400">Batas Desa</h6>
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
            <h6 class="font-semibold text-gray-400">Luas Desa</h6>
          </div>
          <div class="basis-1/2">
            <p>{{ $location->area }} m&sup2</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@assets
  <style>
    .maplibregl-compact {
      display: none !important;
    }

    .maplibregl-popup {
      max-width: 200px;
    }

    .maplibregl-popup-content {
      padding: 0px !important;
      height: 80px;
      width: 320px;
      box-sizing: border-box !important;
    }

    .maplibregl-popup-close-button {
      position: absolute !important;
      padding: 0px 5px !important;
      font-size: 14px;
    }
  </style>
  <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" />
@endassets

@script
  <script>
    let latitude = '{{ $location->latitude }}';
    let longitude = '{{ $location->longitude }}';
    let map = new maplibregl.Map({
      container: 'map', // container id
      style: 'https://api.maptiler.com/maps/hybrid/style.json?key=59l19GYa3vqXGGIlpAez', // satelit
      // style: 'https://api.maptiler.com/maps/hybrid/style.json?key=get_your_own_OpIi9ZULNHzrESv6T2vL', // satelit
      // style: 'https://api.maptiler.com/maps/basic-v2/style.json?key=59l19GYa3vqXGGIlpAez', // basic
      // style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=59l19GYa3vqXGGIlpAez', // street

      center: [longitude, latitude], // starting position [lng, lat]
      zoom: 12, // starting zoom
    });

    map.addControl(new maplibregl.NavigationControl());
    map.scrollZoom.disable();

    // polygon area
    map.on('load', () => {
      map.addSource('maine', {
        type: 'geojson',
        data: {
          type: 'Feature',
          geometry: {
            type: 'Polygon',
            coordinates: [
              [
                [119.827353, -3.649504],
                [119.819429, -3.652094],
                [119.81922, -3.65192],
                [119.815155, -3.664098],
                [119.813282, -3.683219],
                [119.814223, -3.68701],
                [119.814157, -3.68909],
                [119.835379, -3.686904],
                [119.843314, -3.688304],
                [119.845423, -3.685982],
                [119.845531, -3.683871],
                [119.842532, -3.676241],
                [119.842315, -3.668247],
                [119.84097, -3.664153],
                [119.837878, -3.659067],
                [119.837889, -3.658972],
                [119.827353, -3.649504],
              ],
            ],
          },
        },
      });
      map.addLayer({
        id: 'maine',
        type: 'fill',
        source: 'maine',
        layout: {},
        paint: {
          'fill-color': '#8ff2a9',
          'fill-opacity': 0.25,
        },
      });
    });
    let markersData = [];
    @foreach ($markers as $marker)
      //
      markersData.push({
        "name": "{{ $marker->name }}",
        "longitude": "{{ $marker->longitude }}",
        "latitude": "{{ $marker->latitude }}",
        "image": "{{ $marker->image_url }}",
        "description": "{{ $marker->description }}",
      })
      //
    @endforeach
    markersData.forEach((marker, index) => {
      new maplibregl.Marker()
        .setLngLat([marker.longitude, marker.latitude])
        .addTo(map)
        .setPopup(new maplibregl.Popup().setHTML(`
            <div class="flex">
              <div class="basis-3/12">
                <img src="{{ asset('${marker.image}') }}" class="object-cover" alt="${marker.name}" style="max-height: 80px; min-height: 80px;">
              </div>
              <div class="basis-9/12 px-2 pt-1 flex flex-col justify-between">
                <div>
                  <h1 class="font-semibold line-clamp-1">${marker.name}</h1>
                  <p class="text-justify text-[0.7rem] line-clamp-2">${marker.description}</p>
                </div>
                <div class="text-xs flex justify-end">
                    <a href='https://maps.google.com/?q=${marker.latitude},${marker.longitude}' target='_blank' class='flex text-blue-200 underline'>
                      <img src="{{ asset('images/maps_logo.png') }}" width='15px' />
                      Maps
                    </a>
                  </div>
              </div>
            </div>
          `));
    });
  </script>
@endscript
