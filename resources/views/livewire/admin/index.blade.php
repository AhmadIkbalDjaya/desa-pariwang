<div>
  {{-- Do your work, then step back. --}}
  <div class="row">
    {{-- <div class="col-md-3 col-6">
      <div class="card overflow-hidden">
        <div class="card-body p-4">
          <div class="d-flex align-items-center">
            <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
              <i class="ti ti-user fs-6"></i>
            </div>
            <div class="ps-3">
              <h6>100</h6>
              <a href="" class="text-success small pt-1 fw-bold">Total</a>
              <span class="text-muted small pt-2 ps-1">Bumdes</span>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-warning">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Kelembagaan</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-building-bank" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $institution_count }}</p>
          </div>
          <a href="{{ route('admin.institution.index') }}" wire:navigate
            class="bg-white text-warning px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-primary">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Bumdes</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-building-store" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $bumdes_count }}</p>
          </div>
          <a href="{{ route('admin.bumdes.index') }}" wire:navigate
            class="bg-white text-primary px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-danger">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Perangkat Desa</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-users" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $village_aparatus_count }}</p>
          </div>
          <a href="{{ route('admin.village-aparatus.index') }}" wire:navigate
            class="bg-white text-danger px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-6">
      <div class="card overflow-hidden bg-success">
        <div class="card-body px-3 py-3">
          <h6 class="text-white">Total Berita</h6>
          <div class="d-flex align-items-center gap-2 text-white">
            <i class="ti ti-news" style="font-weight: 900; font-size: 1.8em"></i>
            <p class="m-0" style="font-weight: 900; font-size: 1.8em">{{ $article_count }}</p>
          </div>
          <a href="{{ route('admin.article.index') }}" wire:navigate
            class="bg-white text-success px-2 py-1 rounded-pill fw-bold" style="font-size: .8em">Lihat</a>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <div class="col-md-4 col-12"> --}}
  <div class="d-flex justify-content-evenly flex-wrap">
    <div class="" style="width: 250px">
      <div class="card overflow-hidden">
        <div class="card-body px-3 py-3">
          <img src="{{ asset('storage/article/tes.jpg') }}" alt="" class="img-fluid"
            style="height: 175px; width: 100%; object-fit: cover">
          <h4 class="mt-2 custom-overflow">Total Kelembagaan</h4>
          <p class="custom-overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum itaque
            reiciendis autem maxime
            ut.</p>
        </div>
      </div>
    </div>
    <div class="" style="width: 250px">
      <div class="card overflow-hidden">
        <div class="card-body px-3 py-3">
          <img src="{{ asset('storage/article/tes.jpg') }}" alt="" class="img-fluid"
            style="height: 175px; width: 100%; object-fit: cover">
          <h4 class="mt-2 custom-overflow">Total Kelembagaan</h4>
          <p class="custom-overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum itaque
            reiciendis autem maxime
            ut.</p>
        </div>
      </div>
    </div>
    <div class="" style="width: 250px">
      <div class="card overflow-hidden">
        <div class="card-body px-3 py-3">
          <img src="{{ asset('storage/article/tes.jpg') }}" alt="" class="img-fluid"
            style="height: 175px; width: 100%; object-fit: cover">
          <h4 class="mt-2 custom-overflow">Total Kelembagaan</h4>
          <p class="custom-overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum itaque
            reiciendis autem maxime
            ut.</p>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-4 col-12">
      <div class="card overflow-hidden">
        <div class="card-body px-3 py-3">
          <img src="{{ asset('storage/article/tes.jpg') }}" alt="" class="img-fluid"
            style="height: 175px; width: 100%; object-fit: cover">
          <h4 class="mt-2 custom-overflow">Total Kelembagaan</h4>
          <p class="custom-overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum itaque
            reiciendis autem maxime
            ut.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12">
      <div class="card overflow-hidden">
        <div class="card-body px-3 py-3">
          <img src="{{ asset('storage/article/tes.jpg') }}" alt="" class="img-fluid"
            style="height: 175px; width: 100%; object-fit: cover">
          <h4 class="mt-2 custom-overflow">Total Kelembagaan</h4>
          <p class="custom-overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum itaque
            reiciendis autem maxime
            ut.</p>
        </div>
      </div>
    </div> --}}
  </div>
</div>
