<div
  class="{{ $responsive ? 'md:w-[17rem] w-[10rem]' : 'w-[17rem] md:mb-0' }} mb-6  bg-white shadow-lg rounded-lg overflow-hidden">
  <div class="mx-3 mt-5">
    <img class="w-full {{ $responsive ? 'h-24 md:h-40' : 'h-40' }} object-cover object-center"
      src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.webp') }}"
      alt="Gambar">
  </div>
  <div class="p-4">
    <h1 class="{{ $responsive ? 'text-md md:text-xl' : 'text-xl' }} font-semibold text-gray-800 line-clamp-1">
      {{ $article->title }}</h1>
    <div class="article-card-body  mt-2 text-gray-600 text-justify text-xs line-clamp-3">
      {!! $article->body !!}
    </div>
    <div class="text-end">
      <a href="{{ route('article.show', ['article' => $article->slug]) }}" wire:navigate
        class="text-xs text-green-700 font-semibold">
        Baca Selengkapnya
      </a>
    </div>
  </div>
</div>
