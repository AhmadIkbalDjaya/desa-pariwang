<div>
  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i
            class="ti ti-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page">Bumdes</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Badan Usaha Milik Desa</h5>
      <p class="mb-2">Badan Usaha Milik Desa Pariwang</p>
      <div class="d-flex justify-content-between">
        {{-- <div class="row"> --}}
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Bumdes"
            aria-label="default input example">
        </div>
        <button class="btn btn-primary add-button">
          <a href="{{ route('admin.bundes.create') }}" wire:navigate class="text-white">
            <i class="ti ti-plus"></i> Bumdes
          </a>
        </button>
        {{-- <div class="col-md-6 text-end">
        </div> --}}
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
                  <a href="{{ route('admin.bumdes.show', ['bumdes' => $bumdes->id]) }}" wire:navigate>
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a href="{{ route('admin.bumdes.edit', ['bumdes' => $bumdes->id]) }}" wire:navigate>
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
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
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-5">Yakin Ingin Menghapus?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

</div>
