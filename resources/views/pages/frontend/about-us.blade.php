@extends('layouts.frontend')

@section('title')
    Tentang Kami —
@endsection

@section('content')
    <section class="pt-[60px] md:pt-[82px]">
        <div
            class="bg-gradient-hero aspect-square lg:aspect-auto h-[300px] w-full flex items-center justify-center rounded-lg">
            <div class="max-w-7xl flex flex-col items-center justify-center gap-4">
                <h1 class="text-4xl text-white font-bold text-center leading-normal">Tentang Kami</h1>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center justify-center flex-wrap space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('index') }}" aria-label="Kembali Ke Halaman Beranda"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-slate-300">
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
                                <svg class="rtl:rotate-180 w-3 h-3 text-slate-300 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-slate-300 md:ms-2">Tentang Kami</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto flex justify-center md:mt-20 py-24 px-4">
        <section class="flex flex-col lg:flex-row justify-between items-center gap-10">
            <div class="w-full flex justify-center items-center">
                <img loading="lazy" class="rounded-md md:max-w-xl" src="{{ asset('assets/images/aboutus-1.webp') }}"
                    alt="Gambar Alat Percetakan">
            </div>
            <div class="w-full md:max-w-xl">
                <p class="text-sm text-slate-400 text-justify">
                    Mandiri Printing adalah sebuah toko percetakan yang berlokasi di daerah PS. Benhil, Jakarta Pusat,
                    memiliki sejarah yang menarik. Toko ini sebenarnya merupakan anak perusahaan dari Percetakan CV. Jasa
                    Pratama, yang telah berdiri selama lebih dari 30 tahun dan memiliki reputasi yang baik di Jakarta.
                </p>
                <p class="text-sm text-slate-400 text-justify mt-5">
                    CV.
                    Jasa Pratama telah menjadi bagian integral dari dunia percetakan di kota ini. Dengan pengalaman yang
                    panjang, mereka telah melayani berbagai kebutuhan cetak, mulai dari brosur hingga undangan pernikahan.
                    Berkat kualitas kerja yang konsisten dan pelayanan yang ramah, mereka telah membangun hubungan baik
                    dengan pelanggan dan mitra bisnis.
                </p>
            </div>
        </section>
    </section>
    <section class="max-w-7xl mx-auto flex flex-col justify-center items-center gap-10 py-10 px-4">
        <h1 class="max-w-[380px] text-center text-black font-medium">
            Beberapa klien kami yang telah percaya dengan
            <span class="text-primary">
                Jasa Percetakan
            </span> dari
            <span class="text-primary">
                Mandiri Printing & Graphics
            </span>
        </h1>
        <section class="flex flex-wrap justify-center items-center gap-20 md:px-6">
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-1.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-2.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-3.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-4.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-5.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-6.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-7.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-8.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-9.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-10.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-11.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-12.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-13.webp') }}" alt="Logo Klien"
                loading="lazy" />
            <img class="w-[3rem] md:w-[5rem]" src="{{ asset('assets/images/client-14.webp') }}" alt="Logo Klien"
                loading="lazy" />
        </section>
    </section>
    <section class="max-w-7xl mx-auto flex flex-col items-center justify-center gap-5 py-10 px-4">
        <h1 class="text-4xl text-black font-semibold text-center leading-normal">Lokasi Kami</h1>
        <iframe title="Alamat Percetakan Mandiri Printing & Graphic" class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3622042877932!2d106.814934!3d-6.2158728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f74d354196c1%3A0xe5ebfab69203c6e!2sRAN%20PRINT!5e0!3m2!1sen!2sid!4v1714226397496!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
