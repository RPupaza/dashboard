<?php

class HomeController extends BaseController {

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
        $sidebar_adverts = DB::table('adverts')
            ->join('advertisers', 'advertisers.id', '=', 'adverts.advertiser')
            ->where('advertisers.id', '=', Auth::User()->advertiser)
            ->select('adverts.name')
            ->first();

		return Redirect::to('advert/'.$sidebar_adverts->name);

	}

    public function getAdvert($advert)
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
        // dd($adverts);


        /*MAIN BODY CONTENT*/
        $advert_id = DB::table('adverts')
            ->where('name', '=', $advert)
            ->select('id')
            ->first();


        $count_visits = DB::table('visits')
            ->where('advert', '=', $advert_id->id)
            ->sum('visits');

        $deals = DB::table('deals')
            ->where('advert', '=', $advert_id->id)
            ->get();


        $total_count_codes = 0;
        $sold_count_codes = 0;
        $remained_count_codes = 0;
        $total_profit = 0;
        $total_cooments = 0;
        $deals_details = array();
        $total_codes = 0;
        $sold_codes = 0;
        $remained_codes = 0;
        $ccomments = 0;

        if(count($deals) == 0){

        }

        foreach($deals as $key => $deal){

            $total_codes = DB::table('codes')
                ->where('deal', '=', $deal->id)
                ->get();

            $sold_codes = DB::table('codes')
                ->where('deal', '=', $deal->id)
                ->where('available', '=', 0)
                ->get();

            $remained_codes = DB::table('codes')
                ->where('deal', '=', $deal->id)
                ->where('available', '=', 1)
                ->get();

            $ccomments = DB::table('comments')
                ->where('deal', '=', $deal->id)
                ->get();

            $total_cooments = $total_cooments + count($ccomments);
            $total_profit = $total_profit + ($deal->price * count($sold_codes));
            $total_count_codes = $total_count_codes + count($total_codes);
            $sold_count_codes = $sold_count_codes + count($sold_codes);
            $remained_count_codes = $remained_count_codes + count($remained_codes);

        }
        $coupons_status = array(
            'total' => $total_count_codes,
            'sold' => $sold_count_codes,
            'remained' => $remained_count_codes,
            'profit' => $total_profit,
            'comments' => $total_cooments
        );



        $deals_details[] = array(
            'deals' => $deals,
            'comments' => $ccomments,
            'codes' => $total_codes,
        );


//dd($deals_details);

        return View::make('index')
            ->with('user', $user_details)
            ->with('notifications', $notifications)
            ->with('count_notification',$count_notification)
            ->with('visits', $count_visits)
            ->with('coupons_status', $coupons_status)
            ->with('deals_details', $deals_details)
            ->with('sidebar_adverts',$sidebar_adverts);
    }

}
