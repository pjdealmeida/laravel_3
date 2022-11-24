<!-- Extend Core -->
@php($icons = [
    [ "name" => "blossom", "size" => "icon-xl", "position" => [ "left" => 100, "top" => 30 ] ],
    [ "name" => "dockbit", "size" => "icon-xxl", "position" => [ "left" => 60, "top" => -10 ] ],
    [ "name" => "zapier", "size" => "icon-xxl", "position" => [ "left" => 25, "top" => 0 ] ],
    [ "name" => "bitnami", "size" => "icon-2xl", "position" => [ "left" => 0, "top" => 50 ] ],
    [ "name" => "slack", "size" => "icon-2xxl", "position" => [ "left" => 23, "top" => 70 ] ],
    [ "name" => "monero", "size" => "icon-xxl", "position" => [ "left" => 65, "top" => 44 ] ],
    [ "name" => "dropbox", "size" => "icon-xl", "position" => [ "left" => 95, "top" => 83 ] ]
])
<section class="section extending-core border-top {{ $class ?? '' }}">
    <div class="shapes-container">
        <div class="shape shape-circle">
            <div></div>
        </div>
    </div>
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <p class="text-primary bold small text-uppercase">enterprise integration</p>
                    <h2  class="bold">Extend DashCore</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ipsum iste iure nihil non
                        obcaecati quasi, sit? Aperiam asperiores atque, commodi debitis fugiat in nemo optio sint velit.
                        Pariatur, sint!</p>
                </div>
                <a href="#" class="btn btn-rounded btn-outline-primary bw-2 @rtl ms-3 @else me-3 @endrtl">Know More</a>
                <a href="#" class="btn btn-rounded btn-primary bw-2 bold text-contrast">Register Account</a>
            </div>

            <div class="col-lg-6">
                <div class="icons-wrapper position-relative">
                    @foreach ($icons as $icon)
                    <div class="floating icon {{ $icon['size'] }} bg-contrast rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center"
                        style="@rtl right @else left @endrtl:{{ $icon['position']['left'] }}%; top: {{ $icon['position']['top'] }}%;" data-aos="fade-left">
                        <img src="{{ asset("img/integration/{$icon['name']}.svg") }}" class="img-responsive" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
