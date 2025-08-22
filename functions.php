<?php
// Autoload Composer
if (file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    require_once $composer;
}

// Define paths
define('THEME_DIR', __DIR__);
define('THEME_URI', get_template_directory_uri());

// Initialize Blade
$views = THEME_DIR.'/views';
$cache = THEME_DIR.'/storage/cache';
$blade = new \Just\Blade($views, $cache);

// Theme setup
require_once __DIR__.'/app/setup.php';

// Template handler
add_filter('template_include', function ($template) {
    global $blade;
    $templateName = getSelectedTemplate();
        
    if (!$templateName) {
    if (is_front_page())
        $templateName = 'front-page';
    else if (is_home()) {
        $slug = 'home-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'home';
    }
    else if (is_page()) {
        $slug = 'single-'.getFirstSlug();
        $templateName = $blade->exists($slug) ? $slug :'single';
    }
    else if (is_single()) {
        $slug = 'single-'.getFirstSlug();
        $templateName = $blade->exists($slug) ? $slug :'single';
    }
    
    else if (is_archive()) {
        $slug = 'archive-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'archive';
    }
    else if (is_category()) {
        $slug = 'category-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'category';
    }
    else if (is_tag()) {
        $slug = 'tag-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'tag';
    }
    else if (is_search()) {
        $slug = 'search-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'search';
    }
    else if (is_author()) {
        $slug = 'author-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'author';
    }
    else if (is_attachment()) {
        $slug = 'attachment-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'attachment';
    }
    else if (is_date()) {
        $slug = 'date-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'date';
    }
    else if (is_404()) {
        $slug = '404-'.getCurrentSlug();
        $templateName = $blade->exists($slug) ? $slug :'404';
    }
    else 
        $templateName = '404';
}
    
    
        
 
    echo '<br>';
    echo $templateName;
    
    
        if ($blade->exists($templateName)) {
            echo $blade->render($templateName);
            return false;
        }
    
    
    return $template;
});

function getCurrentSlug()
{
    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    return basename($path); // Returns last segment of URL
}

function getFirstSlug()
{
    $url = $_SERVER['REQUEST_URI'];
    $path = trim(parse_url($url, PHP_URL_PATH), '/');
    $segments = explode('/', $path);
    
    return $segments[0] ?? ''; // Returns first segment or empty string
}
function getSelectedTemplate()
{
    global $post;
    
    if (!$post) {
        return false;
    }
    

    // $template_file = get_post_meta($post->ID, '_wp_page_template', true);
    $template_file = get_post_meta($post->ID, '_wp_page_template', true);

    $template_file = str_replace('views/', '', $template_file);
    $template_file = str_replace('.blade.php', '', $template_file);

    // echo $template_file . "123<br> ";
    if ($template_file && $template_file !== 'default') {
        return $template_file;
    }
    
    return false;
}