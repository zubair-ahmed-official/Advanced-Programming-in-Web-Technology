<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Models\Dept;

use App\Models\Medicine;

use App\Models\Disease;

use App\Models\Doctor;

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
        $st->save();
        
        return response()->json(["Message"=>"Data Editted Successfully"]);
        
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
        $dept->dname = $req->dname;
        
        //return response()->json($dept);
       
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
        $dept->id = $req->id;
        $dept->dname = $req->input('dname');
    
        $dept->save();
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

    public function addMed(Request $req)
    {
        $med = new Medicine();
        $med->name = $req->name;
        $med->disease = $req->disease;
        $med->details = $req->details;
        $med->price = $req->price;
       
        if($med->save())
        {
            return response()->json(["Message"=>"Data Stored Successfully"]);
        }
        return response()->json(["Message"=>"Data Storing Failed"]);
    }

    public function editMed(Request $req)
    {
        $med = new Medicine();
        $med->exists = true;
        $med->id = $req->id;
        $med->name = $req->name;
        $med->disease = $req->disease;
        $med->details = $req->details;
        $med->price = $req->price;
       
        if($med->save())
        {
            return response()->json(["Message"=>"Data Editted Successfully"]);
        }
        return response()->json(["Message"=>"Data Editting Failed"]);
    }

    public function deleteMed(Request $req)
    {
        $med = Medicine::where('id',$req->id)->delete();

        if($med)
        {
            return response()->json(["Message"=>"Data Deletted Successfully"]);
        }
        return response()->json(["Message"=>"Data Deleting Failed"]);

    }

    public function addDis(Request $req)
    {
        $dis = new Disease();
        $dis->name = $req->name;
        $dis->medicine = $req->medicine;
        $dis->details = $req->details;
       
        if($dis->save())
        {
            return response()->json(["Message"=>"Data Stored Successfully"]);
        }
        return response()->json(["Message"=>"Data Storing Failed"]);
    }
    public function editDis(Request $req)
    {
        $dis = new Disease();
        $dis->exists = true;
        $dis->id = $req->id;
        $dis->name = $req->name;
        $dis->medicine = $req->medicine;
        $dis->details = $req->details;
       
        if($dis->save())
        {
            return response()->json(["Message"=>"Data Editted Successfully"]);
        }
        return response()->json(["Message"=>"Data Editting Failed"]);
    }

    public function deleteDis(Request $req)
    {
        $dis = Disease::where('id',$req->id)->delete();

        if($dis)
        {
            return response()->json(["Message"=>"Data Deletted Successfully"]);
        }
        return response()->json(["Message"=>"Data Deleting Failed"]);
    }

    public function addDoc(Request $req)
    {
        $st = new Doctor();
        $st->name = $req->name;
        $st->phone = $req->phone;
        $st->email = $req->email;
        $st->department = $req->department;
        $st->bio = $req->bio;
        $st->joining_date = $req->joining_date;

        if($st->save())
        {
            return response()->json(["Message"=>"Data Stored Successfully"]);
        }
        return response()->json(["Message"=>"Data Storing Failed"]);
    }

    public function editDoc(Request $req)
    {
        $st = new Doctor();
        $st->exists = true;
        $st->id = $req->id;
        $st->name = $req->name;
        $st->phone = $req->phone;
        $st->email = $req->email;
        $st->department = $req->department;
        $st->bio = $req->bio;
        $st->joining_date = $req->joining_date;

       
        if($st->save())
        {
            return response()->json(["Message"=>"Data Editted Successfully"]);
        }
        return response()->json(["Message"=>"Data Editting Failed"]);
    }

    public function deleteDoc(Request $req)
    {
        $st = Doctor::where('id',$req->id)->delete();

        if($st)
        {
            return response()->json(["Message"=>"Data Deletted Successfully"]);
        }
        return response()->json(["Message"=>"Data Deleting Failed"]);
    }

}
