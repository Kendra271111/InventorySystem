<header class="navbar bg-base-100 border-b border-base-300 px-4 sticky top-0 z-30 shadow-sm">
    <!-- Mobile menu button -->
    <div class="flex-none lg:hidden">
        <label for="my-drawer" class="btn btn-square btn-ghost">
            <span class="material-icons">menu</span>
        </label>
    </div>

    <!-- Search -->
    <div class="flex-1 px-2">
        <div class="form-control max-w-xs hidden sm:block">
            <div class="relative">
                <span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-base-content/50 text-lg">search</span>
                <input type="text"
                       placeholder="Type here to search..."
                       class="input input-bordered input-sm w-full max-w-xs pl-10" />
            </div>
        </div>
    </div>

    <!-- Right side -->
    <div class="flex-none gap-1">
        <!-- Theme toggle -->
        <label class="swap swap-rotate btn btn-ghost btn-circle">
            <input type="checkbox" class="theme-controller" value="dark" />
            <span class="material-icons swap-on">dark_mode</span>
            <span class="material-icons swap-off">light_mode</span>
        </label>

        <!-- User dropdown -->
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost gap-2 px-2">
                <div class="avatar">
                    <div class="w-9 rounded-full ring ring-primary ring-offset-base-100 ring-offset-1">
                        <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="avatar" />
                    </div>
                </div>
                <div class="hidden md:block text-left">
                    @auth
                        <div class="font-medium text-sm leading-tight">{{ Auth::user()->name }}</div>
                        <div class="text-xs opacity-60">{{ Auth::user()->getRoleNames()->first() ?? 'User' }}</div>
                    @else
                        <div class="font-medium text-sm">Guest</div>
                    @endauth
                </div>
            </div>

            <ul tabindex="0" class="dropdown-content menu menu-sm bg-base-100 rounded-box z-[50] mt-3 w-52 p-2 shadow-lg border border-base-300">
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full justify-start">
                            <span class="material-icons text-lg">logout</span>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
