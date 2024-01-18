<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = DB::select('SELECT first_name, last_name, department, faculty_id FROM faculties ORDER BY last_name LIMIT 25');

        $department = DB::select('SELECT department, COUNT(*) as total_faculty FROM faculties GROUP BY department');

        $promotions = DB::select('SELECT last_name, first_name, academe_points FROM faculties AS fa
        JOIN faculties_educ AS fe ON fe.faculty_id = fa.faculty_id
        WHERE academe_points >= 1200 ORDER BY last_name 
        LIMIT 5');

        return view('faculties', compact('faculties', 'department', 'promotions'));
    }
}