<div>
  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4"><i class="ti ti-home"></i></a>
      </li>
      <li class="breadcrumb-item" aria-current="page">
        <a href="{{ route('admin.article.index') }}" wire:navigate class="text-body-secondary">Berita</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Detail Berita</h5>
      <div class="row">
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-warning">
            Edit
          </button>
        </div>
        <div class="col-6 col-md-2">
          <button class="btn btn-sm w-100 btn-danger">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Judul Berita</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">: {{ $article->title }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Isi Berita</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">{{ $article->body }}</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Gambar Berita</p>
        </div>
        <div class="col-7 col-lg-8">
          <img src="{{ asset('storage/' . $article->image) }}" alt="" srcset="" class="img-fluid">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-5 col-lg-4">
          <p class="fs-4">Tanggal Publish</p>
        </div>
        <div class="col-7 col-lg-8">
          <p class="fs-4">{{ $article->publish_date }}</p>
        </div>
      </div>
    </div>
  </div>

</div>
