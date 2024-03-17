@push('style')
  <style>
    .maplibregl-compact {
      display: none !important;
    }

    .maplibregl-popup-content {
      padding: 0px !important;
      height: 80px;
      width: 320px;
      box-sizing: border-box !important;
    }

    .line-clamp-1 {
      overflow: hidden;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 1;
    }

    .line-clamp-2 {
      overflow: hidden;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 2;
    }

    .maplibregl-popup-close-button {
      padding: 0px 5px !important;
    }
  </style>
@endpush
