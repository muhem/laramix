@extends('layout.default')

@section('content')
    <section>
        <div class="py-8">
            <h1 class="text-3xl font-bold text-left text-black">TOKO BUKU LARAVEL</h1>
            <span class="text-md">Muhammad Erwin Syahrul | 19.11.2687</span>
        </div>

        {{-- <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded">
+ Tambah Data
</button> --}}

        <div
            class="inline-flex text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded">
            <a href="{{ url('create') }}">+ Tambah Data</a>
        </div>

        <div>
            <div class="mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    NO
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    JUDUL
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PENULIS
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PENERBIT
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    GENRE
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    HARGA
                                </th>
                                <th
                                    class="px-5 py-3 text-center border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        @foreach ($data as $datamhs)
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $datamhs->id }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div>
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $datamhs->judul }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $datamhs->penulis }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $datamhs->penerbit }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $datamhs->genre }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $datamhs->harga }}
                                        </p>
                                    </td>
                                    <td class="flex justify-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="">
                                            <div
                                                class="inline-flex text-sm text-indigo-50 transition duration-150 hover:bg-teal-500 bg-teal-600 font-semibold py-2 px-4 rounded">
                                                <a class="inline-flex" href="{{ url('/show/' . $datamhs->id) }}"
                                                    data-target="#hapus"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg> Edit</a>
                                            </div>

                                        </div><div class="px-2"></div>
                                        <div class="">
                                            <div
                                                class="inline-flex text-sm text-indigo-50 transition duration-150 hover:bg-rose-500 bg-rose-600 font-semibold py-2 px-4 rounded">

                                                <div class="pr-2"><a class="inline-flex"
                                                        href="{{ url('/destroy/' . $datamhs->id) }}"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd" />
                                                        </svg> Hapus</a></div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>

                        @endforeach
                    </table>
                    {{-- <div
                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row">
                <div class="inline-flex mt-2 xs:mt-0">
                    <button
                        class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded">
                        Next
                    </button>
                </div>
            </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
