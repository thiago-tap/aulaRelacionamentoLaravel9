<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(Request $r){
        $invoices = Invoice::all();
        return $invoices;
    }

    public function createInvoice(Request $r){
        $data = $r->only(['description','value','address_id','user_id']);
        $invoice = Invoice::create($data);
        return $invoice;
    }

    public function findOne(Request $r){
        $invoices = Invoice::find($r->id);
        $invoice['user'] = $invoices->user;
        $invoice['address'] = $invoices->address;
        return $invoices;
    }
}
