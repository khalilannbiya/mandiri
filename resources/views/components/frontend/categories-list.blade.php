<div class="flex flex-col items-center lg:items-start gap-6">
    <div class="w-full accordion m-1 md:mb-12 p-1 md:p-0 lg:py-0 lg:m-0">
        <div class="item w-full flex flex-col rounded border border-gray-300 divide-y divide-gray-300 mb-2">
            <div
                class="title p-4 md:p-2 font-semibold flex justify-between items-center cursor-pointer transform transition-color duration-700 ease-in-out">
                <h1>Kategori Produk</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                </svg>
            </div>
            <div class="body h-0 invisible overflow-hidden transform duration-700 ease-in-out">
                <div id="categories-scrollbar"
                    class="transform duration-700 ease-in-out px-2 pt-0 pb-2 divide-y flex flex-col overflow-y-scroll h-auto max-h-64">
                    @forelse ($categories as $item)
                        @if (isset($category) && $item->id == $category->id)
                            <a href="{{ route('show-by-category', $item->slug) }}" aria-label="{{ $item->name }}"
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg bg-black transition-all duration-500 ease-in-out">
                                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z">
                                    </path>
                                    <path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z"></path>
                                    <path d="m12 12-1-1-2 3h10l-4-6z"></path>
                                </svg>
                                <p class="text-white">{{ $item->name }}</p>
                            </a>
                        @else
                            <a href="{{ route('show-by-category', $item->slug) }}" aria-label="{{ $item->name }}"
                                class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-black transition-all duration-500 ease-in-out">
                                <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z">
                                    </path>
                                    <path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z"></path>
                                    <path d="m12 12-1-1-2 3h10l-4-6z"></path>
                                </svg>
                                <p class="group-hover:text-white text-black">{{ $item->name }}</p>
                            </a>
                        @endif
                    @empty
                        <p class="text-black">Belum ada kategori</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
