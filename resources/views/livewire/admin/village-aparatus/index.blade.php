<div>
  <x-toast />
  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i
            class="ti ti-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page">Perangkat Desa</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Perangkat Desa</h5>
      <p class="mb-2">Perangkat Desa Pariwang</p>
      <div class="d-flex justify-content-between">
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Perangkat Desa"
            aria-label="default input example">
        </div>
        <button class="btn btn-primary add-button">
          <a href="{{ route('admin.village-aparatus.create') }}" wire:navigate class="text-white">
            <i class="ti ti-plus"></i> Perangkat Desa
          </a>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Nama</th>
              <th scope="col" style="white-space: nowrap">Jabatan</th>
              {{-- <th scope="col" style="white-space: nowrap">Tempat, Tanggal Lahir</th> --}}
              <th scope="col" style="white-space: nowrap">Jenis Kelamin</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($aparatuses as $aparatus)
              <tr wire:key="{{ $aparatus->id }}">
                <td style="white-space: nowrap">{{ $aparatus->name }}</td>
                <td style="white-space: nowrap">{{ $aparatus->position }}</td>
                <td style="white-space: nowrap">{{ $aparatus->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</td>
                {{-- <td style="white-space: nowrap">{{ $aparatus->pob ?? '-' }}, {{ $aparatus->dob ?? "-"}}</td> --}}
                <td style="white-space: nowrap">
                  <a href="{{ route('admin.village-aparatus.show', ['village_aparatus' => $aparatus->id]) }}"
                    wire:navigate>
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a href="{{ route('admin.village-aparatus.edit', ['village_aparatus' => $aparatus->id]) }}"
                    wire:navigate>
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setVillageAparatus({{ $aparatus->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$aparatuses" />
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">Hapus</button>
        </div>
      </div>
    </div>
  </div>

</div>
