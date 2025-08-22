@extends('layouts.app')

@section('content')
<h1>News</h1>
    @while (have_posts()) @php(the_post())
        <article @php(post_class())>
            <header>
                <h1>{{ the_title() }}</h1>
                @include('partials.entry-meta')
            </header>
            <div class="entry-content">
                {!! the_content() !!}
            </div>
            <footer>
            @include('partials.entry-tags')
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'your-blade-theme'), 'after' => '</p></nav>']) !!}
            </footer>
            @include('partials.comments')
        </article>
    @endwhile
@endsection