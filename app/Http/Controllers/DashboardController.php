<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10)->fragment('#contact');
        return view('admin.dashboard',compact('contacts'));
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('admin/login');
    }
}
