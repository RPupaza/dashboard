<?php

class NotificationController extends BaseController {



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

        $all_notifications = Notification::where('user','=',Auth::User()->id)
            ->orderBy('id', 'desc')
            ->get();
        $sidebar_adverts = DB::table('adverts')
            ->join('advertisers', 'advertisers.id', '=', 'adverts.advertiser')
            ->where('advertisers.id', '=', Auth::User()->advertiser)
            ->select('adverts.name')
            ->get();

        return View::make('notifications')
            ->with('user', $user_details)
            ->with('notifications', $notifications)
            ->with('count_notification',$count_notification)
            ->with('sidebar_adverts',$sidebar_adverts)
            ->with('all', $all_notifications);
    }

    public  function getNotification($id){

        $notification = Notification::where('user','=',Auth::User()->id)
            ->where('id', '=', $id)
            ->first();
        if($notification->read == 0){
            $notification->read = 1;
            $notification->save();
        }

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

        return View::make('notification')
            ->with('user', $user_details)
            ->with('notifications', $notifications)
            ->with('count_notification',$count_notification)
            ->with('sidebar_adverts',$sidebar_adverts)
            ->with('notification', $notification);
    }
}