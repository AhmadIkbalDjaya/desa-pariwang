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
        <button class="btn btn-primary add-button"><i class="ti ti-plus"></i> Bumdes</button>
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
                  <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  <span class="badge bg-danger text-white"><i class="ti ti-trash"></i></span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$bumdeses" />
    </div>
  </div>

</div>
