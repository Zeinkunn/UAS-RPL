<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Barang Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('inventories.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" id="kode_barang" class="text-gray-100 dark:text-gray-900 border rounded w-full">
                        </div>
                        <div>
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="text-gray-100 dark:text-gray-900 border rounded w-full">
                        </div>
                        <div>
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="text-gray-100 dark:text-gray-900 border rounded w-full">
                        </div>
                        <div>
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="text-gray-100 dark:text-gray-900 border rounded w-full">
                        </div>
                        <div>
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="text-gray-100 dark:text-gray-900 border rounded w-full">
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
