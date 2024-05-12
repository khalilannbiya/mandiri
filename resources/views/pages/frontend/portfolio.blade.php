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
            @forelse ($portfolios as $portfolio)
                <article
                    class="relative group flex w-[250px] md:w-[280px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
                    <div
                        class="relative flex justify-center items-center mx-4 -mt-6 h-40 md:h-[220px] overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
                        <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                            src="{{ Storage::url($portfolio->img) }}" alt="">
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
                            {{ $portfolio->name }}
                        </h5>
                        <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
                            {{ $portfolio->client }}
                        </p>
                    </div>
                </article>
            @empty
                @include('components.frontend.product-not-found')
            @endforelse
        </section>

        {{-- Pagination --}}
        @if ($portfolios->lastPage() > 1)
            {{ $portfolios->links('components.frontend.pagination') }}
        @endif

    </section>
@endsection
