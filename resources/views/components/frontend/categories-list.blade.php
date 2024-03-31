<div class="flex flex-col items-center lg:items-start gap-6">
    <h2 class="text-xl font-semibold hidden lg:block">Kategori Produk</h2>
    <div class="hidden lg:flex lg:flex-col">
        @forelse ($categories as $item)
        @if (isset($category) && $item->id == $category->id)
        <a href="{{ route('show-by-category', $item->slug) }}"
            class="group flex items-center gap-6 py-4 pl-3 pr-6 rounded-lg bg-slate-300 transition-all duration-500 ease-in-out">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="transform: ;msFilter:;">
                <path
                    d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                </path>
            </svg>
            <p class="text-white">{{ $item->name }}</p>
        </a>
        @else
        <a href="{{ route('show-by-category', $item->slug) }}"
            class="group flex items-center gap-6 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
            <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                <path
                    d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                </path>
            </svg>
            <p class="group-hover:text-white">{{ $item->name }}</p>
        </a>
        @endif
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
                    @forelse ($categories as $item)
                    @if (isset($category) && $item->id == $category->id)
                    <a href="{{ route('show-by-category', $item->slug)  }}"
                        class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg bg-slate-300 transition-all duration-500 ease-in-out">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                            </path>
                        </svg>
                        <p class="text-white">{{ $item->name }}</p>
                    </a>
                    @else
                    <a href="{{ route('show-by-category', $item->slug)  }}"
                        class="group w-full flex items-center gap-10 py-4 pl-3 pr-6 rounded-lg hover:bg-slate-300 transition-all duration-500 ease-in-out">
                        <svg class="fill-black group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758c.526 0 1.042.214 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.079.182.149.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.047.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.015 2.015 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.758 18H4V5h6c.552 0 1 .449 1 1v12.689A4.032 4.032 0 0 0 8.758 18zM20 18h-4.758c-.799 0-1.584.246-2.242.689V6c0-.551.448-1 1-1h6v13z">
                            </path>
                        </svg>
                        <p class="group-hover:text-white">{{ $item->name }}</p>
                    </a>
                    @endif
                    @empty
                    <p>Belum ada kategori</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
