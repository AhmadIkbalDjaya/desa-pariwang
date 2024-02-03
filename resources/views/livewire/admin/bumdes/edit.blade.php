<div>
  {{-- In work, do what you enjoy. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.bumdes.index') }}" wire:navigate class="text-body-secondary">Bumdes</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Edit Bumdes</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Edit Bumdes</h5>
      <p class="mb-2">Edit Data Badan Usaha Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a href="{{ route('admin.bumdes.index') }}" wire:navigate>
          <button class="btn btn-danger">Cancel</button>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" method="post">
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Nama Bumdes</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Nama Badan Usaha">
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Direktur</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Nama Direktur Bumdes">
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Status</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Status Bumdes">
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Jumlah Pegawai</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Jumlah Pegawai Bumdes">
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Unit Usaha</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Unit Usaha Bumdes">
            </p>
          </div>
        </div>
        {{-- @if ($bumdes->certification_status)
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Sertifikat</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">
                <input class="form-control" type="text" placeholder="Default input">
              </p>
            </div>
          </div>
        @endif --}}
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Kontak</p>
          </div>
          <div class="col-7 col-lg-8">
            <p class="fs-4">
              <input class="form-control" type="text" placeholder="Kontak Bumdes">
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <button class="btn btn-warning">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
