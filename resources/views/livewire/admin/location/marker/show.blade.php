<div>
  {{-- The whole world belongs to you. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

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
      <div class="row mb-3">
        <div class="col-5 col-md-4">
          <p class="fs-4">Nama Tempat</p>
        </div>
        <div class="col-7 col-md-8">
          <p class="fs-4">: {{ $marker->name }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-md-4">
          <p class="fs-4">Deskripsi</p>
        </div>
        <div class="col-7 col-md-8">
          <p class="fs-4">: {{ $marker->description }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-md-4">
          <p class="fs-4">Longitude</p>
        </div>
        <div class="col-7 col-md-8">
          <p class="fs-4">: {{ $marker->longitude }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-md-4">
          <p class="fs-4">Latitude</p>
        </div>
        <div class="col-7 col-md-8">
          <p class="fs-4">: {{ $marker->latitude }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="{{ asset($marker->image_url) }}"
            alt="" srcset="" class="img-fluid px-md-5">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
