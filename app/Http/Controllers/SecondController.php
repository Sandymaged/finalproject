<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
use App\Models\Reserve;
use App\Models\Reserve2;
use App\Models\Reserve3;
use App\Models\Reserve4;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Session;


class SecondController extends Controller
{
    public function __construct()
    { }

    public function reserve()
    {

        return view('reserve');
    }
    public function gett(request $request)
    {

        $rules = [
            'tent' => 'required', 'phone' => 'required|min:11',
            'credit' => 'required|min:16', 'date' => 'required', 'nameuser' => 'required', 'gender' => 'required', 'time' => 'required',
        ];
        $message = [
            'tent.required' => 'it was required',
            'phone.required' => 'it was required',
            'credit.required' => 'it was required',
            'nameuser.required' => 'it was required',
            'gender.required' => 'it was required',
            'date.required' => 'it was required',
            'time.required' => 'it was required',
            'credit.min:16' => 'it should enter number with 16 number',
            'phone.min:11' => 'it should enter number with 11 number'
        ];




        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $x = Reserve::where('date', $request->date)->count();
        $x2 = Reserve2::where('date', $request->date)->count();
        $x3 = Reserve3::where('date', $request->date)->count();
        $x4 = Reserve4::where('date', $request->date)->count();
        if ($request->tent == 'tent1' && $x < 40) {
            Reserve::create([
                'nameuser' => $request->nameuser,
                'tent' => $request->tent,
                'phone' => $request->phone,
                'credit' => $request->credit,
                'date' => $request->date,
                'time' => $request->time,
                'numrandom' => rand(1, 1000000000),
                'result' => '.',
                'gender' => $request->gender

            ]);
            $a = Reserve::latest()->first();
            return view('ticket', compact('a'));
            //  return view('user-map');
        } elseif ($request->tent == 'tent2' && $x2 < 40) {
            Reserve2::create([
                'nameuser' => $request->nameuser,
                'tent' => $request->tent,
                'phone' => $request->phone,
                'credit' => $request->credit,
                'date' => $request->date,
                'time' => $request->time,
                'numrandom' => rand(1, 1000000000),
                'result' => '.',
                'gender' => $request->gender
            ]);
            $a = Reserve2::latest()->first();
            return view('ticket', compact('a'));
        } elseif ($request->tent == 'tent3' && $x3 < 40) {
            Reserve3::create([
                'nameuser' => $request->nameuser,
                'tent' => $request->tent,
                'phone' => $request->phone,
                'credit' => $request->credit,
                'date' => $request->date,
                'time' => $request->time,
                'numrandom' => rand(1, 1000000000),
                'result' => '.',
                'gender' => $request->gender

            ]);
            $a = Reserve3::latest()->first();
            return view('ticket', compact('a'));
        } elseif ($request->tent == 'tent4' && $x4 < 40) {
            Reserve4::create([
                'nameuser' => $request->nameuser,
                'tent' => $request->tent,
                'phone' => $request->phone,
                'credit' => $request->credit,
                'date' => $request->date,
                'time' => $request->time,
                'numrandom' => rand(1, 1000000000),
                'result' => '.',
                'gender' => $request->gender
            ]);
            $a = Reserve4::latest()->first();
            return view('ticket', compact('a'));
        } else {
            return redirect()->back()->with(['fail' => 'You should choose another date because this date was fall.']);
        }
    }


    public function show()
    {
        $clients = Reserve::all();
        return view('result', compact('clients'));
    }
    public function edit($id)
    {
        $client = Reserve::find($id);
        return view('edit', compact('client'));
    }
    public function update(request $request, $id)
    {
        $x = Reserve::find($id);
        $x->nameuser = $request->nameuser;
        $x->time = $request->time;
        $x->result = $request->result;
        /*if ($request->result == 'positive') {
                $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+201148752491',
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result positive corona and your result here "http://localhost:8000/profile"'
            ]);
            
        } else {

                 $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+201148752491',
                'from' => 'CoV EGY',
                'text' => ' your Result negative corona and your result here "http://localhost:8000/profile"'
            ]); 
          }

*/
        $x->save();
        return redirect()->route('show');
    }




    public function show2()
    {
        $clients = Reserve2::all();
        return view('result2', compact('clients'));
    }
    public function edit2($id2)
    {
        $client = Reserve2::find($id2);
        return view('edit2', compact('client'));
    }
    public function update2(request $request, $id2)
    {
        $x = Reserve2::find($id2);
        $x->nameuser = $request->nameuser;
        $x->time = $request->time;
        $x->result = $request->result;
        /* if ($request->result == 'positive') {
            $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result positive corona and your result here "http://localhost:8000/profile"'
            ]);
        }
          else{
               $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result negative corona and your result here "http://localhost:8000/profile"'
            ]);
          }
       
        */
        $x->save();
        return redirect()->route('show2');
    }


    public function show3()
    {
        $clients = Reserve3::all();
        return view('result3', compact('clients'));
    }
    public function edit3($id3)
    {
        $client = Reserve3::find($id3);
        return view('edit3', compact('client'));
    }
    public function update3(request $request, $id3)
    {
        $x = Reserve3::find($id3);
        $x->nameuser = $request->nameuser;
        $x->time = $request->time;
        $x->result = $request->result;
        /* if ($request->result == 'positive') {
            $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result positive corona and your result here "http://localhost:8000/profile"'
            ]);
        }
          else{
               $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result negative corona and your result here "http://localhost:8000/profile"'
            ]);
          }
       
        */
        $x->save();
        return redirect()->route('show3');
    }


    public function show4()
    {
        $clients = Reserve4::all();
        return view('result4', compact('clients'));
    }
    public function edit4($id4)
    {
        $client = Reserve4::find($id4);
        return view('edit4', compact('client'));
    }
    public function update4(request $request, $id4)
    {
        $x = Reserve4::find($id4);
        $x->nameuser = $request->nameuser;
        $x->time = $request->time;
        $x->result = $request->result;
        /* if ($request->result == 'positive') {
            $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result positive corona and your result here "http://localhost:8000/profile"'
            ]);
        }
          else{
               $basic  = new \Vonage\Client\Credentials\Basic("58e9ae9d", "DuFJjuHCvkAe87cp");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '+2'.$request->phone,
                'from' => 'CoV EGY',
                'text' => 'sorry but your Result negative corona and your result here "http://localhost:8000/profile"'
            ]);
          }
       
        */
        $x->save();
        return redirect()->route('show4');
    }

    public function set()
    {
        return view('profile');
    }
    public function getted(request $request)
    {
        if ($request->tent == 'tent1') {
            $users1 = Reserve::all();
            foreach ($users1 as $a) {
                if ($a->nameuser == $request->nameuser) {
                    $b = $a;
                    return view('profile2', compact('b'));
                }
            }
        } elseif ($request->tent == 'tent2') {
            $users2 = Reserve2::all();
            foreach ($users2 as $a) {
                if ($a->nameuser == $request->nameuser) {
                    $b = $a;
                    return view('profile2', compact('b'));
                }
            }
        } elseif ($request->tent == 'tent3') {
            $users2 = Reserve3::all();
            foreach ($users2 as $a) {
                if ($a->nameuser == $request->nameuser) {
                    $b = $a;
                    return view('profile2', compact('b'));
                }
            }
        } elseif ($request->tent == 'tent4') {
            $users2 = Reserve4::all();
            foreach ($users2 as $a) {
                if ($a->nameuser == $request->nameuser) {
                    $b = $a;
                    return view('profile2', compact('b'));
                }
            }
        }
    }
}
