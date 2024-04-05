<div>
  @push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
      $(document).ready(function() {
        const body = CKEDITOR.replace('body', {
          // toolbar: false,
          toolbar: [{
              name: 'clipboard',
              items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo']
            },
            {
              name: 'styles',
              items: ['Format', 'Font', 'FontSize']
            },
            {
              name: 'basicstyles',
              items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript']
            }
          ]
        });
        body.on('change', function(event) {
          @this.set('form.body', event.editor.getData());
        });
      });
      // $(document).ready(function() {
      //   const editor = ClassicEditor
      //     .create(document.querySelector('#editor'))
      //     .catch(error => {
      //       console.error(error);
      //     });
      //   editor.on('change', function(event) {
      //     console.log("tes");
      //     console.log(event.editor.getData());
      //   })
      // });
      // ClassicEditor
      //   .create(document.querySelector('#editor'))
      //   .catch(error => {
      //     console.error(error);
      //   });
    </script>
  @endpush
  {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
  <livewire:admin.components.breadcrumb :items="$breadcrumbs" />

  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">Tambah Berita</h5>
      <p class="mb-2">Tambah Data Berita</p>
      <div class="d-flex justify-content-end">
        <a href="{{ route('admin.article.index') }}" wire:navigate>
          <button class="btn btn-danger">Cancel</button>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="" wire:submit='store' enctype="multipart/form-data">
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
              <textarea wire:model.live="body" name="body" id="body" rows="10" cols="80"></textarea>
            </div>
            @error('form.body')
              <div class="invalid-feedback text-start">{{ $message }}</div>
            @enderror
            {{-- <div wire:ignore>
              <textarea id="body" wire:model.live='form.body' class="form-control @error('form.body') is-invalid @enderror"
                rows="5">
              </textarea>
            </div> --}}
            {{-- <div wire:ignore>
              <textarea id="editor" wire:model.live='form.body' class="form-control @error('form.body') is-invalid @enderror"
                rows="5">
              </textarea>
            </div> --}}
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
