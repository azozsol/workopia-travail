<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = "Available Jobs";
        $jobs = [
            'Web Developer',
            'Databse Admin',
            'Software Engineer',
            'System Analyst',
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }
}
