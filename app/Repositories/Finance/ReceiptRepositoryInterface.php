<?php

namespace App\Repositories\Finance;

interface ReceiptRepositoryInterface
{
    // get All Receipt
    public function index();

    // show form add
    public function create();

    // store Receipt
    public function store($request);

    // edit Receipt
    public function edit($id);

    // Update Receipt
    public function update($request);

    // show Receipt
    public function show($id);

    // destroy Receipt
    public function destroy($request);
}
