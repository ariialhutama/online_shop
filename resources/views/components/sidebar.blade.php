<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">AL HUTAMA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class=""><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">USER</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-water"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('user.index') }}">All User</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Category</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-water"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('category.index') }}">SABUN</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Product</li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link"><i
                        class="fas fa-water"></i><span>Product</span></a>

                {{-- <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('product.index') }}">baracayya</a>
                    </li>
                </ul> --}}
            </li>
        </ul>



        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-rocket"></i> LOGOUT
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </aside>
</div>
