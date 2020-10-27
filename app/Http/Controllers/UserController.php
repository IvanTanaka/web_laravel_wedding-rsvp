<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            return Datatables::of(Rsvp::all())
            ->addIndexColumn()
            ->addColumn('attend_bool', function($row){
                if($row->attending>0){
                    $status = '<span class="attend">Attend</span>';
                }else{
                    $status = '<span class="not_attend">Not Attending</span>';
                }
                return $status;
            })
            ->addColumn('vege_bool', function($row){
                if($row->attending>0){
                    if($row->vege){
                        $status = '<span class="vege">Vege</span>';
                    }else{
                        $status = '<span class="non_vege">Non</span>';
                    }
                }else{
                    $status = '<span class="not_attend">Not Attending</span>';
                }
                return $status;
            })
            ->rawColumns(['attend_bool','vege_bool'])
            ->make(true);
        }
        $total_data = Rsvp::count();
        $attend_rsvp = Rsvp::where('attending',">",0)->count();
        $not_attend_rsvp = Rsvp::where('attending',0)->count();
        $guest = Rsvp::sum('attending');
        $vege = Rsvp::where('vege',true)->sum('attending');
        $non_vege = Rsvp::where('vege',false)->sum('attending');
        return view('admin',['total_data'=>$total_data,'attend_rsvp'=>$attend_rsvp, 'not_attend_rsvp'=>$not_attend_rsvp, 'guest'=>$guest,'non_vege'=>$non_vege,'vege'=>$vege]);
    }
}
