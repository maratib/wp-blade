<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title">{{ __('Nothing Found', 'your-blade-theme') }}</h1>
    </header>
    <div class="page-content">
        @if (is_home() && current_user_can('publish_posts'))
            <p>{{ sprintf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'your-blade-theme'), esc_url(admin_url('post-new.php'))) }}</p>
        @elseif (is_search())
            <p>{{ __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'your-blade-theme') }}</p>
            {!! get_search_form() !!}
        @else
            <p>{{ __('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'your-blade-theme') }}</p>
            {!! get_search_form() !!}
        @endif
    </div></section>```