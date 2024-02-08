<div>
  <x-toast />
  {{-- The whole world belongs to you. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i
            class="ti ti-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profil Desa</h5>
      <p class="mb-0">Masukkan Informasi Mengenai Profil Desa</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Nama Desa</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
              type="text" placeholder="Masukkan Nama Desa">
            @error('form.name')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Alamat</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.address' class="form-control @error('form.address') is-invalid @enderror"
              type="text" placeholder="Masukkan Alamat Desa">
            @error('form.address')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Potensi Desa</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.potency' class="form-control @error('form.potency') is-invalid @enderror"
              type="text" placeholder="Masukkan Potensi Desa">
            @error('form.potency')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Populasi</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.population' class="form-control @error('form.population') is-invalid @enderror"
              type="text" placeholder="Masukkan Populasi Desa">
            @error('form.population')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Kontak</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.contact' class="form-control @error('form.contact') is-invalid @enderror"
              type="text" placeholder="Masukkan Kontak Desa">
            @error('form.contact')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Longitude</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.longitude' class="form-control @error('form.longitude') is-invalid @enderror"
              type="text" placeholder="Masukkan Longitude Desa">
            @error('form.longitude')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Latitude</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.latitude' class="form-control @error('form.latitude') is-invalid @enderror"
              type="text" placeholder="Masukkan Latitude Desa">
            @error('form.latitude')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Video Profil</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.video_link' class="form-control @error('form.video_link') is-invalid @enderror"
              type="text" placeholder="Masukkan Link Video Profil Desa">
            @error('form.video_link')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Status Desa</p>
          </div>
          <div class="col-7 col-lg-8">
            <select wire:model.live='form.village_status_id'
              class="form-select @error('form.village_status_id') is-invalid @enderror" name="" id="">
              @foreach ($village_statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
              @endforeach
            </select>
            @error('form.village_status_id')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
