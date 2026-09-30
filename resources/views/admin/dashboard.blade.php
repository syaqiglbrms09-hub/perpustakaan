<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <h3 class="text-lg font-bold text-gray-800 mb-4">Selamat Datang, Admin!</h3>
                
                <p class="text-gray-600">
                    Gunakan menu di bawah atau navigasi sistem untuk mengelola data buku, pengguna, dan transaksi peminjaman.
                </p>

                <div class="mt-6 flex gap-4">
                    <a href="{{ route('admin.buku.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">
                        Kelola Buku
                    </a>

                    <a href="{{ route('admin.user.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded shadow hover:bg-gray-700">
                        Kelola User
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>