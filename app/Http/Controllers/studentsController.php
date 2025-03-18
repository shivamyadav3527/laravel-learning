<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\VersionUpdater\Installer;
use App\Models\student;

use function Laravel\Prompts\table;

class studentsController extends Controller
{
    //
    function getStudents(){


        // $students= \App\Models\student::all();  //get through the model.
        

        //Getting the datas
        // $students = DB::table('students')->where('Batch','!=','4')->get();
        $students = DB::table('students')->get();
        return view('student', ['students' => $students]);



        //Inserting the data's
        // $insert = DB::table('students')->insert([
        //     'name' => 'mehta sahab',
        //     'email' => 'mehta@gmail.com',
        //     'batch' => 5
        // ]);
        // if($insert) {
        //     return "Data inserted successfully";
        // } else {
        //     return "Data insertion failed";
        // }

        
        //Updating the data's
        // $update = DB::table('students')->where('batch','4')->update(['name' => 'mahadev bhakt shivam']);

        // if($update) {
        //     return "Data updated successfully";
        // } else {
        //     return "Data updation failed";
        // }


        //Deleting the data's
        // $delete = DB::table('students')->where('batch','5')->delete();
        // if($delete) {
        //     return "Data deleted successfully";
        // } else {
        //     return "Data deletion failed";
        // }
    }

    public function registerStudent(Request $request) {
        $student = new student();
        $student->name= $request->studentName;
        $student->email= $request->studentEmail;
        $student->batch=$request->studentBatch;
        $student->save();
        if($student){
            return "Student Registered successfully";
        } else {
            return "Student Registeration failed !!";
        }

    }
}
