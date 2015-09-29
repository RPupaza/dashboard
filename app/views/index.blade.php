@extends('layouts.default')
@section('head-tag')

    <title>WiVert - Landing page</title>
@stop
@section('body-tag')
    @include('includes.sidebar')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Dashboard</a></li>
            <li class="active">Dashboard v2</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Dashboard <small>manage your bussiness !</small></h1>
       {{-- <div class="pace-activity1"></div>--}}
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-green">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                    <div class="stats-title"> VISITS</div>
                    <div class="stats-number">{{$visits}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 70.1%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
                    <div class="stats-title">TOTAL COUPONS</div>
                    <div class="stats-number">{{$coupons_status['total']}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 40.5%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
                    <div class="stats-title">ORDERED COUPONS</div>
                    <div class="stats-number">{{$coupons_status['sold']}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 40.5%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
                    <div class="stats-title">AVAILABLE COUPONS</div>
                    <div class="stats-number">{{$coupons_status['remained']}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 40.5%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-purple">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-shopping-cart fa-fw"></i></div>
                    <div class="stats-title">TOTAL PROFIT</div>
                    <div class="stats-number">{{$coupons_status['profit']}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 76.3%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-black">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
                    <div class="stats-title">COMMENTS</div>
                    <div class="stats-number">{{$coupons_status['comments']}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 54.9%;"></div>
                    </div>
                    <div class="stats-desc">See below for more information</div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->

        <!-- begin row -->
        <div class="row">
            <div class="col-md-8">
                <div class="widget-chart with-sidebar bg-black">
                    <div class="widget-chart-content">
                        <h4 class="chart-title">
                            Visitors Analytics
                            <small>Where do our visitors come from</small>
                        </h4>
                        <div id="visitors-line-chart" class="morris-inverse" style="height: 260px;"></div>
                    </div>
                    <div class="widget-chart-sidebar bg-black-darker">
                        <div class="chart-number">
                            1,225,729
                            <small>visitors</small>
                        </div>
                        <div id="visitors-donut-chart" style="height: 160px"></div>
                        <ul class="chart-legend">
                            <li><i class="fa fa-circle-o fa-fw text-success m-r-5"></i> 34.0% <span>New Visitors</span></li>
                            <li><i class="fa fa-circle-o fa-fw text-primary m-r-5"></i> 56.0% <span>Return Visitors</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-inverse" data-sortable-id="index-1">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Visitors Origin
                        </h4>
                    </div>
                    <div id="visitors-map" class="bg-black" style="height: 181px;"></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-success">20.95%</span>
                            1. United State
                        </a>
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-primary">16.12%</span>
                            2. India
                        </a>
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-inverse">14.99%</span>
                            3. South Korea
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-md-8">
                @foreach($deals_details[0]['deals'] as $k => $deal)
                    <div class="col-md-12">
                        <!-- begin panel -->
                        <div class="panel panel-inverse" data-sortable-id="ui-general-5">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">

                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                                <h4 class="panel-title">{{$deal->name}}</h4>
                            </div>
                            <div class="panel-body" style="display: none;">
                                <div class="row">
                                    <div class="col-md-8">
                                        <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Price</th>
                                                <th>status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($deals_details[0]['codes'] as $code)
                                                @if($code->deal == $deal->id)
                                                    <tr class="odd gradeX">
                                                        <td>{{$code->id}}</td>
                                                        <td>{{$deal->price}}</td>
                                                        @if($code->available == 0)
                                                            <td>Sold</td>
                                                        @else
                                                            <td>Available</td>
                                                        @endif
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="col-md-4">
                                        <div data-scrollbar="true" data-height="225px">
                                            <ul class="chats">
                                                @foreach($deals_details[0]['comments'] as $comm)
                                                    @if($comm->deal == $deal->id)
                                                    <li class="left">
                                                        <span class="date-time"> {{$comm->created_at}}</span>
                                                        <a href="javascript:;" class="name">{{$comm->name}}</a>
                                                        <div class="message">
                                                            {{$comm->text}}
                                                        </div>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- end panel -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-3">
                    <div class="panel-heading">
                        <h4 class="panel-title">Today's Schedule</h4>
                    </div>
                    <div id="schedule-calendar" class="bootstrap-calendar"></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item text-ellipsis">
                            <span class="badge badge-success">9:00 am</span> Sales Reporting
                        </a>
                        <a href="#" class="list-group-item text-ellipsis">
                            <span class="badge badge-primary">2:45 pm</span> Have a meeting with sales team
                        </a>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->

        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    <script>

        var handleVisitorsLineChart = function() {
var info =  @foreach($s_coupon_sold as $sold)
                {{$sold['updated_at']}}
                {x: '', y: 1},
                @endforeach
                ;
var green = '#0D888B';
            var greenLight = '#00ACAC';
            var blue = '#3273B1';
            var blueLight = '#348FE2';
            var blackTransparent = 'rgba(0,0,0,0.6)';
            var whiteTransparent = 'rgba(255,255,255,0.4)';

            Morris.Line({
                element: 'visitors-line-chart',
                data: [

                ],
                xkey: 'x',
                ykeys: 'y',
                xLabelFormat: function(x) {
                    x = getMonthName(x.getMonth());
                    return x.toString();
                },
                labels: ['Coupons Sold', 'Coupons Available'],
                lineColors: [green, blue],
                pointFillColors: [greenLight, blueLight],
                lineWidth: '2px',
                pointStrokeColors: [blackTransparent, blackTransparent],
                resize: true,
                gridTextFamily: 'Open Sans',
                gridTextColor: whiteTransparent,
                gridTextWeight: 'normal',
                gridTextSize: '11px',
                gridLineColor: 'rgba(0,0,0,0.5)',
                hideHover: 'auto',
            });
        };

        var handleVisitorsDonutChart = function() {
            var green = '#00acac';
            var blue = '#348fe2';
            Morris.Donut({
                element: 'visitors-donut-chart',
                data: [
                    {label: "New Visitors", value: 900},
                    {label: "Return Visitors", value: 1200}
                ],
                colors: [green, blue],
                labelFamily: 'Open Sans',
                labelColor: 'rgba(255,255,255,0.4)',
                labelTextSize: '12px',
                backgroundColor: '#242a30'
            });
        };
    </script>
@stop