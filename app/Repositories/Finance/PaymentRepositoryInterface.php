<?php

namespace App\Repositories\Finance;

interface PaymentRepositoryInterface
{
// get All Payment
    public function index();

    // show form add
    public function create();

    // store Payment
    public function store($request);

    // edit Payment
    public function edit($id);

    // Update Payment
    public function update($request);

    // Show Payment
    public function show($id);

    // destroy Payment
    public function destroy($request);
}
