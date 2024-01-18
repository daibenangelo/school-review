<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    public function index()
    {
        $faculties = DB::select(
            "SELECT first_name, last_name, department, faculty_id FROM faculties ORDER BY last_name LIMIT 25"
        );

        $facultyData = DB::select(
            "SELECT department, COUNT(*) AS total_faculty FROM faculties WHERE department NOT LIKE 0 GROUP BY department;"
        );

        $academe_points = DB::select(
            "SELECT f.first_name, f.last_name, fe.academe_points FROM faculties as f JOIN faculties_educ as fe ON f.faculty_id = fe.faculty_id WHERE fe.academe_points >= 1200 ORDER BY last_name LIMIT 5"
        );

        return view(
            "faculties",
            compact("faculties", "facultyData", "academe_points")
        );
    }
}
