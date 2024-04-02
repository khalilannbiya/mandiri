@extends('layouts.frontend')

@section('title')
    Beranda -
@endsection

@section('content')
    <section class="pt-[54px] md:pt-[75px] flex items-center">
        <section
            class="bg-gradient-hero flex md:w-full justify-center items-center gap-6 h-[26rem] px-2 md:px-10 lg:px-10 lg:py-10 rounded-xl">
            <div class="self-start hidden lg:block">
                <img class="w-[16rem]" src="{{ asset('assets/icons/pencil.svg') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center gap-6">
                <h1 class="text-[2.5rem] md:text-5xl lg:text-6xl text-center font-semibold leading-tight">Biar Cetakanku
                    Bicara
                    Kualitasmu
                </h1>
                <p class="text-center text-sm max-w-[20rem] sm:max-w-md lg:max-w-xl">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, dolor qui magni labore suscipit
                    praesentium!
                </p>
                <a href="https://api.whatsapp.com/send?phone=6281290959055&text=Hello%20there!" target="_blank"
                    data-ripple-light="true"
                    class="flex w-[10rem] items-center justify-center px-4 gap-3 select-none bg-transparent py-3 text-center align-middle text-sm font-bold text-black hover:bg-black hover:text-white transition-all duration-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none border-[1.5px] border-black">
                    Lihat Produk
                </a>
            </div>
            <div class="self-end hidden lg:block">
                <img class="w-[16rem]" src="{{ asset('assets/icons/pentool.svg') }}" alt="">
            </div>
        </section>
    </section>
    <section class="flex justify-center items-center py-10 px-10">
        <div class="clients w-full">
            <ul>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
                <li>
                    <img class="w-[8rem]" src="{{ asset('assets/images/logo-client') }}" alt="">
                </li>
            </ul>
        </div>
    </section>
@endsection
