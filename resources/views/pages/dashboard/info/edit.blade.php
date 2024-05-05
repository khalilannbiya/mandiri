<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Info
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-5 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
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
                <img class="bg-slate-500 w-28"
                    src="{{ isset($info->logo) ? Storage::url($info->logo) : asset('assets/images/default-image.png') }}"
                    alt="Preview Logo">
                <form action="{{ route('dashboard.info.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" name="logo" id="logo" accept="image/*" placeholder="Ubah Logo">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">Ubah</button>
                </form>
                <img class="bg-slate-500 w-28 mt-5"
                    src="{{ isset($info->favicon) ? Storage::url($info->favicon) : asset('assets/images/default-image.png') }}"
                    alt="Preview Favicon">
                <form action="{{ route('dashboard.info.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" name="favicon" id="favicon" accept="image/*" placeholder="Ubah Favicon">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">Ubah</button>
                </form>
            </div>
        </div>
</x-app-layout>
