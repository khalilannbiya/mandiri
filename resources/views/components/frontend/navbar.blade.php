<header class="">
    {{-- -- Navbar Before Login -- --}}
    <nav id="navbar" class="z-[999] fixed w-full">
        <div
            class="max-w-7xl mx-auto top-0 left-0 flex items-center justify-between w-full px-4 md:px-4 py-3 md:py-5 lg:py-2">
            <div>
                <a href="#up">
                    <img class="w-[5rem] md:w-[10rem] lg:w-[10rem]" src="{{ asset('frontend/images/content/logo.png') }}"
                        alt="Logo LaporDesa" />
                </a>
            </div>
            <ul id="navList"
                class="fixed bg-slate-400 lg:ml-10 lg:static flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-9 lg:gap-7 top-0 right-[-1000px] md:right-[-1000px] h-screen lg:h-auto w-full z-20 lg:z-0 bg-pewter-blue lg:bg-transparent lg:text-secondary font-semibold transition-all duration-1000">
                <li>
                    <a href="#up"
                        class="transition-all text-white lg:text-black duration-500 md:text-lg lg:text-sm hover:text-vermillion active">Beranda</a>
                </li>
                <li>
                    <a href=""
                        class="transition-all text-white lg:text-black duration-500 md:text-lg lg:text-sm hover:text-vermillion">Produk
                        Kami</a>
                </li>
                <li>
                    <a href="#about"
                        class="transition-all text-white lg:text-black duration-500 md:text-lg lg:text-sm hover:text-vermillion">Tentang
                        Kami</a>
                </li>
                <li class="block lg:hidden">
                    <form class="">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative flex justify-end gap-2">
                            <svg class="w-4 h-4 absolute top-[10px] left-[50px] text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <input type="search" id="default-search"
                                class="block w-[60%] p-2 pl-8 text-sm text-gray-900 placeholder:text-white border border-white rounded-lg bg-transparent focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Cari Produk..." required />
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2">Search</button>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="w-1/3 hidden lg:block">
                <form class="">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative flex justify-end gap-2">
                        <svg class="w-4 h-4 absolute top-[10px] lg:left-[20px] xl:left-[50px] text-gray-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <input type="search" id="default-search"
                            class="block lg:w-[68%] xl:w-[60%] p-2 pl-8 text-sm border border-slate-600 rounded-lg bg-transparent focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari Produk..." required />
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2">Search</button>
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

                if (lastScrollPosition > 50) {
                    navbar.classList.add(
                        "transition-all",
                        "duration-500",
                        "shadow-lg",
                        "bg-champagne",
                        "backdrop-blur"
                    );
                    navbar.classList.remove("bg-transparent");
                } else {
                    navbar.classList.add(
                        "transition-all",
                        "duration-500",
                        "bg-transparent"
                    );
                    navbar.classList.remove(
                        "shadow-lg",
                        "bg-champagne",
                        "backdrop-blur"
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
