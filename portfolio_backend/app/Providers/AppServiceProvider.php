<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Course;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Project;
use App\Models\SoftSkill;
use App\Models\TechnicalSkill;
use App\Observers\RebuildObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Course::observe(RebuildObserver::class);
        Education::observe(RebuildObserver::class);
        Experience::observe(RebuildObserver::class);
        PersonalData::observe(RebuildObserver::class);
        Project::observe(RebuildObserver::class);
        SoftSkill::observe(RebuildObserver::class);
        TechnicalSkill::observe(RebuildObserver::class);
    }
}
