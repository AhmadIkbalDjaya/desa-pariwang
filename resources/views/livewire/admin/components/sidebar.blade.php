<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.index') }}" wire:navigate.hover class="text-nowrap logo-img">
        <p class=" text-black" style="font-weight: 700; font-size: 1.5rem;">Desa Pariwang</p>
        {{-- <img src="{{ 'admin/assets/images/logos/dark-logo.svg' }}" width="180" alt="" /> --}}
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="sidebar-item {{ Request::is('addes') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.index') }}" wire:navigate.hover aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/profile*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.profile.index') }}" wire:navigate.hover aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Profil</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/village-aparatus*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.village-aparatus.index') }}" wire:navigate.hover
            aria-expanded="false">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Perangkat Desa</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/bumdes*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.bumdes.index') }}" wire:navigate.hover aria-expanded="false">
            <span>
              <i class="ti ti-building-store"></i>
            </span>
            <span class="hide-menu">Bumdes</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/institution*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.institution.index') }}" wire:navigate.hover
            aria-expanded="false">
            <span>
              <i class="ti ti-building-bank"></i>
            </span>
            <span class="hide-menu">Kelembagaan</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/article*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.article.index') }}" wire:navigate.hover aria-expanded="false">
            <span>
              <i class="ti ti-news"></i>
            </span>
            <span class="hide-menu">Berita</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('addes/complaint*') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('admin.complaint.index') }}" wire:navigate.hover aria-expanded="false">
            <span>
              <i class="ti ti-news"></i>
            </span>
            <span class="hide-menu">Kritik & Masukan</span>
          </a>
        </li>
      </ul>
      <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
        <div class="d-flex">
          <div class="unlimited-access-title me-3">
            <h6 class="fw-semibold fs-3 mb-6 text-dark w-85">Butuh Bantuan?</h6>
            <a href="https://www.instagram.com/djaya_ikbal/" target="_blank"
              class="btn btn-primary fs-2 fw-semibold lh-sm">Hubungi Developer</a>
          </div>
          <div class="unlimited-access-img">
            <img src="{{ 'admin/assets/images/backgrounds/rocket.png' }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
