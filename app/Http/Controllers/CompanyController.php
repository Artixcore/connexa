<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Company;


class CompanyController extends Controller
{
    function viewCompany(){

       return view('fontend.company.company');
    }

    function CrateCompany(){

        return view('fontend.company.new');
    }

    function CrateNewCompany(Request $request){

        
        // $this->validate($request, [

        //         'company_name'    => 'required|min:1|max:25',
        //         'company_location'   => 'required|min:1|max:25',
        //         'company_from'     => 'required|min:1|max:25',
        //         'company_from'     => 'required|min:1|max:25',
        //         'company_phone'    => 'required|type:email|max:255',
        //         'company_avatar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        //         'company_cover.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:6048'

        // ]);

       if($request->hasFile('company_avatar')){
            $company_avatar =   $request->file('company_avatar');
            $filename = time() . '.' .$company_avatar->getClientOriginalExtension();
            Image::make($company_avatar)->save( public_path('/user/'. $filename) );
            $user = Auth::user();
            $user->company_avatar = $filename;
            $user->save();
        }
    

            if($request->hasFile('company_cover')){
            $company_cover =   $request->file('company_cover');
            $filenames = time() . '.' .$company_cover->getClientOriginalExtension();
            Image::make($company_cover)->save( public_path('/user/'. $filenames) );
            $user = Auth::user();
            $user->company_cover = $filenames;
            $user->save();
        }
    
         
    
   
        $user =new Company();
      
            $user->user_id=Auth::user()->id;
            $user->company_name = $request->company_name;
            $user->company_location = $request->company_location;
            $user->company_from = $request->company_from; // Start From
            $user->company_email = $request->company_email; 
            $user->company_phone = $request->company_phone; 
            // $user->company_avatar=$filename;
            // $user->company_cover=$filenames;

            $user->save();

        return view('fontend.company.company');
    }


    }



