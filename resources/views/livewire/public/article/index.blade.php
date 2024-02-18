<div>
  <section class="hero bg-cover bg-center bg-blend-multiply md:h-[93vh] h-[50vh] bg-gray-400 grid place-items-center"
    style="background-image: url('images/village-2.webp')">
    <div class="text-center text-white font-protestStrike">
      <p class="md:text-6xl text-5xl">
        Berita
      </p>
    </div>
  </section>

  <section id="article-list" class="md:mx-32 md:my-20 mx-2 mt-6">
    @if ($articles->count() > 0)
      <div class="flex flex-wrap justify-around">
        @foreach ($articles as $article)
          <x-public.article-card responsive='1' :article="$article" />
        @endforeach
      </div>
    @else
      <p class="text-center text-base md:text-lg font-medium text-gray-400 pt-3">
        Belum Ada Berita Yang Ditambahkan
      </p>
    @endif
  </section>
</div>
