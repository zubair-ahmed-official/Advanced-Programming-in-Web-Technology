<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function Form()
    {
        return view('Form.Form');
    }

    public function Submitted(Request $req)
    {
        $req->validate
        (
            [ 
               'Name' => 'required',
               'ID' => 'required',
               'CGPA' => 'required|min:0|max:4',
               'Gender' => 'required',
               'Hobbies' => 'required',
               'DateOfBirth' => 'required',
            ]
        );

        return view('Form.Submitted');
    }


}
