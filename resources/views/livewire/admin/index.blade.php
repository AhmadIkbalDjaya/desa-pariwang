<div>
  @push('userScript')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
      console.log('{{ $profile->latitude }}');
      console.log('{{ $profile->longitude }}');
      var map = L.map("maps").setView(["{{ $profile->latitude }}", "{{ $profile->longitude }}"], 10);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
      }).addTo(map);

      var desaLocations = [{
        nama: "Desa A",
        latitude: "{{ $profile->latitude }}",
        longitude: "{{ $profile->longitude }}"
      }, ];

      desaLocations.forEach(function(desa) {
        var marker = L.marker([desa.latitude, desa.longitude]).addTo(map);
        marker.bindPopup(`<b>${desa.name}</b>`);
      });
    </script>
  @endpush
  {{-- Do your work, then step back. --}}
  <div class="row">
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-warning">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Kelembagaan</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-building-bank" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $institution_count }}</p>
          </div>
          <a href="{{ route('admin.institution.index') }}" wire:navigate
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
          <a href="{{ route('admin.bumdes.index') }}" wire:navigate
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
          <a href="{{ route('admin.village-aparatus.index') }}" wire:navigate
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
          <a href="{{ route('admin.article.index') }}" wire:navigate
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
              <a href="{{ route('admin.profile.index') }}" wire:navigate>
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
          <div class="row">
            <div class="col-md-12">
              <div>
                @if ($profile->latitude != null && $profile->longitude != null)
                  <div id="maps" style="height: 250px;" class="rounded-2"></div>
                @else
                  <h5 class="text-center my-5">
                    Data Lokasi Belum Ditambahkan
                  </h5>
                @endif
              </div>
            </div>
          </div>
          <div class="row px-4 fs-4 fw-bold justify-content-start">
            <div class="col-6">
              <a href="{{ route('admin.profile.index') }}" wire:navigate>
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
              <a href="{{ route('admin.village-aparatus.index') }}" wire:navigate>Lihat Lainnya</a>
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
                        <td class="py-2" style="white-space: nowrap">{{ $institution->name }}</td>
                        <td class="py-2 text-center" style="white-space: nowrap">{{ $institution->members->count() }}
                        </td>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <a href="{{ route('admin.institution.index') }}" wire:navigate>Lihat Lainnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
