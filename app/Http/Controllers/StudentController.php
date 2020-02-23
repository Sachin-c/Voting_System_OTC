<?php

namespace App\Http\Controllers;
use Socialite;
use Illuminate\Http\Request;
use App\Student;
use App\Classes;

class StudentController extends Controller
{
    public function show(){
        $id = session('id');
        $c=new Student;
        $s=new Classes;
        $student= $c->where('id',$id)->first();
        $classes=$s->where('name',$student->class)->first();
        return view("student")->with('id',$id)->with('student',$student)->with('classes',$classes);
    }
    public function standV(Request $request){
        $post=new Student;
        $id = session('id');
        // $post->where('id',$id)->=;
    }

    public function storeS(Request $request){
        $post=new Student;
        $post->email=$request->input('email');
        $post->role=6;
        $post->class=$request->input('class');
        $post->save();
        return redirect('/staff')->with('success','Student Added');
    }

}
