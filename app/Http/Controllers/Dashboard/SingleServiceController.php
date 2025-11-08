<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSingleServiceRequest;
use App\Repositories\Services\ServiceRepositoryInterface;
use Illuminate\Http\Request;

class SingleServiceController extends Controller
{
    private $SingleService;

    public function __construct(ServiceRepositoryInterface $SingleService){
        $this->SingleService = $SingleService;
    }

    public function index()
    {
        return $this->SingleService->index();
    }


    public function create()
    {
        //
    }


    public function store(StoreSingleServiceRequest $request)
    {
        return $this->SingleService->store($request);
    }


    public function update(Request $request)
    {
        return $this->SingleService->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->SingleService->destroy($request);
    }
}
