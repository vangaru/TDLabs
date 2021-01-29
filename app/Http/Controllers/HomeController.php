<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewAddRequest;
use App\Models\Reviews;

class HomeController extends Controller
{

    public function getReviews ()
    {
        return view('home', ['reviews'=>Reviews::all()]);
    }

    public function addReview(ReviewAddRequest $req)
    {
        $review = new Reviews();

        $review->name = $req->input('name');
        $review->date = $req->input('date');
        $review->review = $req->input('review');

        $review->save();

        return redirect()->route('home');
    }

}
