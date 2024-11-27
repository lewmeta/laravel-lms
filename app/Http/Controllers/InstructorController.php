<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function IntructorDashboard()
    {
        return view('instructor.instructor_dashboard');
    }
}
