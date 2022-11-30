<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\JobPost;
use App\NewJob;

class JobController extends Controller
{

    function getpage(){

        $jobs = JobPost::all();

        return view('fontend.job.job', compact('jobs'));
    }


        function workPost(Request $request){

        // $job = request()->validate([ 
        //     'job_title' => 'required | min:4 | max:25',
        //     'job_category' => 'required | min:4 | max:25',
        //     'job_skill' => 'required | min:4 | max:25', 
        //     'job_price_start' => 'required | min:4 | max:25',
        //     'job_price_end' => 'required | min:4 | max:25',
        //     'job_desc' => 'required | min:4 | max:250'
        //  ]);

         $job = new NewJob();
 
         $job->job_id = Auth::user()->id.rand(1,9);
         $job->job_title = request('job_title');
         $job->job_type = request('job_type');
         $job->job_author = Auth::user()->name;
         $job->job_email = request('job_email');
         $job->job_number = request('job_number'); 
         $job->job_company = request('job_company');
         $job->job_location = request('job_location');
         $job->job_skill = request('job_skill');
         $job->job_salary = request('job_salary');
         $job->job_desc = request('job_desc');

         $request->user()->workPost()->save($job);

         return back();
    }


    function uploadJob(Request $request){

        // $job = request()->validate([ 
        //     'job_title' => 'required | min:4 | max:25',
        //     'job_category' => 'required | min:4 | max:25',
        //     'job_skill' => 'required | min:4 | max:25',
        //     'job_price_start' => 'required | min:4 | max:25',
        //     'job_price_end' => 'required | min:4 | max:25',
        //     'job_desc' => 'required | min:4 | max:250'
        //  ]);

         $job = new JobPost();

         $job->job_title = request('job_title');
         $job->job_category = request('job_category');
         $job->job_skill = request('job_skill');
         $job->job_price_start = request('job_price_start');
         $job->job_price_end = request('job_price_end');
         $job->job_desc = request('job_desc');


         $request->user()->jobPosts()->save($job);

         return back();
    }
}
