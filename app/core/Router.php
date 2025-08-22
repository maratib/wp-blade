<?php
namespace WPBlade\Router;


abstract class Router {
    protected $blade;

    public function __construct() {
        $this->blade = $GLOBALS['blade'];
    }
    public function init()  {
        return new Returntype();
        
    }

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

    function getTemplateName($templateName) {
        global $blade;
        if ($blade->exists($templateName)) {
            return $templateName;
        }
        return false;
    }

    function getTemplate($blade, $templateName) {
        if ($blade->exists($templateName)) {
            return $blade->render($templateName);
        }
        return false;
    }
}