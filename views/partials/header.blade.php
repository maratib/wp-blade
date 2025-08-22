<!DOCTYPE html>
<html {{ language_attributes() }}>
<head>
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ wp_title('|', true, 'right') }}</title>
    {{ wp_head() }}
</head>
<body {{ body_class() }}>
    <a class="skip-link screen-reader-text" href="#content">{{ __('Skip to content', 'your-blade-theme') }}</a>
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                @if (is_front_page() && is_home())
                    <h1 class="site-title"><a href="{{ home_url('/') }}" rel="home">{{ get_bloginfo('name') }}</a></h1>
                @else
                    <p class="site-title"><a href="{{ home_url('/') }}" rel="home">{{ get_bloginfo('name') }}</a></p>
                @endif
                @if (get_bloginfo('description', 'display'))
                    <p class="site-description">{{ get_bloginfo('description') }}</p>
                @endif
            </div>

            <nav id="site-navigation" class="main-navigation">
                @if (has_nav_menu('primary'))
                    {!! wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'primary-menu']) !!}
                @endif
                <a href="/">Home</a> | <a href="/contact">Contact</a> 
            </nav></div>
    </header><div id="content" class="site-content">
        <div class="container"></div>