<!DOCTYPE html>
<html lang="en">
  
  @php 
    $basicInfo = \App\Models\BasicInfo::first();
  @endphp

  <head>
    <title>{{ env('APP_NAME') }} - Software developer</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/main.css">
    @yield('user_styles')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body class="app sidebar-mini">
    
    @include('layouts.backend_navbar')
    @include('layouts.backend_sidebar')


    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> {{$page_title ?? ''}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">{{$breadcrumb_title ?? ''}}</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('backend.partials.flash_messages')
            @yield('content')
          </div>
        </div>
      </div>
    </main>


    <!-- Essential javascripts for application to work-->
    <script src="{{asset('backend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('backend')}}/js/popper.min.js"></script>
    <script src="{{asset('backend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('backend')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('backend')}}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

    @yield('user_scripts')
  </body>
</html>
