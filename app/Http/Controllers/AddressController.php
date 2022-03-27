<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $addressess = Address::all();
        return $addressess;
    }

    public function findOne(Request $request)
    {
        $addressess = Address::find($request->id);
        return $addressess;
    }

    public function insert(Request $request)
    {
        $rawData = $request->only('address');
        $address = Address::create($rawData);
        return $address;
    }
}
