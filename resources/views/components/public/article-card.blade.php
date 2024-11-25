<div
  class="{{ $responsive ? 'w-[10rem] md:w-[17rem]' : 'w-[17rem] md:mb-0' }} mb-6 overflow-hidden rounded-lg bg-white shadow-lg">
  <div class="relative mx-3 mt-5">
    @if ($article->publish_date)
      <span class="absolute right-1 top-1 hidden rounded bg-green-500 px-2 text-xs font-medium text-white md:block">
        {{ date('d-M-Y', strtotime($article->publish_date)) }}
      </span>
    @endif

    <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" loading="lazy"
      class="{{ $responsive ? 'h-24 md:h-40' : 'h-40' }} w-full object-cover object-center" />
  </div>
  <div class="p-4">
    <h1 class="{{ $responsive ? 'text-md md:text-xl' : 'text-xl' }} line-clamp-1 font-semibold text-gray-800">
      {{ $article->title }}
    </h1>
    <div class="article-card-body mt-2 line-clamp-3 text-justify text-xs text-gray-600">
      {!! $article->body !!}
    </div>
    <div class="text-end">
      <a wire:navigate.hover href="{{ route('article.show', ['article' => $article->slug]) }}"
        class="text-xs font-semibold text-green-700">
        Baca Selengkapnya
      </a>
    </div>
  </div>
</div>
