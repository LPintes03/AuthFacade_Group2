<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showCreateProfile(){
        return view('create_profile');
    }

    public function showProfile(){
        $profile = Auth::user()->profile;

        return view('profile',['profile'=>$profile]);
    }

    public function createProfile(Request $request){
        $profile = $request->validate([
            
            'bio'=>['required','string'],
            'contact'=>['required','string','max:11'],
            
            'profile_pic' => ['nullable', 'file', 'mimes:jpg,png,pdf,gif', 'max:51200'],
        ]);

        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $filePath = $file->store('uploads/profile_pic', 'public'); 
            $profile['profile_pic'] = $filePath; 
        }
       
        Auth::user()->profile()->create($profile);


        return redirect("/profile");
        

    }
}
