<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ThirdController extends Controller
{
    public function __construct()
    { }


    public function news()
    {
        return view('news');
    }
    public function newsin(request $request)
    {
        $rules = [
            'userr' => 'required', 'gender' => 'required'
        ];
        $message = [
            'userr.required' => 'it was required',
            'gender.required' => 'it was required'
        ];



        Place::create([
            'userr' => $request->userr,
            'gender' => $request->gender,
            'place1' => $request->place1,
            'tov1' => $request->tov1,
            'dov1' => $request->dov1,
            'place2' => $request->place2,
            'tov2' => $request->tov2,
            'dov2' => $request->dov2,
            'place3' => $request->place3,
            'tov3' => $request->tov3,
            'dov3' => $request->dov3,
            'place4' => $request->place4,
            'tov4' => $request->tov4,
            'dov4' => $request->dov4,
            'place5' => $request->place5,
            'tov5' => $request->tov5,
            'dov5' => $request->dov5,
        ]);

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            return  view('index');
        }
    }
    public function placed()
    {
        $clients = Place::all();
        return view('places', compact('clients'));
    }
}
