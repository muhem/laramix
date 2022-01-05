@extends('layout.default')

@section('content')
    <section>
        <div class="h-screen flex justify-center items-center">
            <div class="lg:w-2/5 md:w-1/2 w-2/3">
                <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data"
                    class="bg-white p-10 rounded-lg shadow-lg min-w-full">
                    <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Tambah Data</h1>
                    <a class="inline-flex" href="{{ url('/') }}"><div
                        class="inline-flex text-sm text-gray-600 transition duration-150 hover:bg-indigo-200 bg-indigo-100 font-semibold py-2 px-4 rounded"> <div class="pr-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pr-1 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                          </svg></div>

                        Kembali</a>

                    </div>
                    @csrf
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md">JUDUL</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="judul"
                            id="username" placeholder="Data Mining" />
                    </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md">PENULIS</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="penulis"
                            placeholder="Erwin Syahrul" />
                    </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md">PENERBIT</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                            name="penerbit" id="password" placeholder="Penerbit Andi" />
                    </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md">GENRE</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="genre"
                            id="password" placeholder="Teknologi" />
                    </div>
                    <div>
                        <label class="text-gray-800 font-semibold block my-3 text-md">HARGA</label>
                        <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="harga"
                            id="password" placeholder="1xxxxx" />
                    </div>
                    <button type="submit"
                        class="w-full mt-6 hover:bg-indigo-500 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Tambah
                        Data</button>
                </form>
            </div>
        </div>
    </section>
@endsection
