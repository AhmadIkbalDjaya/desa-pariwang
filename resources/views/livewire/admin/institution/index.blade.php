<div>
  <x-toast />
  {{-- Close your eyes. Count to one. That is how long forever feels. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Kelembagaan</h5>
      <p class="mb-0">Daftar Kelembagaan Yang Dimiliki Desa</p>
      <div class="row justify-content-between">
        <div class="col-md-3 my-1 px-0">
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Lembaga"
            aria-label="default input example">
        </div>
        <a href="{{ route('admin.institution.create') }}" wire:navigate
          class="btn btn-primary add-button text-white col-md-3 my-1">
          <i class="ti ti-plus"></i> Lembaga
        </a>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama Lembaga</th>
              <th scope="col" style="white-space: nowrap">Singkatan</th>
              <th scope="col" style="white-space: nowrap">Jumlah Anggota</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($institutions as $institution)
              <tr wire:key="{{ $institution->id }}">
                <td style="white-space: nowrap">{{ $institution->name }}</td>
                <td style="white-space: nowrap">
                  {{ $institution->abbreviation ?? '-' }}
                </td>
                <td style="white-space: nowrap">{{ $institution->members->count() }}</td>
                <td style="white-space: nowrap">
                  <a href="{{ route('admin.institution.show', ['institution' => $institution->id]) }}" wire:navigate>
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a href="{{ route('admin.institution.edit', ['institution' => $institution->id]) }}" wire:navigate>
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" wire:click="setInstitution({{ $institution->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$institutions" />
    </div>
  </div>

  {{-- delete modal --}}
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-5">Yakin Ingin Menghapus {{ $form->name }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">Hapus</button>
        </div>
      </div>
    </div>
  </div>

</div>
