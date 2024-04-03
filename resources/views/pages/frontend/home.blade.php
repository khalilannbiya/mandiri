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
@endsection
