<div>
  {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Edit Lembaga Desa</h5>
      <p class="mb-2">Edit Data Lembaga Desa Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a href="{{ route('admin.institution.index') }}" wire:navigate>
          <button class="btn btn-danger">Cancel</button>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Nama Lembaga <x-admin.form.required /></p>
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
          <button class="btn btn-warning" type="submit">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
