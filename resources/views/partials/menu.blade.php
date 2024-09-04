<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">

        <a href="{{ route('admin.home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo/logo.png'); }}">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Mundo Elite</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        {{-- Admin --}}

            <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Home">Inicio</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Administrar Productos</span>
            </li>

            <li class="menu-item {{ request()->is('*/products') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="User management"> Productos</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('local/products') ? 'active' : '' }}">
                        <a href="{{ route('local.product.index') }}" class="menu-link">
                            <div data-i18n="product lists">En Tienda Fisica</div>
                        </a>
                    </li>
                </ul>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('web/products') ? 'active' : '' }}">
                        <a href="{{ route('web.product.index') }}" class="menu-link">
                            <div data-i18n="product lists">En Tienda Virtual</div>
                        </a>
                    </li>
                </ul>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('async/products') ? 'active' : '' }}">
                        <a href="{{ route('async.product.index') }}" class="menu-link">
                            <div data-i18n="product lists">No Sincronizados</div>
                        </a>
                    </li>
                </ul>
            </li>
    </ul>
</aside>
