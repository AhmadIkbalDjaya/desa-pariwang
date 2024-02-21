<div>
  <x-toast />
  {{-- The whole world belongs to you. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i
            class="ti ti-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profil Desa</h5>
      <p class="mb-0">Masukkan Informasi Mengenai Profil Desa</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Nama Desa <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
              type="text" placeholder="Masukkan Nama Desa">
            @error('form.name')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Deskripsi Desa <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <textarea wire:model.live='form.description' name="" id="" rows="6" class="form-control w-100"></textarea>
            @error('form.description')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Potensi Desa <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.potency' class="form-control @error('form.potency') is-invalid @enderror"
              type="text" placeholder="Masukkan Potensi Desa">
            @error('form.potency')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Populasi <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.population' class="form-control @error('form.population') is-invalid @enderror"
              type="number" placeholder="Masukkan Populasi Desa">
            @error('form.population')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Kontak <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.contact' class="form-control @error('form.contact') is-invalid @enderror"
              type="text" placeholder="Masukkan Kontak Desa">
            @error('form.contact')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Email <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.email' class="form-control @error('form.email') is-invalid @enderror"
              type="text" placeholder="Masukkan Kontak Desa">
            @error('form.email')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Status Desa <x-admin.form.required /> </p>
          </div>
          <div class="col-7 col-lg-8">
            <select wire:model.live='form.village_status_id'
              class="form-select @error('form.village_status_id') is-invalid @enderror" name="" id="">
              @foreach ($village_statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
              @endforeach
            </select>
            @error('form.village_status_id')
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
      <h5 class="card-title fw-semibold mb-3">Dusun Desa {{ $form->name }}</h5>
      <div class="d-flex justify-content-between">
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Dusun"
            aria-label="default input example">
        </div>
        <button wire:click='resetHamlet' class="btn btn-primary add-button" data-bs-toggle="modal"
          data-bs-target="#createModal">
          <span class="text-white">
            <i class="ti ti-plus"></i> Dusun
          </span>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama Dusun </th>
              <th scope="col" style="white-space: nowrap">Kepala Dusun</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($hamlets as $hamlet)
              <tr wire:key="{{ $hamlet->id }}">
                <td style="white-space: nowrap">{{ $hamlet->name }}</td>
                <td style="white-space: nowrap">{{ $hamlet->chief }}</td>
                <td style="white-space: nowrap">
                  <span class="badge bg-warning text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#editModal" wire:click="setHamlet({{ $hamlet->id }})">
                    <i class="ti ti-edit"></i>
                  </span>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setHamlet({{ $hamlet->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$hamlets" />
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
          <p class="fs-5">Yakin Ingin Menghapus Dusun {{ $hamletForm->name }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetHamlet' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroyHamlet">Hapus</button>
        </div>
      </div>
    </div>
  </div>

  {{-- create modal --}}
  <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createModalLabel">Tambah Dusun</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" wire:submit='storeHamlet' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Nama <x-admin.form.required /> </p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='hamletForm.name'
                  class="form-control @error('hamletForm.name') is-invalid @enderror" type="text"
                  placeholder="Masukkan Nama Dusun">
                @error('hamletForm.name')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Kepala Dusun <x-admin.form.required /> </p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='hamletForm.chief'
                  class="form-control @error('hamletForm.chief') is-invalid @enderror" type="text"
                  placeholder="Masukkan Nama Kepala Dusun">
                @error('hamletForm.chief')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetHamlet' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- edit modal --}}
  <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Dusun</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" wire:submit='updateHamlet' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Nama Dusun <x-admin.form.required /> </p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='hamletForm.name'
                  class="form-control @error('hamletForm.name') is-invalid @enderror" type="text"
                  placeholder="Masukkan Nama Dusun">
                @error('hamletForm.name')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Kepala Dusun <x-admin.form.required /> </p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='hamletForm.chief'
                  class="form-control @error('hamletForm.chief') is-invalid @enderror" type="text"
                  placeholder="Masukkan Nama Kepala Dusun">
                @error('hamletForm.chief')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetHamlet' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-warning" type="submit">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
