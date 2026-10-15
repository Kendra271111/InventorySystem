<header class="navbar bg-base-100 border-b border-base-300 px-4 sticky top-0 z-30 h-16">
    <div class="flex-1">
        <!-- Mobile menu button -->
        <label for="my-drawer" class="btn btn-ghost btn-circle lg:hidden">
            <span class="material-icons">menu</span>
        </label>
    </div>

    <div class="flex-none flex items-center gap-3">

        <!-- User Dropdown -->
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost gap-2 px-2">
                <div class="avatar">
                    <div class="w-9 rounded-full">
                        <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="Avatar">
                    </div>
                </div>
                <div class="hidden md:flex flex-col items-start leading-tight text-left">
                    @auth
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                        <span class="text-xs opacity-60">{{ Auth::user()->getRoleNames()->first() ?? 'User' }}</span>
                    @else
                        <span class="text-sm font-medium">Guest</span>
                    @endauth
                </div>
                <span class="material-icons text-base-content/50 text-lg">expand_more</span>
            </div>

            <ul tabindex="0" class="dropdown-content menu menu-sm bg-base-100 rounded-box z-[50] mt-3 w-52 p-2 shadow-lg border border-base-300">
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-error gap-2">
                            <span class="material-icons text-lg">logout</span>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
