<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class AdminReviewsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getReviews ()
    {
        return view('admin-reviews', ['reviews' => Reviews::all()]);
    }

    public function deleteReview($id)
    {
    	Reviews::find($id)->delete();

    	return redirect()->route('admin.reviews');
    }

    public function sort(Request $req)
    {
    	$sortType = $req->input('sort');

    	switch($sortType){
    		case 'author':
    			return view('admin-reviews', ['reviews' => Reviews::orderBy('name', 'asc')->get()]);
    		case 'old_reviews':
    			return view('admin-reviews', ['reviews' => Reviews::orderBy('date', 'asc')->get()]);
    		case 'new_reviews':
    			return view('admin-reviews', ['reviews' => Reviews::orderBy('date', 'desc')->get()]);
    		default:
    			return view('admin-reviews', ['reviews' => Reviews::all()]);
    	}
    }
}
