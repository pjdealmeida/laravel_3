<!-- ./Pricing Table -->
<x-utils.container class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="row gap-y align-items-center">
        <div class="col-md-5 me-md-auto">
            <h2 class="font-lg bold">Unleash <br> your potential</h2>
            <p>We have made the most affordable prices just for you. Go ahead and try our brand new platform</p>

            <a href="#" class="btn btn-rounded btn-info mt-5">Request a free trial</a>
        </div>

        <div class="col-md-3">
            <div class="bg-info-gradient py-4 rounded text-contrast shadow pricing text-center">
                <h2 class="bold text-contrast font-md mb-5">Business</h2>

                <ul class="list-unstyled">
                    <li>Cras justo odio</li>
                    <li>Dapibus ac facilisis in</li>
                    <li>Morbi leo risus</li>
                    <li>Porta ac consectetur ac</li>
                    <li>Vestibulum at eros</li>
                </ul>

                <div class="pricing-value"><span class="price">29.99</span></div>

                <a href="#" class="btn btn-rounded btn-contrast mt-5">
                    Buy now
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="bg-contrast py-4 rounded shadow pricing text-center">
                <h2 class="bold font-md mb-5">Personal</h2>

                <ul class="list-unstyled">
                    <li class="strike-through">Cras justo odio</li>
                    <li class="strike-through">Dapibus ac facilisis in</li>
                    <li class="">Morbi leo risus</li>
                    <li class="">Porta ac consectetur ac</li>
                    <li class="">Vestibulum at eros</li>
                </ul>

                <div class="pricing-value"><span class="price text-dark">9.99</span></div>

                <a href="#" class="btn btn-rounded btn-outline-info mt-5">
                    Buy now
                </a>
            </div>
        </div>
    </div>
</x-utils.container>
