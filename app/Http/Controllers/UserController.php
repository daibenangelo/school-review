<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Session;
use DB;

class UserController extends Controller
{
    public function viewUser(string $id)
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->get()
            ->first();
        $orders = Order::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('admin_show_user', compact('user', 'orders'));
    }

    public function uploadPhotoProfile(Request $request, string $id)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles'), $filename);

            $user = User::where('user_id', '=', $id)
                ->update([
                    'image' => $filename
                ]);

            return redirect('/profile')->with('success', 'Profile picture successfully updated!');
        }
    }

    public function adminRegister(Request $request)
    {
        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $password = strtolower(strrev($user->last_name) . "1234");
        $user->password = Hash::make($password);
        $user->role = "admin";
        $user->student_id = 0;
        $user->save();

        return redirect('/admin')->with('success', 'New account created!');
    }

    public function showAdminRegister()
    {
        return view('register_admin');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:students,email_address',
            'mobile_number' => 'required|min:11|max:11'
        ]);
        $student = new Student;
        $student->first_name = $request->input("first_name");
        $student->last_name = $request->input("last_name");
        $student->birthdate = $request->input("birthdate");
        $student->year_level = 1;
        $student->gender = $request->input("gender");
        $student->mobile_number = $request->input("mobile_number");
        $student->email_address = $request->input("email");
        $student->date_enrolled = $request->input("date_enrolled");
        $student->province = $request->input("province");
        $student->save();

        $user = new User;
        $user->first_name = $student->first_name;
        $user->last_name = $student->last_name;
        $user->email = $student->email_address;
        $password = strtolower(strrev($student->last_name) . '' . strval($student->student_id));
        $user->password = Hash::make($password);
        $user->role = "user";
        $user->student_id = $student->student_id;
        $user->save();

        return redirect("/admin/register")->with('success', 'Student added!');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showProfile()
    {
        if (Session::has('user_id')) {
            $s = Student::query()
                ->select('*')
                ->where("student_id", "=", Session::get("student_id"))
                ->get()
                ->first();
            $u = User::query()
                ->select('*')
                ->where("user_id", "=", Session::get("user_id"))
                ->get()
                ->first();
            return view('profile', compact('s', 'u'));
        } else {
            abort(401);
        }
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login')->with('success', 'You have been logged out!');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where("email", "=", $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                Session::put('student_id', $user->student_id);
                if (Session::get('role') == 'admin') {
                    return redirect('/admin')->with('success', 'Logged in as admin!');
                }
                return redirect('/profile')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
            } else {
                return redirect('/login')->with('fail', 'Incorrect password');
            }
        } else {
            return redirect('/login')->with('fail', 'An account with that email does not exist!');
        }
    }

    public function showAdminDashboard()
    {
        $options = [
            'chart_title' => 'Students by year level',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Student',
            'group_by_field' => 'year_level',
            'chart_type' => 'bar',
            'chart_color' => '0, 100, 255',
            'style_class' => 'chart'
        ];

        $chart = new LaravelChart($options);

        $options = [
            'chart_title' => 'Order status',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Order',
            'group_by_field' => 'status',
            'chart_type' => 'pie',
            'chart_color' => '0, 255, 255',
            'style_class' => 'chart'
        ];

        $chart1 = new LaravelChart($options);

        $options = [
            'chart_title' => 'Enrollment by date',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Student',
            'group_by_field' => 'date_enrolled',
            'chart_type' => 'line',
            'chart_color' => '0, 50, 255',
            'where_raw' => "date_enrolled BETWEEN '2020-12-01' AND '2020-12-31'",
            'style_class' => 'chart'
        ];

        $chart2 = new LaravelChart($options);

        return view('admin.admin_dashboard', compact('chart', 'chart1', 'chart2'));
    }
}
