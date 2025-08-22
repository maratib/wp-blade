@extends('layouts.app')

@section('content')
<h1>Index Page</h1>
    @if (have_posts())
        @while (have_posts()) @php(the_post())
            @include('partials.content')
        @endwhile

        {!! get_the_posts_navigation() !!}
    @else
        @include('partials.content-none')
    @endif
@endsection