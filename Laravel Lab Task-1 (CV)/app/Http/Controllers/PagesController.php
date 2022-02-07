<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $name='Zubair Ahmed';
        $skills = ['Web Design','Graphic Design','Photography','Chess','Driving','Swimming'];
        return view('CV.index') -> with('n',$name) -> with('skills',$skills);
    }

    public function objective()
    {
        return view('CV.objective');
    }

    public function Personal()
    {
        return view('CV.Personal');
    }

    public function Form()
    {
        return view('Form.Form');
    }

    public function Submitted(Request $req)
    {
        $req->validate
        (
            [ 
               'Name' => 'required|regex:/^[A-Z a-z]$/',
               'ID' => 'required|regex:/^[0-9 -]$/',
               'CGPA' => 'required|min:0|max:4',
               'Gender' => 'required',
               'Hobbies' => 'required',
               'DateOfBirth' => 'required',
            ]
        );

        return view('Form.Submitted');
    }


    public function Education()
    {
        
        $edu1 = array('Institute'=>'St. Gregorys High School','Result'=>'A+','Year'=>'2016');
        $edu1 = (object)$edu1;
        $edu[] = $edu1;
        //return view('CV.Education')-> with('edu',$edu);

        $edu2 = array('Institute'=>'Dhaka Imperial College','Result'=>'A','Year'=>'2018');
        $edu2 = (object)$edu2;
        $educ[] = $edu2;
        return view('CV.Education')-> with('educ',$educ)-> with('edu',$edu);
    }

    public function Others(Request $req)
    {
        echo "Name = ".$req -> name;
        echo "<br> <br>";
        echo "ID = ".$req -> id;
    }

}
