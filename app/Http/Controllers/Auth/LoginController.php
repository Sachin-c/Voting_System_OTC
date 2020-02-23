<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Google;
use App\Users;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider(Google $google, Request $request)
{
    return Socialite::driver('google')->redirect();
    // $client = $google->client();
    
        // if ($request->has('code')) {
            
            // $client->authenticate($request->get('code'));
            // $token = $client->getAccessToken();
            
            // $plus = new \Google_Service_Plus($client);

            // $google_user = $plus->people->get('me');

            // $id = $google_user['id'];

            // $userEmail = $google_user['emails'][0]['value'];
            
            // $staff = users::where('email', '=', $userEmail)->first();
            
            // $student = Student::where('email_id','=', $userEmail)->first();

            // if(!isset($staff)){
            //     session(['e_id' => $staff->e_id]);
                // $role = Role::where('e_id', '=', $staff->e_id)->get();

                // $roles = array();
                // $types = array();

                // if($staff->type == 1){
                //     array_push($types, 1);
                // }
                // else{
                //     array_push($types, 2);
                // }
                
                // foreach($role as $r){
                //     array_push($roles, $r->roles_id);
                // }
                // session(['email' => $userEmail]);
                // session(['first_name' => $staff->first_name]);
                // session(['last_name' => $staff->last_name]);
                // session(['roles' => $roles]);
                // session(['types' => $types]);
                // header("Cache-Control", "no-cache, no-store, must-revalidate");
                // return redirect('/home')->with('success','Login Successfull !');
            // }
            // else if(isset($student)){
            //     session(['uid' => $student->uid]);
            //     session(['email' => $userEmail]);
            //     session(['first_name' => $student->first_name]);
            //     session(['last_name' => $student->last_name]);
            //     return redirect('/student')->with('success','Login Successfull !');
            // }
            // else{
                // return redirect('/')->with('error','Your record is not found ! Contact CMS Administrator.');
            // }
        // } else { 
            // $auth_url = $client->createAuthUrl();
            // return redirect($auth_url);
        // }
}
public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {
            return redirect('/');
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'ves.ac.in'){
            return redirect()->to('/');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/');
    }
}
