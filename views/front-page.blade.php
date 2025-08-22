@extends('layouts.app')

@section('content')
    @while (have_posts()) @php(the_post())
    <h1>Front Page</h1>
        <article @php(post_class())>
            <header>
                <h1>{{ the_title() }}</h1>
            </header>
            <div class="entry-content">
                {!! the_content() !!}
            </div>
            <footer>
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'your-blade-theme'), 'after' => '</p></nav>']) !!}
            </footer>
            @php(comments_template())
        </article>
    @endwhile
@endsection