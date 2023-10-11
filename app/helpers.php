<?php

// if (!function_exists('get_google_fonts')) 
{
    /**
     * Get Google Fonts from database.
     *
     * @return array
     */
    function get_google_fonts()
    {
        static $settings;

        if (is_null($settings)) {
            // $settings = \Illuminate\Support\Facades\Cache::remember('settings', 24 * 60, function () {
            //     return \Illuminate\Support\Facades\DB::table('google_fonts')->get();
            // });
        }

        return $settings;



        // return 
        // // return collect(Illuminate\Support\Facades\DB::table('google_fonts')->select('key', 'value')->get()->keyBy('key'))->map(fn ($font) => $font->value)->toArray();
        // try {
        // } catch (\Exception $exception) {
        //     //
        // }

        return ['default' => 'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,700;1,400;1,700'];
    }
}