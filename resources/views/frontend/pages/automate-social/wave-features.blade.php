<!-- ./Advanced Marketing Automation Solution -->
<section class="section text-contrast advanced-automation-solution overflow-hidden">
    <div class="shape-wrapper">
        <div class="shape shape-background mountain top shape-left"></div>
    </div>

    <div class="container">
        <div class="section-heading text-center">
            <h2 class="bold text-contrast">Advanced Email Automation System</h2>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequatur dicta,
                dignissimos fugiat nisi rerum similique voluptates? Aspernatur at beatae excepturi laboriosam molestiae
                quae reprehenderit sit suscipit tempora, voluptatibus voluptatum?
            </p>
        </div>

        <div class="bg-contrast shadow-lg rounded">
            <div class="browser">
                <div class="screen">
                    <img src="{{ asset("img/screens/dash/1.png") }}" class="img-responsive rounded-bottom" alt="">
                </div>

                <div class="bubbles-speech d-none d-md-block">
                    @php($bubbles = [
                        [ "text" => "Accesible option", "position" => [ "top" => 47, "left" => 1 ] ],
                        [ "text" => "Inline editing box", "position" => [ "top" => 69, "left" => 61 ] ],
                        [ "text" => "Interaction options", "position" => [ "top" => 15, "left" => 85 ] ],
                        [ "text" => "Easy search box", "position" => [ "top" => 7, "left" => 30 ] ]
                    ])
                    @foreach ($bubbles as $bubble)
                    <span class="absolute small shadow speech-bubble"
                        style="top: {{ $bubble['position']['top'] }}%; left: {{ $bubble['position']['left'] }}%;"
                        data-aos="slide-up">{{ $bubble['text'] }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
