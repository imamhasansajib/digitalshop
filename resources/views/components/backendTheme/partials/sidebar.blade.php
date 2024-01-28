<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-in.html">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                </a>
            </li> -->

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                </a>
            </li> -->

            <li class="sidebar-item {{ request()->routeIs('products.index*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('products.index') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Products</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('sliders.index*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('sliders.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">sliders</span>
                </a>
            </li>

            <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item {{ request()->routeIs('products.create*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('products.create') }}">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add New Product</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('sliders.create*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('sliders.create') }}">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add New Slider</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li> -->

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li> -->

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li> -->

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul>

    </div>
</nav>