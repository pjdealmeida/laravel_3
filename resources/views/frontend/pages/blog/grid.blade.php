@extends('frontend.layouts.pages')

@section('title', __('Blog'))

@php ($posts = [
    [ "title" => "Discover the Beauty of DashCore", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, cumque dolores dolorum est.", "author" => "Jenny Oliver", "gravity" => 'north', "favorite" => [ "icon" => 'fas fa-heart text-danger', "count" => 347 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 73 ] ],
    [ "title" => "Extending DashCore Template", "description" => "Cupiditate debitis delectus dolor dolore doloremque, doloribus eveniet illo in labore neque numquam.", "author" => "Jennifer Wells", "gravity" => 'south', "favorite" => [ "icon" => 'far fa-heart', "count" => 415 ], "bookmark" => [ "icon" => 'fas fa-bookmark text-warning', "count" => 98 ] ],
    [ "title" => "5 Reasons to Choose DashCore", "description" => "Amet aperiam cumque delectus eligendi, esse, modi nemo nisi officiis rem repellat sed ulla.", "author" => "Roger Sanchez", "gravity" => 'east', "favorite" => [ "icon" => 'far fa-heart', "count" => 152 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 13 ] ],
    [ "title" => "Styling with Style: Gold Rule", "description" => "Ad aliquam dicta, eaque eos iusto totam velit. Amet atque dolorum eaque ipsa sed. Aliquid cupiditate.", "author" => "Billie Robertson", "gravity" => 'west', "favorite" => [ "icon" => 'far fa-heart', "count" => 237 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 87 ] ],
    [ "title" => "Extending DashCore Template", "description" => "Amet animi autem commodi, debitis dolore doloribus fugiat illum molestias nesciunt perspiciatis.", "author" => "Billie Ramos", "gravity" => 'east', "favorite" => [ "icon" => 'fas fa-heart text-danger', "count" => 731 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 83 ] ],
    [ "title" => "Think Smarter than Others", "description" => "Adipisci animi aperiam aut culpa deleniti deserunt error et eveniet, incidunt labore natus nihil.", "author" => "Katherine Wade", "gravity" => 'north', "favorite" => [ "icon" => 'far fa-heart', "count" => 187 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 53 ] ],
    [ "title" => "15 Minutes Configuration", "description" => "Some quick example text to build on the New post and make up the bulk of the post's content.", "author" => "Pearl Hoffman", "gravity" => 'south', "favorite" => [ "icon" => 'far fa-heart', "count" => 568 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 89 ] ],
    [ "title" => "Smart new Innovations", "description" => "Asperiores atque ea enim illum in ipsam labore maiores necessitatibus odit officiis optio quae.", "author" => "Charlie Green", "gravity" => 'center', "favorite" => [ "icon" => 'fas fa-heart', "count" => 543 ], "bookmark" => [ "icon" => 'fas fa-bookmark text-warning', "count" => 125 ] ],
    [ "title" => "Becoming an Entrepreneur", "description" => "Aspernatur atque, cum dolore earum eius et eum facere iusto magni molestiae nam officiis placeat.", "author" => "Constance Hunter", "gravity" => 'west', "favorite" => [ "icon" => 'far fa-heart', "count" => 298 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 26 ] ]
])

@section('content')
    <x-frontend.header
        title="Dashcore Blog"
        subtitle="What our awesome community is talking about." />

    <x-utils.divider color="contrast" />

    @include ("frontend.blog.grid.all", $posts)
@endsection

@section('footer')
    @include("frontend.blocks.footers.4cols", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
