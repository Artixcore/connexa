<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Website;
use App\Social;
use App\Cover;
use App\User;
use Image;

class ProfileController extends Controller
{
    function profile(){
        $user=User::all();

        // $user = DB::table('users')->get();

        // return view('fontend/profile/profile', ['user' => $user]);

        return view('fontend/profile/profile', compact('user'));
    }

    function website(Request $request){

        $validate = $request->validate([
        'user_website_name' => 'required',
        'user_website_link' => 'required',
    ]);

    //   if ($validate->fails()) {
    //     return redirect()->back()->withErrors($validate);
    // }

         $website = new Website();

         $website->user_website_name = $request['user_website_name'];
         $website->user_website_link = $request['user_website_link'];
         $request->user()->website()->save($website);

        return back()->with('message','Insert Successfully');

    }

    function showweb(){
        $websites=Website::find('id');

        // return view('fontend.profile.profile', compact('websites'));
        return view('fontend.profile.profile')->with('websites',$websites);
        // return view('fontend.profile.profile', ['websites' => $websites]);
    }

        function social(Request $request){

        $validate = $request->validate([
        'user_social_name' => 'required',
        'user_social_link' => 'required',
    ]);

    //   if ($validate->fails()) {
    //     return redirect()->back()->withErrors($validate);
    // }

         $website = new Social();

         $website->user_social_name = $request['user_social_name'];
         $website->user_social_link = $request['user_social_link'];
         $request->user()->social()->save($website);

        return back()->with('message','Insert Successfully');

    }

    function settings(){
        $user = User::all();
        return view('fontend.profile.editpage.settings', compact('user'));
    }

    function socialShow(){
        $websites = Website::all();
        return view('fontend.profile.profile', compact('websites'));
    }

    function cover(Request $request){

        $validate = $request->validate([
        'cover_header' => 'required',
        'cover_body' => 'required',
    ]);

    //   if ($validate->fails()) {
    //     return redirect()->back()->withErrors($validate);
    // }

         $cover = new Cover();

         $cover->cover_header = $request['cover_header'];
         $cover->cover_body = $request['cover_body'];
         $request->user()->cover()->save($cover);

        return back()->with('message','Insert Successfully');

    }

    function edit(){

        $websites = Website::all();
        return view('fontend.profile.edit', compact('websites'));

    }

    function Genedit(){

        $user = User::all();
        return view('fontend.profile.editpage.general', compact('user'));
    }

    function security(){

        return view('fontend.profile.editpage.security');
    }

    function useredit(){
        $user = User::all();
        return view('fontend.profile.editpage.user', compact('user'));
    }

    function change_name(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);
        if($user){

            $user->name   = $request->name;
            $user->f_name = $request->f_name;
            $user->l_name = $request->l_name;
            $user->save();

        } else {
        return redirect()->back();
        }

        return redirect()->back();
    }

        public function ChangePassword(Request $request) {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->getAuthPassword();

        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            Auth::logout();
            return redirect(route('login'))->with('successMsg', 'Password has been changed successfully');
        }else {
            return back()->with('errorMsg', 'Current Password is invalid');
        }
    }

    function updateEmail(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);
        if($user){

        $user->email = $request['email'];
        $user->save();

        } else {
        return redirect()->back();
        }

        return redirect()->back();

}

    function photoUpdate(){

        $user = User::all();
        return view('fontend.profile.editpage.photos', compact('user'));
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

}
