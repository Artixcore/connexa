<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestBlood;
use Carbon\Carbon;

class RequesrController extends Controller
{
    function index(){
        return view('admin\req\index');
    }

    function InsertMessage(Request $request){

        $request->validate([
            'name'          => ['required','max:15','min:2'],
            // 'date'          => ['required'],
            'hospital_name' => ['required','max:255','min:2'],
            'amount'        => ['required'],
            'problem'       => ['required','max:255','min:2'],
            'relationship'  => ['required','max:15','min:2'],
            'bloodgroup'    => ['required'],
            'phone'         => ['required','min:2'],
            'email'         => ['required','min:2'],
            'age'           => ['required','max:15'],
            'address'       => ['required','max:255','min:2'],
        ]);
        RequestBlood::insert([
            'name'          => $request->name,
            // 'date'          => $request->date,
            'hospital_name' => $request->hospital_name,
            'amount'        => $request->amount,
            'problem'       => $request->problem,
            'relationship'  => $request->relationship,
            'bloodgroup'    => $request->bloodgroup,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'age'           => $request->age,
            'address'       => $request->address,
            'created_at'    => Carbon::now()
        ]);
        return back()->with('message','Insert Successfully');
    }
}
