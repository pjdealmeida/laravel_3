@php($elements = [
    [ "icon" => "plan", "title" => "Choose a plan", "description" => "Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem" ],
    [ "icon" => "payment", "title" => "Payment method", "description" => "Blanditiis cumque, eius error est et exercitationem, explicabo hic natus nobis odit porro quia" ],
    [ "icon" => "work", "title" => "Let's work", "description" => "A animi aperiam cupiditate eum incidunt, magni mollitia nam nemo non officia omnis, quasi quisquam" ]
])
<!-- ./How it works -->
<section id="features" class="section how-it-works">
    <div class="shapes-container">
        <div class="shape shape-ring" data-aos="fade-right">
            <div></div>
        </div>
    </div>

    <div class="container">
        <div class="section-heading text-center">
            <h2 class="bold">How it Works?</h2>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nulla,
                voluptates. Architecto eum minima necessitatibus quo reiciendis!
            </p>
        </div>

        <div class="row gap-y text-center text-md-start">
            @foreach ($elements as $element)
            <div class="col-md-4 py-4 text-center position-relative">
                <div class="shapes-figure shapes-container">
                    <div class="shape shape-circle center-x"></div>
                </div>
                <figure class="mockup mb-4">
                    <img src="{{ asset("img/integration/steps/{$element['icon']}.svg") }}" class="mb-3 img-step" />
                </figure>

                <h5 class="bold">{{ $element['title'] }}</h5>
                <p class="text-muted {{ $textClass ?? "" }}">{{ $element['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
