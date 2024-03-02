<div>
  {{-- Success is as dangerous as failure. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.village-aparatus.index') }}" wire:navigate class="text-body-secondary">Perangkat
          Desa</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Detail Perangkat Desa</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Perangkat Desa</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-warning">
            Edit
          </button>
        </div>
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-danger">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Nama</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->name }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Jabatan</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->position }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Tempat, Tanggal Lahir</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->pob ?? '-' }}, {{ $village_aparatus->dob ?? '-' }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Jenis Kelamin</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Pendidikan</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->education ?? '-' }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Pekerjaan</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->job ?? '-' }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Agama</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $village_aparatus->religion }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Foto</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">
            @if ($village_aparatus->photo)
              <img src="{{ asset('storage/' . $village_aparatus->photo) }}" class="img-fluid" width="200"
                alt="...">
            @else
              <img
                src="{{ $village_aparatus->gender == 'male' ? asset('images/user_male.webp') : asset('images/user_female.webp') }}"
                class="img-fluid" width="200" alt="...">
            @endif
          </p>
        </div>
      </div>
    </div>
  </div>

</div>
