<div>
  <x-maplibre-push-style />
  <div class="row">
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-warning">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Kelembagaan</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-building-bank" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $institution_count }}</p>
          </div>
          <a wire:navigate href="{{ route('admin.institution.index') }}"
            class="bg-white text-warning px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-primary">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Bumdes</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-building-store" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $bumdes_count }}</p>
          </div>
          <a wire:navigate href="{{ route('admin.bumdes.index') }}"
            class="bg-white text-primary px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-danger">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Perangkat Desa</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-users" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $village_aparatus_count }}</p>
          </div>
          <a wire:navigate href="{{ route('admin.village-aparatus.index') }}"
            class="bg-white text-danger px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-success">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Berita</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-news" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $article_count }}</p>
          </div>
          <a wire:navigate href="{{ route('admin.article.index') }}"
            class="bg-white text-success px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <div class="card">
        <div class="card-body px-0 py-3">
          <h5 class="card-title mb-9 fw-bolder px-4"> Profil Desa </h5>
          <hr>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Nama Desa</div>
            <div class="col-6">{{ $profile->name }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Alamat Desa</div>
            <div class="col-6">{{ $profile->address }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Potensi Desa</div>
            <div class="col-6">{{ $profile->potency }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Jumlah Populasi</div>
            <div class="col-6">{{ $profile->population }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Kontak Desa</div>
            <div class="col-6">{{ $profile->contact }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bolder py-2">
            <div class="col-6">Status Desa</div>
            <div class="col-6">{{ $profile->village_status->name }}</div>
          </div>
          <div class="row px-4 fs-4 fw-bold py-2 justify-content-start">
            <div class="col-6">
              <a wire:navigate href="{{ route('admin.profile.index') }}">
                Edit Profil Desa
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="card">
        <div class="card-body px-0 py-3">
          <h5 class="card-title mb-9 fw-bolder px-4">Kunjungi Desa Sekarang</h5>
          <hr>
          <div class="row px-2">
            <div class="col-md-12">
              <div>
                <div id="map" style="height: 250px;" class="rounded-2"></div>
              </div>
            </div>
          </div>
          <div class="row px-4 fs-4 fw-bold justify-content-start">
            <div class="col-6">
              <a wire:navigate href="{{ route('admin.profile.index') }}">
                Edit Lokasi Desa
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body px-0 py-3">
          <h5 class="card-title mb-9 fw-bolder px-4"> Perangkat Desa </h5>
          <hr class="mb-0">
          <div class="row px-4">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th class="py-2" scope="col" style="white-space: nowrap">Nama</th>
                      <th class="py-2" scope="col" style="white-space: nowrap">Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($aparatuses as $aparatus)
                      <tr wire:key="{{ $aparatus->id }}">
                        <td class="py-2" style="white-space: nowrap">{{ $aparatus->name }}</td>
                        <td class="py-2" style="white-space: nowrap">{{ $aparatus->position }}</td>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <a wire:navigate href="{{ route('admin.village-aparatus.index') }}">Lihat Lainnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body px-0 py-3">
          <h5 class="card-title mb-9 fw-bolder px-4"> Kelambagaan Desa </h5>
          <hr class="mb-0">
          <div class="row px-4">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th class="py-2" scope="col" style="white-space: nowrap">Nama</th>
                      <th class="py-2 text-center" scope="col" style="white-space: nowrap">Anggota</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($institutions as $institution)
                      <tr wire:key="{{ $institution->id }}">
                        <td class="py-2" style="white-space: nowrap">
                          {{ $institution->name }}</td>
                        <td class="py-2 text-center" style="white-space: nowrap">{{ $institution->members->count() }}
                        </td>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <a wire:navigate href="{{ route('admin.institution.index') }}">Lihat Lainnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@script
  <script>
    let latitude = "{{ $location->latitude }}"
    let longitude = "{{ $location->longitude }}"
    let map = new maplibregl.Map({
      container: 'map', // container id
      style: 'https://api.maptiler.com/maps/hybrid/style.json?key=59l19GYa3vqXGGIlpAez', // satelit
      // style: 'https://api.maptiler.com/maps/basic-v2/style.json?key=59l19GYa3vqXGGIlpAez', // basic
      // style: 'https://api.maptiler.com/maps/streets-v2/style.json?key=59l19GYa3vqXGGIlpAez', // street

      center: [longitude, latitude], // starting position [lng, lat]
      zoom: 12 // starting zoom
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
            <div class="row mx-0">
              <div class="col-3 px-0">
                <img src="{{ asset('${marker.image}') }}" class="img-fluid object-fit-cover" alt="" style="max-height: 80px; min-height: 80px;">
              </div>
              <div class="col-9 px-1 pt-1 d-flex flex-column justify-content-between">
                <div>
                  <h1 class="fw-semibold fs-4 m-0 line-clamp-1">${marker.name}</h1>
                  <p class="m-0 text-justify fw-medium line-clamp-2">${marker.description}</p>
                </div>
                <div class="d-flex justify-content-end pe-1">
                    <a href='https://maps.google.com/?q=${marker.latitude},${marker.longitude}' target='_blank' class=''>
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
