<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $registrationCount = \App\Models\Admin\Registration::count();
        $contactCount = \App\Models\Contact::count();
        $newsCount = \App\Models\News::count();
        $userCount = \App\Models\User::count();
        return view('admin.dashboard', compact('registrationCount','contactCount','newsCount','userCount'));
    }
}
