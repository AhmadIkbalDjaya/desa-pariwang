@if (flash()->message)
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast show rounded-3" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-body d-flex justify-content-between text-white fw-medium bg-{{ flash()->class }} rounded-3">
        <p class="m-0">
          {{ flash()->message }}
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
@endif
