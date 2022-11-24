<!-- Features -->
<x-utils.container class="mt-n6" container-class="pt-0" id="features">
    <div class="bg-contrast shadow rounded p-5">
        <div class="row gap-y">
            @php($features = [
                [ "icon" => "pen-tool", "title" => "themes made easy",  "description" => "Our astonishing style structure makes your customization process a breeze" ],
                [ "icon" => "zap",      "title" => "powerful design",   "description" => "With ready-to-use content you'll deploy your implementation in no time" ],
                [ "icon" => "star",     "title" => "creative content",  "description" => "Repetitive styles all across the web? Nevermind that! Shine with unique styles" ],
            ])

            @foreach ($features as $feature)
            <div class="col-md-4">
                <div class="rounded gradient gradient-primary-light icon-xl shadow d-flex align-items-center justify-content-center me-3">
                    <i data-feather="{{ $feature['icon'] }}" width="36" height="36" class="stroke-contrast"></i>
                </div>
                <h4 class="semi-bold mt-4 text-capitalize">{{ $feature['title'] }}</h4>

                <hr class="w-25 bw-2 border-alternate mt-3 mb-4">
                <p class="regular text-muted">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-utils.container>
