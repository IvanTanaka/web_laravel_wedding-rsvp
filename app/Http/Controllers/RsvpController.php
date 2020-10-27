<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;

class RsvpController extends Controller
{
    public function index(){
        return view('rsvp');
    }
    //
    public function add(Request $request){
        $rsvp = new Rsvp();
        $rsvp->name = $request->rsvpName;
        $rsvp->attending = $request->attend=="true"?$request->rsvpPerson:0;
        $rsvp->vege = $request->dietary=="true";
        $rsvp->save();
        return redirect('rsvp');
    }
}
