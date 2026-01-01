<?php

namespace App\Providers;

use App\Repositories\Ambulances\AmbulanceRepository;
use App\Repositories\Ambulances\AmbulanceRepositoryInterface;
use App\Repositories\Doctor_Dashboard\DiagnosisRepository;
use App\Repositories\Doctor_Dashboard\DiagnosisRepositoryInterface;
use App\Repositories\Doctor_Dashboard\InvoicesRepository;
use App\Repositories\Doctor_Dashboard\InvoicesRepositoryInterface;
use App\Repositories\Doctor_Dashboard\LaboratoriesRepository;
use App\Repositories\Doctor_Dashboard\LaboratoriesRepositoryInterface;
use App\Repositories\Doctor_Dashboard\RaysRepository;
use App\Repositories\Doctor_Dashboard\RaysRepositoryInterface;
use App\Repositories\Doctors\DoctorRepository;
use App\Repositories\Doctors\DoctorRepositoryInterface;
use App\Repositories\Finance\PaymentRepository;
use App\Repositories\Finance\PaymentRepositoryInterface;
use App\Repositories\Finance\ReceiptRepository;
use App\Repositories\Finance\ReceiptRepositoryInterface;
use App\Repositories\Insurances\InsuranceRepository;
use App\Repositories\Insurances\InsuranceRepositoryInterface;
use App\Repositories\LaboratorieEmployee\LaboratorieEmployeeRepository;
use App\Repositories\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface;
use App\Repositories\Patients\PatientRepository;
use App\Repositories\Patients\PatientRepositoryInterface;
use App\Repositories\RayEmployee\RayEmployeeRepository;
use App\Repositories\RayEmployee\RayEmployeeRepositoryInterface;
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
        //Admin
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(InsuranceRepositoryInterface::class, InsuranceRepository::class);
        $this->app->bind(AmbulanceRepositoryInterface::class, AmbulanceRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(ReceiptRepositoryInterface::class, ReceiptRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);

        //Doctor
        $this->app->bind(InvoicesRepositoryInterface::class, InvoicesRepository::class);
        $this->app->bind(DiagnosisRepositoryInterface::class, DiagnosisRepository::class);
        $this->app->bind(RaysRepositoryInterface::class, RaysRepository::class);
        $this->app->bind(LaboratoriesRepositoryInterface::class, LaboratoriesRepository::class);

        //RayEmployee
        $this->app->bind(RayEmployeeRepositoryInterface::class, RayEmployeeRepository::class);
        $this->app->bind('App\Repositories\Dashboard_Ray_Employee\InvoicesRepositoryInterface',
            'App\Repositories\Dashboard_Ray_Employee\InvoicesRepository');

        $this->app->bind(LaboratorieEmployeeRepositoryInterface::class, LaboratorieEmployeeRepository::class);
        $this->app->bind(
            \App\Repositories\Dashboard_Laboratorie_Employee\InvoicesRepositoryInterface::class,
            \App\Repositories\Dashboard_Laboratorie_Employee\InvoicesRepository::class
        );


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
