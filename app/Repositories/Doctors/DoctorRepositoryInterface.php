<?php

namespace App\Repositories\Doctors;

interface DoctorRepositoryInterface
{
    // get Doctor
    public function index();

    // create Doctor
    public function create();

    // store Doctor
    public function store($request);

    // update Doctor
    public function update($request);

    // destroy Doctor
    public function destroy($request);

    public function edit($id);

    public function update_password($request);

    public function update_status($request);


}
