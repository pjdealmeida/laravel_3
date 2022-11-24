<x-frontend.navbar class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <ul class="nav navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="javascript:;">Home</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;">Dropdown link</a>
            <div class="dropdown-menu p-3">
                <a class="dropdown-item" href="javascript:;">About</a>
                <a class="dropdown-item" href="javascript:;">Services</a>
                <a class="dropdown-item" href="javascript:;">Blog</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;">Right align</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
                <a class="dropdown-item" href="javascript:;">About</a>
                <a class="dropdown-item" href="javascript:;">Services</a>
                <a class="dropdown-item" href="javascript:;">Blog</a>
            </div>
        </li>
        <li class="nav-item dropdown mega">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;">Multi column</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
                <div class="row">
                    <div class="col-md-4">
                        <p class="dropdown-heading bold mt-0 pt-0">Company</p>
                        <a class="dropdown-item" target="_blank" href="javascript:;">About</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Services</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Blog</a>
                    </div>

                    <div class="col-md-4">
                        <p class="dropdown-heading bold mt-0 pt-0">Product</p>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Features</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Customers</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Documentation</a>
                    </div>

                    <div class="col-md-4">
                        <p class="dropdown-heading bold mt-0 pt-0">Channels</p>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Careers</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Contact</a>
                        <a class="dropdown-item" target="_blank" href="javascript:;">Search</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</x-frontend.navbar>
