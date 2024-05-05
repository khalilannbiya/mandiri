<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white p-10 flex flex-col md:flex-row md:flex-wrap items-center justify-center md:justify-start gap-8 overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="max-w-sm text-center p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-full md:basis-[45%]">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Produk</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500">{{ $product }}</p>
                    <a href="{{ route('dashboard.product.index') }}"
                        class="inline-flex font-medium items-center text-slate-400 hover:underline">
                        Selengkapnya
                        <svg class="w-3 h-3 ml-2 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
                <div
                    class="max-w-sm text-center p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-full md:basis-[45%]">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Kategori</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500">{{ $category }}</p>
                    <a href="{{ route('dashboard.category.index') }}"
                        class="inline-flex font-medium items-center text-slate-400 hover:underline">
                        Selengkapnya
                        <svg class="w-3 h-3 ml-2 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
                <div
                    class="max-w-sm text-center p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-full md:basis-[45%]">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">User</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500">{{ $user }}</p>
                    <a href="{{ route('dashboard.user.index') }}"
                        class="inline-flex font-medium items-center text-slate-400 hover:underline">
                        Selengkapnya
                        <svg class="w-3 h-3 ml-2 rtl:rotate-[270deg]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="bg-white mt-10 p-10 flex items-center justify-cente overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-wrap justify-between items-center gap-6 mb-8 w-full">
                    <div class="w-full md:w-[45%] mb-8 overflow-hidden rounded-lg shadow-xs">
                        <h4 class="mb-4 text-lg font-semibold text-gray-900">
                            Data Produk Terbaru
                        </h4>
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                        <th class="px-4 py-3">No</th>
                                        <th class="px-4 py-3">Nama Produk</th>
                                        <th class="px-4 py-3">Harga</th>
                                        <th class="px-4 py-3">Kategori</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @forelse ($products as $item)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <p class="text-red-500 capitalize">{{ number_format($item->price) }}</p>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $item->category->name }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="p-2 text-sm font-semibold text-center text-slate-400"
                                                colspan="4">
                                                Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="w-full md:w-[45%] mb-8 overflow-hidden rounded-lg shadow-xs">
                        <h4 class="mb-4 text-lg font-semibold text-gray-900">
                            Data Kategori Terbaru
                        </h4>
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                        <th class="px-4 py-3">No</th>
                                        <th class="px-4 py-3">Nama</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @forelse ($categories as $item)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $item->name }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="p-2 text-sm font-semibold text-center text-slate-400"
                                                colspan="4">
                                                Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-full md:w-[45%] mb-8 overflow-hidden rounded-lg shadow-xs">
                        <h4 class="mb-4 text-lg font-semibold text-gray-900">
                            Data User Terbaru
                        </h4>
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                        <th class="px-4 py-3">No</th>
                                        <th class="px-4 py-3">Nama</th>
                                        <th class="px-4 py-3">Email</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @forelse ($users as $item)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $item->email }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="p-2 text-sm font-semibold text-center text-slate-400"
                                                colspan="4">
                                                Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
