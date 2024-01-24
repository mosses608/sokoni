<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Collaboration;
use App\Models\User;
class CollaborationController extends Controller
{
    //

    public function collaborate(){
        return view('listings.collaboration',[
            'collaborations'=>Collaboration::all(),
            'listings'=>Listing::all(),
            'users'=>User::all()
        ]);
    }

    public function collaboration_store(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'single'=>'nullable',
            'dfirst'=>'nullable',
            'dsecond'=>'nullable',
            'tfirst'=>'nullable',
            'tsecond'=>'nullable',
            'tthird'=>'nullable'
        ]);

        Collaboration::create($formFields);

        return redirect()->back()->with('message','Request posted successfuly, please wait for response');
        
    }

    public function collabo(){
        return view('listings.collabo',[
            'collaborations'=>Collaboration::latest()->filter(request(['search']))->paginate(10)
        ]);
    }
}
