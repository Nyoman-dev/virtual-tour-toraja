<x-layouts>
  <div class="w-3/4 pt-28 mx-auto">
    <section class="">
      <h1 class="text-3xl font-bold mb-4">
        Wisata Tanah Toraja
      </h1>
      @foreach ($wisata as $item)
        <div class="mt-12 mb-20 px-4 mx-auto text-center max-w-screen-xl">
          <h2 class="text-xl font-bold text-left mb-4">{{ $item->judul }}</h2>
          <div class=" border-2 border-blue-700">
            {!! $item->map !!}
          </div>
          <p class="text-justify text-lg mt-8">
            {{ $item->deskripsi }}
          </p>
        </div>
      @endforeach
    </section>
  </div>
</x-layouts>