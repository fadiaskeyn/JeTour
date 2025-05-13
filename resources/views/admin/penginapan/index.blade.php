<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penginapan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Search and Filter -->
                    <div class="mb-6">
                        <form action="{{ route('admin.penginapan.index') }}" method="GET" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div>
                                    <label for="search" class="block text-sm font-medium text-gray-700">Search</label>
                                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        placeholder="Search by name...">
                                </div>
                                <div>
                                    <label for="tipe" class="block text-sm font-medium text-gray-700">Type</label>
                                    <select name="tipe" id="tipe"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="">All Types</option>
                                        <option value="hotel" {{ request('tipe') == 'hotel' ? 'selected' : '' }}>Hotel
                                        </option>
                                        <option value="villa" {{ request('tipe') == 'villa' ? 'selected' : '' }}>Villa
                                        </option>
                                        <option value="guesthouse"
                                            {{ request('tipe') == 'guesthouse' ? 'selected' : '' }}>Guesthouse</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="harga_min" class="block text-sm font-medium text-gray-700">Min
                                        Price</label>
                                    <input type="number" name="harga_min" id="harga_min"
                                        value="{{ request('harga_min') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        placeholder="Min price...">
                                </div>
                                <div>
                                    <label for="harga_max" class="block text-sm font-medium text-gray-700">Max
                                        Price</label>
                                    <input type="number" name="harga_max" id="harga_max"
                                        value="{{ request('harga_max') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        placeholder="Max price...">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Add Button -->
                    <div class="mb-6">
                        <a href="{{ route('admin.penginapan.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            Tambah Penginapan
                        </a>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto bg-white rounded-lg w-full">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-green-900 text-white">
                                <tr>
                                    <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                        Name
                                    </th>
                                    <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                        Type
                                    </th>
                                    <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                        Location
                                    </th>
                                    <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                        Price
                                    </th>
                                    <th scope="col" class="py-3 px-4 sm:px-6 text-left text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($penginapans as $penginapan)
                                    <tr class="bg-white hover:bg-gray-100 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $penginapan->nama }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ ucfirst($penginapan->tipe) }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $penginapan->lokasi }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Rp
                                                {{ number_format($penginapan->harga, 0, ',', '.') }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                            <a href="{{ route('admin.penginapan.edit', $penginapan) }}"
                                                class="text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:ring-orange-400 font-medium rounded text-sm px-3 py-1.5 focus:outline-none">
                                                <i class="fa-solid fa-pencil"></i> Ubah
                                            </a>

                                            <a href="" class="mx-2"> </a>

                                            <form action="{{ route('admin.penginapan.destroy', $penginapan) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-1.5 focus:outline-none"
                                                    onclick="return confirm('Are you sure you want to delete this penginapan?')">
                                                    <i class="fa-solid fa-trash-can"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $penginapans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Auto submit form when filters change
            document.querySelectorAll('select[name="tipe"], input[name="harga_min"], input[name="harga_max"]').forEach(
                element => {
                    element.addEventListener('change', () => {
                        element.form.submit();
                    });
                });

            // Debounce search input
            let searchTimeout;
            document.querySelector('input[name="search"]').addEventListener('input', (e) => {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    e.target.form.submit();
                }, 500);
            });
        </script>
    @endpush
</x-layout>
