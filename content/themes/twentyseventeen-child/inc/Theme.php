<?php

namespace LottaLeben;

class Theme
{
    public function __construct()
    {
        add_action('init', [$this, 'registerCustomPostType']);
        add_filter('acf/settings/save_json', [$this, 'acfJsonSavePoint']);
        add_filter('acf/settings/load_json', [$this, 'acfJsonLoadPoint']);
    }

    public function registerCustomPostType()
    {
        register_post_type('events', [
            'labels'      =>  [
                'name'          => __('Events', 'twentyseventeen-child'),
                'singular_name' => __('Event', 'twentyseventeen-child'),
            ],
            'public'      => true,
            'has_archive' => true,
        ]);
    }

    public function acfJsonSavePoint($path)
    {
        // update path
        $path = get_stylesheet_directory() . '/acf';

        // return
        return $path;
    }

    public function acfJsonLoadPoint($paths)
    {
        // remove original path (optional)
        unset($paths[0]);

        // append path
        $paths[] = get_stylesheet_directory() . '/acf';

        // return
        return $paths;
    }
}
