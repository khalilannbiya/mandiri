@extends('layouts.frontend')

@section('title')
Produk Kami —
@endsection

@section('content')
<section class="pt-[54px]">
    <div
        class="bg-slate-300 aspect-square lg:aspect-auto h-[300px] w-full flex flex-col items-center justify-center gap-4">
        <h1 class="text-4xl font-bold">Semua Produk</h1>
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Products</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="flex flex-col lg:flex-row justify-between py-10">
    <section class="w-full lg:w-[25%] xl-[20%] flex justify-center">
        <div class="flex flex-col items-center lg:items-start gap-6">
            <h2 class="text-xl font-semibold hidden lg:block">Kategori Produk</h2>
            <div class="hidden lg:flex lg:flex-col">
                @forelse ($categories as $category)
                <a href="{{ route('show-by-category', $category->slug) }}"
                    class="group flex items-center gap-6 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                    <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                        </path>
                    </svg>
                    <p class="group-hover:text-white">{{ $category->name }}</p>
                </a>
                @empty
                <p>Belum ada kategori</p>
                @endforelse
            </div>
            <div class="accordion visible lg:invisible m-1 md:m-4 p-1 md:p-4">
                <div class="item w-full flex flex-col rounded border border-gray-300 divide-y divide-gray-300 mb-2">
                    <div
                        class="title p-4 md:p-2 font-semibold flex justify-between items-center cursor-pointer transform transition-color duration-700 ease-in-out">
                        <h2>Kategori Produk</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                        </svg>
                    </div>
                    <div class="body h-0 invisible overflow-hidden transform duration-700 ease-in-out">
                        <div class="transform duration-700 ease-in-out px-2 pb-10 divide-y flex flex-col">
                            <a href=""
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                                    </path>
                                </svg>
                                <p class="group-hover:text-white">Kelengkapan Sekolah</p>
                            </a>
                            <a href=""
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                                    </path>
                                </svg>
                                <p class="group-hover:text-white">Kelengkapan Sekolah</p>
                            </a>
                            <a href=""
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                                    </path>
                                </svg>
                                <p class="group-hover:text-white">Kelengkapan Sekolah</p>
                            </a>
                            <a href=""
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                                    </path>
                                </svg>
                                <p class="group-hover:text-white">Kelengkapan Sekolah</p>
                            </a>
                            <a href=""
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                                    </path>
                                </svg>
                                <p class="group-hover:text-white">Kelengkapan Sekolah</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="w-full lg:w-[75%] py-16 md:py-6 flex flex-wrap justify-center lg:justify-start items-center gap-y-20 gap-x-8 xl:gap-x-12">
        @forelse ($products as $product)
        <article
            class="relative group flex w-[250px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
            <div
                class="relative flex justify-center items-center mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-slate-400 to-slate-500">
                <img class="w-3/5 object-cover object-center aspect-video rounded-md"
                    src="{{ $product->productGalleries()->exists() ? Storage::url($product->productGalleries[0]->url) : asset('assets/images/default-image.png') }}">
            </div>
            <div class="p-6">
                <h5
                    class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    {{ $product->name }}
                </h5>
                <p class="block text-base font-light leading-relaxed text-inherit antialiased">
                    Rp. {{ number_format($product->price) }}
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
        @empty
        <h2>belum ada product</h2>
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
