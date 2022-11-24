<!-- ./Lightbox - Single Image -->
<x-utils.container class="form-basic {{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="section-heading text-center">
        <h2 class="bold">Single image lightbox</h2>
        <p class="lead italic">Three simple popups with different scaling settings.</p>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <nav class="nav justify-content-center grid-of-images">
                <a class="modal-popup image-popup-vertical-fit" href="https://picsum.photos/800/600?image=1082" title="Caption. Can be aligned to any side and contain any HTML." data-type="image" data-image='{"verticalFit": true}'>
                    <img src="https://picsum.photos/75/75/?image=1082" alt="" class="img-responsive">
                </a>
                <a class="modal-popup image-popup-fit-width" href="https://picsum.photos/800/600?image=1039" title="This image fits only horizontally." data-type="image" data-image='{"verticalFit": false}'>
                    <img src="https://picsum.photos/75/75/?image=1039" alt="" class="img-responsive">
                </a>
                <a class="modal-popup image-popup-no-margins" href="https://picsum.photos/800/600?image=977" data-type="image" data-image='{"verticalFit": true}' data-zoom="300">
                    <img src="https://picsum.photos/107/75/?image=977" alt="" class="img-responsive">
                </a>
            </nav>
        </div>
    </div>
</x-utils.container>
