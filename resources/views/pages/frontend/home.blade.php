@extends('layouts.frontend')

@section('title')
    Beranda -
@endsection

@section('content')
    <section class="pt-[54px] md:pt-[75px] flex items-center">
        <section
            class="bg-gradient-hero flex md:w-full justify-center items-center gap-6 h-[26rem] px-2 md:px-10 lg:px-10 lg:py-10 rounded-xl">
            <div class="self-start hidden lg:block">
                <img class="w-[16rem]" src="{{ asset('assets/icons/pencil.svg') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center gap-6">
                <h1 class="text-[2.5rem] md:text-5xl lg:text-6xl text-center font-semibold leading-tight">Biar Cetakanku
                    Bicara
                    Kualitasmu
                </h1>
                <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-xl leading-normal">
                    Dengan keahlian dan teknologi terkini, kami siap memberikan pengalaman percetakan yang tak terlupakan
                    dan memuaskan. Selamat datang di dunia cetak yang menginspirasi dan berkualitas!
                </p>
                <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                    data-ripple-light="true"
                    class="flex w-[10rem] items-center justify-center px-4 gap-3 select-none bg-transparent py-3 text-center align-middle text-sm font-bold text-black hover:bg-black hover:text-white transition-all duration-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none border-[1.5px] border-black">
                    Lihat Produk
                </a>
            </div>
            <div class="self-end hidden lg:block">
                <img class="w-[16rem]" src="{{ asset('assets/icons/pentool.svg') }}" alt="">
            </div>
        </section>
    </section>
    <section class="flex justify-center items-center py-20 px-10">
        <div class="clients w-full">
            <ul>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
            </ul>
        </div>
    </section>
    <section class="flex flex-col justify-center items-center gap-20">
        <section class="flex flex-col justify-center items-center gap-5">
            <h1 class="text-4xl font-semibold">Keunggulan Kami</h1>
            <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-lg leading-normal text-slate-400">
                Dengan beragam pilihan yang disesuaikan dengan kebutuhan
                Anda, kami menyediakan solusi yang inovatif dan berkualitas untuk memenuhi kebutuhan Anda.
            </p>
        </section>
        <section class="w-full">
            <ul class="flex justify-center items-center flex-wrap gap-16 lg:gap-10">
                <li class="w-[20rem] group flex flex-col items-center justify-center gap-6">
                    <div
                        class="bg-transparent border border-black group-hover:bg-black transition-all duration-500 ease-in-out p-5 rounded-[50%]">
                        <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z">
                            </path>
                            <path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center items-center text-center gap-3">
                        <h2 class="text-2xl font-medium">Mutu cetak yang terjamin</h2>
                        <p class="text-sm text-slate-400">Cetak berkualitas, dijamin kualitasnya dan dapat diandalkan</p>
                    </div>
                </li>
                <li class="group w-[20rem] flex flex-col items-center justify-center gap-6">
                    <div
                        class="bg-transparent border border-black group-hover:bg-black transition-all duration-500 ease-in-out p-5 rounded-[50%]">
                        <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z">
                            </path>
                            <path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center items-center text-center gap-3">
                        <h2 class="text-2xl font-medium">Harga kompetitif</h2>
                        <p class="text-sm text-slate-400">Percetakan dengan biaya yang bersaing dan kualitas terjaga</p>
                    </div>
                </li>
                <li class="group w-[20rem] flex flex-col items-center justify-center gap-6">
                    <div
                        class="bg-transparent border border-black group-hover:bg-black transition-all duration-500 ease-in-out p-5 rounded-[50%]">
                        <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z">
                            </path>
                            <path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center items-center text-center gap-3">
                        <h2 class="text-2xl font-medium">Pengiriman cepat & aman</h2>
                        <p class="text-sm text-slate-400">Pengiriman dengan efisien dan aman, tepat waktu</p>
                    </div>
                </li>
            </ul>
        </section>
    </section>
    <section class="flex flex-col lg:flex-row justify-center items-center py-28 gap-10 md:gap-16">
        <div class="grid gap-6">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <img class="h-[14rem] w-[40rem] object-cover object-center rounded-lg hidden md:block"
                        src="{{ asset('assets/images/aboutus-2.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-[14rem] w-[40rem] object-cover object-center rounded-lg hidden md:block"
                        src="{{ asset('assets/images/aboutus-3.jpg') }}" alt="">
                </div>
            </div>
            <div>
                <img class="h-[15rem] w-full lg:w-[40rem] object-cover object-center block md:hidden lg:block rounded-lg"
                    src="{{ asset('assets/images/aboutus-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="flex flex-col justify-center items-center lg:items-start gap-5 md:gap-10">
            <h1 class="text-4xl font-semibold text-center lg:text-left">About Us</h1>
            <p class="text-sm leading-normal text-center lg:text-left text-slate-400">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas aut enim alias nobis maiores nihil nesciunt
                id corporis autem facere iure hic doloremque eos voluptas quisquam earum in, rem, ab eligendi? Ipsum magnam
                architecto aliquid?
            </p>
        </div>
    </section>
    <section class="flex flex-col justify-center items-center gap-20">
        <section class="flex flex-col justify-center items-center gap-5">
            <h1 class="text-4xl font-semibold">Produk Terbaik Kami</h1>
            <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-lg leading-normal text-slate-400">
                Dengan beragam pilihan yang disesuaikan dengan kebutuhan
                Anda, kami menyediakan solusi yang inovatif dan berkualitas untuk memenuhi kebutuhan Anda.
            </p>
        </section>
        <section class="flex flex-col justify-center items-center gap-6">
            <section class="w-full py-16 md:py-6 flex flex-wrap justify-center items-center gap-y-20 gap-x-8 xl:gap-x-12">
                {{-- Card Prod --}}
                <article
                    class="relative group flex w-[250px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                    <div
                        class="relative flex justify-center items-center mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-slate-400 to-slate-500">
                        <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                            src="{{ asset('assets/images/default-image.png') }}">
                    </div>
                    <div class="p-6">
                        <h5
                            class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Buku Amplop
                        </h5>
                        <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                            Rp. 69000
                        </p>
                    </div>
                    <div class="p-6 pt-0 flex justify-between items-center">
                        <a href="" class="underline">Detail</a>
                        <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                            data-ripple-light="true"
                            class="flex items-center justify-between px-4 gap-3 select-none rounded-lg bg-slate-400 py-3 text-center align-middle text-sm font-bold text-white shadow-md shadow-slate-500/20 transition-all hover:shadow-lg hover:shadow-slate-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: white;transform: ;msFilter:;">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                            Beli
                        </a>
                    </div>
                </article>
                <article
                    class="relative group flex w-[250px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                    <div
                        class="relative flex justify-center items-center mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-slate-400 to-slate-500">
                        <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                            src="{{ asset('assets/images/default-image.png') }}">
                    </div>
                    <div class="p-6">
                        <h5
                            class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Buku Amplop
                        </h5>
                        <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                            Rp. 69000
                        </p>
                    </div>
                    <div class="p-6 pt-0 flex justify-between items-center">
                        <a href="" class="underline">Detail</a>
                        <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                            data-ripple-light="true"
                            class="flex items-center justify-between px-4 gap-3 select-none rounded-lg bg-slate-400 py-3 text-center align-middle text-sm font-bold text-white shadow-md shadow-slate-500/20 transition-all hover:shadow-lg hover:shadow-slate-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: white;transform: ;msFilter:;">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                            Beli
                        </a>
                    </div>
                </article>
                <article
                    class="relative group flex w-[250px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                    <div
                        class="relative flex justify-center items-center mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-slate-400 to-slate-500">
                        <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                            src="{{ asset('assets/images/default-image.png') }}">
                    </div>
                    <div class="p-6">
                        <h5
                            class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Buku Amplop
                        </h5>
                        <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                            Rp. 69000
                        </p>
                    </div>
                    <div class="p-6 pt-0 flex justify-between items-center">
                        <a href="" class="underline">Detail</a>
                        <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                            data-ripple-light="true"
                            class="flex items-center justify-between px-4 gap-3 select-none rounded-lg bg-slate-400 py-3 text-center align-middle text-sm font-bold text-white shadow-md shadow-slate-500/20 transition-all hover:shadow-lg hover:shadow-slate-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: white;transform: ;msFilter:;">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                            Beli
                        </a>
                    </div>
                </article>
            </section>
            <section class="flex justify-center items-center">
                <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                    data-ripple-light="true"
                    class="flex w-[10rem] items-center justify-center px-4 gap-3 select-none bg-transparent py-3 text-center align-middle text-sm font-bold text-black hover:bg-black hover:text-white transition-all duration-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none border-[1.5px] border-black">
                    Lihat Produk
                </a>
            </section>
        </section>
    </section>
@endsection
