<div>
  <x-toast />
  {{-- Stop trying to control. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i
            class="ti ti-home"></i></a></li>
      <li class="breadcrumb-item active" aria-current="page">Berita</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Berita</h5>
      <p class="mb-0">Berita Terkini Desa Pariwang</p>
      <div class="d-flex justify-content-between">
        <div>
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Berita"
            aria-label="default input example">
        </div>
        <button class="btn btn-primary add-button">
          <a href="{{ route('admin.article.create') }}" wire:navigate class="text-white">
            <i class="ti ti-plus"></i> Berita
          </a>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col" style="white-space: nowrap">Judul</th>
              <th scope="col" style="white-space: nowrap">Berita</th>
              <th scope="col" style="white-space: nowrap">Tanggal Publish</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $article)
              <tr wire:key="{{ $article->id }}">
                <td style="white-space: nowrap">{{ Str::limit($article->title, $limit = 25, '...') }}</td>
                <td style="white-space: nowrap">{{ Str::limit($article->body, $limit = 40, '...') }}</td>
                <td style="white-space: nowrap">{{ $article->publish_date }}</td>
                <td style="white-space: nowrap">
                  <a href="{{ route('admin.article.show', ['article' => $article->id]) }}" wire:navigate>
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a href="{{ route('admin.article.edit', ['article' => $article->id]) }}" wire:navigate>
                    <span class="badge bg-warning text-white"><i class="ti ti-edit"></i></span>
                  </a>
                  <span class="badge bg-danger text-white" style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" wire:click="setArticle({{ $article->id }})">
                    <i class="ti ti-trash"></i>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <x-pagination :items="$articles" />
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
          <p class="fs-5">Yakin Ingin Menghapus {{ $form->title }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" wire:click="destroy">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>
