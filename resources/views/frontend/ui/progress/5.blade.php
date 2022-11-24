<x-utils.container class="form-basic {{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="section-heading text-center">
        <h2>Vertical</h2>
        <p class="lead">Animated progress bars requires waypoints to be used.</p>
    </div>

    <div class="row gap-y">
        <div class="col-md-8 mx-auto">
            <div class="animate-bars">
                <ul class="progress-bars vertical-demo-bars"></ul>
            </div>
        </div>
    </div>
</x-utils.container>
