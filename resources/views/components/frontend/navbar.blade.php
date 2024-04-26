<header class="">
    {{-- -- Navbar Before Login -- --}}
    <nav id="navbar" class="bg-white z-[999] fixed w-full">
        <div
            class="max-w-7xl mx-auto top-0 left-0 flex items-center justify-between w-full px-4 md:px-4 py-3 md:py-5 lg:py-4">
            <div>
                <a href="{{ route('index') }}">
                    <img class="w-[5rem] md:w-[10rem] lg:w-[10rem]"
                        src="{{ isset($info->logo) ? Storage::url($info->logo) : asset('assets/images/logo.png') }}"
                        alt="Logo Percetakan Mandiri Print" />
                </a>
            </div>
            <ul id="navList"
                class="fixed bg-slate-400 lg:ml-10 lg:static flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-9 lg:gap-7 top-0 right-[-1000px] md:right-[-1000px] h-screen lg:h-auto w-full z-20 lg:z-0 bg-pewter-blue lg:bg-transparent lg:text-secondary font-semibold transition-all duration-1000">
                <li>
                    <a href="{{ route('index') }}"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ Route::current()->getName() == 'index' ? 'text-black lg:text-primary' : 'text-white hover:text-black lg:text-black lg:hover:text-primary' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('products') }}"
                        class="transition-all duration-500 md:text-lg lg:text-sm {{ in_array(Route::current()->getName(), ['products', 'show-by-category', 'product-details']) ? 'text-black lg:text-primary' : 'text-white hover:text-black lg:text-black lg:hover:text-primary' }}">Produk
                        Kami</a>
                </li>
                <li>
                    <a href="#about"
                        class="transition-all text-white lg:text-black hover:text-black duration-500 md:text-lg lg:text-sm ">Tentang
                        Kami</a>
                </li>
                <li class="block lg:hidden">
                    <form action="{{ route('products') }}" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative flex justify-end gap-2">
                            <svg class="w-4 h-4 absolute top-[10px] left-[30px] sm:left-[15px] text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <input type="text" name="keyword" id="default-search"
                                class="block w-[70%] sm:w-full p-2 pl-9 sm:pl-11 text-sm text-white placeholder:text-white border border-white rounded-lg bg-transparent focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Cari Produk..." />
                            <button type="submit"
                                class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="w-1/3 lg:w-[40%] hidden lg:block">
                <form action="{{ route('products') }}" method="GET">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative flex justify-end gap-2">
                        <svg class="w-4 h-4 lg:w-[14px] absolute top-[10px] lg:left-[10px] xl:left-[72px] text-gray-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <input type="text" name="keyword" id="default-search"
                            class="block lg:w-[230px] xl:w-[190px] p-2 pl-8 text-sm border border-slate-600 bg-transparent focus:ring-black focus:border-black"
                            placeholder="Cari Produk..." />
                        <button type="submit"
                            class="text-white hover:text-black bg-black hover:bg-transparent border border-black focus:ring-4 focus:outline-none focus:ring-black transition-all duration-500 ease-in-out font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                    </div>
                </form>
            </div>
            <div class="absolute z-30 right-4 md:right-4 lg:hidden" id="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" id="iconToggle"
                    class="icon icon-tabler icon-tabler-align-justified" width="27" height="27"
                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none" stroke-linecap="round"
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
