<aside id="sidebar" class="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard.index') }}" class="brand">
            <i class="bi bi-controller" id="gameLogo"></i>

            <span class="brand-text">
                GameStore
            </span>
        </a>

        <button id="sidebarCollapse" class="btn btn-sm btn-outline-light d-none d-lg-block">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('admin.dashboard.index') }}" class="menu-link {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Games -->
        <li class="menu-item">
            <a href="#gamesMenu"
                class="menu-link {{ request()->routeIs('admin.games.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">

                    <i class="bi bi-controller"></i>

                    <span>Games</span>

                    <i class="bi bi-chevron-down arrow"></i>

                </a>

            <ul id="gamesMenu"
                class="collapse {{ request()->routeIs('admin.games.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.games.index') }}" class="submenu-link {{ request()->routeIs('admin.games.index') ? 'active' : '' }}">
                        <i class="bi bi-controller"></i>
                       <span> All Games</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.games.create') }}" class="submenu-link {{ request()->routeIs('admin.games.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle-fill"></i>
                       <span> Add Game</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{ route('admin.requirements.index') }}" class="submenu-link">
                        <i class="bi bi-controller"></i>
                        <span>Requirements</span>
                    </a>
                </li> --}}
            </ul>
        </li>

        <!-- Categories -->
        <li class="menu-item">
            <a href="{{ route('admin.categories.index') }}"
            class="menu-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <i class="bi bi-grid"></i>
                <span>Categories</span>
            </a>
        </li>

        <!-- Developers -->
        <li class="menu-item">
            <a href="{{ route('admin.developer.index') }}"
            class="menu-link {{ request()->routeIs('admin.developer.*') ? 'active' : '' }}">
                <i class="bi bi-building"></i>
                <span>Developers</span>
            </a>
        </li>

        <!-- Publishers -->
        <li class="menu-item">
            <a href="{{ route('admin.publisher.index') }}"
                class="menu-link {{ request()->routeIs('admin.publisher.*') ? 'active' : '' }}">
                    <i class="bi bi-box-seam"></i>
                    <span>Publishers</span>
                </a>
        </li>

        <!-- Hardware -->
        <li class="menu-item">
            <a href="#hardwareMenu"
                class="menu-link {{ request()->routeIs('admin.hardware.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">

                    <i class="bi bi-cpu"></i>

                    <span>Hardware</span>

                    <i class="bi bi-chevron-down arrow"></i>

                </a>

           <ul id="hardwareMenu" class="collapse {{ request()->routeIs('admin.hardware.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.hardware.cpu.index') }}" class="submenu-link {{ request()->routeIs('admin.hardware.cpu.*') ? 'active' : '' }}">
                        <i class="bi bi-cpu"></i>
                        <span>CPUs</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.hardware.gpu.index') }}" class="submenu-link {{ request()->routeIs('admin.hardware.gpu.*') ? 'active' : '' }}">
                        <i class="bi bi-nvidia"></i>
                        <span>GPUs</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Tags -->
        {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="bi bi-tags"></i>

                <span>
                    Tags
                </span>
            </a>
        </li> --}}

        <!-- News -->
        {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="bi bi-newspaper"></i>

                <span>
                    News
                </span>
            </a>
        </li> --}}

        <!-- Reviews -->
        {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="bi bi-chat-left-text"></i>

                <span>
                    Reviews
                </span>
            </a>
        </li> --}}

        <!-- Users -->
        {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="bi bi-people"></i>

                <span>
                    Users
                </span>
            </a>
        </li> --}}

        <!-- Logout -->
        <li class="menu-item logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="menu-link logout-btn">
                    <i class="bi bi-box-arrow-right"></i>

                    <span>
                        Logout
                    </span>
                </button>
            </form>
        </li>
    </ul>
</aside>