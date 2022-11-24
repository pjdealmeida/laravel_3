@php ($posts = [
    [ "gravity" => 'south', "title" => 'Welcome to Dashcore', "description" => "Discover how to get started now", "href" => "https://www.youtube.com/watch?v=EykWcFEtFqo" ],
    [ "gravity" => 'east', "title" => 'Customizing theme', "description" => "Learn how to fit the theme to your needs", "href" => "https://www.youtube.com/watch?v=MXghcI8hcWU" ],
    [ "gravity" => 'north', "title" => 'Using the API', "description" => "Integrating the API with your template", "href" => "https://www.youtube.com/watch?v=HLG_s9b2Uuw"]
])

<!-- ./Lightbox - Video -->
<x-utils.container class="form-basic {{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="section-heading text-center">
        <h2 class="bold">Popup with video</h2>
        <p class="lead italic">Target any video from youtube</p>
    </div>

    <div class="row gap-y">
        @foreach ($posts as $post)
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card shadow-box shadow-hover border-0">
                <a href="{{ $post['href'] }}"
                    class="modal-popup mfp-iframe overlay gradient gradient-blue-purple alpha-3 p-6 image-background cover"
                    style="background-image: url(https://picsum.photos/350/200/?random&gravity={{ $post['gravity'] }})"
                    data-effect="mfp-fade" data-type="iframe">
                    <div class="content text-center">
                        <i data-feather="play" class="stroke-contrast" with="36" height="36"></i>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
