@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="page page-dashboard">

                    <div class="pageheader">

                        <h2>Dashboard <span>// You can place subtitle here</span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                                </li>
                                <li>
                                    <a href="index.html">Dashboard</a>
                                </li>
                            </ul>

                            <div class="page-toolbar">
                                <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span>November 7, 2017 - December 6, 2017</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- cards row -->
                    <div class="row">

                        <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-greensea">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">3 659</p>
                                            <span>New Users</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-greensea">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-cog fa-2x"></i> Settings</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-lightred">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-shopping-cart fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">19 364</p>
                                            <span>New Orders</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-lightred">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-cog fa-2x"></i> Settings</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-blue">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-usd fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">165 984</p>
                                            <span>Sales</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-blue">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-cog fa-2x"></i> Settings</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-slategray">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-eye fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">29 651</p>
                                            <span>Visits</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-slategray">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-cog fa-2x"></i> Settings</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                    </div>
                    <!-- /row -->




                    <!-- row -->
                    <div class="row">



                        <!-- col -->
                        <div class="col-md-8">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header bg-greensea dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Statistics </strong>Graph</h1>
                                    <ul class="controls">
                                        <li>
                                            <a role="button" tabindex="0" class="pickDate">
                                                <span>November 7, 2017 - December 6, 2017</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget bg-greensea">
                                    <div id="statistics-chart" style="height: 250px; padding: 0px; position: relative;"><canvas class="flot-base" width="666" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 666px; height: 250px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 30px; text-align: center;">JAN</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 83px; text-align: center;">FEB</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 133px; text-align: center;">MAR</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 188px; text-align: center;">APR</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 239px; text-align: center;">MAY</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 294px; text-align: center;">JUN</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 348px; text-align: center;">JUL</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 398px; text-align: center;">AUG</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 453px; text-align: center;">SEP</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 504px; text-align: center;">OCT</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 556px; text-align: center;">NOV</div><div style="position: absolute; max-width: 55px; top: 236px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 610px; text-align: center;">DEC</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 210px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 14px; text-align: right;">0</div><div style="position: absolute; top: 157px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 7px; text-align: right;">50</div><div style="position: absolute; top: 105px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 1px; text-align: right;">100</div><div style="position: absolute; top: 53px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 1px; text-align: right;">150</div><div style="position: absolute; top: 1px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: Lato, Arial, sans-serif; color: rgb(255, 255, 255); left: 1px; text-align: right;">200</div></div></div><canvas class="flot-overlay" width="666" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 666px; height: 250px;"></canvas><div class="legend"><table style="position:absolute;top:0px;right:6px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(224,93,111);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(97,200,184);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div>
                                </div>
                                <!-- /tile widget -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <!-- row -->
                                    <div class="row">


                                        <!-- col -->
                                        <div class="col-md-8 col-sm-12">

                                            <h4 class="underline custom-font mb-20"><strong>Actual</strong> Statistics</h4>

                                            <!-- row -->
                                            <div class="row">
                                                <!-- col -->
                                                <div class="col-lg-4 text-center">
                                                    <div class="easypiechart" data-percent="100" data-size="140" data-bar-color="#418bca" data-scale-color="false" data-line-cap="round" data-line-width="4" style="width: 140px; height: 140px;">

                                                        <i class="fa fa-usd fa-4x text-blue" style="line-height: 140px;"></i>

                                                    <canvas height="140" width="140"></canvas></div>
                                                    <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-blue">6,175</strong> <small class="text-lg text-light text-default lt">Sales</small></p>
                                                    <p class="text-light"><i class="fa fa-caret-up text-success"></i> 18% this month</p>
                                                </div>
                                                <!-- /col
                                                <!-- col -->
                                                <div class="col-lg-4 text-center">
                                                    <div class="easypiechart" data-percent="75" data-size="140" data-bar-color="#e05d6f" data-scale-color="false" data-line-cap="round" data-line-width="4" style="width: 140px; height: 140px;">

                                                        <i class="fa fa-eye fa-4x text-lightred" style="line-height: 140px;"></i>
                                                        <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-lightred">8,213</strong> <small class="text-lg text-light text-default lt">Visits</small></p>
                                                        <p class="text-light"><i class="fa fa-caret-down text-warning"></i> 25% this month</p>
                                                    <canvas height="140" width="140"></canvas></div>
                                                </div>
                                                <!-- /col -->
                                                <!-- col -->
                                                <div class="col-lg-4 text-center">
                                                    <div class="easypiechart" data-percent="46" data-size="140" data-bar-color="#16a085" data-scale-color="false" data-line-cap="round" data-line-width="4" style="width: 140px; height: 140px;">

                                                        <i class="fa fa-user fa-4x text-greensea" style="line-height: 140px;"></i>
                                                        <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-greensea">632</strong> <small class="text-lg text-light text-default lt">Users</small></p>
                                                        <p class="text-light"><i class="fa fa-caret-down text-danger"></i> 61% this month</p>
                                                    <canvas height="140" width="140"></canvas></div>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->

                                        </div>
                                        <!-- /col -->



                                        <!-- col -->
                                        <div class="col-md-4 col-sm-12">

                                            <h4 class="underline custom-font"><strong>Visitors</strong> Statistics</h4>

                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title">America</div>
                                                    <div class="description">visitor from america</div>
                                                </div>
                                                <div class="status pull-right">
                                                    <span>40</span>%
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="progress-xs not-rounded progress">
                                                  <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40%</span>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title">Europe</div>
                                                    <div class="description">visitor from europe</div>
                                                </div>
                                                <div class="status pull-right">
                                                    <span>38</span>%
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="progress-xs not-rounded progress">
                                                  <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%">
                                                    <span class="sr-only">38%</span>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title">Asia</div>
                                                    <div class="description">visitor from asia</div>
                                                </div>
                                                <div class="status pull-right">
                                                    <span>12</span>%
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="progress-xs not-rounded progress">
                                                  <div class="progress-bar progress-bar-lightred" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                                                    <span class="sr-only">12%</span>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title">Africa</div>
                                                    <div class="description">visitor from africa</div>
                                                </div>
                                                <div class="status pull-right">
                                                    <span>7</span>%
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="progress-xs not-rounded progress">
                                                  <div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                                    <span class="sr-only">7%</span>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title">Other</div>
                                                    <div class="description">visitor from other</div>
                                                </div>
                                                <div class="status pull-right">
                                                    <span>6</span>%
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="progress-xs not-rounded progress">
                                                  <div class="progress-bar progress-bar-hotpink" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%">
                                                    <span class="sr-only">6%</span>
                                                  </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /col -->




                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->



                        <!-- col -->
                        <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile" fullscreen="isFullscreen02">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Browser </strong>Usage</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget">
                                    <div id="browser-usage" style="height: 250px"><svg height="250" version="1.1" width="303" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#00a3d8" d="M151.5,201.66666666666669A76.66666666666667,76.66666666666667,0,0,0,228.12571285773922,127.50557514776123" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#00a3d8" stroke="#ffffff" d="M151.5,204.66666666666669A79.66666666666667,79.66666666666667,0,0,0,231.12411031738986,127.60361939267362L266.4385692866088,128.75836272164184A115,115,0,0,1,151.5,240Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#2fbbe8" d="M228.12571285773922,127.50557514776123A76.66666666666667,76.66666666666667,0,0,0,178.50430527411916,53.24663579705856" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#2fbbe8" stroke="#ffffff" d="M231.12411031738986,127.60361939267362A79.66666666666667,79.66666666666667,0,0,0,179.56099548049775,50.43889545868258L190.24530756721444,22.049520926214456A110,110,0,0,1,261.44124018719106,128.59495564678787Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#72cae7" d="M178.50430527411916,53.24663579705856A76.66666666666667,76.66666666666667,0,0,0,108.9094071538928,61.251908430174154" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#72cae7" stroke="#ffffff" d="M179.56099548049775,50.43889545868258A79.66666666666667,79.66666666666667,0,0,0,107.24281873817557,58.757417890485314L90.39175809036794,33.53534687807597A110,110,0,0,1,190.24530756721444,22.049520926214456Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#d9544f" d="M108.9094071538928,61.251908430174154A76.66666666666667,76.66666666666667,0,0,0,89.19191290140762,80.32920350058663" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#d9544f" stroke="#ffffff" d="M107.24281873817557,58.757417890485314A79.66666666666667,79.66666666666667,0,0,0,86.75377036276704,78.58121581147914L62.10144024984571,60.90711806605907A110,110,0,0,1,90.39175809036794,33.53534687807597Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ffc100" d="M89.19191290140762,80.32920350058663A76.66666666666667,76.66666666666667,0,0,0,74.87350377395335,127.48150234685303" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ffc100" stroke="#ffffff" d="M86.75377036276704,78.58121581147914A79.66666666666667,79.66666666666667,0,0,0,71.87507566076022,127.57860461259945L41.55763584958525,128.56041641070217A110,110,0,0,1,62.10144024984571,60.90711806605907Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1693a5" d="M74.87350377395335,127.48150234685303A76.66666666666667,76.66666666666667,0,0,0,151.4759144567186,201.66666288331834" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#1693a5" stroke="#ffffff" d="M71.87507566076022,127.57860461259945A79.66666666666667,79.66666666666667,0,0,0,151.47497197893804,204.6666627352743L151.4654424813789,234.99999457171762A110,110,0,0,1,41.55763584958525,128.56041641070217Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="151.5" y="115" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.7424,0,0,1.7424,-112.4715,-93.5455)" stroke-width="0.5739130434782609"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Chrome</tspan></text><text x="151.5" y="135" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.5972,0,0,1.5972,-90.5352,-75.8472)" stroke-width="0.6260869565217391"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text></svg></div>
                                </div>
                                <!-- /tile widget -->

                                <!-- tile body -->
                                <div class="tile-body p-0">

                                    <div class="panel-group icon-plus" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> This Month</span>
                                                        <span class="badge pull-right bg-lightred">3</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Chrome</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Other</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Safari</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Firefox</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Internet Explorer</td>
                                                            <td>1854</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Opera</td>
                                                            <td>654</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> Last Month</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Chrome</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Other</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Safari</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Firefox</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Internet Explorer</td>
                                                            <td>1854</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Opera</td>
                                                            <td>654</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> This Year</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Chrome</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Other</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Safari</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Firefox</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Internet Explorer</td>
                                                            <td>1854</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Opera</td>
                                                            <td>654</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->


                    </div>
                    <!-- /row -->





                    <!-- row -->
                    <div class="row">


                        <!-- col -->
                        <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile tile-simple bg-lightred" style="min-height: 190px; overflow: hidden;">

                                <!-- tile header -->
                                <div class="tile-header">
                                    <h1 class="custom-font">Todos's</h1>
                                    <ul class="controls">
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div id="todo-carousel" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1818px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 303px;"><div>
                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Release update</span></div>
                                                    <div class="description text-transparent-white text-lowercase">high priority, started at: 12.08.2014</div>
                                                </div>
                                                <div class="clearfix" style="height: 45px"></div>
                                                <div class="progress transparent-black not-rounded mb-10">
                                                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                    50%
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-thumbs-o-up"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-caret-down"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px;"><i class="fa fa-ellipsis-h"></i></button>
                                            </div>
                                            <p class="text-thin">Deadline: <strong>12h 15m</strong></p>
                                        </div></div><div class="owl-item" style="width: 303px;"><div>
                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Fix navigation</span></div>
                                                    <div class="description text-transparent-white text-lowercase">normal priority, started at: 20.09.2014</div>
                                                </div>
                                                <div class="clearfix" style="height: 45px"></div>
                                                <div class="progress transparent-black not-rounded mb-10">
                                                  <div class="progress-bar" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width: 26%;">
                                                    26%
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-thumbs-o-up"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-caret-down"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px;"><i class="fa fa-ellipsis-h"></i></button>
                                            </div>
                                            <p class="text-thin">Deadline: <strong>2d 9h 45m</strong></p>
                                        </div></div><div class="owl-item" style="width: 303px;"><div>
                                            <div class="progress-list">
                                                <div class="details">
                                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Remove dependencies</span></div>
                                                    <div class="description text-transparent-white text-lowercase">high priority, started at: 26.10.2014</div>
                                                </div>
                                                <div class="clearfix" style="height: 45px"></div>
                                                <div class="progress transparent-black not-rounded mb-10">
                                                  <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                    78%
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-thumbs-o-up"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px;"><i class="fa fa-caret-down"></i></button>
                                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px;"><i class="fa fa-ellipsis-h"></i></button>
                                            </div>
                                            <p class="text-thin">Deadline: <strong>1h 5m</strong></p>
                                        </div></div></div></div>

                                        

                                        

                                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->


                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Realtime </strong>Load</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget mb-40">

                                    <div class="progress-list mt-20">
                                        <div class="details">
                                            <div class="title text-lg" style="line-height: 30px"><strong>125</strong> Users Online</div>
                                        </div>
                                        <div class="status pull-right bg-greensea">
                                            <span>41</span>%
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="progress not-rounded mb-10">
                                            <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                                        </div>
                                    </div>

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <h4 class="text-light">HDD 1 <i class="fa fa-caret-up text-success"></i></h4>
                                            <div class="progress progress-xs not-rounded mb-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                            </div>
                                            <small>Health: <span class="text-success">Good</span></small>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <h4 class="text-light">HDD 2 <i class="fa fa-caret-up text-success"></i></h4>
                                            <div class="progress progress-xs not-rounded mb-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                            </div>
                                            <small>Health: <span class="text-success">Good</span></small>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <h4 class="text-light">HDD 3 <i class="fa fa-caret-down text-danger"></i></h4>
                                            <div class="progress progress-xs not-rounded mb-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                            <small>Health: <span class="text-danger">Bad</span></small>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /tile widget -->

                                <!-- tile body -->
                                <div class="tile-body p-0" style="height: 133px">

                                    <div class="rickshaw rickshaw_graph" id="realtime-rickshaw"><svg width="333" height="133"><g><path d="M0,12.102513955433409Q5.889795918367348,23.958299189304903,6.795918367346939,23.77547685064266C8.155102040816326,23.5012433426493,12.232653061224491,8.921655206166466,13.591836734693878,9.360178875499798S19.02857142857143,27.019964354916215,20.387755102040817,28.160713543975987S25.824489795918367,21.33500441207172,27.183673469387756,20.76767076609751S32.6204081632653,22.397146537002744,33.97959183673469,22.487377084233913S39.416326530612245,20.757766062348278,40.775510204081634,21.66997623840919S46.21224489795918,30.79628282492481,47.57142857142857,31.609478844843053S53.00816326530612,30.29453944492728,54.36734693877551,29.801936437591635S59.804081632653066,26.2187273672327,61.163265306122454,26.683448771486596S66.6,35.271410658556896,67.95918367346938,34.4491504801306S73.39591836734694,19.924275253058127,74.75510204081633,18.460846987223647S80.19183673469388,20.142179108451003,81.55102040816327,19.81486782178581S86.98775510204082,14.616499644525872,88.34693877551021,15.187734120571733S93.78367346938775,25.61349458087706,95.14285714285714,25.527212582244417S100.57959183673469,15.343654889800755,101.93877551020408,14.324914134245304S107.37551020408164,14.938216383053918,108.73469387755102,15.339805026689916S114.17142857142856,18.304391741487187,115.53061224489795,18.340800570605282S120.96734693877552,14.925618748861083,122.32653061224491,15.703893317870879S127.76326530612245,25.199216092380553,129.12244897959184,26.123546260703236S134.5591836734694,26.726359628724598,135.91836734693877,24.947195001097697S141.35510204081635,9.008587308735327,142.71428571428572,8.331899984434216S148.15102040816328,16.98514666102126,149.51020408163265,18.180321758086578S154.94693877551023,20.61028492036283,156.3061224489796,20.283650955087367S161.74285714285716,15.827313166699508,163.10204081632654,14.91398210533194S168.5387755102041,12.083794310844238,169.89795918367346,11.150340341411692S175.33469387755102,6.5627932768308055,176.69387755102042,5.579442411006468S182.130612244898,1.2519641143303233,183.48979591836738,1.3168316831683171S188.9265306122449,4.706358688718019,190.28571428571428,6.228118099386407S195.72244897959186,15.37502741334502,197.08163265306123,16.534425789852193S202.5183673469388,17.091147861237182,203.87755102040816,17.822101864458148S209.31428571428575,23.755580695886515,210.67346938775512,23.84396582206186S216.11020408163267,18.68858200809816,217.46938775510205,18.705953126211597S222.9061224489796,24.687787123053816,224.26530612244898,24.017677003196255S229.70204081632653,12.289441176605886,231.0612244897959,12.004851927635983S236.49795918367346,21.82040425511296,237.85714285714286,21.17178451349723S243.29387755102044,5.557673268053985,244.65306122448982,5.518654511478701S250.08979591836737,20.603241927688615,251.44897959183675,20.78159694774439S256.8857142857143,8.28493653479296,258.2448979591837,7.302204712036456S263.68163265306123,10.644890668263843,265.0408163265306,10.954278720179346S270.47755102040816,9.992949924968592,271.83673469387753,10.396085231191492S277.27346938775514,14.195595514024632,278.6326530612245,14.985631782408348S284.06938775510207,19.148930876225222,285.42857142857144,18.29644791502865S290.865306122449,7.017429005595105,292.2244897959184,6.4608021704426335S297.6612244897959,10.801790212428525,299.0204081632653,12.730179563503938S304.45714285714286,25.891684478568862,305.81632653061223,25.744695681196774S311.25306122448984,12.095869170717279,312.6122448979592,11.260291589783051S318.04897959183677,18.150591581956547,319.40816326530614,17.388919871854498S324.8448979591837,4.196618390225353,326.2040816326531,3.6435744887625674Q327.1102040816327,3.2748785544540437,333,11.858480857226638L333,68.89066689436082Q327.1102040816327,65.4660553661185,326.2040816326531,65.6297554109819C324.8448979591837,65.875305478277,320.7673469387755,70.65270217039132,319.40816326530614,71.34616756731182S313.9714285714286,72.1305580978395,312.6122448979592,72.56440938018699S307.1755102040816,75.53364684694156,305.81632653061223,75.68468039078672S300.3795918367347,75.00127285743383,299.0204081632653,74.07474481863864S293.58367346938775,66.80434447095311,292.2244897959184,66.41940000283472S286.7877551020408,69.24276157292108,285.42857142857144,70.22530013745475S279.9918367346939,76.17688730500771,278.6326530612245,76.24478564817144S273.1959183673469,71.26658027960829,271.83673469387753,70.9042835690921S266.4,72.66970089185497,265.0408163265306,72.62181854300952S259.60408163265305,70.02748440055245,258.2448979591837,70.42546008063763S252.80816326530612,77.08196252774755,251.44897959183675,76.6015753438613S246.0122448979592,65.97429524243857,244.65306122448982,65.62158824177519S239.21632653061226,72.21610115262108,237.85714285714286,73.07450533722736S232.42040816326528,73.67616826279423,231.0612244897959,74.2056300878381S225.62448979591835,78.2972295206532,224.26530612244898,78.369123587666S218.82857142857142,75.44765357230142,217.46938775510205,74.92457075796597S212.0326530612245,73.07188171953689,210.67346938775512,73.1382954443114S205.23673469387754,75.84255008105208,203.87755102040816,75.58870800571097S198.4408163265306,71.26200782721261,197.08163265306123,70.59987469090028S191.64489795918365,69.48665648640977,190.28571428571428,68.96737664258757S184.84897959183675,65.40213069502904,183.48979591836738,65.4070762526783S178.05306122448982,68.60453080962176,176.69387755102042,69.01683221908004S171.25714285714284,68.80450428120929,169.89795918367346,69.53009034726107S164.4612244897959,75.5972391951222,163.10204081632654,76.27269287959774S157.66530612244898,76.28409135760829,156.3061224489796,76.28462719201653S150.86938775510203,77.3277340885415,149.51020408163265,76.27805122368014S144.0734693877551,65.41156910024156,142.71428571428572,65.78779854340289S137.27755102040814,78.77030540281004,135.91836734693877,80.04034565529342S130.4816326530612,79.5169101109375,129.12244897959184,78.4882010682367S123.6857142857143,69.6540644387141,122.32653061224491,69.7532552282855S116.88979591836734,79.64768753039601,115.53061224489795,79.4801089639507S110.09387755102041,68.49153952067742,108.73469387755102,68.07746956383234S103.29795918367347,74.0239084403432,101.93877551020408,75.33940939549991S96.50204081632653,81.22002565347589,95.14285714285714,81.23247911539946S89.7061224489796,75.74581803947584,88.34693877551021,75.46394401473562S82.91020408163266,78.61164957127579,81.55102040816327,78.41373886799727S76.11428571428571,73.03136841816513,74.75510204081633,73.48483698195038S69.31836734693877,82.86937018967197,67.95918367346938,82.94842450584973S62.52244897959184,74.95684146671395,61.163265306122454,74.275380143728S55.7265306122449,75.23829407783438,54.36734693877551,76.13381127599021S48.93061224489796,83.26402037086395,47.57142857142857,83.23055212528632S42.13469387755102,76.0165696299582,40.775510204081634,75.79912882021401S35.33877551020408,81.09366345184395,33.97959183673469,81.0561440278444S28.542857142857144,75.62429365947388,27.183673469387756,75.42393458021846S21.746938775510205,79.47050549776748,20.387755102040817,79.05255323529025S14.951020408163265,71.60839293867349,13.591836734693878,71.24441195544614S8.155102040816326,75.77088447348511,6.795918367346939,75.41274340301676Q5.889795918367348,75.17398268937119,0,67.6630012507626Z" class="area" fill="lightblue"></path></g><g><path d="M0,67.6630012507626Q5.889795918367348,75.17398268937119,6.795918367346939,75.41274340301676C8.155102040816326,75.77088447348511,12.232653061224491,70.88043097221879,13.591836734693878,71.24441195544614S19.02857142857143,78.63460097281302,20.387755102040817,79.05255323529025S25.824489795918367,75.22357550096304,27.183673469387756,75.42393458021846S32.6204081632653,81.01862460384484,33.97959183673469,81.0561440278444S39.416326530612245,75.58168801046982,40.775510204081634,75.79912882021401S46.21224489795918,83.1970838797087,47.57142857142857,83.23055212528632S53.00816326530612,77.02932847414604,54.36734693877551,76.13381127599021S59.804081632653066,73.59391882074205,61.163265306122454,74.275380143728S66.6,83.02747882202749,67.95918367346938,82.94842450584973S73.39591836734694,73.93830554573563,74.75510204081633,73.48483698195038S80.19183673469388,78.21582816471874,81.55102040816327,78.41373886799727S86.98775510204082,75.1820699899954,88.34693877551021,75.46394401473562S93.78367346938775,81.24493257732303,95.14285714285714,81.23247911539946S100.57959183673469,76.65491035065662,101.93877551020408,75.33940939549991S107.37551020408164,67.66339960698726,108.73469387755102,68.07746956383234S114.17142857142856,79.31253039750538,115.53061224489795,79.4801089639507S120.96734693877552,69.85244601785689,122.32653061224491,69.7532552282855S127.76326530612245,77.45949202553591,129.12244897959184,78.4882010682367S134.5591836734694,81.3103859077768,135.91836734693877,80.04034565529342S141.35510204081635,66.16402798656421,142.71428571428572,65.78779854340289S148.15102040816328,75.22836835881877,149.51020408163265,76.27805122368014S154.94693877551023,76.28516302642477,156.3061224489796,76.28462719201653S161.74285714285716,76.94814656407328,163.10204081632654,76.27269287959774S168.5387755102041,70.25567641331284,169.89795918367346,69.53009034726107S175.33469387755102,69.42913362853832,176.69387755102042,69.01683221908004S182.130612244898,65.41202181032754,183.48979591836738,65.4070762526783S188.9265306122449,68.44809679876536,190.28571428571428,68.96737664258757S195.72244897959186,69.93774155458794,197.08163265306123,70.59987469090028S202.5183673469388,75.33486593036986,203.87755102040816,75.58870800571097S209.31428571428575,73.2047091690859,210.67346938775512,73.1382954443114S216.11020408163267,74.40148794363051,217.46938775510205,74.92457075796597S222.9061224489796,78.44101765467879,224.26530612244898,78.369123587666S229.70204081632653,74.73509191288197,231.0612244897959,74.2056300878381S236.49795918367346,73.93290952183365,237.85714285714286,73.07450533722736S243.29387755102044,65.2688812411118,244.65306122448982,65.62158824177519S250.08979591836737,76.12118815997505,251.44897959183675,76.6015753438613S256.8857142857143,70.82343576072282,258.2448979591837,70.42546008063763S263.68163265306123,72.57393619416408,265.0408163265306,72.62181854300952S270.47755102040816,70.54198685857591,271.83673469387753,70.9042835690921S277.27346938775514,76.31268399133518,278.6326530612245,76.24478564817144S284.06938775510207,71.20783870198842,285.42857142857144,70.22530013745475S290.865306122449,66.03445553471633,292.2244897959184,66.41940000283472S297.6612244897959,73.14821677984344,299.0204081632653,74.07474481863864S304.45714285714286,75.83571393463188,305.81632653061223,75.68468039078672S311.25306122448984,72.99826066253448,312.6122448979592,72.56440938018699S318.04897959183677,72.03963296423233,319.40816326530614,71.34616756731182S324.8448979591837,65.875305478277,326.2040816326531,65.6297554109819Q327.1102040816327,65.4660553661185,333,68.89066689436082L333,133Q327.1102040816327,133,326.2040816326531,133C324.8448979591837,133,320.7673469387755,133,319.40816326530614,133S313.9714285714286,133,312.6122448979592,133S307.1755102040816,133,305.81632653061223,133S300.3795918367347,133,299.0204081632653,133S293.58367346938775,133,292.2244897959184,133S286.7877551020408,133,285.42857142857144,133S279.9918367346939,133,278.6326530612245,133S273.1959183673469,133,271.83673469387753,133S266.4,133,265.0408163265306,133S259.60408163265305,133,258.2448979591837,133S252.80816326530612,133,251.44897959183675,133S246.0122448979592,133,244.65306122448982,133S239.21632653061226,133,237.85714285714286,133S232.42040816326528,133,231.0612244897959,133S225.62448979591835,133,224.26530612244898,133S218.82857142857142,133,217.46938775510205,133S212.0326530612245,133,210.67346938775512,133S205.23673469387754,133,203.87755102040816,133S198.4408163265306,133,197.08163265306123,133S191.64489795918365,133,190.28571428571428,133S184.84897959183675,133,183.48979591836738,133S178.05306122448982,133,176.69387755102042,133S171.25714285714284,133,169.89795918367346,133S164.4612244897959,133,163.10204081632654,133S157.66530612244898,133,156.3061224489796,133S150.86938775510203,133,149.51020408163265,133S144.0734693877551,133,142.71428571428572,133S137.27755102040814,133,135.91836734693877,133S130.4816326530612,133,129.12244897959184,133S123.6857142857143,133,122.32653061224491,133S116.88979591836734,133,115.53061224489795,133S110.09387755102041,133,108.73469387755102,133S103.29795918367347,133,101.93877551020408,133S96.50204081632653,133,95.14285714285714,133S89.7061224489796,133,88.34693877551021,133S82.91020408163266,133,81.55102040816327,133S76.11428571428571,133,74.75510204081633,133S69.31836734693877,133,67.95918367346938,133S62.52244897959184,133,61.163265306122454,133S55.7265306122449,133,54.36734693877551,133S48.93061224489796,133,47.57142857142857,133S42.13469387755102,133,40.775510204081634,133S35.33877551020408,133,33.97959183673469,133S28.542857142857144,133,27.183673469387756,133S21.746938775510205,133,20.387755102040817,133S14.951020408163265,133,13.591836734693878,133S8.155102040816326,133,6.795918367346939,133Q5.889795918367348,133,0,133Z" class="area" fill="steelblue"></path></g></svg><div class="detail"></div></div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->


                        </div>
                        <!-- /col -->



                        <!-- col -->
                        <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile tile-simple bg-blue" style="min-height: 190px; overflow: hidden;">

                                <!-- tile header -->
                                <div class="tile-header">
                                    <h1 class="custom-font"><strong>Social</strong> Feed</h1>
                                    <ul class="controls">
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div id="feed-carousel" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1818px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 303px;"><div class="media social-feed">
                                            <span class="pull-left">
                                                <i class="fa fa-facebook fa-2x icon-border wh45 text-center" style="line-height: 45px"></i>
                                            </span>

                                            <div class="media-body">
                                                <p class="media-heading"><strong>Imrich Kamarel</strong> <small class="text-light text-transparent-white">18 minutes ago</small></p>
                                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 303px;"><div class="media social-feed">
                                            <span class="pull-left">
                                                <i class="fa fa-twitter fa-2x icon-border wh45 text-center" style="line-height: 45px"></i>
                                            </span>

                                            <div class="media-body">
                                                <p class="media-heading"><strong>George Schwarz</strong> <small class="text-light text-transparent-white">1 hour ago</small></p>
                                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 303px;"><div class="media social-feed">
                                            <span class="pull-left">
                                                <i class="fa fa-google-plus fa-2x icon-border wh45 text-center" style="line-height: 45px"></i>
                                            </span>

                                            <div class="media-body">
                                                <p class="media-heading"><strong>Milan Klement</strong> <small class="text-light text-transparent-white">56 minutes ago</small></p>
                                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                                            </div>
                                        </div></div></div></div>

                                        

                                        

                                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->



                            <!-- tile -->
                            <section class="tile widget-todo" fullscreen="isFullscreen04" ng-controller="TodoWidgetCtrl">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Todo </strong>List</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body lined-paper">

                                    <form class="form-horizontal" role="form">
                                        <label for="todo" class="text-strong mb-0">Add Todo: </label>
                                        <div class="form-group mb-0">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control input-unstyled" id="todo" placeholder="type todo here..." required="">
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="submit" class="btn btn-link"><i class="fa fa-chevron-right text-lg"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="todo-list list-unstyled">
                                        <li>
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                                <span>Release Update</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                                <span>Make a backup</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="completed">
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox" checked=""><i></i>
                                                </label>
                                                <span>Send e-mail to Ici</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                                <span>Buy tickets</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                                <span>Resolve Issues</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="view">
                                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                                <span>Compile new version</span>
                                                <a role="button" tabindex="0" class="text-danger remove-todo pull-right">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->



                        </div>
                        <!-- /col -->


                        <!-- col -->
                        <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile tile-simple" style="min-height: 190px; overflow: hidden;">

                                <!-- tile header -->
                                <div class="tile-header p-0">
                                    <ul class="controls">
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body lined-paper">
                                    <div id="notes-carousel" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1458px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 243px;"><div>
                                            <h4 class="mt-5 mb-5">This is my note #1</h4>
                                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                                        </div></div><div class="owl-item" style="width: 243px;"><div>
                                            <h4 class="mt-5 mb-5">This is my note #2</h4>
                                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                                        </div></div><div class="owl-item" style="width: 243px;"><div>
                                            <h4 class="mt-5 mb-5">This is my note #3</h4>
                                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                                        </div></div></div></div>

                                        

                                        

                                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->



                            <!-- tile -->
                            <section class="tile bg-slategray widget-calendar">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Mini </strong>Calendar</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body p-0">
                                    <div id="mini-calendar"><div class="bootstrap-datetimepicker-widget" style="display: block;"><ul class="list-unstyled"><li class="collapse in"><div class="datepicker"><div class="datepicker-days" style="display: block;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="glyphicon glyphicon-chevron-left"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">December 2017</th><th class="next" data-action="next"><span class="glyphicon glyphicon-chevron-right"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" class="day old weekend">26</td><td data-action="selectDay" class="day old">27</td><td data-action="selectDay" class="day old">28</td><td data-action="selectDay" class="day old">29</td><td data-action="selectDay" class="day old">30</td><td data-action="selectDay" class="day">1</td><td data-action="selectDay" class="day weekend">2</td></tr><tr><td data-action="selectDay" class="day weekend">3</td><td data-action="selectDay" class="day">4</td><td data-action="selectDay" class="day">5</td><td data-action="selectDay" class="day active today">6</td><td data-action="selectDay" class="day">7</td><td data-action="selectDay" class="day">8</td><td data-action="selectDay" class="day weekend">9</td></tr><tr><td data-action="selectDay" class="day weekend">10</td><td data-action="selectDay" class="day">11</td><td data-action="selectDay" class="day">12</td><td data-action="selectDay" class="day">13</td><td data-action="selectDay" class="day">14</td><td data-action="selectDay" class="day">15</td><td data-action="selectDay" class="day weekend">16</td></tr><tr><td data-action="selectDay" class="day weekend">17</td><td data-action="selectDay" class="day">18</td><td data-action="selectDay" class="day">19</td><td data-action="selectDay" class="day">20</td><td data-action="selectDay" class="day">21</td><td data-action="selectDay" class="day">22</td><td data-action="selectDay" class="day weekend">23</td></tr><tr><td data-action="selectDay" class="day weekend">24</td><td data-action="selectDay" class="day">25</td><td data-action="selectDay" class="day">26</td><td data-action="selectDay" class="day">27</td><td data-action="selectDay" class="day">28</td><td data-action="selectDay" class="day">29</td><td data-action="selectDay" class="day weekend">30</td></tr><tr><td data-action="selectDay" class="day weekend">31</td><td data-action="selectDay" class="day new">1</td><td data-action="selectDay" class="day new">2</td><td data-action="selectDay" class="day new">3</td><td data-action="selectDay" class="day new">4</td><td data-action="selectDay" class="day new">5</td><td data-action="selectDay" class="day new weekend">6</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="glyphicon glyphicon-chevron-left"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2017</th><th class="next" data-action="next"><span class="glyphicon glyphicon-chevron-right"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month active">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="glyphicon glyphicon-chevron-left"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2012-2023</th><th class="next" data-action="next"><span class="glyphicon glyphicon-chevron-right"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year">2012</span><span data-action="selectYear" class="year">2013</span><span data-action="selectYear" class="year">2014</span><span data-action="selectYear" class="year">2015</span><span data-action="selectYear" class="year">2016</span><span data-action="selectYear" class="year active">2017</span><span data-action="selectYear" class="year">2018</span><span data-action="selectYear" class="year">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"><table class="table-condensed"><tbody><tr><td><a data-action="togglePicker"><span class="glyphicon glyphicon-time"></span></a></td></tr></tbody></table></li><li class="collapse"><div class="timepicker"><div class="timepicker-picker"><table class="table-condensed"><tbody><tr><td><a href="#" tabindex="-1" class="btn" data-action="incrementHours"><span class="glyphicon glyphicon-chevron-up"></span></a></td><td class="separator"></td><td><a href="#" tabindex="-1" class="btn" data-action="incrementMinutes"><span class="glyphicon glyphicon-chevron-up"></span></a></td><td class="separator"></td></tr><tr><td><span class="timepicker-hour" data-time-component="hours" data-action="showHours">09</span></td><td class="separator">:</td><td><span class="timepicker-minute" data-time-component="minutes" data-action="showMinutes">36</span></td><td><button class="btn btn-primary" data-action="togglePeriod">PM</button></td></tr><tr><td><a href="#" tabindex="-1" class="btn" data-action="decrementHours"><span class="glyphicon glyphicon-chevron-down"></span></a></td><td class="separator"></td><td><a href="#" tabindex="-1" class="btn" data-action="decrementMinutes"><span class="glyphicon glyphicon-chevron-down"></span></a></td><td class="separator"></td></tr></tbody></table></div><div class="timepicker-hours" style="display: none;"><table class="table-condensed"><tbody><tr><td data-action="selectHour" class="hour">12</td><td data-action="selectHour" class="hour">01</td><td data-action="selectHour" class="hour">02</td><td data-action="selectHour" class="hour">03</td></tr><tr><td data-action="selectHour" class="hour">04</td><td data-action="selectHour" class="hour">05</td><td data-action="selectHour" class="hour">06</td><td data-action="selectHour" class="hour">07</td></tr><tr><td data-action="selectHour" class="hour">08</td><td data-action="selectHour" class="hour">09</td><td data-action="selectHour" class="hour">10</td><td data-action="selectHour" class="hour">11</td></tr></tbody></table></div><div class="timepicker-minutes" style="display: none;"><table class="table-condensed"><tbody><tr><td data-action="selectMinute" class="minute">00</td><td data-action="selectMinute" class="minute">05</td><td data-action="selectMinute" class="minute">10</td><td data-action="selectMinute" class="minute">15</td></tr><tr><td data-action="selectMinute" class="minute">20</td><td data-action="selectMinute" class="minute">25</td><td data-action="selectMinute" class="minute">30</td><td data-action="selectMinute" class="minute">35</td></tr><tr><td data-action="selectMinute" class="minute">40</td><td data-action="selectMinute" class="minute">45</td><td data-action="selectMinute" class="minute">50</td><td data-action="selectMinute" class="minute">55</td></tr></tbody></table></div></div></li></ul></div></div>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->



                        </div>
                        <!-- /col -->


                    </div>
                    <!-- /row -->





                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-8">
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Project </strong>Progress</h1>
                                    <ul class="controls">
                                        <li>
                                            <a role="button" tabindex="0" class="pickDate">
                                                <span>November 7, 2017 - December 6, 2017</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body table-custom">

                                    <div class="table-responsive">
                                        <div id="project-progress_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="project-progress_length"><label>Show <select name="project-progress_length" aria-controls="project-progress" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="project-progress_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="project-progress"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-custom dataTable no-footer" id="project-progress" role="grid" aria-describedby="project-progress_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="project-progress" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 22px;">ID</th><th class="sorting" tabindex="0" aria-controls="project-progress" rowspan="1" colspan="1" aria-label="Project: activate to sort column ascending" style="width: 197px;">Project</th><th class="sorting" tabindex="0" aria-controls="project-progress" rowspan="1" colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 107px;">Priority</th><th style="width: 200px;" class="sorting" tabindex="0" aria-controls="project-progress" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th style="width: 60px;" class="text-right no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Chart">Chart</th></tr>
                                            </thead>
                                            <tbody>
                                            
                                            
                                            
                                            
                                            
                                            
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">1</td>
                                                <td>Graphic layout for client</td>
                                                <td><small class="text-danger">High Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;"></div>
                                                    </div>
                                                    <small>42%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="1,3,2,3,5,6,8,5,9,8" sparktype="bar" sparkbarcolor="#cd97eb" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">2</td>
                                                <td>Make website responsive</td>
                                                <td><small class="text-success">Low Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                    <small>89%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="2,5,3,4,6,5,1,8,9,10" sparktype="bar" sparkbarcolor="#a2d200" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">3</td>
                                                <td>Clean html/css/js code</td>
                                                <td><small class="text-danger">High Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                                    </div>
                                                    <small>23%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="5,6,8,2,1,6,8,4,3,5" sparktype="bar" sparkbarcolor="#ffc100" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">4</td>
                                                <td>Database optimization</td>
                                                <td><small class="text-warning">Normal Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                                    </div>
                                                    <small>56%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="2,9,8,7,5,9,2,3,4,2" sparktype="bar" sparkbarcolor="#16a085" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">5</td>
                                                <td>Database migration</td>
                                                <td><small class="text-success">Low Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                                    </div>
                                                    <small>48%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="3,5,6,2,8,9,5,4,3,2" sparktype="bar" sparkbarcolor="#1693A5" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">6</td>
                                                <td>Email server backup</td>
                                                <td><small class="text-warning">Normal Priority</small></td>
                                                <td>
                                                    <div class="progress-xxs not-rounded mb-0 inline-block progress" style="width: 150px; margin-right: 5px">
                                                        <div class="progress-bar progress-bar-greensea" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                                                    </div>
                                                    <small>10%</small>
                                                </td>
                                                <td class="text-right">
                                                    <span class="sparklineChart" values="7,8,6,4,3,5,8,9,10,7" sparktype="bar" sparkbarcolor="#3f4e62" sparkbarwidth="4px" sparkheight="18px"><canvas width="49" height="18" style="display: inline-block; width: 49px; height: 18px; vertical-align: top;"></canvas></span>
                                                </td>
                                            </tr></tbody>
                                        </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="project-progress_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="project-progress_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="project-progress_previous"><a href="#" aria-controls="project-progress" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="project-progress" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="project-progress_next"><a href="#" aria-controls="project-progress" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->





                        <!-- col -->
                        <div class="col-md-4">
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Users </strong>Feed</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-lg-6">
                                            <div class="media mb-20">
                                                <div class="pull-left thumb">
                                                    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading mb-0">Imrich <strong>Kamarel</strong></h4>
                                                    <small class="text-lightred">UI/UX Designer</small>
                                                </div>
                                            </div>
                                            <!-- row -->
                                            <div class="row">
                                                <!-- col -->
                                                <div class="col-xs-4 text-center b-r b-solid">
                                                    <small class="text-lightred"><i class="fa fa-heart-o"></i> 125</small>
                                                </div>
                                                <!-- /col -->
                                                <!-- col -->
                                                <div class="col-xs-4 text-center b-r b-solid">
                                                    <small class="text-greensea"><i class="fa fa-star-o"></i> 67</small>
                                                </div>
                                                <!-- /col -->
                                                <!-- col -->
                                                <div class="col-xs-4 text-center">
                                                    <small class="text-blue"><i class="fa fa-comment-o"></i> 26</small>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-lg-6">
                                            <dl class="text-sm">
                                                <dt>About: </dt>
                                                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
                                                <dt>Hobbies: </dt>
                                                <dd>Sleep,  games,  animals, nature</dd>
                                                <dt>Skills: </dt>
                                                <dd>jquery, html, css, angularjs</dd>
                                                <dt>Rating: </dt>
                                                <dd class="text-lightred"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></dd>
                                            </dl>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /tile widget -->


                                <!-- tile body -->
                                <div class="tile-body p-0">



                                    <div role="tabpanel">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs tabs-dark" role="tablist">
                                            <li role="presentation" class="active"><a href="#feed-all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                                            <li role="presentation"><a href="#feed-superheroes" aria-controls="superheroes" role="tab" data-toggle="tab">Superheroes</a></li>
                                            <li role="presentation"><a href="#feed-friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active" id="feed-all">
                                                <div class="wrap-reset" style="max-height: 216px;overflow:auto;">
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar8.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p>
                                                            <small class="text-lightred">lead designer</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar7.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p>
                                                            <small class="text-lightred">CEO</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar6.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p>
                                                            <small class="text-lightred">Referent</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar5.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p>
                                                            <small class="text-lightred">Manager</small>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar4.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p>
                                                            <small class="text-lightred">Print master</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="feed-superheroes">
                                                <div class="wrap-reset" style="max-height: 216px;overflow:auto;">
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar7.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p>
                                                            <small class="text-lightred">CEO</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar6.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p>
                                                            <small class="text-lightred">Referent</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar8.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p>
                                                            <small class="text-lightred">lead designer</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar5.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p>
                                                            <small class="text-lightred">Manager</small>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar4.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p>
                                                            <small class="text-lightred">Print master</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="feed-friends">
                                                <div class="wrap-reset" style="max-height: 216px;overflow:auto;">
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar5.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p>
                                                            <small class="text-lightred">Manager</small>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar4.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p>
                                                            <small class="text-lightred">Print master</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar8.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p>
                                                            <small class="text-lightred">lead designer</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar7.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p>
                                                            <small class="text-lightred">CEO</small>
                                                        </div>
                                                    </div>
                                                    <div class="media ">
                                                        <div class="pull-left thumb">
                                                            <img class="media-object img-circle" src="assets/images/random-avatar6.jpg" alt="">
                                                        </div>
                                                        <div class="pull-right mt-10">
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-times"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
                                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p>
                                                            <small class="text-lightred">Referent</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->




                    </div>
                    <!-- /row -->





                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-4">
                            <!-- tile -->
                            <section class="tile widget-message">

                                <!-- tile header -->
                                <div class="tile-header bg-blue dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Quick </strong>Message</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget bg-blue">

                                    <form role="form">
                                        <div class="form-group">
                                            <select data-placeholder="Select recipients..." multiple="" tabindex="-1" class="chosen-select input-underline" style="width: 100%; display: none;">
                                                <option value="ici@gmail.com">ici@gmail.com</option>
                                                <option value="johny@gmail.com">johny@gmail.com</option>
                                                <option value="arnie@gmail.com">arnie@gmail.com</option>
                                                <option value="pete@gmail.com">pete@gmail.com</option>
                                                <option value="gorge@gmail.com">gorge@gmail.com</option>
                                            </select><div class="chosen-container chosen-container-multi" style="width: 333px;" title=""><ul class="chosen-choices form-control"><li class="search-field"><input type="text" value="Select recipients..." class="default" autocomplete="off" style="width: 125px;" tabindex="3"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control underline-input" placeholder="Type subject...">
                                        </div>
                                    </form>

                                </div>
                                <!-- /tile widget -->

                                <!-- tile body -->
                                <div class="tile-body p-0">

                                    <div id="summernote" style="display: none;">Hello Summernote</div><div class="note-editor"><div class="note-dropzone"><div class="note-dropzone-message"></div></div><div class="note-dialog"><div class="note-image-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4 class="modal-title">Insert Image</h4></div><div class="modal-body"><div class="form-group row-fluid note-group-select-from-files"><label>Select from files</label><input class="note-image-input" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group row-fluid"><label>Image URL</label><input class="note-image-url form-control span12" type="text"></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button></div></div></div></div><div class="note-link-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4 class="modal-title">Insert Link</h4></div><div class="modal-body"><div class="form-group row-fluid"><label>Text to display</label><input class="note-link-text form-control span12" type="text"></div><div class="form-group row-fluid"><label>To what URL should this link go?</label><input class="note-link-url form-control span12" type="text"></div><div class="checkbox"><label><input type="checkbox" checked=""> Open in new window</label></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button></div></div></div></div><div class="note-help-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><a class="modal-close pull-right" aria-hidden="true" tabindex="-1">Close</a><div class="title">Keyboard shortcuts</div><div class="note-shortcut-row row"><div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12"><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">Action</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Z</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Undo</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + Z</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Redo</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + ]</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Indent</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + [</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Outdent</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + ENTER</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Insert Horizontal Rule</div></div></div><div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12"><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">Text formatting</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + B</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Bold</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + I</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Italic</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + U</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Underline</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + \</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Remove Font Style</div></div></div></div><div class="note-shortcut-row row"><div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12"><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">Document Style</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM0</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Normal</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM1</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 1</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM2</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 2</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM3</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 3</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM4</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 4</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM5</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 5</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + NUM6</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Header 6</div></div></div><div class="note-shortcut note-shortcut-col col-sm-6 col-xs-12"><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-title col-xs-offset-6">Paragraph formatting</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + L</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Align left</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + E</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Align center</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + R</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Align right</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + J</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Justify full</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + NUM7</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Ordered list</div></div><div class="note-shortcut-row row"><div class="note-shortcut-col col-xs-6 note-shortcut-key">Ctrl + Shift + NUM8</div><div class="note-shortcut-col col-xs-6 note-shortcut-name">Unordered list</div></div></div></div><p class="text-center"><a href="//summernote.org/" target="_blank">Summernote 0.6.6</a> · <a href="//github.com/summernote/summernote" target="_blank">Project</a> · <a href="//github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div></div></div></div></div><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><div class="note-popover"><div class="note-link-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content"><a href="http://www.google.com" target="_blank">www.google.com</a>&nbsp;&nbsp;<div class="note-insert btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showLinkDialog" data-hide="true" tabindex="-1" data-original-title="Edit (CTRL+K)"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="unlink" tabindex="-1" data-original-title="Unlink"><i class="fa fa-unlink"></i></button></div></div></div><div class="note-image-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content"><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="1" tabindex="-1" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.5" tabindex="-1" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.25" tabindex="-1" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="left" tabindex="-1" data-original-title="Float Left"><i class="fa fa-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="right" tabindex="-1" data-original-title="Float Right"><i class="fa fa-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="none" tabindex="-1" data-original-title="Float None"><i class="fa fa-align-justify"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="imageShape" data-value="img-rounded" tabindex="-1" data-original-title="Shape: Rounded"><i class="fa fa-square"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="imageShape" data-value="img-circle" tabindex="-1" data-original-title="Shape: Circle"><i class="fa fa-circle-o"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="imageShape" data-value="img-thumbnail" tabindex="-1" data-original-title="Shape: Thumbnail"><i class="fa fa-picture-o"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="imageShape" tabindex="-1" data-original-title="Shape: None"><i class="fa fa-times"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeMedia" data-value="none" tabindex="-1" data-original-title="Remove Image"><i class="fa fa-trash-o"></i></button></div></div></div></div><div class="note-toolbar btn-toolbar"><div class="note-style btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="bold" tabindex="-1" data-name="bold" data-original-title="Bold (CTRL+B)"><i class="fa fa-bold"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="italic" tabindex="-1" data-name="italic" data-original-title="Italic (CTRL+I)"><i class="fa fa-italic"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="underline" tabindex="-1" data-name="underline" data-original-title="Underline (CTRL+U)"><i class="fa fa-underline"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeFormat" tabindex="-1" data-name="clear" data-original-title="Remove Font Style (CTRL+\)"><i class="fa fa-eraser"></i></button></div><div class="note-fontsize btn-group"><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-name="fontsize" data-original-title="Font Size"><span class="note-current-fontsize">11</span> <span class="caret"></span></button><ul class="dropdown-menu" data-name="fontsize"><li><a data-event="fontSize" href="#" data-value="8"><i class="fa fa-check"></i> 8</a></li><li><a data-event="fontSize" href="#" data-value="9"><i class="fa fa-check"></i> 9</a></li><li><a data-event="fontSize" href="#" data-value="10"><i class="fa fa-check"></i> 10</a></li><li><a data-event="fontSize" href="#" data-value="11"><i class="fa fa-check"></i> 11</a></li><li><a data-event="fontSize" href="#" data-value="12"><i class="fa fa-check"></i> 12</a></li><li><a data-event="fontSize" href="#" data-value="14"><i class="fa fa-check"></i> 14</a></li><li><a data-event="fontSize" href="#" data-value="18"><i class="fa fa-check"></i> 18</a></li><li><a data-event="fontSize" href="#" data-value="24"><i class="fa fa-check"></i> 24</a></li><li><a data-event="fontSize" href="#" data-value="36"><i class="fa fa-check"></i> 36</a></li></ul></div><div class="note-color btn-group"><button type="button" class="btn btn-default btn-sm btn-small note-recent-color" title="" data-event="color" data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1" data-name="color" data-original-title="Recent Color"><i class="fa fa-font" style="color:black;background-color:yellow;"></i></button><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-name="color" data-original-title="More Color"> <span class="caret"></span></button><ul class="dropdown-menu" data-name="color"><li><div class="btn-group"><div class="note-palette-title">Background Color</div><div class="note-color-reset" data-event="backColor" data-value="inherit" title="Transparent">Set transparent</div><div class="note-color-palette" data-target-event="backColor"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000;" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242;" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363;" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363;" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439;" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308;" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21;" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294;" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873;" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842;" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000;" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300;" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218;" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139;" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163;" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A;" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div><div class="btn-group"><div class="note-palette-title">Foreground Color</div><div class="note-color-reset" data-event="foreColor" data-value="inherit" title="Reset">Reset to default</div><div class="note-color-palette" data-target-event="foreColor"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000;" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242;" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363;" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363;" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439;" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308;" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21;" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294;" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873;" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842;" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000;" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300;" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218;" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139;" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163;" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A;" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div></li></ul></div><div class="note-para btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertUnorderedList" tabindex="-1" data-name="ul" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="fa fa-list-ul"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertOrderedList" tabindex="-1" data-name="ol" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="fa fa-list-ol"></i></button><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-name="paragraph" data-original-title="Paragraph"><i class="fa fa-align-left"></i> <span class="caret"></span></button><div class="dropdown-menu" data-name="paragraph"><div class="note-align btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyLeft" tabindex="-1" data-original-title="Align left (CTRL+SHIFT+L)"><i class="fa fa-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyCenter" tabindex="-1" data-original-title="Align center (CTRL+SHIFT+E)"><i class="fa fa-align-center"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyRight" tabindex="-1" data-original-title="Align right (CTRL+SHIFT+R)"><i class="fa fa-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyFull" tabindex="-1" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="fa fa-align-justify"></i></button></div><div class="note-list btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="indent" tabindex="-1" data-original-title="Indent (CTRL+])"><i class="fa fa-indent"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="outdent" tabindex="-1" data-original-title="Outdent (CTRL+[)"><i class="fa fa-outdent"></i></button></div></div></div><div class="note-height btn-group"><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-name="height" data-original-title="Line Height"><i class="fa fa-text-height"></i> <span class="caret"></span></button><ul class="dropdown-menu" data-name="height"><li><a data-event="lineHeight" href="#" data-value="1"><i class="fa fa-check"></i> 1.0</a></li><li><a data-event="lineHeight" href="#" data-value="1.2"><i class="fa fa-check"></i> 1.2</a></li><li><a data-event="lineHeight" href="#" data-value="1.4"><i class="fa fa-check"></i> 1.4</a></li><li><a data-event="lineHeight" href="#" data-value="1.5"><i class="fa fa-check"></i> 1.5</a></li><li><a data-event="lineHeight" href="#" data-value="1.6"><i class="fa fa-check"></i> 1.6</a></li><li><a data-event="lineHeight" href="#" data-value="1.8"><i class="fa fa-check"></i> 1.8</a></li><li><a data-event="lineHeight" href="#" data-value="2"><i class="fa fa-check"></i> 2.0</a></li><li><a data-event="lineHeight" href="#" data-value="3"><i class="fa fa-check"></i> 3.0</a></li></ul></div></div><textarea class="note-codable"></textarea><div class="note-editable" contenteditable="true" style="height: 143px;">Hello Summernote</div><div class="note-statusbar"><div class="note-resizebar"><div class="note-icon-bar"></div><div class="note-icon-bar"></div><div class="note-icon-bar"></div></div></div></div>

                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                                <div class="tile-footer bg-blue text-right">

                                    <button class="btn btn-blue btn-ef btn-ef-7 btn-ef-7h" activate-button="success"><i class="fa fa-envelope"></i> Send message</button>

                                </div>
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->



                        <!-- col -->
                        <div class="col-md-4">
                            <!-- tile -->
                            <section class="tile widget-chat">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Chat</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">John Douey <i class="fa fa-angle-down ml-5"></i></a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0">Imrich Kamarel</a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0">Arnold Schwarz</a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0">Deel McApple</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="tile-body slim-scroll" style="max-height: 320px; overflow: hidden; width: auto; height: 100%;">

                                    <ul class="chats p-0">
                                        <li class="in">
                                            <div class="media">
                                                <div class="pull-left thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">John Douey </a><span class="datetime">at 12.10.2014</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <div class="media">
                                                <div class="pull-right thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">You </a><span class="datetime">2 hours ago</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <div class="media">
                                                <div class="pull-left thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">John Douey </a><span class="datetime">2 hours ago</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <div class="media">
                                                <div class="pull-right thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">You </a><span class="datetime">1 hours ago</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <div class="media">
                                                <div class="pull-left thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">John Douey </a><span class="datetime">53 minutes ago</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <div class="media">
                                                <div class="pull-right thumb thumb-sm">
                                                    <img class="media-object img-circle" src="assets/images/random-avatar1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p class="media-heading"><a role="button" tabindex="0" class="name">You </a><span class="datetime">40 minutes ago</span></p>
                                                    <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 142.618px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                                <div class="tile-footer">
                                    <div class="chat-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type your message here...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-chevron-right"></i></button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->




                        <!-- col -->
                        <div class="col-md-4">
                            <!-- tile -->
                            <section class="tile bg-greensea widget-appointments">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Appointments</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-md-6 text-center">

                                            <h4 class="text-light">Bratislava</h4>
                                            <div style="width: 100%;">
                                            <canvas id="c1" class="CoolClock:minovateClock:50" width="100" height="100" style="width: 100px; height: 100px;"></canvas>
                                            </div>
                                            <span class="text-light">30°C</span>

                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-md-6 b-l text-center">
                                            <span class="day">15</span><br>
                                            <span class="month">May</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                                <div class="tile-footer dvd dvd-top mt-20">

                                    <div class="owl-carousel owl-theme" id="appointments-carousel" style="opacity: 1; display: block;">

                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1818px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 303px;"><div>
                                            <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 16:00, <small class="text-thin">Estimated time: 2 hours</small></p>
                                            <p>
                                            </p><h5 class="mt-10 mb-0 text-strong">Release Update</h5>
                                            <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small>
                                            <p></p>
                                        </div></div><div class="owl-item" style="width: 303px;"><div>
                                            <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 19:00, <small class="text-thin">Estimated time: 5 hours</small></p>
                                            <p>
                                            </p><h5 class="mt-10 mb-0 text-strong">Make a Backup</h5>
                                            <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small>
                                            <p></p>
                                        </div></div><div class="owl-item" style="width: 303px;"><div>
                                            <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 22:45, <small class="text-thin">Estimated time: 8 hours 45 minutes</small></p>
                                            <p>
                                            </p><h5 class="mt-10 mb-0 text-strong">Buy Tickets</h5>
                                            <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small>
                                            <p></p>
                                        </div></div></div></div>

                                        

                                        

                                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-chevron-left"></i></div><div class="owl-next"><i class="fa fa-chevron-right"></i></div></div></div></div>

                                </div>
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->




                    </div>
                    <!-- /row -->





                </div>
@endsection
