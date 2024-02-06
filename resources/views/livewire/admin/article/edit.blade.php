<div>
  {{-- Stop trying to control. --}}
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
      <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Edit Berita</h5>
      <p class="mb-2">Edit Data Berita Dibawah Ini</p>
      <div class="d-flex justify-content-end">
        <a href="{{ route('admin.article.index') }}" wire:navigate>
          <button class="btn btn-danger">Cancel</button>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='update' enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Nama Bumdes</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.title' class="form-control @error('form.title') is-invalid @enderror"
              type="text" placeholder="Nama Badan Usaha">
            @error('form.title')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Isi Berita</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.body' class="form-control @error('form.body') is-invalid @enderror"
              type="text" placeholder="Nama Direktur Bumdes">
            @error('form.body')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Gambar</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.image' class="form-control @error('form.image') is-invalid @enderror"
              type="file" placeholder="Nama Direktur Bumdes">
            @error('form.image')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-5 col-lg-4">
            <p class="fs-4">Tanggal Publish</p>
          </div>
          <div class="col-7 col-lg-8">
            <input wire:model.live='form.publish_date'
              class="form-control @error('form.publish_date') is-invalid @enderror" type="date"
              placeholder="Nama Direktur Bumdes">
            @error('form.publish_date')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
