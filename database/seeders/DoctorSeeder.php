<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = Doctor::factory()->count(30)->create();
        $appointments = Appointment::all();

        foreach ($doctors as $doctor) {
            $randomAppointments = $appointments->shuffle()->take(3);
            $doctor->doctorappointments()->attach($randomAppointments->pluck('id')->toArray());
        }

    }
}
