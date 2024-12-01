<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <x-toast />
  <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a wire:navigate href="{{ route('admin.index') }}"
                class="text-nowrap logo-img text-center d-block py-1 w-100">
                <p class="m-0 text-black" style="font-weight: 700; font-size: 1.5rem;">Desa Pariwang</p>
              </a>
              <p class="text-center">Login Sebagai Admin Desa</p>
              <form action="" wire:submit='login'>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input wire:model.live='form.username' type="text"
                    class="form-control @error('form.username') is-invalid @enderror" id="username"
                    aria-describedby="emailHelp">
                  @error('form.username')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input wire:model.live='form.password' type="password"
                    class="form-control @error('form.password') is-invalid @enderror" id="password">
                  @error('form.password')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
