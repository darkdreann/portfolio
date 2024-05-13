<?php

namespace App\Observers;

use Illuminate\Support\Facades\Http;

/**
 * Class RebuildObserver to rebuild the frontend after a change in the database
 * @package App\Observers
 */
class RebuildObserver
{
    private static string $url;

    /**
     * RebuildObserver constructor.
     */	
    public function __construct()
    {
        self::$url = config('app.FRONT_REBUILD_URL');
    }

    /**
     * Function to send a POST request to the frontend to rebuild it after a model is created
     */
    public function created($model)
    {
        Http::post(self::$url);
    }

    /**
     * Function to send a POST request to the frontend to rebuild it after a model is updated
     */
    public function updated($model)
    {
        Http::post(self::$url);
    }

    /**
     * Function to send a POST request to the frontend to rebuild it after a model is deleted
     */
    public function deleted($model)
    {
        Http::post(self::$url);
    }
}
