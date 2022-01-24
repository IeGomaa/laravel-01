<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $data = Student::get();
        return view('student',compact('data'));

    }

    public function addStudent () {
        return view('addStudent');
    }

    public function createStudent(Request $request) {

        $request->validate([
            'name' => 'required|min:3',
            'job' => 'required|min:3'
        ]);

        Student::create([
            'name' => $request->name,
            'job' => $request->job
        ]);

        session()->flash('done','student is created !');

        return redirect(route('all.student'));
    }

    public  function  delete(Request $request) {

        Student::where('id',$request->id)->first()->delete();

        session()->flash('done','student is deleted !');

        return redirect(route('all.student'));

    }

}
