@extends('layouts.default')
@section('head-tag')

    <title>WiVert - Notification page</title>
@stop
@section('body-tag')
    @include('includes.sidebar')
    <!-- begin #content -->
    <div id="content" class="content content-full-width">
        <!-- begin vertical-box -->
        <div class="vertical-box">
            <!-- begin vertical-box-column -->

            <!-- end vertical-box-column -->
            <!-- begin vertical-box-column -->
            <div class="vertical-box-column bg-white">

                <!-- begin wrapper -->
                <div class="wrapper">
                    <a href="javascript:;" class="pull-left">
                        <img style="width:20px;" class="media-object rounded-corner" alt="" src="/assets/img/notifications/{{$notification->img}}" />
                    </a>
                    <h4 class="m-b-15 m-t-0 p-b-10 underline">Notification:   {{$notification->title}}  </span><span class="text-muted m-l-5"><i class="fa fa-clock-o fa-fw"></i> {{date('F d, Y', strtotime($notification->created_at))}}</span><br /></h4>

                    <p class="f-s-12 text-inverse">
                        {{$notification->message}}
                    </p>

                </div>
                <!-- end wrapper -->
            </div>
            <!-- end vertical-box-column -->
        </div>
        <!-- end vertical-box -->
    </div>
    <!-- end #content -->
@stop