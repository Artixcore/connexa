<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{


    
    function messages(){

        return view('fontend.message'); 
    }



}
