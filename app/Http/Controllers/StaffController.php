<?php

namespace App\Http\Controllers;
use Socialite;
use Illuminate\Http\Request;
use App\Staff;
use App\Classes;
class StaffController extends Controller
{
    public function show(){
        $id = session('id');
        $classes=Classes::all();
        return view("staff")->with('id',$id)->with('classes',$classes);
    }
    public function startV(Request $request){
        $c=new Classes;
        $class = $c->where('name',$request->class)->first();
        $class->vflag=1;
        $class->time=$request->deadline;
        $class->save();
        $classes=Classes::all();

        return view("staff")->with('success','Voting is on!! ')->with('classes',$classes);
    }
    public function storeT(Request $request){
        $post=new Staff;
        $post->email=$request->input('email');
        $post->role=2;
        $post->class=$request->input('class');
        $post->save();
        return redirect('/staff')->with('success','Class Teacher Added');
    }
    public function storeCC(Request $request){
        $post=new Staff;
        $post->email=$request->input('email');
        $post->role=3;
        $post->class=$request->input('class');
        $post->save();
        return redirect('/staff')->with('success','Class Counselor Added');
    }

}
