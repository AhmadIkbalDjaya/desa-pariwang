<div>
  {{-- Be like water. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.institution.index') }}" wire:navigate class="text-body-secondary">Lembaga</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Lembaga</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Tambah Lembaga Desa</h5>
      <p class="mb-2">Tambah Data Lembaga Desa Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a href="{{ route('admin.institution.index') }}" wire:navigate>
          <button class="btn btn-danger">Cancel</button>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='store' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Nama Lembaga <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
              type="text" placeholder="Nama Lembaga Desa">
            @error('form.name')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Singkatan</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.abbreviation'
              class="form-control @error('form.abbreviation') is-invalid @enderror" type="text"
              placeholder="Singkatan Nama Lembaga">
            @error('form.abbreviation')
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
