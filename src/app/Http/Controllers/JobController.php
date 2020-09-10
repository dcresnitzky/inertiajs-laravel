<?php

namespace App\Http\Controllers;

use App\Http\FormRequests\ApplicationRequest;
use App\JobApplication;
use App\JobPosition;
use Inertia\Inertia;
use Redirect;

class JobController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'jobs' => JobPosition::orderBy('title')
                ->get(),
        ]);
    }

    public function show($id)
    {
        return Inertia::render('Job', [
            'job' => JobPosition::findOrFail($id)
        ]);
    }

    public function apply(ApplicationRequest $request)
    {
        sleep(3);
        $path = $request->attachment->store('');

        JobApplication::create(array_merge($request->all(), [
            'attachment' => $path
        ]));

        return Redirect::route('show', [
            'id' => $request->job_position_id
        ]);
    }
}
