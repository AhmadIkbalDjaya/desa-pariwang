<nav
  style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
  aria-label="breadcrumb">
  <ol class="breadcrumb overflow-x-auto flex-nowrap">
    <li class="breadcrumb-item" style="white-space: nowrap;">
      <a href="{{ route('admin.index') }}" wire:navigate class="text-body-secondary fs-4">
        <i class="ti ti-home"></i>
      </a>
    </li>
    @foreach ($items as $i => $item)
      <li class="breadcrumb-item {{ $i + 1 == count($items) ? 'active' : '' }}" style="white-space: nowrap;"
        aria-current="page">
        <a href="{{ $item['route'] != '' ? route($item['route']) : '' }}" wire:navigate class="text-body-secondary">
          {{ $item['name'] }}
        </a>
      </li>
    @endforeach
  </ol>
</nav>
