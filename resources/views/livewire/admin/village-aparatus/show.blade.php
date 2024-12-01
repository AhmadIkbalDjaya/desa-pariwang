<div>
  {{-- Success is as dangerous as failure. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

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
          <p class="fs-4">: {{ $village_aparatus->gender->label() }}</p>
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
          <p class="fs-4">: {{ $village_aparatus->religion->label() }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Foto</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">
            <img src="{{ asset($village_aparatus->photo_url) }}" class="img-fluid" width="200" alt="...">
          </p>
        </div>
      </div>
    </div>
  </div>

</div>
