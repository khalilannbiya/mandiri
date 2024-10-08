<header class="">
    {{-- -- Navbar Before Login -- --}}
    <nav id="navbar" class="bg-white z-[999] fixed w-full">
        <div
            class="max-w-7xl mx-auto top-0 left-0 flex items-center justify-between w-full px-4 md:px-4 py-3 md:py-5 lg:py-4">
            <div class="w-1/3">
                <a href="{{ route('index') }}" aria-label="Ke Halaman Beranda">
                    <img class="max-w-[130px] max-h-[35px] sm:max-w-[150px] sm:max-h-[40px] md:max-w-[160px] md:max-h-[46px] lg:max-w-[350px] lg:max-h-[50px] object-contain"
                        src="{{ isset($info->logo) ? Storage::url($info->logo) : asset('assets/images/logo.png') }}"
                        alt="Logo Percetakan Mandiri Printing & Graphic | Tempat di mana kreativitas bertemu dengan teknologi" />
                </a>
            </div>
            <ul id="navList"
                class="fixed bg-[#F4F8FB] lg:ml-10 lg:static flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-9 lg:gap-7 top-0 right-[-1000px] md:right-[-1000px] h-screen lg:h-auto w-full z-20 lg:z-0 bg-pewter-blue lg:bg-transparent lg:text-secondary font-semibold transition-all duration-1000">
                <li>
                    <a href="{{ route('index') }}" aria-label="Ke Halaman Beranda"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ Route::current()->getName() == 'index' ? 'text-slate-400 lg:text-primary' : 'text-black hover:text-primary lg:text-black lg:hover:text-primary' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('products') }}" aria-label="Ke Halaman Produk"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ in_array(Route::current()->getName(), ['products', 'show-by-category', 'product-details']) ? 'text-primary lg:text-primary' : 'text-black hover:text-primary lg:text-black lg:hover:text-primary' }}">Produk
                        Kami</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}" aria-label="Ke Halaman Tentang Kami"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ in_array(Route::current()->getName(), ['about-us']) ? 'text-primary lg:text-primary' : 'text-black hover:text-primary lg:text-black lg:hover:text-primary' }}">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}" aria-label="Ke Halaman Portfolio"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ in_array(Route::current()->getName(), ['portfolio']) ? 'text-primary lg:text-primary' : 'text-black hover:text-primary lg:text-black lg:hover:text-primary' }}">Portfolio</a>
                </li>
                <li class="block lg:hidden">
                    <form action="{{ route('products') }}" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative flex justify-end gap-2">
                            <svg class="w-4 h-4 absolute top-[10px] left-[30px] sm:left-[15px] text-black"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <input type="text" name="keyword" id="default-search"
                                class="block w-[70%] sm:w-full p-2 pl-9 sm:pl-11 text-sm text-black placeholder:text-black border border-black rounded-lg bg-transparent focus:ring-black focus:border-black"
                                placeholder="Cari Produk..." />
                            <button type="submit" aria-label="Cari berdasarkan kata kunci"
                                class="text-white bg-black hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="w-1/3 lg:w-[30%] hidden lg:block">
                <form action="{{ route('products') }}" method="GET">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative flex justify-end gap-2">
                        <input type="text" name="keyword" id="default-search"
                            class="block lg:w-[180px] xl:w-[190px] p-2 text-sm border border-slate-600 bg-transparent focus:ring-black focus:border-black rounded-md"
                            placeholder="Cari Produk..." />
                        <button type="submit" aria-label="Cari berdasarkan kata kunci"
                            class="text-white bg-slate-800 hover:bg-slate-700 border border-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-800 transition-all duration-500 ease-in-out font-medium rounded-md text-sm px-4 py-2">Cari</button>
                    </div>
                </form>
            </div>
            <div class="absolute z-30 right-4 md:right-4 lg:hidden cursor-pointer" id="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" id="iconToggle"
                    class="icon icon-tabler icon-tabler-align-justified" width="27" height="27"
                    viewBox="0 0 24 24" stroke-width="3" stroke="black" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 6l16 0"></path>
                    <path d="M4 12l16 0"></path>
                    <path d="M4 18l12 0"></path>
                </svg>
            </div>
        </div>
    </nav>
</header>

@push('script')
    <script>
        // Scroll Navbar
        document.onreadystatechange = function() {
            let lastScrollPosition = 0;
            const navbar = document.getElementById("navbar");
            window.addEventListener("scroll", function(e) {
                lastScrollPosition = window.scrollY;

                if (lastScrollPosition > 10) {
                    navbar.classList.add(
                        "transition-all",
                        "duration-500",
                        "shadow-lg",
                        "bg-champagne",
                    );
                    navbar.classList.remove("bg-transparent");
                } else {
                    navbar.classList.add(
                        "transition-all",
                        "duration-500",
                    );
                    navbar.classList.remove(
                        "shadow-lg",
                        "bg-champagne",
                    );
                }
            });
        };

        // Toggle Navbar Responsive
        const toggle = document.getElementById("toggle");
        toggle.addEventListener("click", function() {
            document.getElementById("navList").classList.toggle("slide");
            document.getElementById("iconToggle").classList.toggle("text-white");
        });

        // Change the width and height in the icon toggle when the screen width is that of a tablet screen.
        const widthOfScreen = window.innerWidth;
        if (widthOfScreen >= 768) {
            document.getElementById("iconToggle").setAttribute("width", "36");
            document.getElementById("iconToggle").setAttribute("height", "36");
        }
    </script>
@endpush
