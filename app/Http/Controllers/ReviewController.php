<?php

namespace App\Http\Controllers;
use App\Mail\NewReview;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{

    public function storeReview(Request $request){
    $review = Review::create($request->all());
    Mail::to('reviews@olandospalvelut.fi')->send(new NewReview($review));
    }
}
