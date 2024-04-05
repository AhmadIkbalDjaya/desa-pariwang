<div>
  <x-toast />
  {{-- The Master doesn't talk, he acts. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Ganti Password</h5>
      <form action="" wire:submit='changePass' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Password Lama</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='old_password' class="form-control @error('old_password') is-invalid @enderror"
              type="password" placeholder="Masukkan Password Saat Ini">
            @error('old_password')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Password Baru</p>
          </div>
          <div class="col-7 col-lg-8">
            <input name="new_password" wire:model.live='new_password'
              class="form-control @error('new_password') is-invalid @enderror" type="password"
              placeholder="Masukkan Password Baru">
            @error('new_password')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Konfirmasi Password Baru</p>
          </div>
          <div class="col-7 col-lg-8">
            <input name="new_password_confirmation" wire:model.live='new_password_confirmation'
              class="form-control @error('new_password_confirmation') is-invalid @enderror" type="password"
              placeholder="Masukkan Ulang Password Baru">
            @error('new_password_confirmation')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <button class="btn btn-primary" type="submit">Ganti Password</button>
        </div>
      </form>
    </div>
  </div>
</div>
