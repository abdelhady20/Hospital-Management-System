<?php

namespace App\Providers;

use App\Repositories\Doctors\DoctorRepository;
use App\Repositories\Doctors\DoctorRepositoryInterface;
use App\Repositories\Sections\SectionRepository;
use App\Repositories\Sections\SectionRepositoryInterface;
use App\Repositories\Services\ServiceRepository;
use App\Repositories\Services\ServiceRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
