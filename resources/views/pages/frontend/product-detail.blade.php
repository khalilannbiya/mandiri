@extends('layouts.frontend')

@section('title')
    Cetak {{ $product->name }} —
@endsection

@section('meta-description')
    <meta name="description"
        content="Jasa cetak {{ $product->name }} berkualitas dari Percetakan Mandiri Printing dan Graphic. Kami menawarkan cetakan murah dan cepat untuk kebutuhan {{ $product->name }} Anda. Layanan percetakan terbaik di Jakarta, buka 24 jam.">
@endsection

@section('content')
    <section class="pt-[60px] md:pt-[82px]">
        <div
            class="bg-gradient-hero aspect-square lg:aspect-auto h-[300px] w-full flex flex-col items-center justify-center rounded-lg">
            <div class="max-w-7xl flex flex-col items-center justify-center gap-4">
                <h1 class="text-4xl text-white font-bold text-center leading-normal">{{ $product->name }}</h1>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center justify-center flex-wrap space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('index') }}" aria-label="Kembali Ke Halaman Beranda"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-slate-300">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-slate-300 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('show-by-category', $product->category->slug) }}"
                                    aria-label="{{ $product->category->name }}"
                                    class="ms-1 text-sm font-medium text-white hover:text-slate-300 md:ms-2">{{ $product->category->name }}</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-slate-300 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-slate-300 md:ms-2">{{ $product->name }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between py-10 md:py-24 px-4">
        <section class="w-full lg:basis-1/4 flex justify-center lg:justify-start">

            {{-- Categories List --}}
            @include('components.frontend.categories-list')

        </section>
        <section class="w-full lg:basis-3/4 py-16 md:py-0 flex flex-wrap justify-start items-center">
            <div class="bg-slate-300 w-full flex justify-center items-center rounded-lg">
                <div id="gallery" class="relative w-[65%] py-6 md:py-3 lg:py-0" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-[16rem] sm:h-[20rem] overflow-hidden rounded-lg md:h-96">
                        @forelse ($product->productGalleries as $image)
                            <div class="hidden duration-700 ease-in-out rounded-lg"
                                data-carousel-item="{{ $image[0] ? 'active' : '' }}">
                                <img src="{{ Storage::url($image->url) }}"
                                    class="absolute block max-w-full object-cover object-center aspect-square md:aspect-video h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg"
                                    alt="Foto Produk {{ $product->name }}">
                            </div>
                        @empty
                            <div class="hidden duration-700 ease-in-out rounded-lg" data-carousel-item>
                                <img src="{{ asset('assets/images/default-image.png') }}"
                                    class="absolute block max-w-full object-cover object-center aspect-square md:aspect-video h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg"
                                    alt="Tidak Ada Foto Produk">
                            </div>
                        @endforelse
                    </div>
                    <!-- Slider controls -->
                    <button type="button" aria-label="Detail Foto Produk Sebelumnya"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-800/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none transition-all duration-300 ease-in-out">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-white group-hover:text-slate-300 rtl:rotate-180"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" aria-label="Detail Foto Produk Selanjutnya"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-800/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none transition-all duration-300 ease-in-out">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-white group-hover:text-slate-300 rtl:rotate-180"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="flex flex-col item-center py-6 md:py-10 gap-8 sm:pr-6 md:pr-8 lg:pr-12">
                <h1
                    class="relative text-2xl font-bold after:absolute after:bottom-[-25px] after:left-0 after:w-[80px] after:h-[4px] after:rounded-md after:bg-gradient-to-r from-[#62cff4] to-[#2c67f2]">
                    {{ $product->name }}</h1>
                <section class="mt-4">
                    {!! $product->description !!}
                </section>
                <div class="flex items-center">
                    <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Halo,%20Saya%20tertarik%20dengan%20%20Produk%20ini%20{{ url()->current() }}"
                        aria-label="Beli Produk" target="_blank"
                        class="flex items-center justify-between px-4 gap-3 select-none rounded-lg bg-black hover:bg-slate-700 py-3 text-center align-middle text-sm font-bold text-white shadow-md shadow-slate-500/20 transition-all hover:shadow-lg hover:shadow-slate-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none duration-500 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: white;transform: ;msFilter:;">
                            <path
                                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                            </path>
                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                            <circle cx="17.5" cy="19.5" r="1.5"></circle>
                        </svg>
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </section>
    </section>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(evt) {

            document.querySelectorAll(".title").forEach(function(el) {
                el.addEventListener("click", function(evt) {
                    var chevron = el.lastElementChild.classList,
                        body = el.nextElementSibling;

                    chevron.contains("rotate-180") ?
                        chevron.remove("rotate-180") :
                        chevron.add("rotate-180");

                    if (body.classList.contains("h-0")) {
                        el.classList.add("bg-gray-100");
                        body.style.height = Number(body.scrollHeight) + "px";
                        body.firstElementChild.style.paddingTop = "2.5rem";
                        body.classList.remove("h-0", "invisible");
                    } else {
                        body.style.height = "0";
                        body.firstElementChild.style.paddingTop = "2rem";
                        body.classList.add("h-0", "invisible");
                        el.classList.remove("bg-gray-100");
                    }
                });
            });

        });
    </script>
@endpush
