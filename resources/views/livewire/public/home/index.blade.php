<div>
  @if (session()->has('success'))
    <x-base.toast type="success" :message="session('success')" />
  @endif
  <section
    class="hero grid h-[75vh] place-items-center bg-gray-400 bg-hero1 bg-cover bg-center bg-blend-multiply md:h-[93vh]">
    <div class="text-center font-protestStrike text-white">
      <p class="text-4xl md:text-6xl">
        Selamat Datang
        <span class="block text-3xl md:text-6xl">
          Website Resmi Desa {{ $profile->name }}
        </span>
      </p>
      <h1>Dapatkan Informasi Terbaru Mengenai Desa {{ $profile->name }}</h1>
    </div>
  </section>

  <section id="welcome" class="mx-7 my-8 font-plusJakartaSans md:mx-20 md:my-20 md:flex">
    <div class="mb-6 grid place-items-center md:basis-1/2">
      <p class="text-3xl font-semibold text-green-700 md:text-4xl">
        Selamat Datang
      </p>
    </div>
    <div class="md:basis-1/2">
      <h1 class="mb-5 text-2xl font-semibold text-green-700">
        Desa {{ $profile->name }}
      </h1>
      <p class="line-clamp-4 text-justify indent-10 font-medium">
        {{ $profile->description }}
      </p>
      <div class="mt-2">
        <a wire:navigate.hover href="{{ route('about') }}" class="font-semibold text-green-700">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </section>

  <section id="videoFrame" class="mx-7 my-6 flex justify-center md:mx-20 md:my-20">
    <div
      class="flex min-h-[35vh] w-full items-center justify-center sm:min-h-[75vh] md:min-h-[50vh] lg:min-h-[45vh] xl:min-h-[65vh]">
      <div class="h-[65%] w-[90%] bg-gray-200 md:h-[95%] md:w-[75%]">
        <iframe class="h-full w-full" src="https://www.youtube.com/embed/I97YGEP2q6A?wmode=transparent"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="article" class="mx-7 mt-6 md:mx-32 md:my-20">
    <h1 class="text-center font-plusJakartaSans text-3xl font-bold text-green-700">
      Berita & Kegiatan
    </h1>
    @if ($articles->count() > 0)
      <div class="flex flex-wrap justify-around pt-10 md:justify-between">
        @foreach ($articles as $article)
          <x-public.article-card responsive="0" :article="$article" />
        @endforeach
      </div>
      <div class="mt-5 text-end">
        <a wire:navigate.hover href="{{ route('article') }}" class="text-base font-semibold text-green-700">
          Lihat Berita Lainnya
        </a>
      </div>
    @else
      <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar" />
      <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
        Belum Ada Berita Yang Ditambahkan
      </p>
    @endif
  </section>

  <section id="population" class="mx-5 mt-6 md:mx-32 md:my-20">
    <h1 class="text-center font-plusJakartaSans text-xl font-bold text-green-700 md:text-3xl">
      Administrasi Penduduk
    </h1>
    <p class="my-2 hidden text-center md:block md:px-24">
      Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi
      terkait dengan kependudukan dan pendayagunaannya untuk pelayanan publik
      yang efektif dan efisien.
    </p>
    <p class="text-center md:hidden md:px-24">
      Efisiensi pengelolaan data dan informasi kependudukan yang lebih efektif.
    </p>
    <div class="flex justify-center py-2">
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/crowd.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">
          {{ $population->total_population }}
        </h4>
        <p class="text-sm font-semibold">Penduduk</p>
      </div>
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/boss.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">{{ $population->male }}</h4>
        <p class="text-sm font-semibold">Laki-Laki</p>
      </div>
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/woman.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">
          {{ $population->female }}
        </h4>
        <p class="text-sm font-semibold">Perempuan</p>
      </div>
    </div>
    <div class="flex justify-center py-2">
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/family.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">
          {{ $population->family }}
        </h4>
        <p class="text-sm font-semibold">Kepala Keluarga</p>
      </div>
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/home.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">
          {{ $population->temporary }}
        </h4>
        <p class="text-sm font-semibold">Penduduk Sementara</p>
      </div>
      <div class="basis-4/12 text-center md:basis-3/12">
        <img src="{{ asset('images/people.webp') }}" alt="" srcset="" class="mx-auto w-16 md:w-28" />
        <h4 class="text-lg font-bold md:text-3xl">
          {{ $population->mutation }}
        </h4>
        <p class="text-sm font-semibold">Mutasi Penduduk</p>
      </div>
    </div>
  </section>

  <section id="village-map" class="mx-7 my-8 font-plusJakartaSans md:mx-40 md:my-20">
    <h1 class="pb-1 text-center font-plusJakartaSans text-3xl font-bold text-green-700">
      Peta Desa
    </h1>
    <p class="pb-3 text-center font-plusJakartaSans">
      Menampilkan Peta Desa Dengan Penanda Lokasi-Lakasi Tertentu di Desa
    </p>
    <div id="map" style="height: 475px" class="z-0 rounded-sm"></div>
  </section>

  <section id="bumdes" class="mt-6 bg-green-600 px-10 pb-20 pt-12 text-white md:flex md:gap-16 md:px-24">
    <div class="md:basis-2/6">
      <p class="text-2xl font-light">Badan Usaha</p>
      <p class="text-4xl font-semibold">Milik Desa</p>
      <p class="py-6 text-justify indent-12 text-sm">
        Bumdes adalah singkatan dari Badan Usaha Milik Desa, sebuah inisiatif di
        mana masyarakat desa mengelola bisnis untuk memajukan ekonomi lokal dan
        meningkatkan kesejahteraan.
      </p>
      <a wire:navigate.hover href="{{ route('bumdes') }}" class="text-sm underline underline-offset-8">
        Lihat lebih banyak >
      </a>
    </div>
    <div class="w-full pt-10 md:pt-0">
      @if ($bumdeses->count() > 0)
        <div class="flex flex-wrap justify-between gap-0 md:justify-center md:gap-12">
          @foreach ($bumdeses as $bumdes)
            <div class="mb-6 max-w-[9rem] overflow-hidden rounded-md bg-white shadow-lg md:mb-0 md:max-w-[17rem]">
              <div class="m-1 md:m-5">
                <img class="h-32 w-32 object-cover object-center md:h-56 md:w-56"
                  src="{{ asset($bumdes->image_url) }}" alt="{{ $bumdes->name }}" />
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="py-5">
          <img class="mx-auto h-24 object-center" src="{{ asset('images/empty.webp') }}" alt="Gambar" />
          <p class="pt-0 text-center text-sm font-medium text-gray-400 md:text-base">
            Belum Ada Bumdes Yang Ditambahkan
          </p>
        </div>
      @endif
    </div>
  </section>

  <section id="feedBack" class="mx-7 mt-6 md:mx-32 md:my-20">
    <h1 class="text-center text-2xl font-semibold text-green-700 md:text-3xl">
      Kirimkan Pesan Kepada Kami
    </h1>
    <p class="pt-8 text-center text-sm text-slate-700 md:px-48 md:text-base">
      Kirimkan pesan kepada kami untuk berbagi informasi, permintaan, atau
      komentar apa pun yang ingin Anda sampaikan. kami dengan senang hati dan
      akan meresponsnya
    </p>
    <div class="form-box my-12 md:px-20">
      <form wire:submit="store" action="" method="post">
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">
              Nama Lengkap
              <x-public.ui.input-required />
            </label>
            <input type="text" wire:model.live="form.name" name="name" id=""
              class="mt-1 w-full rounded-md border border-solid border-gray-400 bg-transparent px-3 py-2 focus:border-green-500 focus:outline-none" />
            @error('form.name')
              <p class="text-sm text-red-700">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" wire:model.live="form.email" name="email" id=""
              class="mt-1 w-full rounded-md border border-solid border-gray-400 bg-transparent px-3 py-2 focus:border-green-500 focus:outline-none" />
            @error('form.email')
              <p class="text-sm text-red-700">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">
              Telepon/WhatsApp
            </label>
            <input type="text" wire:model.live="form.phone" name="phone" id=""
              class="mt-1 w-full rounded-md border border-solid border-gray-400 bg-transparent px-3 py-2 focus:border-green-500 focus:outline-none" />
            @error('form.phone')
              <p class="text-sm text-red-700">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="instansion" class="block font-semibold">Instansi</label>
            <input type="email" wire:model.live="form.instansion" name="instansion" id=""
              class="mt-1 w-full rounded-md border border-solid border-gray-400 bg-transparent px-3 py-2 focus:border-green-500 focus:outline-none" />
            @error('form.instansion')
              <p class="text-sm text-red-700">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="mb-4 md:basis-1/2">
          <label for="description" class="block font-semibold">
            Deskripsi
            <x-public.ui.input-required />
          </label>
          <textarea type="description" wire:model.live="form.description" name="description" id="" rows="5"
            class="mt-1 w-full resize-none rounded-md border border-solid border-gray-400 bg-transparent px-3 py-2 focus:border-green-500 focus:outline-none"></textarea>
          @error('form.description')
            <p class="text-sm text-red-700">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit"
          class="w-full rounded bg-green-700 py-1 text-center font-semibold text-white shadow-md">
          Kirim
        </button>
      </form>
    </div>
  </section>

</div>

@assets
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
  <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" />
@endassets

@script
  <script>
    latitude = "{{ $location->latitude }}"
    longitude = "{{ $location->longitude }}"
    map = new maplibregl.Map({
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
