<div class="mx-5 mt-6 md:mx-32 md:my-12">
  <h1 class="text-center font-plusJakartaSans text-2xl font-bold text-green-700">
    {{ $article->title }}
  </h1>
  <div class="mt-2">
    <img class="h-56 w-full object-cover object-center md:h-96"
      src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.webp') }}"
      alt="{{ $article->title }}" />
  </div>
  <p class="py-4 italic text-gray-400">
    Dipublikasi pada {{ date('d-M-Y', strtotime($article->publish_date)) }}
  </p>
  <div class="text-justify text-base">
    {!! $article->body !!}
  </div>
</div>
