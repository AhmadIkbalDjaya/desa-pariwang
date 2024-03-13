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
      <li class="breadcrumb-item active" aria-current="page">Lokasi & Penanda</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Lokasi Desa</h5>
      <p class="mb-0">Masukkan Informasi Mengenai Lokasi Desa</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Longitude <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.longitude' class="form-control @error('form.longitude') is-invalid @enderror"
              type="text" placeholder="Masukkan Longitude Desa">
            @error('form.longitude')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Latitude <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.latitude' class="form-control @error('form.latitude') is-invalid @enderror"
              type="text" placeholder="Masukkan Latitude Desa">
            @error('form.latitude')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Provinsi <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.province' class="form-control @error('form.province') is-invalid @enderror"
              type="text" placeholder="Masukkan Provinsi Desa">
            @error('form.province')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Kabupaten <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.regency' class="form-control @error('form.regency') is-invalid @enderror"
              type="text" placeholder="Masukkan Kabupaten Desa">
            @error('form.regency')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Kecamatan <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.district' class="form-control @error('form.district') is-invalid @enderror"
              type="text" placeholder="Masukkan Kecamatan Desa">
            @error('form.district')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Batas Timur <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.border_east'
              class="form-control @error('form.border_east') is-invalid @enderror" type="text"
              placeholder="Masukkan Batas Timut Desa">
            @error('form.border_east')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Batas Barat <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.border_west'
              class="form-control @error('form.border_west') is-invalid @enderror" type="text"
              placeholder="Masukkan Batas Barat Desa">
            @error('form.border_west')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Batas Selatan <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.border_south'
              class="form-control @error('form.border_south') is-invalid @enderror" type="text"
              placeholder="Masukkan Batas Selatan Desa">
            @error('form.border_south')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Batas Utara <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.border_north'
              class="form-control @error('form.border_north') is-invalid @enderror" type="text"
              placeholder="Masukkan Batas Utara Desa">
            @error('form.border_north')
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

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Penanda Lokasi</h5>
      <div class="row justify-content-between">
        <div class="col-md-3 my-1 px-0">
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Tempat"
            aria-label="default input example">
        </div>
        <a href="{{ route('admin.location.marker.create') }}" wire:navigate
          class="btn btn-primary add-button text-white col-md-3 my-1">
          <i class="ti ti-plus"></i>
          Penanda
          {{-- <button class="btn btn-primary add-button">
          </button> --}}
        </a>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama Tempat </th>
              <th scope="col" style="white-space: nowrap">Deskripsi</th>
              <th scope="col" style="white-space: nowrap">Longitude</th>
              <th scope="col" style="white-space: nowrap">Latitude</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($markers as $marker)
              <tr wire:key="{{ $marker->id }}">
                <td style="white-space: nowrap">{{ $marker->name }}</td>
                <td style="">{{ $marker->description }}</td>
                <td style="white-space: nowrap">{{ $marker->longitude }}</td>
                <td style="white-space: nowrap">{{ $marker->latitude }}</td>
                <td style="white-space: nowrap">
                  <a href="{{ route('admin.location.marker.show', ['marker' => $marker->id]) }}" wire:navigate>
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a href="{{ route('admin.location.marker.edit', ['marker' => $marker->id]) }}" wire:navigate>
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setMarker({{ $marker->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$markers" />
    </div>
  </div>
  {{-- delete modal --}}
  <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-5">Yakin Ingin Menghapus Penanda {{ $markerForm->name }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetMarker' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroyMarker">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>
