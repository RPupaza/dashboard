<?php

class LoginController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function __construct()
    {

        $this->beforeFilter('csrf', array('on' => 'post'));

    }

    public function index()
    {
        if (Auth::user())
        {
            return Redirect::to('/');
        } else
        {
            return View::make('login');
        }
    }
    public function doLogin()
    {

        $input = Input::all();

        $attempt =  Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password']
        ]);

        if($attempt){
            return Redirect::to('/');
        } else {
            return Redirect::to('/login')->with('message', 'The Username and Password Combination was incorrect !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
