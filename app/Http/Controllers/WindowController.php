<?php

namespace App\Http\Controllers;
use App\Mail\NewWindow;
use App\Window;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WindowController extends Controller
{
    public function storeSale(Request $request){
        $window = Window::create($request->all());
        Mail::to('sales@olandospalvelut.fi')->send(new NewWindow($window));
        }
}
