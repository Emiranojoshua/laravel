<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;


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


        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            "employer_id" => 1,
        ]);

        return redirect('/jobs');
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

        return redirect('/jobs/' . $job->id);
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
        return view('jobs.edit', ['job' => $job]);
    }
}
