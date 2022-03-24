<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Experience;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Experience::all();
        // $educations=Education::all();
        // $interests=Interest::all();
        $awards=Award::all();
        // $projects=Project::all();
        // $profile=Profile::first();
        
        return view('FrontOffice.welcome',[
            "experiences"=>$experiences,
            // "educations"=>$educations,
            // "interests"=>$interests,
            "awards"=>$awards,
            // "profile"=>$profile,
            // "projects"=>$projects,
        ]);
    }
}
