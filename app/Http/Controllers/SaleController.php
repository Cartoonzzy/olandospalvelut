<?php

namespace App\Http\Controllers;
use App\Mail\NewSale;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SaleController extends Controller
{
    public function storeSale(Request $request){
        $sale = Sale::create($request->all());
        Mail::to('sales@olandospalvelut.fi')->send(new NewSale($sale));
        }
}
