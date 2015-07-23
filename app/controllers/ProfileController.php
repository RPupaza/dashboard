<?php

class ProfileController extends BaseController {

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

    public function index()
    {
        $notifications = Notification::where('user','=',Auth::User()->id)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $count_notification = Notification::where('user','=',Auth::User()->id)
            ->where('read','=',0)
            ->count();

        $user_details = array(
            'surname' => Auth::User()->surname,
            'name'    => Auth::User()->name,
            'avatar'  => Auth::User()->avatar
        );
        $sidebar_adverts = DB::table('adverts')
            ->join('advertisers', 'advertisers.id', '=', 'adverts.advertiser')
            ->where('advertisers.id', '=', Auth::User()->advertiser)
            ->select('adverts.name')
            ->get();

        return View::make('profile')
            ->with('user', $user_details)
            ->with('notifications', $notifications)
            ->with('sidebar_adverts',$sidebar_adverts)
            ->with('count_notification',$count_notification);
    }

}