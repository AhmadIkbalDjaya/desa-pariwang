<div>
  @push('style')
    <style>
      .maplibregl-compact {
        display: none !important;
      }

      .maplibregl-popup-content {
        padding: 0px !important;
        height: 80px;
        width: 320px;
        box-sizing: border-box !important;
      }

      .maplibregl-popup-close-button {
        padding: 0px 5px !important;
      }
    </style>
  @endpush
  {{-- The whole world belongs to you. --}}
  <section class="hero bg-cover bg-center bg-blend-multiply md:h-[93vh] h-[75vh] bg-gray-400 grid place-items-center"
    style="background-image: url('images/profile-1.webp')">
    <div class="text-center text-white font-protestStrike">
      <p class="md:text-6xl text-4xl">
        Selamat Datang
      <h1 class="md:text-6xl text-3xl">
        Website Resmi Desa {{ $profile->name }}
      </h1>
      </p>
      <h1>Dapatkan Informasi Terbaru Mengenai Desa {{ $profile->name }}</h1>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:flex md:mx-20 md:my-20 mx-7 my-8">
    <div class="md:basis-1/2 grid place-items-center mb-6">
      <p class="md:text-4xl text-3xl text-green-700 font-semibold">Selamat Datang</p>
    </div>
    <div class="md:basis-1/2">
      <h1 class="text-green-700 text-2xl font-semibold mb-5">Desa {{ $profile->name }}</h1>
      <p class="font-medium text-justify indent-10 line-clamp-4">
        {{ $profile->description }}
      </p>
      <div class="mt-2">
        <a href="{{ route('about') }}" wire:navigate class="text-green-700 font-semibold">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </section>

  <section id="videoFrame" class="md:mx-20 md:my-20 mx-7 my-6 flex justify-center">
    <div
      class="w-full xl:min-h-[65vh] lg:min-h-[45vh] md:min-h-[50vh] sm:min-h-[75vh] min-h-[35vh] flex justify-center items-center">
      <div class="bg-gray-200 w-[90%] md:w-[75%] h-[65%] md:h-[95%]">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/I97YGEP2q6A?wmode=transparent"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="article" class="md:mx-32 md:my-20 mx-7 mt-6">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center">Berita & Kegiatan</h1>
    @if ($articles->count() > 0)
      <div class="pt-10 flex flex-wrap md:justify-between justify-around">
        @foreach ($articles as $article)
          <x-public.article-card responsive='0' :article="$article" />
        @endforeach
      </div>
      <div class="text-end mt-5">
        <a href="{{ route('article') }}" wire:navigate class="text-base text-green-700 font-semibold">Lihat Berita
          Lainnya</a>
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
      <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
        Belum Ada Berita Yang Ditambahkan
      </p>
    @endif
  </section>

  <section id="population" class="md:mx-32 md:my-20 mx-5 mt-6">
    <h1 class="text-green-700 text-xl md:text-3xl font-bold font-plusJakartaSans text-center">Administrasi Penduduk
    </h1>
    <p class="text-center md:px-24 hidden md:block my-2">
      Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan
      pendayagunaannya untuk pelayanan publik yang efektif dan efisien.
    </p>
    <p class="text-center md:px-24 md:hidden">
      Efisiensi pengelolaan data dan informasi kependudukan yang lebih efektif.
    </p>
    <div class="flex py-2 justify-center">
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/crowd.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->total_population }}</h4>
        <p class="font-semibold text-sm">Penduduk</p>
      </div>
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/boss.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->male }}</h4>
        <p class="font-semibold text-sm">Laki-Laki</p>
      </div>
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/woman.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->female }}</h4>
        <p class="font-semibold text-sm">Perempuan</p>
      </div>
    </div>
    <div class="flex py-2 justify-center">
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/family.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->family }}</h4>
        <p class="font-semibold text-sm">Kepala Keluarga</p>
      </div>
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/home.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->temporary }}</h4>
        <p class="font-semibold text-sm">Penduduk Sementara</p>
      </div>
      <div class="basis-4/12 md:basis-3/12 text-center">
        <img src="{{ asset('images/people.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28">
        <h4 class="text-lg md:text-3xl font-bold">{{ $population->mutation }}</h4>
        <p class="font-semibold text-sm">Mutasi Penduduk</p>
      </div>
    </div>
  </section>

  <section id="village-map" class="font-plusJakartaSans md:mx-40 md:my-20 mx-7 my-8">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center pb-1">Peta Desa</h1>
    <p class="text-center pb-3 font-plusJakartaSans">Menampilkan Peta Desa Dengan Penanda Lokasi-Lakasi Tertentu di Desa
    </p>
    <div id="map" style="height: 475px;" class="rounded-sm z-0"></div>
  </section>

  <section id="bumdes" class="mt-6 bg-green-600 text-white pt-12 pb-20 md:px-24 px-10 md:flex md:gap-16">
    <div class="md:basis-2/6">
      <p class="text-2xl font-light">Badan Usaha</p>
      <p class="text-4xl font-semibold">Milik Desa</p>
      <p class="text-justify text-sm indent-12 py-6">
        Bumdes adalah singkatan dari Badan Usaha Milik Desa, sebuah inisiatif di mana masyarakat desa mengelola bisnis
        untuk memajukan ekonomi lokal dan meningkatkan kesejahteraan.
      </p>
      <a href="{{ route('bumdes') }}" wire:navigate class="text-sm underline underline-offset-8">
        Lihat lebih banyak >
      </a>
    </div>
    <div class="w-full pt-10 md:pt-0">
      @if ($bumdeses->count() > 0)
        <div class="flex flex-wrap md:justify-center justify-between md:gap-12 gap-0">
          @foreach ($bumdeses as $bumdes)
            <div class="max-w-[9rem] md:max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-md overflow-hidden">
              <div class="md:m-5 m-1">
                <img class="w-32 h-32 md:w-56 md:h-56 object-cover object-center"
                  src="{{ $bumdes->image ? asset('storage/' . $bumdes->image) : asset('images/bumdes-icon2.webp') }}"
                  alt="Gambar">
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="py-5">
          <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar">
          <p class="text-center text-sm md:text-base font-medium text-gray-400 pt-0">
            Belum Ada Bumdes Yang Ditambahkan
          </p>
        </div>
      @endif
    </div>
  </section>

  <section id="feedBack" class="md:mx-32 md:my-20 mx-7 mt-6">
    <h1 class="text-center text-green-700 text-2xl md:text-3xl font-semibold">
      Kirimkan Pesan Kepada Kami
    </h1>
    <p class="pt-8 text-sm md:text-base text-center text-slate-700 md:px-48">
      Kirimkan pesan kepada kami untuk berbagi informasi, permintaan, atau komentar apa pun yang ingin Anda sampaikan.
      kami dengan senang hati dan akan meresponsnya
    </p>
    <div class="form-box md:px-20 my-12">
      <form wire:submit='store' action="" method="post">
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">Nama Lengkap <x-public.ui.input-required /></label>
            <input type="text" wire:model.live='form.name' name="name" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" wire:model.live='form.email' name="email" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
        </div>
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">Telepon/WhatsApp</label>
            <input type="text" wire:model.live='form.phone' name="name" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="instansion" class="block font-semibold">Instansi</label>
            <input type="email" wire:model.live='form.instansion' name="email" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
        </div>
        <div class="mb-4 md:basis-1/2">
          <label for="description" class="block font-semibold">Deskripsi <x-public.ui.input-required /></label>
          <textarea type="description" wire:model.live='form.description' name="description" id="" rows="5"
            class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500 resize-none"></textarea>
        </div>
        <button type="submit"
          class="text-center text-white font-semibold bg-green-700 w-full rounded py-1 shadow-md">Kirim</button>
      </form>
    </div>
  </section>


  @push('script')
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <script data-navigate-once>
      document.addEventListener('livewire:navigated', () => {

        var latitude = "{{ $location->latitude }}"
        var longitude = "{{ $location->longitude }}"
        var map = new maplibregl.Map({
          container: 'map', // container id
          style: 'https://api.maptiler.com/maps/hybrid/style.json?key=59l19GYa3vqXGGIlpAez', // satelit
          // style: 'https://api.maptiler.com/maps/basic-v2/style.json?key=59l19GYa3vqXGGIlpAez', // basic
          // style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=59l19GYa3vqXGGIlpAez', // street

          center: [longitude, latitude], // starting position [lng, lat]
          zoom: 12.80 // starting zoom
        });

        map.addControl(new maplibregl.NavigationControl());
        map.scrollZoom.disable();

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
        let markersData = [];
        @foreach ($markers as $marker)
          //
          markersData.push({
            "name": "{{ $marker->name }}",
            "longitude": "{{ $marker->longitude }}",
            "latitude": "{{ $marker->latitude }}",
            "image": "{{ $marker->image }}",
            "description": "{{ $marker->description }}",
          })
          //
        @endforeach
        markersData.forEach((marker, index) => {
          linkImage = marker.image != '' ? 'storage/' + marker.image : 'images/map.webp';
          new maplibregl.Marker()
            .setLngLat([marker.longitude, marker.latitude])
            .addTo(map)
            .setPopup(new maplibregl.Popup().setHTML(`
            <div class="flex">
              <div class="basis-3/12">
                <img src="{{ asset('${linkImage}') }}" class="object-cover" alt="" style="max-height: 80px; min-height: 80px;">
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
      });
    </script>
  @endpush
</div>
