<div>
  <x-toast />

  {{-- The Master doesn't talk, he acts. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="" wire:navigate class="text-body-secondary">Admin Profil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
    </ol>
  </nav>

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
