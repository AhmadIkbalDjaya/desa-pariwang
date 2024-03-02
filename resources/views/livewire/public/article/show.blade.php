<div class="md:mx-32 md:my-12 mx-5 mt-6">
  <h1 class="text-green-700 text-2xl font-bold font-plusJakartaSans text-center">{{ $article->title }}</h1>
  <div class="mt-2">
    <img class="w-full h-56 md:h-96 object-cover object-center"
      src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.webp') }}"
      alt="Gambar">
  </div>
  <p class="py-4 italic text-gray-400">Dipublikasi pada {{ $article->publish_date }}</p>
  {{-- <p class="py-4 italic text-gray-400">Dipublikasi pada 17 - Feb - 2023</p> --}}
  <div class="text-justify text-base">
    {!! $article->body !!}
  </div>
</div>
