<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{

    //index
    public function index()
    {
        $job = Job::with('employer')->latest()->paginate(4);
        return view('jobs.index', ['jobs' => $job]);
    }

    //show
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    //store
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]); 
 
        // dd(Auth::user()->id);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            "employer_id" => 1,
        ]);
        
        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );      

        return redirect('/jobs/' . $job->id);
    }

    //update
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);;

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect(to: '/jobs/' . $job->id);
    }

    //delete
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }

    //create route
    public function create()
    {
        return view('jobs.create');
    }

    //edit route
    public function edit(Job $job)
    {

        // if(Auth::guest()){
        //     return redirect('/login');
        // };

        //manual
        // if(!$job->employer->user->is(Auth::user())){
        //     abort(403);
        // };


        //gates
        // Gate::define('edit-job', function (User $user, Job $job) {
        //     // return $user == $job->employer->user; 
        //     return $job->employer->user->is(Auth::user());
        // });

        // if(Auth::user()->cannot('edit-job', $job)){
        //     abort(403);
        // };

        vars:
        // Gate::authorize('edit-job', $job);


        //policy

        return view('jobs.edit', ['job' => $job]);
    }
}
