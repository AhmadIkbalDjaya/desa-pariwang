<div>
  {{-- The Master doesn't talk, he acts. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.bumdes.index') }}" wire:navigate class="text-body-secondary">Bumdes</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Detail Bumdes</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Badan Usaha</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-warning">
            Edit
          </button>
        </div>
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-danger">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
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
      @if ($bumdes->certification_status)
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
      @endif
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Kontak</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">:
            @if ($bumdes->contact)
              {{ $bumdes->contact }}
            @else
              -
            @endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
