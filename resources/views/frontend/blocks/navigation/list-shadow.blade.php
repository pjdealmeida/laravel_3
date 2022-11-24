@php ($elements = [
    [ "title" => "Inbox", "description" => "Donec id elit non mi porta gravida at eget metus.", "img" => 1 ],
    [ "title" => "Calendar", "description" => "Donec id elit non mi porta gravida at eget metus.", "img" => 2 ],
    [ "title" => "Invoice", "description" => "Donec id elit non mi porta gravida at eget metus.", "img" => 3 ],
    [ "title" => "Dashboard", "description" => "Donec id elit non mi porta gravida at eget metus.", "img" => 4 ]
])
<x-utils.container class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="row align-items-center">
        <div class="col-md-5 me-md-auto">
            <nav id="sw-nav-shadow" class="nav flex-md-column nav-pills nav-fill nav-pills-light">
                @foreach ($elements as $element)
                    <a class="nav-item nav-link py-3 my-2 @rtl text-end @else text-start @endrtl{{ $loop->index == 0 ? " active" : "" }}" data-step="{{ $loop->index + 1 }}" href="javascript:;">
                        <h6 class="bold">{{ $element['title'] }}</h6>
                        <p class="my-0 d-none d-md-block">{{ $element['description'] }}</p>
                    </a>
                @endforeach
            </nav>
        </div>

        <div class="col-md-6">
            <div class="swiper-container mt-4 mt-md-0" data-sw-navigation="#sw-nav-shadow">
                <div class="swiper-wrapper">
                    @foreach ($elements as $element)
                        <div class="swiper-slide">
                            <img src="{{ asset("img/screens/dash/{$element['img']}.png") }}" class="img-responsive" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-utils.container>
