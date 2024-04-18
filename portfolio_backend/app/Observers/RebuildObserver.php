<?php

namespace App\Observers;

use Illuminate\Support\Facades\Http;

class RebuildObserver
{
    private static string $url;

    public function __construct()
    {
        self::$url = config('app.FRONT_REBUILD_URL');
    }

    public function created($model)
    {
        Http::post($this->url);
    }

    public function updated($model)
    {
        Http::post($this->url);
    }

    public function deleted($model)
    {
        Http::post($this->url);
    }
}
