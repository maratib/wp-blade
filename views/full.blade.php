{{-- 
    Template Name: Full-width layout
    Template Post Type: post, page
    Description: A full-width layout template for pages and posts.
    This template is designed to be used for pages and posts that require a full-width layout without any sidebars or additional content.
    It can be used for landing pages, promotional content, or any other type of content that needs to take up the full width of the screen.
 --}}

 

@extends('layouts.app')

@section('content')
<h1>Full</h1>
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