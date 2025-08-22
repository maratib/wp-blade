<time class="updated" datetime="{{ get_post_modified_time('c') }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
    {{ __('By', 'your-blade-theme') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">{{ get_the_author() }}</a>
</p>