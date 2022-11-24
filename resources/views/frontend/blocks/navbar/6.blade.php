<x-frontend.navbar class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <ul class="nav navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="javascript:;">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">Download</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">Contact</a></li>
        <li class="nav-item dropdown mega">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#pricing">Mega menu</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
                <div class="container-fluid @rtl text-end @endrtl">
                    <div class="row">
                        <div class="col-md-6 @rtl b-md-l @else b-md-r @endrtl">
                            <h2 class="light">Mega menu</h2>
                            <p class="text-secondary small">The mega menu feature allows you to place in a drop-down fashion all
                                the content you want. By using the Bootstrap default grid system you can customize the layout to
                                fit your needs.</p>
                        </div>

                        <div class="col-md-3">
                            <p class="dropdown-heading ps-0 bold mt-0 pt-0">Company</p>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">About</a>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">Services</a>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">Blog</a>
                        </div>

                        <div class="col-md-3">
                            <p class="dropdown-heading ps-0 bold mt-0 pt-0">Product</p>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">Features</a>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">Customers</a>
                            <a class="ps-0 dropdown-item" target="_blank" href="javascript:;">Documentation</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</x-frontend.navbar>
