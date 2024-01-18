<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $email = "daibensanchez@123.com";
        // $faculties = DB::select("SELECT last_name, first_name, department, faculty_id FROM faculties ORDER BY last_name LIMIT 25");
        $faculties = Faculty::query()
            ->select('last_name', 'first_name', 'department', 'faculty_id')
            ->orderBy('last_name')
            ->limit(25)
            ->get();
        // $dept_faculties = DB::select("SELECT department, COUNT(faculty_id) as count_dept FROM faculties GROUP BY department");
        $dept_faculties = Faculty::query()
            ->select('department', DB::raw('COUNT(faculty_id) as count_dept'))
            ->groupBy('department')
            ->get();
        // $pts_faculties = DB::select("SELECT last_name, first_name, academe_points FROM faculties AS f JOIN faculties_educ AS fe ON f.faculty_id = fe.faculty_id WHERE academe_points >= 1200 ORDER BY last_name LIMIT 5");
        $pts_faculties = Faculty::query()
            ->select('last_name', 'first_name', 'academe_points')
            ->join('faculties_educ', 'faculties.faculty_id', "=", 'faculties_educ.faculty_id')
            ->where('academe_points', '>=', '1200')
            ->orderBy('last_name')
            ->limit(5)
            ->get();
        return view('faculties', compact('faculties', 'dept_faculties', 'pts_faculties', 'email'));
    }
}
