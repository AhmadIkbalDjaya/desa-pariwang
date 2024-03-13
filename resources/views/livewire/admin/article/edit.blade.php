<div>
  {{-- Stop trying to control. --}}
  @push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
      $(document).ready(function() {
        const body = CKEDITOR.replace('body');
        body.on('change', function(event) {
          console.log(event.editor.getData());
          @this.set('form.body', event.editor.getData());
        });
      });
    </script>
  @endpush
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
          <div class="col-12 col-md-4">
            <p class="fs-4">Judul Berita <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.title' class="form-control @error('form.title') is-invalid @enderror"
              type="text" placeholder="Judul Berita">
            @error('form.title')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Gambar</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.image' class="form-control @error('form.image') is-invalid @enderror"
              type="file" placeholder="Gambar Berita">
            @error('form.image')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Tanggal Publish</p>
          </div>
          <div class="col-12 col-md-8">
            <input wire:model.live='form.publish_date'
              class="form-control @error('form.publish_date') is-invalid @enderror" type="date"
              placeholder="Tanggal Publish Berita">
            @error('form.publish_date')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-md-4">
            <p class="fs-4">Isi Berita <x-admin.form.required /> </p>
          </div>
          <div class="col-12 col-md-8">
            <div wire:ignore>
              <textarea wire:model.live="form.body" name="body" id="body" rows="10" cols="80"></textarea>
            </div>
            @error('form.body')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
            {{-- <textarea wire:model.live='form.body' class="form-control @error('form.body') is-invalid @enderror" id=""
              rows="5"></textarea> --}}
            {{-- @error('form.body')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror --}}
          </div>
        </div>
        <div class="row mb-3">
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
