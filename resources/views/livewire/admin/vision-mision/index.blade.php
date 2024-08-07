<div>
  <x-toast />
  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Visi Misi</h5>
      <p class="mb-0">Masukkan Informasi Mengenai Visi Misi Desa</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='updateVisi' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-12">
            <p class="fs-4 fw-semibold">Visi Desa <x-admin.form.required /> </p>
          </div>
          <div class="col-12">
            <textarea wire:model.live='visionForm.content' class="form-control @error('visionForm.content') is-invalid @enderror"
              type="text" placeholder="Masukkan Nama Desa" rows="5">
            </textarea>
            @error('visionForm.content')
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
      <h5 class="card-title fw-semibold mb-3">Misi Desa</h5>
      <div class="row justify-content-between">
        <div class="col-md-3 my-1 px-0">
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Misi Desa"
            aria-label="default input example">
        </div>
        <button wire:click='resetMision' class="btn btn-primary add-button btn btn-primary add-button col-md-2 my-1"
          data-bs-toggle="modal" data-bs-target="#createModal">
          <span class="text-white">
            <i class="ti ti-plus"></i> Misi
          </span>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">No</th>
              <th scope="col" style="white-space: nowrap">Misi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($misions as $key => $mision)
              <tr wire:key="{{ $mision->id }}">
                <td style="white-space: nowrap">{{ $key + 1 }}</td>
                <td style="">{{ $mision->content }}</td>
                <td style="white-space: nowrap">
                  <span class="badge bg-warning text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#editModal" wire:click="setMision({{ $mision->id }})">
                    <i class="ti ti-edit"></i>
                  </span>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setMision({{ $mision->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- <x-pagination :items="$misions" /> --}}
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
          <p class="fs-5">Yakin Ingin Menghapus Misi?</p>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetMision' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroyMision">Hapus</button>
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
          <h1 class="modal-title fs-5" id="createModalLabel">Tambah Misi Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" wire:submit='storeMision' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-12 col-md-4">
                <p class="fs-4">Misi <x-admin.form.required /> </p>
              </div>
              <div class="col-12 col-md-8">
                <textarea wire:model.live='misionForm.content' rows="3"
                  class="form-control @error('misionForm.content') is-invalid @enderror" type="text"
                  placeholder="Masukkan Misi Desa"> </textarea>
                @error('misionForm.content')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetMision' class="btn btn-secondary"
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
          <form action="" wire:submit='updateMision' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-12 col-md-4">
                <p class="fs-4">Misi <x-admin.form.required /> </p>
              </div>
              <div class="col-12 col-md-8">
                <textarea wire:model.live='misionForm.content' rows="3"
                  class="form-control @error('misionForm.content') is-invalid @enderror" type="text"
                  placeholder="Masukkan Misi Desa"> </textarea>
                @error('misionForm.content')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetMision' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-warning" type="submit">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
