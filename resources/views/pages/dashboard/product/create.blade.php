<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('dashboard.product.index') }}">Product</a> &raquo; Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                <div class="mb-5" role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        There's something wrong!
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </p>
                    </div>
                </div>
                @endif

                <form action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data"
                    class="w-full">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="name"
                                class="block uppercase tracking-widest text-gray-700 text-xs font-bold mb-2">Nama
                                Produk</label>
                            <input type="text" placeholder="Masukan Nama Produk" name="name" id="name"
                                value="{{ old('name') }}"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="category_id"
                                class="block uppercase tracking-widest text-gray-700 text-xs font-bold mb-2">Nama
                                Kategori</label>
                            <select name="category_id" id="category_id"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected value="">Select Nama Kategori</option>
                                @forelse ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty
                                <option selected disabled>Belum Ada Kategori</option>
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="description"
                                class="block uppercase tracking-widest text-gray-700 text-xs font-bold mb-2">Deskripsi</label>
                            <textarea name="description" id="description"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') !!}</textarea>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="price"
                                class="block uppercase tracking-widest text-gray-700 text-xs font-bold mb-2">Harga</label>
                            <input type="number" placeholder="Masukan Harga" name="price" id="price"
                                value="{{ old('price') }}"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan
                                Produk</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</x-app-layout>