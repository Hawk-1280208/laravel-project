<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $bookings = Booking::all();
        return view('view', compact('bookings'));
    }
    
    public function create() {
        return view('create');
    }
    
    public function store(Request $request) {

      
        $book = new Booking;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('m/d/Y h:i A', $request->checkin)->format('Y-m-d H:i:s');
        $book->checkout = Carbon::createFromFormat('m/d/Y h:i A', $request->checkout)->format('Y-m-d H:i:s');

        $book->adults = $request->adults;
        $book->children = $request->children;
        $book->room = $request->room;
        $book->special_request = $request->special_request;
        
    
      $book->save();
      return redirect::to('/home')->with('success','your post has been booked!');
    }
    
}


