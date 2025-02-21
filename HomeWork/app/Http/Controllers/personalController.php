<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

class PersonalController extends Controller
{
    public function index()
    {
        $users = Session::get('users', []);
        return view('personalform')->with('users', $users);
    }

    public function display(PersonalForm $request)
    {
        $users = Session::get('users', []);

        $personal = [
            'name'    => $request->input('name'),
            'age'     => $request->input('age'),
            'date'    => $request->input('date'),
            'phone'   => $request->input('phone'),
            'web'     => $request->input('web'),
            'address' => $request->input('address')
        ];

        $users[] = $personal; // ✅ Đúng biến

        Session::put('users', $users);

        return view('personalform')->with('users', $users);
    }
    
}
