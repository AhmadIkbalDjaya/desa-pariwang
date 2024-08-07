<div>
  <x-toast />
  {{-- The Master doesn't talk, he acts. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Kritik dan Masukan</h5>
      <p class="mb-2">Kritik dan Masukan Publik</p>
      <div class="d-flex justify-content-between">
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Nama"
            aria-label="default input example">
        </div>
        {{-- <button class="btn btn-primary add-button">
          <a href="{{ route('admin.bumdes.create') }}" wire:navigate class="text-white">
            <i class="ti ti-plus"></i> Kritik dan Masukan
          </a>
        </button> --}}
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Institute</th>
              <th scope="col" style="white-space: nowrap">Masukan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($complaints as $complaint)
              <tr wire:key="{{ $complaint->id }}">
                <td style="white-space: nowrap">{{ $complaint->name }}</td>
                <td style="white-space: nowrap">{{ $complaint->institution ?? '-' }}</td>
                <td style="white-space: nowrap">{{ $complaint->description }}</td>
                <td style="white-space: nowrap">
                  <span class="badge bg-info text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#showModal" wire:click="setComplaint({{ $complaint->id }})">
                    <i class="ti ti-eye"></i>
                  </span>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setComplaint({{ $complaint->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$complaints" />
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
          <p class="fs-5">Yakin Ingin Menghapus Kritik {{ $form->name }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">Hapus</button>
        </div>
      </div>
    </div>
  </div>

  {{-- show modal --}}
  <div wire:ignore.self class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="showModalLabel">Detail Masukan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Nama</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">{{ $form->name }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Email</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">{{ $form->email ?? '-' }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Telepon</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">{{ $form->phone ?? '-' }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Institutsi</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">{{ $form->institute ?? '-' }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-5 col-lg-4">
              <p class="fs-4">Masukan</p>
            </div>
            <div class="col-7 col-lg-8">
              <p class="fs-4">{{ $form->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
