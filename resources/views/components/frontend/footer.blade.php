<!-- START: ASIDE MENU -->
<section class="">
    <div class="border-t border-b border-gray-200 py-12 mt-16 px-4">
        <div class="flex justify-start md:justify-center mb-8">
            <img class="max-w-[130px] max-h-[35px] sm:max-w-[150px] sm:max-h-[40px] md:max-w-[160px] md:max-h-[46px] lg:max-w-[350px] lg:max-h-[50px] object-contain"
                src="{{ isset($info->logo) ? Storage::url($info->logo) : asset('assets/images/logo.png') }}"
                alt="Logo Percetakan Mandiri Print | Tempat di mana kreativitas bertemu dengan teknologi" />
        </div>
        <aside class="container mx-auto">
            <div class="flex flex-wrap -mx-4 justify-around">
                <div class="px-4 w-full md:w-3/12 mb-4 md:mb-0">
                    <h5 class="text-lg text-black font-semibold mb-2 relative">
                        Lokasi
                    </h5>
                    <a href="https://maps.app.goo.gl/CwXdt8hwW2ED9X4b9" class="hover:underline">
                        <address class="text-[13px] text-black capitalize">
                            pasar bendungan hilir lantai 1 AKS NO 18, RT.14/RW.1, Bend. Hilir, Kecamatan Tanah Abang,
                            JAKARTA, Daerah Khusus Ibukota Jakarta 10210
                        </address>
                    </a>
                </div>
                <div class="px-4 w-full md:w-4/12 lg:w-3/12 mb-4 md:mb-0 accordion">
                    <h5 class="text-lg text-black font-semibold mb-2 relative">Hubungi Kami</h5>
                    <ul class="h-0 md:h-auto">
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Halo,%20Saya%20tertarik%20dengan%20jasa%20percetakan%20yang%20Anda%20tawarkan.%20Saya%20ingin%20bertanya%20tentang..."
                                target="_blank"
                                class="hover:underline py-1 flex items-center text-[13px] text-black gap-2">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263">
                                    </path>
                                </svg>
                                +6281290959055
                            </a>
                        </li>
                        <li>
                            <a href="mailto:mandiripercetakan93@gmail.com"
                                class="hover:underline py-1 flex items-center text-[13px] text-black gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                    </path>
                                </svg>
                                mandiripercetakan93@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 w-full md:w-2/12 my-14 md:my-0 accordion">
                    <h5 class="text-lg text-black font-semibold mb-2 relative">Telusuri</h5>
                    <ul class="h-0 md:h-auto">
                        <li>
                            <a href="{{ route('index') }}"
                                class="hover:underline py-1 block text-[13px] text-black">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"
                                class="hover:underline py-1 block text-[13px] text-black">Produk
                                Kami</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}"
                                class="hover:underline py-1 block text-[13px] text-black">Tentang
                                Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</section>
<!-- END: ASIDE MENU -->

<!-- START: FOOTER -->
<footer class="flex text-center px-4 py-8 justify-center">
    <p class="text-sm text-black">
        Copyright {{ date('Y') }} • All Rights Reserved Mandiri Printing & Graphics by
        <a class="text-red-300 underline"
            href="https://api.whatsapp.com/send?phone=6282299231721&text=Halo,%20Saya%20tertarik%20dengan%20jasa%20pembuatan%20website%20yang%20Anda%20tawarkan.%20Saya%20ingin%20bertanya%20tentang..."
            target="_blank">Do's
            Id</a>
    </p>
</footer>
<!-- END: FOOTER -->
