<?php

namespace App\Repositories\Doctor_Dashboard;

interface LaboratoriesRepositoryInterface
{
    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
