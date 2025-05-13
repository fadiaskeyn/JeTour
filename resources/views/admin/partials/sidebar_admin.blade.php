<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class=" font-poppins h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('dashboard') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-gauge-high"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.destination.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('admin.destination.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Wisata</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('transakasi') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.kuliner.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('admin.kuliner.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-utensils"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Kuliner</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('#') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-ticket"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Tiket</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.penginapan.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('admin.penginapan.*') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-hotel"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Penginapan</span>
                </a>
            </li>
            <li class="px-5">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Setting</div>
                </div>
            </li>
            <li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('datauser') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-users-gear"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Data User</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <button type="button" onclick="logoutConfirm()"
                        class="w-full text-left relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Keluar</span>
                    </button>
                </form>
            </li>
            <script>
                function logoutConfirm() {
                    Swal.fire({
                        title: 'Keluar Aplikasi?',
                        text: "Apakah Anda yakin ingin keluar?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, keluar',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('logout-form').submit();
                        }
                    });
                }
            </script>

            {{-- <li>
                <a href="{{ route('dashboard.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Dashboard Icon -->
                    <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('wisata.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Wisata Icon -->
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="ms-3">Wisata</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Transportation Icon -->
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2H2v2h2v8a2 2 0 0 0 2 2v1a1 1 0 0 0 2 0v-1h8v1a1 1 0 0 0 2 0v-1a2 2 0 0 0 2-2v-8h2V8h-2ZM6 6h12v2H6V6Zm12 12H6v-6h12v6Z" />
                    </svg>
                    <span class="ms-3">Transportation</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Transaksi Icon -->
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M5 4h14a2 2 0 0 1 2 2v2H3V6a2 2 0 0 1 2-2Zm14 6v10a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V10h14Zm-5 3H9v2h5v-2Z" />
                    </svg>
                    <span class="ms-3">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Tiket Icon -->
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 10a2 2 0 0 0 0-4h-2V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2H2a2 2 0 0 0 0 4h2v4H2a2 2 0 0 0 0 4h2v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2h2a2 2 0 0 0 0-4h-2v-4h2Z" />
                    </svg>
                    <span class="ms-3">Tiket</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <!-- Laporan Icon -->
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21 3H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1Zm-1 16H4V5h16v14ZM6 7h5v2H6V7Zm0 4h8v2H6v-2Zm0 4h11v2H6v-2Z" />
                    </svg>
                    <span class="ms-3">Laporan</span>
                </a>
            </li> --}}

            {{-- <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path
                            d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path
                            d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>
