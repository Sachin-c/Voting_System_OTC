<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Staff;
use App\Student;
class home extends Controller
{
    public function check(){
        $user = Socialite::driver('google')->user();
        // echo($user->getEmail());
        $staff = staff::where('email', '=', $user->getEmail())->first();
        
        

        if(isset($staff)){
            $id= staff::where('email', '=', $user->getEmail())->first()->id;
            session(['id' => $id]);
            return redirect('staff');
        }
        $student= student::where('email', '=', $user->getEmail())->first();
        

        if(isset($student)){
            $id= student::where('email', '=', $user->getEmail())->first()->id;
            session(['id' => $id]);
            return redirect('student');
            
        }

        //    return  \Socialite::driver( 'google' )->user() ;
        // $providerKey = \Config::get('services.google');
    // return \Socialite::driver( 'google' )->scopes(['profile', 'email'])->redirect();
    }
}
