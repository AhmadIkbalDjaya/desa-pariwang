<div class="row">
  <div class="col-md-6">
    Menampilkan {{ $items->firstItem() }} sampai {{ $items->lastItem() }} dari {{ $items->total() }} data 
  </div>
  <div class="col-md-6">
    {{ $items->links() }}
  </div>
</div>
