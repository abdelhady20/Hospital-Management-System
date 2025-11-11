<?php

namespace App\Providers;

use App\Repositories\Ambulances\AmbulanceRepository;
use App\Repositories\Ambulances\AmbulanceRepositoryInterface;
use App\Repositories\Doctors\DoctorRepository;
use App\Repositories\Doctors\DoctorRepositoryInterface;
use App\Repositories\Insurances\InsuranceRepository;
use App\Repositories\Insurances\InsuranceRepositoryInterface;
use App\Repositories\Patients\PatientRepository;
use App\Repositories\Patients\PatientRepositoryInterface;
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
        $this->app->bind(InsuranceRepositoryInterface::class, InsuranceRepository::class);
        $this->app->bind(AmbulanceRepositoryInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
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
