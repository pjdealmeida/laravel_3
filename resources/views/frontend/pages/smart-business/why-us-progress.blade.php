<!-- ./Why Us -->
<x-utils.container>
    <div class="row gap-y align-items-center">
        <div class="col-md-6">
            <div class="section-heading">
                <p class="text-primary bold small text-uppercase">some reasons</p>
                <h2 class="bold">Why Choose DashCore?</h2>
            </div>

            <p class="regular">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci, architecto asperiores
                dignissimos doloribus dolorum eos esse eum laborum minima molestias, natus nostrum odio quia
                recusandae rem sequi similique velit.
            </p>

            <a href="javascript:;" class="btn btn-outline-primary btn-rounded bw-2 mt-4">Read More</a>
        </div>

        <div class="col-md-6">
            <div class="animate-bars">
                <ul class="progress-bars whyus-progress-bars"></ul>
            </div>
        </div>
    </div>

    <div class="row gap-y pt-5">
        @php($counters = [
            [ "icon" => "box", "value" => 273, "title" => "Components" ],
            [ "icon" => "download-cloud", "value" => 654, "title" => "Downloads" ],
            [ "icon" => "sliders", "value" => 7941, "title" => "Followers" ],
            [ "icon" => "award", "value" => 654, "title" => "New users" ]
        ])
        @foreach ($counters as $c)
        <div class="col-6 col-md-3">
            <div class="d-flex align-items-center">
                <i data-feather="{{ $c['icon'] }}" width="36" height="36" class="stroke-primary @rtl ms-2 @else me-2 @endrtl"></i>
                <span class="counter bold text-darker font-md">{{ $c['value'] }}</span>
            </div>

            <p class="text-secondary m-0">{{ $c['title'] }}</p>
        </div>
        @endforeach
    </div>
</x-utils.container>
