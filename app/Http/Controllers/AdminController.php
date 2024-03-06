<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function home_admin()
    {

        return view('admin.home');
    }
    public function quanlysv()
    {
        return view('admin.quanlysv');
    }
    public function quanlydt()
    {
        return view('admin.quanlydt');
    }
    public function quanlygv()
    {
        return view('admin.quanlygv');
    }
    public function thongtinad($ID)
    {
        $data = User::with('admin')->find($ID);
        return view('admin.thongtinad', ['data' => $data]);
    }
    public function doimatkhau($ID)
    {

        $data = User::with('accounts')->find($ID);
        return view('admin.doimatkhau_admin', ['data' => $data]);
    }

    public function add_student()
    {
        return view('admin.add_student');
    }
    public function add_hoidong()
    {
        return view('admin.add_hoidong');
    }
    public function add_lecturers()
    {
        return view('admin.add_lecturers');
    }
    public function pagesupdate_student()
    {
        return view('admin.updatet_students');
    }
}
