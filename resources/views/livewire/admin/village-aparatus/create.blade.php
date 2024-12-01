<div>
  {{-- Stop trying to control. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Tambah Perangkat Desa</h5>
      <p class="mb-2">Tambah Data Badan Usaha Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a wire:navigate href="{{ route('admin.village-aparatus.index') }}">
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
            <p class="fs-4">Nama <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
              type="text" placeholder="Nama Perangkat Desa">
            @error('form.name')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Jabatan <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.position' class="form-control @error('form.position') is-invalid @enderror"
              type="text" placeholder="Jabatan Perangkat Desa">
            @error('form.position')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Tempat, Tanggal Lahir</p>
          </div>
          <div class="col-12 col-md-8">
            <div class="row">
              <div class="col-md-4">
                <input wire:model.live='form.pob' class="form-control @error('form.pob') is-invalid @enderror"
                  type="text" placeholder="Tempat Lahir">
                @error('form.pob')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-8">
                <input wire:model.live='form.dob' class="form-control @error('form.dob') is-invalid @enderror"
                  type="date" placeholder="Tempat Lahir">
                @error('form.dob')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Jenis Kelamin <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <select wire:model.live='form.gender' class="form-select @error('form.gender') is-invalid @enderror"
              name="" id="">
              <option>Jenis Kelamin</option>
              <option value="male">Laki-laki</option>
              <option value="female">Perempuan</option>
            </select>
            @error('form.gender')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Pendidikan</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.education' class="form-control @error('form.education') is-invalid @enderror"
              type="text" placeholder="Pendidikan Terakhir">
            @error('form.education')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Pekerjaan</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.job' class="form-control @error('form.job') is-invalid @enderror"
              type="text" placeholder="Pendidikan Terakhir">
            @error('form.job')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Agama</p>
          </div>
          <div class="col-12 col-md-8">
            <select wire:model.live='form.religion' class="form-select @error('form.religion') is-invalid @enderror"
              name="" id="">
              <option>Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Kristen Katolik">Kristen Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
            @error('form.religion')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Foto</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.photo' class="form-control @error('form.photo') is-invalid @enderror"
              type="file" accept="image/*" placeholder="Upload Gambar Bumdes">
            @error('form.photo')
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
