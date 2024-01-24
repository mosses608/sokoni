<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Validation\Rule;
use App\Models\Collaboration;
use App\Models\RequestResponse;
use App\Models\User;
class ListingController extends Controller
{
    //

    public function index(){
        return view('listings.index',[
            'heading'=>'WELCOME TO ARTIST HUB',
            'listings'=>Listing::latest()->filter(request(['search']))->paginate(6),
        ]);
    }

    public function show(){
        return view('listings.show',[
            'listing'=>Listing::all(),
            'collaborations'=>Collaboration::latest()->paginate(2),
            'request_responses'=>RequestResponse::latest()->paginate(2),
            'listings'=>Listing::all(),
            'users'=>User::all()
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formField=$request->validate([
            'occupation'=>'required',
            'artist_name'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'contact'=>['required',Rule::unique('listings','contact')],
            'email'=>['required',Rule::unique('listings','email')],
            'brand'=>'nullable',
            'music_movie_type'=>'required',
            'instagram'=>'required',
            'twitter'=>'required',
            'you_tube'=>'required',
            'musician'=>'nullable',
            'director'=>'nullable',
            'description'=>'required'
        ]);

        if($request->hasFile('profile')){
            $formField['profile']=$request->file('profile')->store('logs','public');
        }
        /*if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
    
            $newImage = new Image();
            $newImage->name = $imageName;
            $newImage->path = 'storage/images/' . $imageName;
            $newImage->save();
        }*/
        Listing::create($formField);

        return redirect('/listings/show')->with('message','Profile created successfully');
    }

    public function manage(){
        return view('listings.manage',[
            'listings'=>Listing::latest()->filter(request(['search']))->paginate(25)
        ]);
    }

    public function programe(){
        return view('about.programe');
    }

    public function admin_show($id){
        return view('listings/admin-show',[
            'listing'=>Listing::find($id)
        ]);
    }

    public function update(Request $request, Listing $listing){
        $formField=$request->validate([
            'occupation'=>'required',
            'artist_name'=>'required',
            'nationality'=>'required',
            'gender'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'brand'=>'nullable',
            'music_movie_type'=>'required',
            'instagram'=>'required',
            'twitter'=>'required',
            'you_tube'=>'required',
            'description'=>'required'
        ]);

        $listing->update($formField);

        return redirect()->back()->with('updated','Profile updated successfully');
    }

    public function delete(Listing $listing){
        $listing->delete();

        return redirect()->back()->with('message','Data deleted succesffully');
    }

    public function describe($id){
        return view('listings.description',[
            'listing'=>Listing::find($id)
        ]);
    }
}
