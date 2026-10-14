@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-6">
    <!-- Dashboard content will go here -->
    <div class="space-y-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
            Dashboard
        </h1>
        <p class="text-gray-600 dark:text-gray-400">
            Selamat datang di sistem inventory. Silakan pilih menu di samping untuk mulai mengelola data.
        </p>
        
        <!-- Stats cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            0
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Total Barang
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="bi bi-box-seam text-5xl text-indigo-500 dark:text-indigo-400"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            0
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Total Kategori
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="bi bi-bookmarks text-5xl text-emerald-500 dark:text-emerald-400"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            0
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Total Peminjaman
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="bi bi-clipboard2-check text-5xl text-purple-500 dark:text-purple-400"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
                            0
                        </h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Total User
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="bi bi-people text-5xl text-teal-500 dark:text-teal-400"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent activity -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">
                Aktivitas Terbaru
            </h2>
            <div class="space-y-4">
                <!-- Placeholder for recent activity items -->
                <div class="text-center py-8">
                    <p class="text-gray-500 dark:text-gray-400">
                        Belum ada aktivitas terbaru
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection