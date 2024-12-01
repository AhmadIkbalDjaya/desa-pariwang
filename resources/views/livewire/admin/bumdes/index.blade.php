<div>
  <x-toast />
  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Badan Usaha Milik Desa</h5>
      <p class="mb-2">Badan Usaha Milik Desa Pariwang</p>
      <div class="row justify-content-between">
        <div class="col-md-3 my-1 px-0">
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Bumdes"
            aria-label="default input example">
        </div>
        <a wire:navigate href="{{ route('admin.bumdes.create') }}"
          class="btn btn-primary add-button text-white col-md-3 my-1">
          <i class="ti ti-plus"></i> Bumdes
        </a>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama Bumdes</th>
              <th scope="col" style="white-space: nowrap">Penanggung Jawab</th>
              <th scope="col" style="white-space: nowrap">Unit Usaha</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bumdeses as $bumdes)
              <tr wire:key="{{ $bumdes->id }}">
                <td style="white-space: nowrap">{{ $bumdes->name }}</td>
                <td style="white-space: nowrap">{{ $bumdes->director }}</td>
                <td style="white-space: nowrap">{{ $bumdes->unit }}</td>
                <td style="white-space: nowrap">
                  <a wire:navigate href="{{ route('admin.bumdes.show', ['bumdes' => $bumdes->id]) }}">
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a wire:navigate href="{{ route('admin.bumdes.edit', ['bumdes' => $bumdes->id]) }}">
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setBumdes({{ $bumdes->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$bumdeses" />
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
          {{-- <p class="fs-5">Yakin Ingin Menghapus {{ $bumdes_name }}?</p> --}}
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
