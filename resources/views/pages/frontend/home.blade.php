@extends('layouts.frontend')

@section('meta-description')
    <meta name="description"
        content="Percetakan Mandiri Printing dan Graphic menawarkan layanan percetakan murah, cepat, dan berkualitas di Jakarta. Buka 24 jam, kami siap membantu kebutuhan cetak banner, spanduk, undangan, dan berbagai produk cetak lainnya.">
@endsection

@section('content')
    <section class="pt-[60px] md:pt-[82px] flex items-center">
        <section
            class="bg-gradient-hero flex w-full justify-center items-center gap-6 h-[26rem] py-10 px-2 md:px-10 lg:px-10 lg:py-10 rounded-xl">
            <div class="max-w-7xl flex justify-center items-center gap-6 rounded-xl">
                <div class="self-start hidden lg:block">
                    <img class="w-[16rem]" src="{{ asset('assets/icons/pencil.webp') }}" alt="Icon Percetakan" loading="lazy">
                </div>
                <div class="flex flex-col justify-center items-center gap-6">
                    <h1 class="text-[2.5rem] text-white md:text-5xl lg:text-6xl text-center font-semibold leading-tight">
                        Biar Cetakanku
                        Bicara
                        Kualitasmu
                    </h1>
                    <p class="text-center text-white text-sm max-w-[20rem] sm:max-w-md lg:max-w-xl leading-normal">
                        Dengan keahlian dan teknologi terkini, kami siap memberikan pengalaman percetakan 24 jam yang tak
                        terlupakan
                        dan memuaskan. Selamat datang di dunia cetak yang menginspirasi dan berkualitas!
                    </p>
                    <a href="{{ route('products') }}" aria-label="Ke Halaman Produk"
                        class="flex w-[10rem] items-center justify-center px-4 gap-3 md:mt-4 select-none bg-black py-3 text-center align-middle text-sm font-bold text-white hover:bg-slate-700 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none border-[1.5px] border-black rounded-lg">
                        Lihat Produk
                    </a>
                </div>
                <div class="self-end hidden lg:block">
                    <img class="w-[16rem]" src="{{ asset('assets/icons/pentool.webp') }}" alt="Icon Percetakan"
                        loading="lazy">
                </div>
            </div>
        </section>
    </section>
    @include('components.frontend.client-infinite-scrolling')
    <section class="flex justify-center items-center py-24">
        <section class="max-w-7xl flex flex-col justify-center items-center gap-20">
            <section class="flex flex-col justify-center items-center gap-5">
                <h1 class="text-4xl text-black font-semibold">Keunggulan Kami</h1>
                <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-lg leading-normal text-slate-400">
                    Percetakan Mandiri Printing dan Graphic menawarkan berbagai keunggulan dalam layanan percetakan murah,
                    cepat, dan berkualitas di Jakarta.
                </p>
            </section>
            <section class="w-full">
                <ul class="flex justify-center items-center flex-wrap gap-16 lg:gap-10">
                    <li class="group w-[20rem] flex flex-col items-center justify-center gap-6 rounded-xl">
                        <div
                            class="group-hover:-translate-y-2 transition-all duration-500 ease-in-out bg-black border border-black p-5 rounded-[50%] group-hover:bg-slate-700">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path
                                    d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z">
                                </path>
                                <path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center gap-3">
                            <h2 class="text-2xl text-black font-medium">Mutu cetak yang terjamin</h2>
                            <p class="text-sm text-slate-400">Cetak berkualitas, dijamin kualitasnya dan dapat diandalkan
                            </p>
                        </div>
                    </li>
                    <li class="group w-[20rem] flex flex-col items-center justify-center gap-6">
                        <div
                            class="group-hover:-translate-y-2 transition-all duration-500 ease-in-out bg-black border border-black p-5 rounded-[50%] group-hover:bg-slate-700">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path
                                    d="M2.047 14.668a.994.994 0 0 0 .465.607l1.91 1.104v2.199a1 1 0 0 0 1 1h2.199l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135L12 20.75l1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1V16.38l1.91-1.104a1 1 0 0 0 .365-1.367L20.75 12l1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1H16.38l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.25l-1.909-1.104a1 1 0 0 0-1.366.365l-1.104 1.91H5.422a1 1 0 0 0-1 1V7.62l-1.91 1.104a1.003 1.003 0 0 0-.365 1.368L3.251 12l-1.104 1.908a1.009 1.009 0 0 0-.1.76zM12 13c-3.48 0-4-1.879-4-3 0-1.287 1.029-2.583 3-2.915V6.012h2v1.109c1.734.41 2.4 1.853 2.4 2.879h-1l-1 .018C13.386 9.638 13.185 9 12 9c-1.299 0-2 .515-2 1 0 .374 0 1 2 1 3.48 0 4 1.879 4 3 0 1.287-1.029 2.583-3 2.915V18h-2v-1.08c-2.339-.367-3-2.003-3-2.92h2c.011.143.159 1 2 1 1.38 0 2-.585 2-1 0-.325 0-1-2-1z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center gap-3">
                            <h2 class="text-2xl text-black font-medium">Harga kompetitif</h2>
                            <p class="text-sm text-slate-400">Percetakan dengan biaya yang bersaing dan kualitas terjaga
                            </p>
                        </div>
                    </li>
                    <li class="group w-[20rem] flex flex-col items-center justify-center gap-6">
                        <div
                            class="group-hover:-translate-y-2 transition-all duration-500 ease-in-out bg-black border border-black p-5 rounded-[50%] group-hover:bg-slate-700">
                            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path
                                    d="M19.15 8a2 2 0 0 0-1.72-1H15V5a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 1 1.73 3.49 3.49 0 0 0 7 .27h3.1a3.48 3.48 0 0 0 6.9 0 2 2 0 0 0 2-2v-3a1.07 1.07 0 0 0-.14-.52zM15 9h2.43l1.8 3H15zM6.5 19A1.5 1.5 0 1 1 8 17.5 1.5 1.5 0 0 1 6.5 19zm10 0a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center gap-3">
                            <h2 class="text-2xl text-black font-medium">Pengiriman cepat & aman</h2>
                            <p class="text-sm text-slate-400">Pengiriman dengan efisien dan aman, tepat waktu</p>
                        </div>
                    </li>
                </ul>
            </section>
        </section>
    </section>
    <section class="py-24 mx-auto flex flex-col justify-center items-center bg-[#F4F8FB] rounded-xl">
        <section class="max-w-7xl flex flex-col gap-20">
            <section class="flex flex-col justify-center items-center gap-5">
                <h1 class="text-4xl text-black font-semibold">Produk Terbaik Kami</h1>
                <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-lg leading-normal text-slate-400">
                    Dengan beragam pilihan yang disesuaikan dengan kebutuhan Anda, kami menyediakan cetak berkualitas untuk
                    mencetak banner, spanduk, dan produk lainnya. Buka 24 jam, siap
                    memenuhi kebutuhan Anda.
                </p>
            </section>
            <section class="flex flex-col justify-center items-center gap-6">
                <section
                    class="w-full py-16 md:py-6 flex flex-wrap justify-center items-center gap-y-20 gap-x-8 xl:gap-x-12">

                    {{-- Card Prod --}}
                    @forelse ($products as $product)
                        @include('components.frontend.card-product')
                    @empty
                        @include('components.frontend.product-not-found')
                    @endforelse
                </section>
                <section class="flex justify-center items-center">
                    <a href="{{ route('products') }}" aria-label="Ke Halaman Produk"
                        class="flex w-[10rem] items-center justify-center px-4 gap-3 select-none bg-transparent py-3 text-center align-middle text-sm font-bold text-black hover:bg-black hover:text-white transition-all duration-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none border-[1.5px] border-black rounded-lg">
                        Lihat Produk
                    </a>
                </section>
            </section>
        </section>
    </section>
    <section class="py-28 flex justify-center items-center mx-auto">
        <section class="max-w-7xl flex flex-col lg:flex-row justify-center items-center px-4 gap-10 md:gap-16">
            <section class="grid gap-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <img loading="lazy"
                            class="h-[12rem] w-[40rem] object-cover object-center rounded-lg hidden md:block"
                            src="{{ asset('assets/images/aboutus-2.webp') }}" alt="Gambar Alat Percetakan">
                    </div>
                    <div>
                        <img loading="lazy"
                            class="h-[12rem] w-[40rem] object-cover object-center rounded-lg hidden md:block"
                            src="{{ asset('assets/images/aboutus-3.webp') }}" alt="Gambar Alat Percetakan">
                    </div>
                </div>
                <div>
                    <img loading="lazy"
                        class="h-[12rem] w-full lg:w-[40rem] object-cover object-center block md:hidden lg:block rounded-lg"
                        src="{{ asset('assets/images/aboutus-1.webp') }}" alt="Gambar Alat Percetakan">
                </div>
            </section>
            <section class="flex flex-col justify-center items-center lg:items-start gap-5 md:gap-10">
                <h1 class="text-4xl text-black font-semibold text-center lg:text-left">Tentang Kami</h1>
                <p class="text-sm leading-normal text-center lg:text-left text-slate-400">
                    Mandiri Printing adalah sebuah toko percetakan yang berlokasi di daerah PS. Benhil, Jakarta Pusat,
                    memiliki sejarah yang menarik. Toko ini sebenarnya merupakan anak perusahaan dari Percetakan CV. Jasa
                    Pratama, yang telah berdiri selama lebih dari 30 tahun dan memiliki reputasi yang baik di Jakarta.
                </p>
                <a href="{{ route('about-us') }}" aria-label="Ke Halaman Tentang Kami"
                    class="text-white px-4 py-3 bg-black hover:bg-slate-700 border border-black focus:ring-4 focus:outline-none focus:ring-black transition-all duration-500 ease-in-out font-medium text-sm rounded-lg">Lihat
                    Selengkapnya</a>
            </section>
        </section>
    </section>
@endsection

@push('script')
    <script>
        const scrollers = document.querySelectorAll(".scroller");

        // If a user hasn't opted in for recuded motion, then we add the animation
        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                // add data-animated="true" to every `.scroller` on the page
                scroller.setAttribute("data-animated", true);

                // Make an array from the elements within `.scroller-inner`
                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                // For each item in the array, clone it
                // add aria-hidden to it
                // add it into the `.scroller-inner`
                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }
    </script>
@endpush
