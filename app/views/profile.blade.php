@extends('layouts.default')
@section('head-tag')

    <title>WiVert - Profile page</title>
@stop
@section('body-tag')
    @include('includes.sidebar')

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{ URL::to('/') }}">Dashboard</a></li>
        <li class="active">Profile</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Profile <small>manage your bussiness !</small></h1>
    <!-- end page-header -->
    <!-- begin profile-container -->
    <div class="profile-container">
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin profile-left -->
            <div class="profile-left">
                <!-- begin profile-image -->
                <div class="profile-image">
                    <img src="assets/img/avatars/{{$user['avatar']}}" />
                    <i class="fa fa-user hide"></i>
                </div>
                <!-- end profile-image -->
                <div class="m-b-10">
                    <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>
                </div>
            </div>
            <!-- end profile-left -->
            <!-- begin profile-right -->
            <div class="profile-right">
                <!-- begin profile-info -->
                <div class="profile-info">
                    <!-- begin table -->
                    <div class="table-responsive">
                        <table class="table table-profile">
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <h4>{{$user['name']}} {{$user['surname']}}<small>Lorraine Stokes</small></h4>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td class="field">Password</td>
                                <td><a href="#">Change Password</a></td>
                            </tr>
                            <tr>
                                <td class="field">Name</td>
                                <td><a href="#">Change Name</a></td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end profile-info -->
            </div>
            <!-- end profile-right -->
        </div>
        <!-- end profile-section -->
        <!-- begin profile-section -->
    </div>
    <!-- end profile-container -->
</div>
<!-- end #content -->
@stop