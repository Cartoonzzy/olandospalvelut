<?php

namespace App\Http\Controllers;
use App\Mail\NewInfo;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function storeForm(Request $request){
        $info = Info::create($request->all());
        Mail::to('info@olandospalvelut.fi')->send(new NewInfo($info));
        }
}
