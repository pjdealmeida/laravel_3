<x-frontend.navbar class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <ul class="nav navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="javascript:;">Home</a></li>
        <li class="nav-item dropdown mega">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#pricing">Custom menu</a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="container-fluid @rtl text-end @endrtl">
                    <div class="row">
                        <div class="col-md-4 @rtl b-l @else b-r @endrtl">
                            <a class="dropdown-item text-wrap" target="_blank" href="javascript:;">
                                <p class="bold my-0">About</p>
                            </a>
                            <a class="dropdown-item text-wrap" target="_blank" href="javascript:;">
                                <p class="bold my-0">Contact</p>
                            </a>
                            <a class="dropdown-item text-wrap" target="_blank" href="javascript:;">
                                <p class="bold my-0">Blog</p>
                            </a>
                        </div>

                        <div class="col-10 mx-auto col-md-8">
                            <h3 class="text-darker mb-0 light mt-4 mt-md-0">Think about<span class="bold d-block">your business</span></h3>
                            <p class="text-secondary">Our best bet is you, we can assure that our template will fit the most of your needs.</p>

                            <a href="javascript:;" class="btn btn-rounded btn-info mt-3">View plan & prices</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">Download</a></li>
    </ul>
</x-frontend.navbar>
