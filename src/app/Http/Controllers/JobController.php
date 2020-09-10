<?php

namespace App\Http\Controllers;

use App\Http\FormRequests\ApplicationRequest;
use App\JobApplication;
use App\JobPosition;
use App\Tag;
use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

class JobController extends Controller
{
    public function index(Request $request)
    {
//        sleep(3);
        return Inertia::render('Home', [
            'jobs' => JobPosition::with('tags')
                ->orderBy('title')
                ->when($request->has('query'), fn($query) =>
                    $query->where(DB::raw('LOWER(title)'), 'like', "%{$request->get('query')}%"))
                ->get(),

            'tags' => Tag::query()
                ->select(['title', DB::raw('count(*) as total')])
                ->groupBy('title')
                ->orderBy('total', 'desc')
                ->pluck('title')
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
//        sleep(3);
        $path = $request->attachment->store('');

        JobApplication::create(array_merge($request->all(), [
            'attachment' => $path
        ]));

        return Redirect::route('show', [
            'id' => $request->job_position_id
        ]);
    }
}
