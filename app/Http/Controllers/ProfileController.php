<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;

class ProfileController extends Controller
{
    public function create_profile()
    {
        return view('BackOffice.profile',['profile'=>Profile::first(),'nav'=>'profile']);
    }
    public function store_profile(ProfileRequest $req)
    {
        $profile=new Profile();
        // if($req->hasFile('photo'))
        // {
        //     $path=Storage::putFile("profile",$req->photo);
        //     $profile->photo=$path;
        // }
        // $profile->first_name=$req->first_name;
        // $profile->last_name=$req->last_name;
        // $profile->bio=$req->bio;
        // $profile->phone=$req->phone;
        // $profile->email=$req->email;
        // $profile->address=$req->address;
        // $profile->facebook=$req->facebook;
        // $profile->twitter=$req->twitter;
        // $profile->linkedin=$req->linkedin;
        // $profile->github=$req->github;
        // $profile->save();
        // return back();
        if($req->hasFile('photo'))
        {
            $path=Storage::putFile("profile",$req->photo);
            
            $data=$req->validated();
            $data['photo']=$path;
            Profile::create($data);
            // $data['user_id']=Auth::user()->id;
            return back();
        }
    }
    public function destroy_profile($id)
    {
        Profile::findOrFail($id)->delete();
        return back();
    }
    public function show_profile($id)
    {
        return view('BackOffice.show_profile',['profile'=>Profile::findOrFail($id),'nav'=>'profileActive']);
    }
    public function update_profile(ProfileRequest $req, $id)
    {
        $profile=Profile::findOrFail($id);
        $profile->first_name=$req->first_name;
        $profile->last_name=$req->last_name;
        $profile->bio=$req->bio;
        $profile->phone=$req->phone;
        $profile->email=$req->email;
        $profile->address=$req->address;
        $profile->facebook=$req->facebook;
        $profile->twitter=$req->twitter;
        $profile->linkedin=$req->linkedin;
        $profile->github=$req->github;
        if($req->hasFile('photo'))
        {
            Storage::delete('profile',$profile->photo);
            $path=Storage::putFile('profile',$req->photo);
            $profile->photo=$path;
        }
        $profile->save();
        return back();

    }
    
}
