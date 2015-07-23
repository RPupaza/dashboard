@extends('layouts.default')
@section('head-tag')

    <title>WiVert - Notifications page</title>
@stop
@section('body-tag')
    @include('includes.sidebar')
    <!-- begin #content -->
    <div id="content" class="content content-full-width">
        <!-- begin vertical-box -->
        <div class="vertical-box">
            <!-- begin vertical-box-column -->
            <div class="vertical-box-column width-250">
                <!-- begin wrapper -->
                {{--<div class="wrapper bg-silver text-center">
                    <a href="email_compose.html" class="btn btn-success p-l-40 p-r-40 btn-sm">
                        Compose
                    </a>
                </div>--}}
                <!-- end wrapper -->
                <!-- begin wrapper -->
                <div class="wrapper">
                    <p><b>FOLDERS</b></p>
                    <ul class="nav nav-pills nav-stacked nav-sm">
                        <li class="active"><a href="email_inbox_v2.html"><i class="fa fa-inbox fa-fw m-r-5"></i> Unread <span class="badge pull-right">{{$count_notification}}</span></a></li>
                    </ul>
                </div>
                <!-- end wrapper -->
            </div>
            <!-- end vertical-box-column -->
            <!-- begin vertical-box-column -->
            <div class="vertical-box-column">
                <!-- begin wrapper -->

                <!-- end wrapper -->
                <!-- begin list-email -->
                <ul class="list-group list-group-lg no-radius list-email">
                    @foreach($all as $notif)
                        <li class="list-group-item
                         @if($notif['read'] == 0)
                                danger
                        @else
                                inverse
                         @endif">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="{{ URL::to('/notification/'.$notif['id'])}}" class="email-user">
                                <img src="assets/img/notifications/{{$notif['img']}}" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">{{date('F d, Y', strtotime($notif['created_at']))}}</span>
                                <h5 class="email-title">
                                    <a href="{{ URL::to('/notification/'.$notif['id'])}}"
                                            @if($notif['read'] == 0)
                                                class="bolded"
                                            @endif
                                            >{{$notif['title']}}</a>
                                    {{--<span class="label label-inverse f-s-10">admin</span>--}}
                                </h5>
                                <p class="email-desc">
                                    {{$notif['message']}}
                                </p>
                            </div>
                        </li>
                    @endforeach

                </ul>
                <!-- end list-email -->
                <!-- begin wrapper -->
                {{--<div class="wrapper bg-silver-lighter clearfix">
                    <div class="btn-group pull-right">
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="m-t-5">1,232 messages</div>
                </div>--}}
                <!-- end wrapper -->
            </div>
            <!-- end vertical-box-column -->
        </div>
        <!-- end vertical-box -->
    </div>
    <!-- end #content -->

@stop