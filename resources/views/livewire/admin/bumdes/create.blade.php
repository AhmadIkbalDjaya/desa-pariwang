<div>
  {{-- Nothing in the world is as soft and yielding as water. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Tambah Bumdes</h5>
      <p class="mb-2">Tambah Data Badan Usaha Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a wire:navigate href="{{ route('admin.bumdes.index') }}">
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
            <p class="fs-4">Nama Bumdes <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
              type="text" placeholder="Nama Badan Usaha">
            @error('form.name')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Deskripsi Bumdes <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <textarea wire:model.live='form.description' class="form-control @error('form.description') is-invalid @enderror"
              id="" rows="5"></textarea>
            @error('form.description')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Direktur <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.director' class="form-control @error('form.director') is-invalid @enderror"
              type="text" placeholder="Nama Direktur Bumdes">
            @error('form.director')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Status <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <div class="row">
              <div class="col-md-3 d-flex align-center gap-1">
                <input type="radio" wire:model.live='form.certification_status' value="1"
                  class="@error('form.certification_status') is-invalid @enderror" name=""
                  id="certification_true">
                <label for="certification_true"> Sertifikasi</label>
              </div>
              <div class="col-md-3 d-flex align-center gap-1">
                <input type="radio" wire:model.live='form.certification_status' value="0"
                  class="@error('form.certification_status') is-invalid @enderror" name=""
                  id="certification_false">
                <label for="certification_false"> Belum Sertifikasi</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Jumlah Pegawai <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.total_employee'
              class="form-control @error('form.total_employee') is-invalid @enderror" type="number" min="0"
              placeholder="Jumlah Pegawai Bumdes">
            @error('form.total_employee')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Unit Usaha <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.unit' class="form-control @error('form.unit') is-invalid @enderror"
              type="text" placeholder="Unit Usaha Bumdes">
            @error('form.unit')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Foto Bumdes</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.image' class="form-control @error('form.image') is-invalid @enderror"
              type="file" placeholder="Upload Gambar Bumdes">
            @error('form.image')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Kontak</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.phone' class="form-control @error('form.phone') is-invalid @enderror"
              type="number" placeholder="Kontak Bumdes">
            @error('form.phone')
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
