<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Models\Dept;

class StudentsContoroller extends Controller
{
    //
    public function getPerson()
    {
        $st = Student::all();
        return response()->json($st);
    }
    public function getPersonDept(Request $req)
    {
        $dept = Dept::where('id',$req->id)->first();

        $details = [
            'id' => $dept->id,
            'Name' => $dept->dname,
            'Students' => $dept->students,
        ];
        return response()->json($details);
    }
    public function addPerson(Request $req)
    {
        $st = new Student();
        $st->name = $req->name;
        $st->email = $req->email;
        $st->phone = $req->phone;
        $st->did = $req->did;
        if($st->save())
        {
            return response()->json(["Message"=>"Data Stored Successfully"]);
        }
        return response()->json(["Message"=>"Data Storing Failed"]);
    }
    public function editPerson(Request $req)
    {
        $st = new Student();
        $st->exists = true;
        $st->name = $req->name;
        $st->email = $req->email;
        $st->phone = $req->phone;
        $st->did = $req->did;
        if($st->save())
        {
            return response()->json(["Message"=>"Data Editted Successfully"]);
        }
        return response()->json(["Message"=>"Data Editing Failed"]);
    }
    public function deletePerson(Request $req)
    {
        $st = Student::where('id',$req->id)->delete();

        if($st)
        {
            return response()->json(["Message"=>"Data Deletted Successfully"]);
        }
        return response()->json(["Message"=>"Data Deleting Failed"]);

    }

    public function addDept(Request $req)
    {
        $dept = new Dept();
        $dept->dname = $req->name;
       
        if($dept->save())
        {
            return response()->json(["Message"=>"Data Stored Successfully"]);
        }
        return response()->json(["Message"=>"Data Storing Failed"]);
    }
    public function editDept(Request $req)
    {
        $dept = new Dept();
        $dept->exists = true;
        $dept->dname = $req->name;
       
        if($dept->save())
        {
            return response()->json(["Message"=>"Data Editted Successfully"]);
        }
        return response()->json(["Message"=>"Data Editing Failed"]);
    }
    public function deleteDept(Request $req)
    {
        $dept = Dept::where('id',$req->id)->delete();

        if($dept)
        {
            return response()->json(["Message"=>"Data Deletted Successfully"]);
        }
        return response()->json(["Message"=>"Data Deleting Failed"]);

    }

}
