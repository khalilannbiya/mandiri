<section class="flex justify-between items-center py-6">
    <div class="lg:w-[25%] xl-[20%]"></div>
    <div class="w-full lg:w-[75%] flex justify-center items-center">
        <nav aria-label="Pagination" class="">
            <ul class="inline-flex -space-x-px text-sm">

                @if ($paginator->onFirstPage())
                    <li>
                        <button type="button" aria-label="Produk Sebelumnya"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-s-lg">
                            <svg class="fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </button>
                    </li>
                @else
                    <li class="group">
                        <a href="{{ $paginator->previousPageUrl() }}" aria-label="Produk Sebelumnya"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-s-lg hover:bg-slate-100">
                            <svg class="group-hover:fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <button type="button" aria-current="page"
                                        aria-label="Produk Halaman Ke {{ $page }}"
                                        class="flex items-center justify-center px-3 h-8 text-black border border-slate-300 bg-slate-300 hover:bg-slate-400">{{ $page }}</button>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" aria-label="Produk Halaman Ke {{ $page }}"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="group">
                        <a href="{{ $paginator->nextPageUrl() }}" aria-label="Produk Selanjutnya"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-e-lg hover:bg-slate-100">
                            <svg class="group-hover:fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg>
                        </a>
                    </li>
                @else
                    <li>
                        <button type="button" aria-label="Produk Selanjutnya"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight bg-white border border-e-0 border-slate-300 rounded-e-lg">
                            <svg class="fill-slate-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg>
                        </button>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
</section>
