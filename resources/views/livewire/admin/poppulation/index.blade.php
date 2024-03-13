<div>
  <x-toast />
  {{-- Because she competes with no one, no one can compete with her. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Kependudukan</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Kependudukan Desa</h5>
      <p class="mb-0">Masukkan Informasi Mengenai Data Penduduk di Desa</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Jumlah Penduduk <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.total_population'
              class="form-control @error('form.total_population') is-invalid @enderror" type="number" min="0"
              placeholder="Masukkan Jumlah Penduduk Desa">
            @error('form.total_population')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Laki-Laki <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.male' class="form-control @error('form.male') is-invalid @enderror"
              type="number" min="0" placeholder="Masukkan Jumlah Laki-Laki">
            @error('form.male')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Perempuan <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.female' class="form-control @error('form.female') is-invalid @enderror"
              type="number" min="0" placeholder="Masukkan Jumlah Perempuan">
            @error('form.female')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Kepala Keluarga <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.family' class="form-control @error('form.family') is-invalid @enderror"
              type="number" min="0" placeholder="Masukkan Jumlah Kepala Keluarga">
            @error('form.family')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Penduduk Sementara <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.temporary' class="form-control @error('form.temporary') is-invalid @enderror"
              type="number" min="0" placeholder="Masukkan Jumlah Penduduk Sementara">
            @error('form.temporary')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Mutasi Penduduk <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.mutation' class="form-control @error('form.mutation') is-invalid @enderror"
              type="number" min="0" placeholder="Masukkan Jumlah Mutasi Penduduk">
            @error('form.mutation')
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
