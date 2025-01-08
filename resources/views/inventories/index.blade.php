<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('inventories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Barang</a>
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Kode Barang</th>
                                <th class="px-4 py-2">Nama Barang</th>
                                <th class="px-4 py-2">Jumlah</th>
                                <th class="px-4 py-2">Harga</th>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="border px-4 py-2">{{ $item->id }}</td>
                                    <td class="border px-4 py-2">{{ $item->kode_barang }}</td>
                                    <td class="border px-4 py-2">{{ $item->nama_barang }}</td>
                                    <td class="border px-4 py-2">{{ $item->jumlah }}</td>
                                    <td class="border px-4 py-2">Rp {{ number_format($item->harga, 2) }}</td>
                                    <td class="border px-4 py-2">{{ $item->tanggal }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('inventories.edit', $item) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>

                                        <!-- Delete Button with confirmation -->
                                        <form action="{{ route('inventories.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirmDelete();">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add a confirmation JavaScript function -->
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this item?');
        }
    </script>
</x-app-layout>
