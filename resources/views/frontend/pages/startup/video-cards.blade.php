@php($posts = [
    [ "gravity" => 'south', "title" => 'Welcome to Dashcore', "description" => "Discover how to get started with DashCore now", "href" => "https://www.youtube.com/watch?v=EykWcFEtFqo" ],
    [ "gravity" => 'east', "title" => 'Customizing theme', "description" => "Learn how to fit the theme to your own needs", "href" => "https://www.youtube.com/watch?v=MXghcI8hcWU" ],
    [ "gravity" => 'north', "title" => 'Using the API', "description" => "Integrating the API with your new template", "href" => "https://www.youtube.com/watch?v=HLG_s9b2Uuw" ]
])
<!-- ./How to Videos -->
<x-utils.container class="bg-darker edge top-left" container-class="pt-8">
    <div class="section-heading text-center w-75 mx-auto">
        <i data-feather="film" width="36" height="36"></i>
        <h2 class="text-contrast bold">How to videos</h2>
        <p class="lead text-muted">
            Take a look at how you can take advantage of the tons of features
            included with our template.
        </p>
    </div>

    <div class="row gap-y">
        @foreach ($posts as $post)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card bg-dark border-0">
                <a href="{{ $post['href'] }}"
                    class="modal-popup mfp-iframe overlay gradient gradient-blue-purple alpha-3 p-6 image-background cover"
                    style="background-image: url(https://picsum.photos/350/200/?random&gravity={{ $post['gravity'] }})"
                    data-effect="mfp-fade" data-type="iframe">
                    <div class="content text-center">
                        <i data-feather="play" width="48" height="48" stroke-width="1" class="stroke-contrast"></i>
                    </div>
                </a>

                <div class="card-body">
                    <h4 class="card-title text-contrast">{{ $post['title'] }}</h4>

                    <p class="card-text text-muted">{{ $post['description'] }}.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
