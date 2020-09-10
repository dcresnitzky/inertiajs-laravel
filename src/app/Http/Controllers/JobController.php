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
use Session;

class JobController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Home', [

            'jobs' => JobPosition::with('tags')
                ->from('job_position as jp')
                ->join('tag as t', 'jp.id', '=', 't.job_position_id')
                ->orderBy('jp.title')
                ->when($request->has('query'), fn($query) => $query->where(DB::raw('LOWER(jp.title)'), 'like', "%{$request->get('query')}%"))
                ->when($request->has('tags'), fn($query) => $query->whereIn('t.title', $request->get('tags')))
                ->groupBy([
                    'jp.id', 'jp.title', 'jp.short_description', 'jp.location', 'jp.type', 'jp.created_at'
                ])
                ->get([
                    'jp.id', 'jp.title', 'jp.short_description', 'jp.location', 'jp.type', 'jp.created_at'
                ]),

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
        $path = $request->attachment->store('');

        $application = JobApplication::create(array_merge($request->all(), [
            'attachment' => $path
        ]));

        Session::flash('inertia.job_application', !!$application);

        return Redirect::route('show', [
            'id' => $request->job_position_id
        ]);
    }

}
