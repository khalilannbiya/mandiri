@extends('layouts.frontend')

@section('title')
    Portfolio Kami —
@endsection

@section('content')
    <section class="pt-[60px] md:pt-[82px]">
        <div
            class="bg-gradient-hero aspect-square lg:aspect-auto h-[300px] w-full flex items-center justify-center rounded-lg">
            <div class="max-w-7xl flex flex-col items-center justify-center gap-4">
                <h1 class="text-4xl text-white font-bold text-center leading-normal">Portfolio Klien</h1>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center justify-center flex-wrap space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('index') }}"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-slate-300">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-slate-300 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-slate-300 md:ms-2">Portfolio</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto flex flex-col justify-between items-center gap-20 py-32 px-4">
        <section class="w-full flex flex-wrap justify-center gap-x-8 gap-y-20">
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
            <article
                class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                <div
                    class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                    <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                        src="{{ asset('assets/images/default-image.png') }}" alt="">
                </div>
                <div class="p-6">
                    <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                        Nama Produk
                    </h5>
                    <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                        PT. Nama Klien Indonesia
                    </p>
                </div>
            </article>
        </section>
        <section class="w-full flex justify-between items-center py-6">
            <div class="w-full flex justify-center items-center">
                <nav aria-label="Pagination" class="">
                    <ul class="inline-flex -space-x-px text-sm">
                        <li>
                            <button type="button"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-s-lg">
                                <svg class="fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                    </path>
                                </svg>
                            </button>
                        </li>
                        <li class="group">
                            <a href=""
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-s-lg hover:bg-slate-100">
                                <svg class="group-hover:fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        {{-- Pagination Elements --}}
                        {{-- Three Dots" Separator --}}
                        {{-- <li class="disabled"><span>...</span></li> --}}

                        {{-- Array Of Links --}}
                        <li>
                            <button type="button" aria-current="page"
                                class="flex items-center justify-center px-3 h-8 text-black border border-slate-300 bg-slate-300 hover:bg-slate-400">1</button>
                        </li>
                        <li>
                            <a href=""
                                class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">2</a>
                        </li>

                        {{-- Next Page Link --}}
                        <li class="group">
                            <a href=""
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-e-lg hover:bg-slate-100">
                                <svg class="group-hover:fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-e-lg">
                                <svg class="fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                    </path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </section>
@endsection
