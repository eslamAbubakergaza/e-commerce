<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>Gaza Market </title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-60.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-76.')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-120.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-152.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('storepanel/robust-assets/ico/favicon.ico')}}" />
    <link rel="shortcut icon" type="image/png')}}" href="{{URL::asset('storepanel/robust-assets/ico/favicon-32.png')}}" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/vendors.min.css')}}" />
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/icomoon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}" />
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/sliders/slick/slick.css')}}" />
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/charts/jquery-jvectormap-2.0.3.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/charts/morris.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/extensions/unslider.css')}}" />
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/app.min.css')}}" />
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/components/weather-icons/climacons.min.css')}}" />
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/assets/css/style.css')}}" />
    <!-- END Custom CSS-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns ">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->
    @include('controlPanel_store.navbar')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    @include('controlPanel_store.main_menu')
    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- project stats -->
          <div class="row">
              <div class="col-xs-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                  <div class="p-1 text-xs-center">
                                      <div>
                                          <h3 class="font-large-1 grey darken-1 text-bold-400">$84,962</h3>
                                          <span class="font-small-3 grey darken-1">Monthly Profit</span>
                                      </div>
                                      <div class="card-body overflow-hidden">
                                          <div id="morris-comments" class="height-75"></div>
                                          <ul class="list-inline clearfix mb-0">
                                              <li class="border-right-grey border-right-lighten-2 pr-2">
                                                  <h3 class="success text-bold-400">$8,200</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-up success"></i> Today</span>
                                              </li>
                                              <li class="pl-2">
                                                  <h3 class="success text-bold-400">$5,400</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-down success"></i> Yesterday</span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                  <div class="p-1 text-xs-center">
                                      <div>
                                          <h3 class="font-large-1 grey darken-1 text-bold-400">1,879</h3>
                                          <span class="font-small-3 grey darken-1">Total Sales</span>
                                      </div>
                                      <div class="card-body overflow-hidden">
                                          <div id="morris-likes" class="height-75"></div>
                                          <ul class="list-inline clearfix mb-0">
                                              <li class="border-right-grey border-right-lighten-2 pr-2">
                                                  <h3 class="primary text-bold-400">4789</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-up primary"></i> Today</span>
                                              </li>
                                              <li class="pl-2">
                                                  <h3 class="primary text-bold-400">389</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-down primary"></i> Yesterday</span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-12 col-sm-12">
                                  <div class="p-1 text-xs-center">
                                      <div>
                                          <h3 class="font-large-1 grey darken-1 text-bold-400">894</h3>
                                          <span class="font-small-3 grey darken-1">Support Tickets</span>
                                      </div>
                                      <div class="card-body overflow-hidden">
                                          <div id="morris-views" class="height-75"></div>
                                          <ul class="list-inline clearfix mb-0">
                                              <li class="border-right-grey border-right-lighten-2 pr-2">
                                                  <h3 class="danger text-bold-400">81</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-up danger"></i> Critical</span>
                                              </li>
                                              <li class="pl-2">
                                                  <h3 class="danger text-bold-400">498</h3>
                                                  <span class="font-small-3 grey darken-1"><i class="icon-chevron-down danger"></i> Low</span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ project stats -->
          <!--/ project charts -->
          <div class="row match-height">
              <div class="col-xl-8 col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <ul class="list-inline text-xs-center pt-2 m-0">
                              <li class="mr-1">
                                  <h6><i class="icon-circle warning"></i> <span class="grey darken-1">Remaining</span></h6>
                              </li>
                              <li class="mr-1">
                                  <h6><i class="icon-circle success"></i> <span class="grey darken-1">Completed</span></h6>
                              </li>
                          </ul>
                          <div class="chartjs')}}">
                              <canvas id="line-stacked-area" class="block" height="250"></canvas>
                          </div>
                      </div>
                      <div class="card-footer">
                          <div class="row">
                              <div class="col-xs-3 text-xs-center">
                                  <span class="text-muted">Total Projects</span>
                                  <h2 class="block font-weight-normal">18</h2>
                                  <progress class="progress progress-xs mt-2 progress-success" value="70" max="100"></progress>
                              </div>
                              <div class="col-xs-3 text-xs-center">
                                  <span class="text-muted">Total Task</span>
                                  <h2 class="block font-weight-normal">125</h2>
                                  <progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
                              </div>
                              <div class="col-xs-3 text-xs-center">
                                  <span class="text-muted">Completed Task</span>
                                  <h2 class="block font-weight-normal">242</h2>
                                  <progress class="progress progress-xs mt-2 progress-success" value="60" max="100"></progress>
                              </div>
                              <div class="col-xs-3 text-xs-center">
                                  <span class="text-muted">Total Revenue</span>
                                  <h2 class="block font-weight-normal">$11,582</h2>
                                  <progress class="progress progress-xs mt-2 progress-success" value="90" max="100"></progress>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                  <div class="card  card-inverse bg-primary">
                      <div class="card-body">
                          <div class="card-block sales-growth-chart">
                              <div class="chart-title mb-1 text-xs-center">
                                  <span class="white">Total monthly Sales.</span>
                              </div>
                              <div id="monthly-sales" class="height-250"></div>
                          </div>
                      </div>
                      <div class="card-footer text-xs-center">
                          <div class="chart-stats mt-1 white">
                              <a href="#" class="btn bg-primary bg-darken-3 mr-1 white">Statistics <i class="icon-bar-graph"></i></a> for the last year.
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ project charts -->
          <!-- project map based selling -->
          <div class="row">
              <div class="col-xs-12">
                  <div class="card box-shadow-0">
                      <div class="card-body collapse in">
                          <div class="row">
                              <div class="col-xl-8 col-lg-12">
                                  <div id="world-map-markers" class="height-450"></div>
                              </div>
                              <div class="col-xl-4 col-lg-12">
                                  <div class="card-block">
                                      <div class="row">
                                          <h4 class="card-title py-1 text-xs-center">Sales All Over The World</h4>
                                          <div class="col-xl-12 col-lg-4 col-sm-12">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <span>Total Orders <i class="icon-arrow-down4 deep-orange accent-3"></i> <span class="deep-orange accent-3">4.27%</span></span>
                                                      <h2 class="mb-0">789</h2>
                                                  </div>
                                                  <div class="media-right media-top pr-2">
                                                      <i class="icon-cart font-large-1"></i>
                                                  </div>
                                              </div>
                                              <div id="map-total-orders" class="height-75"></div>
                                          </div>
                                          <div class="col-xl-12 col-lg-4 col-sm-12">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <span>Total Profit <i class="icon-arrow-up4 success"></i> <span class="teal accent-3">6.89%</span></span>
                                                      <h2 class="mb-0">$47.8K</h2>
                                                  </div>
                                                  <div class="media-right media-top pr-2">
                                                      <i class="icon-dollar font-large-1"></i>
                                                  </div>
                                              </div>
                                              <div id="map-total-profit" class="height-75"></div>
                                          </div>
                                          <div class="col-xl-12 col-lg-4 col-sm-12">
                                              <div class="sales pr-2">
                                                  <div class="sales-today mb-1">
                                                      <p class="m-0">Today <span class="sucess float-xs-right"><i class="icon-arrow-up4 success"></i> 6.89%</span></p>
                                                      <progress class="progress progress-sm progress-success progress-accent-3 mb-0" value="70" max="100"></progress>
                                                  </div>
                                                  <div class="sales-yesterday">
                                                      <p class="m-0">Yesterday <span class="deep-orange accent-2 float-xs-right"><i class="icon-arrow-down4 deep-orange accent-3"></i> 4.18%</span></p>
                                                      <progress class="progress progress-sm progress-deep-orange progress-accent-2 mb-0" value="60" max="100"></progress>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- project map based selling -->

          <!--project health, featured & chart-->
          <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="card-block text-xs-center">
                              <div class="card-header mb-2">
                                  <span class="success darken-1">Total Budget</span>
                                  <h3 class="font-large-2 grey darken-1 text-bold-200">$24,879</h3>
                              </div>
                              <div class="card-body">
                                  <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleoffset="0" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#e1e1e1" data-readonly="true" data-fgcolor="#37BC9B" data-knob-icon="icon-dollar" />
                                  <ul class="list-inline clearfix mt-2 mb-0">
                                      <li class="border-right-grey border-right-lighten-2 pr-2">
                                          <h2 class="grey darken-1 text-bold-400">75%</h2>
                                          <span class="success">Completed</span>
                                      </li>
                                      <li class="pl-2">
                                          <h2 class="grey darken-1 text-bold-400">25%</h2>
                                          <span class="danger">Remaining</span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card card-inverse card-warning text-xs-center">
                      <div class="card-body">
                          <div class="card-block">
                              <img src="{{URL::asset('storepanel/robust-assets/images/elements/04.png')}}" alt="element 05" height="170" class="mb-1" />
                              <h4 class="card-title">Storage Device</h4>
                              <p class="card-text">945 items</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <div class="media">
                              <div class="p-2 bg-warning white media-body">
                                  <h5>New Orders</h5>
                                  <h5 class="text-bold-400">4,65,879</h5>
                              </div>
                              <div class="p-2 text-xs-center bg-warning bg-darken-2 media-left media-middle">
                                  <i class="icon-cart font-large-2 white"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-12 col-md-12">
                  <div class="card card-inverse bg-info">
                      <div class="card-body">
                          <div class="position-relative">
                              <div class="chart-title position-absolute mt-2 ml-2 white">
                                  <h1 class="font-large-2 text-bold-200">84%</h1>
                                  <span>Employees Satisfied</span>
                              </div>
                              <canvas id="emp-satisfaction" class="height-400 block"></canvas>
                              <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-3 mr-3 white">
                                  <a href="#" class="btn bg-info bg-darken-3 mr-1 white">Statistics <i class="icon-bar-graph"></i></a> for the last year.
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- projects table with monthly chart -->
          <div class="row">
              <div class="col-xl-8 col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Ongoing Projects</h4>
                          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                  <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="card-block">
                              <p class="m-0">Total ongoing projects 6<span class="float-xs-right"><a href="./project-summary.html" target="_blank">Project Summary <i class="icon-arrow-right2"></i></a></span></p>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                  <thead>
                                      <tr>
                                          <th>Project</th>
                                          <th>Owner</th>
                                          <th>Priority</th>
                                          <th>Progress</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="text-truncate">ReactJS App</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-4.png')}}" alt="avatar" /></span> <span>Sarah W.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-success">Low</span></td>
                                          <td class="valign-middle"><progress value="88" max="100" class="progress progress-xs progress-success m-0">88%</progress></td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate">Fitness App</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-5.png')}}" alt="avatar" /></span> <span>Edward C.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
                                          <td class="valign-middle"><progress value="55" max="100" class="progress progress-xs progress-warning m-0">55%</progress></td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate">SOU plugin</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar" /></span> <span>Carol E.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
                                          <td class="valign-middle"><progress value="25" max="100" class="progress progress-xs progress-danger m-0">25%</progress></td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate">Android App</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-7.png')}}" alt="avatar" /></span> <span>Gregory L.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-success">Low</span></td>
                                          <td class="valign-middle"><progress value="95" max="100" class="progress progress-xs progress-success m-0">95%</progress></td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate">ABC Inc. UI/UX</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-8.png')}}" alt="avatar" /></span> <span>Susan S.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-warning">Medium</span></td>
                                          <td class="valign-middle"><progress value="45" max="100" class="progress progress-xs progress-warning m-0">45%</progress></td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate">Product UI</td>
                                          <td class="text-truncate">
                                              <span class="avatar avatar-xs"><img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-9.png')}}" alt="avatar" /></span> <span>Walter K.</span>
                                          </td>
                                          <td class="text-truncate"><span class="tag tag-danger">Critical</span></td>
                                          <td class="valign-middle"><progress value="15" max="100" class="progress progress-xs progress-danger m-0">15%</progress></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                  <div class="card">
                      <div class="card-body bg-success">
                          <div class="card-block sales-growth-chart">
                              <div id="completed-project" class="height-250"></div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <div class="chart-title">
                              <span class="text-muted">Total completed project and earning.</span>
                          </div>
                          <ul class="list-inline text-xs-center clearfix mt-2 mb-0">
                              <li class="border-right-grey border-right-lighten-2 pr-1"><span class="text-muted">Completed Projects</span>
                                  <h3 class="block">250</h3></li>
                              <li class="pl-2"><span class="text-muted">Total Earnings</span>
                                  <h3 class="block">64.54 M</h3></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ projects table with monthly chart -->

          <!--CLNDR & Weather Cards-->
          <div class="row">
              <div class="col-xl-6 col-lg-12">
                  <div class="card">
                      <div id="clndr-default" class="overflow-hidden bg-grey bg-lighten-4"></div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-12">
                  <div class="card no-border box-shadow-0">
                      <div class="card-body collapse in">
                          <div class="card-block bg-amber bg-lighten-4">
                              <div class="animated-weather-icons text-xs-center float-xs-left">
                                  <svg version="1.1" id="wind" class="climacon climacon_wind climacon-amber climacon-darken-2 height-150" viewbox="15 15 70 70">
                                      <g class="climacon_iconWrap climacon_iconWrap-wind">
                                          <g class="climacon_wrapperComponent climacon_componentWrap-wind">
                                              <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>
                                              <path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>
                                          </g>
                                      </g>
                                  </svg>
                              </div>
                              <div class="weather-details text-xs-right">
                                  <span class="block amber darken-2">Windy</span>
                                  <span class="font-large-3 block amber darken-4">32&deg;</span>
                                  <span class="font-medium-4 text-bold-500 amber darken-4">Beijing, China</span>
                              </div>
                          </div>
                          <div class="card-footer p-0 no-border">
                              <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="details-left float-xs-left">
                                                      <span class="font-small-1 grey text-bold-600 block">WIND</span>
                                                      <span class="text-bold-500">&lt;12MPH</span>
                                                  </div>
                                                  <div class="float-xs-right valign-middle">
                                                      <i class="icon-wind amber lighten-1 font-large-1"></i>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="details-left float-xs-left">
                                                      <span class="font-small-1 grey text-bold-600 block">REAL FEEL</span>
                                                      <span class="text-bold-500">36.5&deg;</span>
                                                  </div>
                                                  <div class="float-xs-right valign-middle">
                                                      <i class="icon-thermometer2 amber lighten-1 font-large-1"></i>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="details-left float-xs-left">
                                                      <span class="font-small-1 grey text-bold-600 block">UV INDEX</span>
                                                      <span class="text-bold-500">5%</span>
                                                  </div>
                                                  <div class="float-xs-right valign-middle">
                                                      <i class="icon-sun4 amber lighten-1 font-large-1"></i>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div class="details-left float-xs-left">
                                                      <span class="font-small-1 grey text-bold-600 block">PRESSURE</span>
                                                      <span class="text-bold-500">30.19 in</span>
                                                  </div>
                                                  <div class="float-xs-right valign-middle">
                                                      <i class="icon-compass4 amber lighten-1 font-large-1"></i>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ CLNDR & Weather Cards-->

          <!-- Recent invoice with Statistics -->
          <div class="row match-height">
              <div class="col-xl-4 col-lg-12">
                  <div class="card">
                      <div class="card-header no-border-bottom">
                          <h4 class="card-title">Invoices Stats</h4>
                          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                  <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body collapse in">
                          <div class="card-block">
                              <ul class="list-inline text-xs-right pr-2 mb-0">
                                  <li>
                                      <h6><i class="icon-circle grey lighten-1"></i> Paid</h6>
                                  </li>
                                  <li>
                                      <h6><i class="icon-circle danger"></i> Unpaid</h6>
                                  </li>
                              </ul>
                          </div>
                          <div id="project-invoices" class="height-250"></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8 col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Recent Invoices</h4>
                          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                  <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="card-block">
                              <p>Total paid invoices 240, unpaid 150. <span class="float-xs-right"><a href="./project-summary.html" target="_blank">Invoice Summary <i class="icon-arrow-right2"></i></a></span></p>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                  <thead>
                                      <tr>
                                          <th>Invoice#</th>
                                          <th>Customer Name</th>
                                          <th>Status</th>
                                          <th>Due</th>
                                          <th>Amount</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="text-truncate"><a href="#">INV-001001</a></td>
                                          <td class="text-truncate">Elizabeth W.</td>
                                          <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                          <td class="text-truncate">10/05/2016</td>
                                          <td class="text-truncate">$ 1200.00</td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate"><a href="#">INV-001012</a></td>
                                          <td class="text-truncate">Andrew D.</td>
                                          <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                          <td class="text-truncate">20/07/2016</td>
                                          <td class="text-truncate">$ 152.00</td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate"><a href="#">INV-001401</a></td>
                                          <td class="text-truncate">Megan S.</td>
                                          <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                          <td class="text-truncate">16/11/2016</td>
                                          <td class="text-truncate">$ 1450.00</td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate"><a href="#">INV-01112</a></td>
                                          <td class="text-truncate">Doris R.</td>
                                          <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                          <td class="text-truncate">11/12/2016</td>
                                          <td class="text-truncate">$ 5685.00</td>
                                      </tr>
                                      <tr>
                                          <td class="text-truncate"><a href="#">INV-008101</a></td>
                                          <td class="text-truncate">Walter R.</td>
                                          <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                          <td class="text-truncate">18/05/2016</td>
                                          <td class="text-truncate">$ 685.00</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Recent invoice with Statistics -->


          <!-- Emp of month & social cards -->
          <div class="row">
              <div class="col-xl-4 col-lg-12">
                  <div class="card profile-card-with-cover border-grey border-lighten-2">
                      <div class="card-img-top img-fluid bg-cover height-200"
                           {{--style="background: url('./robust-assets/images/carousel/16.jpg');"--}}
                      ></div>
                      <div class="card-profile-image">
                          <img src="{{URL::asset('storepanel/robust-assets/images/portrait/small/avatar-s-9.png')}}" class="rounded-circle img-border" alt="Card image" />
                      </div>
                      <div class="profile-card-with-cover-content text-xs-center">
                          <div class="card-block">
                              <h4 class="card-title">Philip Garrett</h4>
                              <p class="text-muted m-0">Employee of the month</p>
                          </div>
                          <div class="card-block">
                              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="icon-facebook3"></span></a>
                              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="icon-twitter3"></span></a>
                              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="icon-linkedin3 font-medium-4"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card bg-twitter white height-200">
                      <div class="card-body">
                          <div class="card-block">
                              <div class="text-xs-center my-1">
                                  <i class="icon-twitter3 font-large-3"></i>
                              </div>
                              <div class="tweet-slider">
                                  <ul class="text-xs-center">
                                      <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</li>
                                      <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</li>
                                      <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                                      <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card card-inverse card-warning text-xs-center height-200">
                      <div class="card-body">
                          <div class="card-block">
                              <img src="{{URL::asset('storepanel/robust-assets/images/elements/04.png')}}" alt="element 05" height="110" class="mb-1" />
                              <h4 class="card-title m-0">Storage Device</h4>
                              <p class="card-text">Best Design</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card card-inverse card-success text-xs-center height-200">
                      <div class="card-body">
                          <div class="card-block">
                              <img src="{{URL::asset('storepanel/robust-assets/images/elements/06.png')}}" alt="element 05" height="110" class="mb-1" />
                              <h4 class="card-title m-0">Ceramic Bottle</h4>
                              <p class="card-text">Best UI</p>
                          </div>
                      </div>
                  </div>
                  <div class="card bg-facebook white height-200">
                      <div class="card-body">
                          <div class="card-block">
                              <div class="text-xs-center my-1">
                                  <i class="icon-facebook3 font-large-3"></i>
                              </div>
                              <div class="fb-post-slider" dir="rtl">
                                  <ul class="text-xs-center">
                                      <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                                      <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                                      <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                                      <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ Emp of month & social cards -->

          <!--CLNDR Wrapper-->
          <div id="clndr" class="clearfix">
              <script type="text/template" id="clndr-template">
                  <div class="clndr-controls">
                      <div class="clndr-previous-button">&lt;</div>
                      <div class="clndr-next-button">&gt;</div>
                      <div class="current-month">

                      </div>
                  </div>
                  <div class="clndr-grid">
                      <div class="days-of-the-week clearfix">
                          <% _.each(daysOfTheWeek, function(day) { %>
                              <div class="header-day">

                              </div>
                              <% }); %>
                      </div>
                      <div class="days">
                          <% _.each(days, function(day) { %>
                              <div class="" id=""><span class="day-number"></span></div>
                              <% }); %>
                      </div>
                  </div>
                  <div class="event-listing">
                      <div class="event-listing-title">Project meetings</div>
                      <% _.each(eventsThisMonth, function(event) { %>
                          <div class="event-item font-small-3">
                              <div class="event-item-day font-small-2">

                              </div>
                              <div class="event-item-name text-bold-600">

                              </div>
                              <div class="event-item-location">

                              </div>
                          </div>
                          <% }); %>
                  </div>
              </script>
          </div>
          <!--/CLNDR Wrapper -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-dark navbar-fixed-bottom">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/extensions/jquery.knob.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/chartist-plugin-tooltip.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/charts/jvector/jquery-jvectormap-world-mill.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/extensions/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/extensions/underscore-min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/extensions/clndr.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/extensions/unslider-min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/app.min.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/components/pages/dashboard-project.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>