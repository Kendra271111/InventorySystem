<div class="drawer-side z-40">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>

    <aside class="bg-base-200 text-base-content min-h-full w-72 flex flex-col">
        <!-- Logo -->
        <div class="flex items-center gap-3 px-5 py-5 border-b border-base-300">
            <img src="{{ asset('assets/images/logo-icon.png') }}"
                 class="w-10 h-10 object-contain"
                 alt="Logo">
            <span class="text-xl font-bold tracking-tight">Inventory</span>
        </div>

        <!-- Menu -->
        <ul class="menu p-4 flex-1 gap-1 text-base">
            <li>
                <a href="{{ url('/home') }}"
                   class="{{ Request::is('/') || Request::is('home') ? 'active' : '' }}">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
            </li>

            @can('view-barang')
            <li>
                <a href="{{ url('/barang') }}"
                   class="{{ Request::is('barang*') ? 'active' : '' }}">
                    <span class="material-icons">inventory_2</span>
                    Barang
                </a>
            </li>
            @endcan

            @can('view-kategori')
            <li>
                <a href="{{ url('/kategori') }}"
                   class="{{ Request::is('kategori*') ? 'active' : '' }}">
                    <span class="material-icons">category</span>
                    Kategori
                </a>
            </li>
            @endcan

            @can('view-peminjaman')
            <li>
                <a href="{{ url('/peminjaman') }}"
                   class="{{ Request::is('peminjaman*') ? 'active' : '' }}">
                    <span class="material-icons">assignment</span>
                    Peminjaman
                </a>
            </li>
            @endcan

            @canany(['create-user', 'edit-user', 'delete-user'])
            <li>
                <a href="{{ url('/user') }}"
                   class="{{ Request::is('user*') ? 'active' : '' }}">
                    <span class="material-icons">group</span>
                    User
                </a>
            </li>
            @endcanany
        </ul>

        <!-- Sidebar footer -->
        <div class="p-4 text-xs opacity-50 border-t border-base-300">
            Metik Inventory v1.0
        </div>
    </aside>
</div>
