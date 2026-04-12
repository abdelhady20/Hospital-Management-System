<?php

namespace App\Events;

use App\Models\Patient;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateInvoice implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $patient;
    public $invoice_id;
    public $message;
    public $doctor_id;
    public $created_at;


    public function __construct($data)
    {
        $patient = Patient::find($data['patient_id'] ?? null);
        $this->doctor_id = $data['doctor_id'];
        $this->patient     = $patient ? $patient->name : 'مريض غير معروف';
        $this->invoice_id  = $data['invoice_id'] ?? null;
        $this->message     = "كشف جديد : ";
        $this->created_at  = now()->format('Y-m-d H:i:s');
    }


    public function broadcastOn()
    {
        return new PrivateChannel('create-invoice.'.$this->doctor_id);
        //return ['create-invoice'];
    }

    public function broadcastAs()
    {
        return 'create-invoice';
    }
}
