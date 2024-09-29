<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobData;
use App\Traits\Common;
use Illuminate\Http\Request;

class JobController extends Controller

{
    use Common;

    public function index()
    {

        $jobs = JobData::with('category')->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {

  
        return view('admin.jobs.create', compact('jobs'));

    }
}
