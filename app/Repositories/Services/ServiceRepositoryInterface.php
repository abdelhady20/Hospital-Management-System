<?php

namespace App\Repositories\Services;

interface ServiceRepositoryInterface
{
    // Get SingleServices
    public function index();

    // store SingleServices
    public function store($request);

    // update SingleServices
    public function update($request);

    // destroy SingleServices
    public function destroy($request);
}
