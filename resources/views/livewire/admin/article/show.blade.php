<div>
  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Berita</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <a href="{{ route('admin.article.edit', ['article' => $article->id]) }}">
            <button class="btn btn-sm w-100 btn-warning">
              Edit
            </button>
          </a>
        </div>
        <div class="col-6 col-md-2">
          <button wire:click='destroy' class="btn btn-sm w-100 btn-danger">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-12 col-md-4">
          <p class="fs-4">Judul Berita</p>
        </div>
        <div class="col-12 col-md-8">
          <p class="fs-4">{{ $article->title }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 col-md-4">
          <p class="fs-4">Isi Berita</p>
        </div>
        <div class="col-12 col-md-8">
          <p class="fs-4">{!! $article->body !!}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 col-md-4">
          <p class="fs-4">Tanggal Publish</p>
        </div>
        <div class="col-12 col-md-8">
          <p class="fs-4">{{ $article->publish_date }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 col-md-4">
          <p class="fs-4">Gambar Berita</p>
        </div>
        <div class="col-12 col-md-8">
          <img src="{{ asset($article->image) }}" alt="" srcset="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

</div>
