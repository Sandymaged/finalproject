<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FristController extends Controller
{
    public function __construct()
    { }
    public function store(request $request)
    {
        $rules = [
            'ques1' => 'required', 'ques2' => 'required', 'ques3' => 'required', 'ques4' => 'required', 'ques5' => 'required', 'ques6' => 'required', 'ques7' => 'required',
            'ques8' => 'required', 'ques9' => 'required', 'ques10' => 'required', 'ques11' => 'required', 'ques12' => 'required', 'ques13' => 'required',  'ques14' => 'required', 'ques15' => 'required'
        ];

        $message = [
            'ques1.required' => 'it was required', 'ques2.required' => 'it was required', 'ques3.required' => 'it was required', 'ques4.required' => 'it was required', 'ques5.required' => 'it was required', 'ques6.required' => 'it was required', 'ques7.required' => 'it was required',
            'ques8.required' => 'it was required', 'ques9.required' => 'it was required', 'ques10.required' => 'it was required', 'ques11.required' => 'it was required', 'ques12.required' => 'it was required', 'ques13.required' => 'it was required',  'ques14.required' => 'it was required', 'ques15.required' => 'it was required'
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Question::create([
            'ques1' => $request->ques1,
            'ques2' => $request->ques2,
            'ques3' => $request->ques3,
            'ques4' => $request->ques4,
            'ques5' => $request->ques5,
            'ques6' => $request->ques6,
            'ques7' => $request->ques7,
            'ques8' => $request->ques8,
            'ques9' => $request->ques9,
            'ques10' => $request->ques10,
            'ques11' => $request->ques11,
            'ques12' => $request->ques12,
            'ques13' => $request->ques13,
            'ques14' => $request->ques14,
            'ques15' => $request->ques15,

        ]);
        $data = $request->all();

        if (($data['ques4'] == 'yes' && $data['ques5'] == 'yes' &&  $data['ques7'] == 'yes' && $data['ques13'] == 'yes' && $data['ques15'] == 'yes')
            || ($data['ques4'] == 'yes' && $data['ques5'] == 'yes' &&  $data['ques7'] == 'yes' && $data['ques13'] == 'yes') || ($data['ques11'] == 'yes' && $data['ques5'] == 'yes' &&  $data['ques15'] == 'yes') || ($data['ques5'] == 'yes' && $data['ques11'] == 'yes')
        ) {
            echo "<body style='background-color: white; '>
            <div style=' display: flex; margin-left:90px; margin-top:90px;'>
               <div style='width:500px;  height:500px; background-color:#a9a9a9; border-radius: 50px 15px;' >
                   <div style=' border:3px white solid ; border-radius: 15px 50px; width: 400px; height:400px; margin-left:60px;
                   margin-top:40px; '>
                   <p style='width:400px; margin-top:40px; margin-left:10px; font-size:30px;'>Warning!!!<br> this result is uncertain ,so you should resrve an appointment in tent to do PCR test   </p>
                   <div style='width:200px;  border-radius:40px 15px;height:60px; background-color:white; margin-left:90px; margin-top:50px;
                    '>
                      <h5 style='padding-top:20px; padding-left:40px;
                      font-size:15px'>You May Positive </h5>
                      <a href='http://localhost:8000/reserve'>
                      <button type='submit' style='margin-left: 50px; width:90px; height:30px; font-size:15px; margin-top:30px;'>Test</button>
                      </a>
                </div>
               </div>
               </div>
               <div >
                 <img  src='img/COVID-19-Egypt-log.svg.png ' style='width:700px; height:500px; margin-left:100px;
                 border-radius: 15px 50px; '>
            </div>
            </div>
            </body>
            ";
        } else {
            echo "<body style='background-color: white; '>
            <div style=' display: flex; margin-left:90px; margin-top:90px;'>
               <div style='width:500px;  height:500px; background-color:#a9a9a9; border-radius: 50px 15px;' >
                   <div style=' border:3px white solid ; border-radius: 15px 50px; width: 400px; height:400px; margin-left:60px;
                   margin-top:40px; '>
                   <p style='width:400px; margin-top:40px; margin-left:10px; font-size:30px;'>Warning!!!<br> this result is uncertain ,so you should resrve an appointment in tent to do PCR test   </p>
                   <div style='width:200px;  border-radius:40px 15px;height:60px; background-color:white; margin-left:90px; margin-top:50px;
                    '>
                      <h5 style='padding-top:20px; padding-left:40px;
                      font-size:15px'>You May Negative </h5>
                      <a href='http://localhost:8000/reserve'>
                      <button type='submit' style='margin-left: 50px; width:90px; height:30px; font-size:15px; margin-top:30px;'>Test</button>
                      </a>
                </div>
               </div>
               </div>
               <div >
                 <img  src='img/COVID-19-Egypt-log.svg.png ' style='width:700px; height:500px; margin-left:100px;
                 border-radius: 15px 50px; '>
            </div>
            </div>
            </body>
            ";
        }
    }
    public function create()
    {
        return view('question');
    }
}
