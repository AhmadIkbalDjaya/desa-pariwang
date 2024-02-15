<div>
  {{-- The whole world belongs to you. --}}
  <section class="hero bg-cover bg-center bg-blend-multiply md:h-[93vh] h-[50vh] bg-gray-400 grid place-items-center"
    style="background-image: url('images/village-2.webp')">
    <div class="text-center text-white font-protestStrike">
      <p class="md:text-6xl text-5xl">
        Selamat Datang <br> Website Resmi Desa Pariwang
      </p>
      <p>Dapatkan Informasi Terbaru Mengenai Desa Pariwang</p>
    </div>
  </section>

  <section id="welcome" class="font-plusJakartaSans md:flex md:mx-20 md:my-20 mx-7 my-8">
    <div class="md:basis-1/2 grid place-items-center mb-6">
      <p class="md:text-4xl text-3xl text-green-700 font-semibold">Selamat Datang</p>
    </div>
    <div class="md:basis-1/2">
      <h1 class="text-green-700 text-2xl font-semibold mb-5">Desa Pariwang</h1>
      <p class="font-medium text-justify indent-10">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias porro
        aliquam, cum laborum facilis aliquid dolor repudiandae reprehenderit deleniti enim cumque eius, dicta beatae
        nulla nemo velit quidem, illum molestiae corrupti itaque incidunt vitae.
      </p>
      <div class="mt-2">
        <a href="{{ route('about') }}" wire:navigate class="text-green-700 font-semibold">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </section>

  <section id="videoFrame" class="md:mx-20 md:my-20 mx-7 my-6 flex justify-center">
    <div
      class="w-full xl:min-h-[65vh] lg:min-h-[45vh] md:min-h-[50vh] sm:min-h-[75vh] min-h-[35vh] flex justify-center items-center">
      <div class="bg-gray-200 w-[90%] md:w-[75%] h-[65%] md:h-[95%]">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/I97YGEP2q6A?wmode=transparent"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="article" class="md:mx-32 md:my-20 mx-7 mt-6">
    <h1 class="text-green-700 text-3xl font-bold font-plusJakartaSans text-center">Berita & Kegiatan</h1>
    <div class="pt-10 flex flex-wrap md:justify-between justify-around">
      <div class="max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="mx-3 mt-5">
          <img class="w-full h-40 object-cover object-center" src="{{ asset('images/village-2.webp') }}" alt="Gambar">
        </div>
        <div class="p-4">
          <h1 class="text-xl font-semibold text-gray-800">Judul Card</h1>
          <p class="mt-2 text-gray-600 text-justify text-xs line-clamp-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis totam quidem tenetur eveniet in? Sit optio
            asperiores quae sequi unde!
          </p>
          <div class="text-end">
            <a href="" wire:navigate class="text-xs text-green-700 font-semibold">
              Baca Selengkapnya
            </a>
          </div>
        </div>
      </div>
      <div class="max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="mx-3 mt-5">
          <img class="w-full h-40 object-cover object-center" src="{{ asset('images/village-2.webp') }}" alt="Gambar">
        </div>
        <div class="p-4">
          <h1 class="text-xl font-semibold text-gray-800">Judul Card</h1>
          <p class="mt-2 text-gray-600 text-justify text-xs line-clamp-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis totam quidem tenetur eveniet in? Sit optio
            asperiores quae sequi unde!
          </p>
          <div class="text-end">
            <a href="" wire:navigate class="text-xs text-green-700 font-semibold ">
              Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="mx-3 mt-5">
          <img class="w-full h-40 object-cover object-center" src="{{ asset('images/village-2.webp') }}" alt="Gambar">
        </div>
        <div class="p-4">
          <h1 class="text-xl font-semibold text-gray-800">Judul Card</h1>
          <p class="mt-2 text-gray-600 text-justify text-xs line-clamp-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis totam quidem tenetur eveniet in? Sit optio
            asperiores quae sequi unde!
          </p>
          <div class="text-end">
            <a href="" wire:navigate class="text-xs text-green-700 font-semibold ">
              Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-end mt-5">
      <a href="{{ route('article') }}" wire:navigate class="text-base text-green-700 font-semibold">Lihat Berita
        Lainnya</a>
    </div>
  </section>

  <section id="bumdes" class="mt-6 bg-green-600 text-white pt-12 pb-20 md:px-24 px-10 md:flex md:gap-16">
    <div class="md:basis-2/6">
      <p class="text-2xl font-light">Badan Usaha</p>
      <p class="text-4xl font-semibold">Milik Desa</p>
      <p class="text-justify text-sm indent-12 py-6">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed inventore similique non, dolorum cum aspernatur.
      </p>
      <a href="{{ route('bumdes') }}" wire:navigate class="text-sm underline underline-offset-8">
        Lihat lebih banyak >
      </a>
    </div>
    <div class="w-full pt-10 md:pt-0">
      <div class="flex flex-wrap md:justify-center justify-between md:gap-12 gap-0">
        <div class="max-w-[9rem] md:max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-md overflow-hidden">
          <div class="md:m-5 m-1">
            <img class="w-32 h-32 md:w-56 md:h-56 object-cover object-center" src="{{ asset('images/village-2.webp') }}"
              alt="Gambar">
          </div>
        </div>
        <div class="max-w-[9rem] md:max-w-[17rem] mb-6 md:mb-0 bg-white shadow-lg rounded-md overflow-hidden">
          <div class="md:m-5 m-1">
            <img class="w-32 h-32 md:w-56 md:h-56 object-cover object-center" src="{{ asset('images/village-2.webp') }}"
              alt="Gambar">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="feedBack" class="md:mx-32 md:my-20 mx-7 mt-6">
    <h1 class="text-center text-green-700 text-2xl md:text-3xl font-semibold">
      Kirimkan Pesan Kepada Kami
    </h1>
    <p class="pt-8 text-sm md:text-base text-center text-slate-700 md:px-48">
      Kirimkan pesan kepada kami untuk berbagi informasi, permintaan, atau komentar apa pun yang ingin Anda sampaikan.
      kami dengan senang hati dan akan meresponsnya
    </p>
    <div class="form-box md:px-20 my-12">
      <form action="" method="post">
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">Nama Lengkap <x-public.ui.input-required /></label>
            <input type="text" name="name" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" name="email" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
        </div>
        <div class="md:flex md:gap-14">
          <div class="mb-4 md:basis-1/2">
            <label for="name" class="block font-semibold">Telepon/WhatsApp</label>
            <input type="text" name="name" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
          <div class="mb-4 md:basis-1/2">
            <label for="email" class="block font-semibold">Instansi</label>
            <input type="email" name="email" id=""
              class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500">
          </div>
        </div>
        <div class="mb-4 md:basis-1/2">
          <label for="email" class="block font-semibold">Deskripsi <x-public.ui.input-required /></label>
          <textarea type="email" name="email" id="" rows="5"
            class="w-full border-gray-400 border-solid border rounded-md px-3 py-2 mt-1 bg-transparent focus:outline-none focus:border-green-500 resize-none"></textarea>
        </div>
        <button type="submit"
          class="text-center text-white font-semibold bg-green-700 w-full rounded py-1 shadow-md">Kirim</button>
      </form>
    </div>
  </section>

</div>
