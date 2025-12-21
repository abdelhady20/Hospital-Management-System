<?php

namespace App\Repositories\Doctor_Dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index();
    // قائمة المراجعات
    public function reviewInvoices();
    // قائمة الفواتير المكتملة
    public function completedInvoices();
    // View rays
    public function show($id);
}
