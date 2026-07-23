<aside id="sidebar" class="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <a href="{{ route('index') }}" class="brand">
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

            </ul>
        </li>

        <!-- Categories -->
        <li class="menu-item">
            <a href="#categoriesMenu"
                class="menu-link {{ request()->routeIs('admin.categories.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">

                    <i class="bi bi-grid"></i>

                    <span>Categories</span>

                    <i class="bi bi-chevron-down arrow"></i>

                </a>

            <ul id="categoriesMenu"
                class="collapse {{ request()->routeIs('admin.categories.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="submenu-link {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                        <i class="bi bi-controller"></i>
                        <span> All Categories</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.categories.create') }}" class="submenu-link {{ request()->routeIs('admin.categories.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span> Add Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Developers -->
        <li class="menu-item">

            <a href="#developersMenu"
                class="menu-link {{ request()->routeIs('admin.developers.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">

                    <i class="bi bi-code-square"></i>

                    <span>Developers</span>

                    <i class="bi bi-chevron-down arrow"></i>

                </a>

            <ul id="developersMenu"
                class="collapse {{ request()->routeIs('admin.developer.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.developer.index') }}" class="submenu-link {{ request()->routeIs('admin.developer.index') ? 'active' : '' }}">
                        <i class="bi bi-controller"></i>
                        <span> All Developers</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.developer.create') }}" class="submenu-link {{ request()->routeIs('admin.developer.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span> Add Developer</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Publishers -->
        <li class="menu-item">
                <a href="#publisherMenu"
                class="menu-link {{ request()->routeIs('admin.publisher.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">

                    <i class="bi bi-grid"></i>

                    <span>Publishers</span>

                    <i class="bi bi-chevron-down arrow"></i>

                </a>

            <ul id="publisherMenu"
                class="collapse {{ request()->routeIs('admin.publisher.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.publisher.index') }}" class="submenu-link {{ request()->routeIs('admin.publisher.index') ? 'active' : '' }}">
                        <i class="bi bi-controller"></i>
                        <span> All Publishers</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.publisher.create') }}" class="submenu-link {{ request()->routeIs('admin.publisher.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span> Add Publisher</span>
                    </a>
                </li>
            </ul>
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
        <li class="menu-item">
            <a href="#tagsMenu" class="menu-link {{ request()->routeIs('admin.tags.*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse">
                <i class="bi bi-tags"></i>
                <span>
                    Tags
                </span> 
                <i class="bi bi-chevron-down arrow"></i>
            </a>
            <ul id="tagsMenu" class="collapse {{ request()->routeIs('admin.tags.*') ? 'show' : '' }} submenu">
                <li>
                    <a href="{{ route('admin.tags.index') }}" class="submenu-link {{ request()->routeIs('admin.tags.index') ? 'active' : '' }}">
                        <i class="bi bi-list-task"></i>
                        <span>All Tags</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.tags.create') }}" class="submenu-link {{ request()->routeIs('admin.tags.create') ? 'active' : '' }}">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span>Add Tag</span>
                    </a>
                </li>
            </ul>
        </li>

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