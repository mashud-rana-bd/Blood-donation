@extends('Admin.master.master')


@section('content')
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
            <div class="statistic-box">
                <div class=small>Happy Customers </div>
                <h2><span class=count-number>85</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                <div class="progress-radial blue">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">95%</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
            <div class="statistic-box">
                <div class=small>Total page views</div>
                <h2><span class=count-number>321</span>M <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                <div class="progress-radial yellow">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">75%</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
            <div class="statistic-box">
                <div class=small>Total Sales</div>
                <h2><span class=count-number>5489</span>$ <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                <div class="progress-radial pink">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">60%</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 hidden-sm hidden-md col-lg-3">
            <div class="statistic-box">
                <div class=small>Visitors online</div>
                <h2><span class=count-number>696</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                <div class="progress-radial green">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">85%</div>
                </div>
            </div>
        </div>
@endsection
