<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="/assets/img/avatars/{{$user['avatar']}}" alt="" /></a>
                    <a href="javascript:;"><img src="/assets/img/avatars/{{$user['avatar']}}" alt="" /></a>
                </div>
                <div class="info">
                    {{$user['name']}} {{$user['surname']}}
                    <small>Your dashboard</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub">
                <a href="{{ URL::to('/') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ URL::to('/') }}">
                    <span class="badge pull-right">10</span>
                    <i class="fa fa-envelope"></i>
                    <span>Messages</span>
                </a>

            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-align-left"></i>
                    <span>Adverts</span>
                </a>
                <ul class="sub-menu">
                    @foreach($sidebar_adverts as $advert)
                        <li><a href="{{ URL::to('/advert/'.$advert->name)}}">{{$advert->name}} <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="map_vector.html"><i class="fa fa-map-marker"></i> <span>Map</span></a></li>


            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->