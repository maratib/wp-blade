@if ($tags = get_the_tags())
    <p>{{ __('Tags:', 'your-blade-theme') }} {!! get_the_tag_list('', ', ', '') !!}</p>
@endif