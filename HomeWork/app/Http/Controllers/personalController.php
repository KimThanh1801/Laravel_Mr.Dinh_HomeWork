<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalForm;
use Illuminate\Http\Request;

class personalController extends Controller
{
    public function index(){
        return view ('personalform');
    }
    public function display(PersonalForm $request){
        $personal = [
            'name'    => $request->input('name'),
            'age'     => $request->input('age'),
            'date'    => $request->input('date'),
            'phone'   => $request->input('phone'),
            'web'     => $request->input('web'),
            'address' => $request->input('address')
        ];
        return view ('personalform')->with('personal',$personal);
    }
}
