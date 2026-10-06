<header class="navbar bg-base-100 border-b border-base-300 px-4">
    <div class="flex-none lg:hidden">
        <label for="app-drawer" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
    </div>
    <div class="flex-1">
        <h1 class="text-xl font-bold">Poliklinik</h1>
    </div>
    <div class="flex-none gap-2">
        @auth
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name }}" />
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li class="menu-title">
                        <span class="font-bold">{{ Auth::user()->nama ?? Auth::user()->name }}</span>
                        <span class="text-xs opacity-70 capitalize">{{ Auth::user()->role }}</span>
                    </li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-right-from-bracket"></i> Logout
                    </a></li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
        @endauth
    </div>
</header>
