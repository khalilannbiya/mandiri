@extends('layouts.frontend')

@section('title')
    Produk Kami —
@endsection

@section('content')
    <section class="pt-[54px]">
        <div
            class="bg-slate-300 aspect-square lg:aspect-auto h-[300px] w-full flex flex-col items-center justify-center gap-4">
            <h1 class="text-4xl text-center leading-normal font-bold">{{ $category->name }}</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center justify-center flex-wrap space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('index') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-white">
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
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">{{ $category->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="flex flex-col lg:flex-row justify-between py-10">
        <section class="w-full lg:w-[25%] xl-[20%] flex justify-center">

            {{-- Categories List --}}
            @include('components.frontend.categories-list')

        </section>
        <section
            class="w-full lg:w-[75%] py-16 md:py-6 flex flex-wrap justify-center lg:justify-start items-center gap-y-20 gap-x-8 xl:gap-x-12">
            @forelse ($products as $product)
                {{-- Card Product --}}
                @include('components.frontend.card-product')

            @empty
                @include('components.frontend.product-not-found')
            @endforelse
        </section>
    </section>

    {{-- Pagination --}}
    {{-- if the $products has more than one page (meaning there are multiple pages) --}}
    @if ($products->lastPage() > 1)
        {{ $products->links('components.frontend.pagination') }}
    @endif
@endsection

@push('script')
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
@endpush()
