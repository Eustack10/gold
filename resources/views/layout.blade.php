<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">
                            <i class="ni ni-atom text-primary"></i>
                            <span class="nav-link-text">Gem</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Metal Price</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">
                            <i class="ni ni-app text-primary"></i>
                            <span class="nav-link-text">Jellewery</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="examples/icons.html">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Icons</span>
                        </a>
                    </li> --}}
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span>Setup</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.gem.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Gems</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.gold.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Gold</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.categories.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.product_types.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Product Types</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.color.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Color</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.brands.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Brands</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.goldsmith.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Goldsmith</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.location.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Location</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.counter.index') }}">
                            <i class="ni ni-diamond text-primary"></i>
                            <span class="nav-link-text">Counter</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>