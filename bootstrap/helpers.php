<?php

if (!function_exists('base_path')) {
    /**
     * Get base path helper
     *
     * @param string $path
     * @return string
     */
    function base_path(string $path = '')
    {
        return $path ? APP_ROOT . '/' . $path : APP_ROOT;
    }
}

if (!function_exists('app_path')) {
    /**
     * Get app path helper
     *
     * @param string $path
     * @return string
     */
    function app_path(string $path = '')
    {
        $base = base_path('app');
        return $path ? $base . '/' . $path : $base;
    }
}

if (!function_exists('public_path')) {
    /**
     * Get the path to the public folder
     *
     * @param string $path
     * @return string
     */
    function public_path(string $path = '')
    {
        $base = base_path('public');
        return $path ? $base . '/' . $path : $base;
    }
}

if (!function_exists('resources_path')) {
    /**
     * Get the path to the resources folder
     *
     * @param string $path
     * @return string
     */
    function resources_path(string $path = '')
    {
        $base = base_path('resources');
        return $path ? $base . '/' . $path : $base;
    }
}

if (!function_exists('url')) {
    /**
     * Generate a URL.
     */
    function url(string $path = null)
    {
        $baseUrl = env('APP_URL') ? trim(env('APP_URL'), '/') : '';
        return ($path) ? $baseUrl . '/' . trim($path, '/') : $baseUrl;
    }
}

if (!function_exists('asset')) {
    /**
     * Generate a URL for an asset using the current scheme of the request (HTTP or HTTPS).
     */
    function asset(string $path = null)
    {
        $baseUrl = env('APP_URL') ? trim(env('APP_URL'), '/') : '';
        return ($path) ? $baseUrl . '/' . $path : $baseUrl;
    }
}