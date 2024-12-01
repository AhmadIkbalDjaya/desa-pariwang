<div>
  <x-toast />
  {{-- Stop trying to control. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Berita</h5>
      <p class="mb-0">Berita Terkini Desa Pariwang</p>
      <div class="row justify-content-between">
        <div class="col-md-3 my-1 px-0">
          <input wire:model.live="search" class="form-control" type="text" placeholder="Cari Berita"
            aria-label="default input example">
        </div>
        <a wire:navigate href="{{ route('admin.article.create') }}"
          class="btn btn-primary add-button text-white col-md-3 my-1">
          <i class="ti ti-plus"></i> Berita
        </a>
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
                <td style="white-space: nowrap">{!! Str::limit($article->body, $limit = 40, '...') !!}</td>
                <td style="white-space: nowrap">{{ $article->publish_date }}</td>
                <td style="white-space: nowrap">
                  <a wire:navigate href="{{ route('admin.article.show', ['article' => $article->id]) }}">
                    <span class="badge bg-info text-white"><i class="ti ti-eye"></i></span>
                  </a>
                  <a wire:navigate href="{{ route('admin.article.edit', ['article' => $article->id]) }}">
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
