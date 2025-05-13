<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- Card 1 -->
            <div
                class="rounded-2xl shadow-lg bg-gradient-to-br from-red-300 to-red-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Wisata</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalWisata ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="rounded-2xl shadow-lg bg-gradient-to-br from-green-300 to-green-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Pengunjung</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalPengunjung ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="rounded-2xl shadow-lg bg-gradient-to-br from-blue-300 to-blue-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Pengunjung Aktif</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $pengunjungAktif ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Card 1 --}}
                <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/400x300/?beach"
                        alt="Pantai">
                    <div class="px-4 py-3">
                        <h2 class="font-bold text-lg text-gray-800">Pantai Kuta</h2>
                        <p class="text-sm text-gray-600 mt-1">Destinasi wisata populer di Bali.</p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/400x300/?mountain"
                        alt="Gunung">
                    <div class="px-4 py-3">
                        <h2 class="font-bold text-lg text-gray-800">Gunung Bromo</h2>
                        <p class="text-sm text-gray-600 mt-1">Wisata alam dengan sunrise spektakuler.</p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/400x300/?temple"
                        alt="Candi">
                    <div class="px-4 py-3">
                        <h2 class="font-bold text-lg text-gray-800">Candi Borobudur</h2>
                        <p class="text-sm text-gray-600 mt-1">Candi Budha terbesar di dunia.</p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</x-layout>
