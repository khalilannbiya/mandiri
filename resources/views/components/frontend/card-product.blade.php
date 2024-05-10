<article
    class="relative group flex w-[250px] xl:w-[280px] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:shadow-2xl transition-all duration-700 ease-in-out">
    <div
        class="relative flex justify-center items-center mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-slate-300">
        <img class="w-3/5 object-cover object-center aspect-video rounded-md"
            src="{{ $product->productGalleries()->exists() ? Storage::url($product->productGalleries[0]->url) : asset('assets/images/default-image.png') }}">
    </div>
    <div class="p-6">
        <h5 class="mb-2 block text-xl font-semibold leading-snug tracking-normal text-black antialiased">
            {{ $product->name }}
        </h5>
        <p class="block text-base text-primary font-normal leading-relaxed text-inherit antialiased">
            Rp. {{ number_format($product->price) }}
        </p>
    </div>
    <div class="p-6 pt-0 flex justify-between items-center">
        <a href="{{ route('product-details', $product->slug) }}" class="underline">Detail</a>
        <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
            data-ripple-light="true"
            class="flex items-center justify-between px-4 gap-3 select-none rounded-md bg-black py-3 text-center align-middle text-sm font-bold text-white shadow-md shadow-slate-500/20 transition-all hover:shadow-lg hover:shadow-slate-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
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
