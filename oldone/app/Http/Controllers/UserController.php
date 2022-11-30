<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('fontend.profile', array('user' => Auth::user()) );
    }

    function update_avatar(Request $request){
        // User Upload Avatar
        if($request->hasFile('avatar')){
            $avatar =   $request->file('avatar');
            $filename = time() . '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->save( public_path('/user/'. $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return back();
        // return view('fontend.profile.profile', array('user' => Auth::user()) );
    }


        function update_cover_avatar(Request $request){
        // User Upload Avatar
        if($request->hasFile('cover_avatar')){
            $cover_avatar =   $request->file('cover_avatar');
            $filename = time() . '.' .$cover_avatar->getClientOriginalExtension();
            Image::make($cover_avatar)->save( public_path('/user/'. $filename) );
            $user = Auth::user();
            $user->cover_avatar = $filename;
            $user->save();
        }
        return back();
        // return view('fontend.profile.profile', array('user' => Auth::user()) );
    }

    function status(Request $request){
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => 'Status Successfully Update']);
    }

    function freelancer(){
        $user = Freelancer::find($request->user_id);
        $user->freelancer_id = $request->status;
        $user->save();

        return response()->json(['success' => 'Status Successfully Update']);
    }

    // function 

}
