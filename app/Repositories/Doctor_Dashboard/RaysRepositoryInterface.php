<?php

namespace App\Repositories\Doctor_Dashboard;

interface RaysRepositoryInterface
{
    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
