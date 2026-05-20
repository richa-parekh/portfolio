<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         $projects = Project::latest()->take(3)->get();

        return view(
            'pages.home',
            compact('projects')
        );
    }
}
