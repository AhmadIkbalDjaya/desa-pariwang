<div>
  {{-- The Master doesn't talk, he acts. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Badan Usaha</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <a href="{{ route('admin.bumdes.edit', ['bumdes' => $bumdes->id]) }}">
            <button class="btn btn-sm w-100 btn-warning">
              Edit
            </button>
          </a>
        </div>
        <div class="col-6 col-md-2">
          <button wire:click='destroy' class="btn btn-sm w-100 btn-danger">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Nama Bumdes</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $bumdes->name }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Direktur</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $bumdes->director }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Status</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">:
                @if ($bumdes->certification_status)
                  Sertifikasi
                @else
                  Belum Sertifikat
                @endif
              </p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Jumlah Pegawai</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $bumdes->total_employee }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Unit Usaha</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $bumdes->unit }}</p>
            </div>
          </div>
          {{-- @if ($bumdes->certification_status)
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Sertifikat</p>
              </div>
              <div class="col-7 col-lg-8">
                <p class="fs-4">:
                  <a href="{{ asset('storage/' . $bumdes->file_sertifikat) }}" download="sertifikat {{ $bumdes->nama }}"
                    class="text-decoration-none">
                    <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
                    Download Sertifikat
                  </a>
                </p>
              </div>
            </div>
          @endif --}}
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Kontak</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">:
                @if ($bumdes->phone)
                  {{ $bumdes->phone }}
                @else
                  -
                @endif
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <img src="{{ asset($bumdes->image) }}" alt="" srcset="" class="img-fluid px-md-5">
        </div>
      </div>
    </div>
  </div>
</div>
