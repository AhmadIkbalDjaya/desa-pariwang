<div>
  {{-- The whole world belongs to you. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.location.index') }}" wire:navigate class="text-body-secondary">Lokasi & Penanda</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Detail Penanda</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Penanda Lokasi</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <a href="{{ route('admin.location.marker.edit', ['marker' => $marker->id]) }}">
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
              <p class="fs-4">Nama Tempat</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $marker->name }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Deskripsi</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $marker->description }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Longitude</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $marker->longitude }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Latitude</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">: {{ $marker->latitude }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <img src="{{ $marker->image ? asset('storage/' . $marker->image) : asset('images/bumdes-icon2.webp') }}"
          alt="" srcset="" class="img-fluid px-md-5">
      </div>
    </div>
  </div>
</div>
</div>
