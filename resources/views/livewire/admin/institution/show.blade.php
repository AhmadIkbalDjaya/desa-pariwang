<div>
  {{-- Do your work, then step back. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.institution.index') }}" wire:navigate class="text-body-secondary">Lembaga</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">{{ $institution->abbreviation ?? $institution->name }}</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">{{ $institution->name }}
        {{ $institution->abbreviation ? $institution->abbreviation : '' }}</h5>
      <div class="d-flex justify-content-between">
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Anggota"
            aria-label="default input example">
        </div>
        <button wire:click='resetInstitutionMember' class="btn btn-primary add-button" data-bs-toggle="modal"
          data-bs-target="#createModal">
          <span class="text-white">
            <i class="ti ti-plus"></i> Anggota
          </span>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama </th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($members as $member)
              <tr wire:key="{{ $member->id }}">
                <td style="white-space: nowrap">{{ $member->name }}</td>
                <td style="white-space: nowrap">{{ $member->position }}</td>
                <td style="white-space: nowrap">
                  <span class="badge bg-warning text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#editModal" wire:click="setInstitutionMember({{ $member->id }})">
                    <i class="ti ti-edit"></i>
                  </span>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setInstitutionMember({{ $member->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$members" />
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
          <p class="fs-5">Yakin Ingin Menghapus {{ $form->name }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetInstitutionMember' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">Hapus</button>
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
          <h1 class="modal-title fs-5" id="createModalLabel">Tambah Anggota Lembaga</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" wire:submit='store' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Nama</p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
                  type="text" placeholder="Nama Anggota">
                @error('form.name')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Jabatan</p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='form.position'
                  class="form-control @error('form.position') is-invalid @enderror" type="text"
                  placeholder="Jabatan Anggota ">
                @error('form.position')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetInstitutionMember' class="btn btn-secondary"
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
          <h1 class="modal-title fs-5" id="editModalLabel">Tambah Anggota Lembaga</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" wire:submit='update' enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Nama</p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='form.name' class="form-control @error('form.name') is-invalid @enderror"
                  type="text" placeholder="Nama Anggota">
                @error('form.name')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-5 col-lg-4">
                <p class="fs-4">Jabatan</p>
              </div>
              <div class="col-7 col-lg-8">
                <input wire:model.live='form.position'
                  class="form-control @error('form.position') is-invalid @enderror" type="text"
                  placeholder="Jabatan Anggota ">
                @error('form.position')
                  <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" wire:click='resetInstitutionMember' class="btn btn-secondary"
            data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-warning" type="submit">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
