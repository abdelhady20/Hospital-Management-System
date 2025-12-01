<?php

namespace App\Repositories\Patients;

interface PatientRepositoryInterface
{
    // Get All Patients
    public function index();
    // Create New Patients
    public function create();
    // Store new Patients
    public function store($request);
    // edit Patients
    public function edit($id);
    // update Patients
    public function update($request);
    // show Patients
    public function show($id);
    // Deleted Patients
    public function destroy($request);
}
