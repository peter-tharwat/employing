<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Laravel') }}</title>

 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    <!-- Styles -->
    
    <style type="text/css">
        *
        {
            font-family: 'Cairo';
            text-decoration: none!important; 
            transition: all .5s ease-in-out!important;
           
        }
        a:hover
        {
            
        }
        a:focus
        {
            text-decoration: none; 
        }
        .navbar-toggle:hover,.navbar-toggle:focus
        {
            background: #5f91d0!important;
            transition: all .5s ease-in-out!important;

        }

        .applying 
        {
           transition: all .5s ease-in-out!important;
        }

        .applying:hover
        {
            background: #5f91d0!important;
        }
        .navbar-default .navbar-nav > .open > a
        {
          background: transparent!important;
        }

        @media (max-width: 767px)
        {
          .navbar-default .navbar-nav .open .dropdown-menu > li > a {
              color: #fff;
          }
        }

    



    </style>
</head>
<body>


<nav class="navbar navbar-default {{-- navbar-fixed-bottom --}}" style="border:none;border-radius: 0px;padding: 4px 0px ;background: #2381c6;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only" style="color: #fff;background: #fff">Toggle navigation</span>
        <span class="icon-bar" style="color: #fff;background: #fff"></span>
        <span class="icon-bar" style="color: #fff;background: #fff"></span>
        <span class="icon-bar" style="color: #fff;background: #fff"></span>
      </button>
      <a class="navbar-brand" href="/" style="color: #fdfeff;font-size: 25px;font-weight: bolder;padding: 0px;">
        <img src="/logo.png" style="margin-top: -5px;width: 150px;height: 60px;padding: 5px;">
     </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav" style="padding: 0px 15px">
        
        

         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff">نوع الوظيفة <span class="far fa-arrow-alt-circle-down " style="font-size:13px "></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><span class="fa fa-hands-helping" style="color: #2381c6"></span> تطوع</a></li>
           
              <li><a href="#"  ><span class="fa fa-briefcase" style="color: #2381c6"></span> دوام كامل</a></li>
              <li><a href="#"><span class="fa fa-briefcase" style="color: #2381c6"></span> دوام جزئي</a></li>
              <li><a href="#"><span class="fa fa-briefcase" style="color: #2381c6"></span> تدريب تعاوني</a></li>     
            </ul>
          </li>   

          <li {{-- class="active" --}}>
            <a href="{{url('dashboard')}}" style="color: #fff">لوحة التحكم <span class="sr-only">(current)</span></a>
          </li>

      </ul>


     <!--  <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->

      <ul class="nav navbar-nav navbar-left">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="color: #fff">{{ __('دخول') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" style="color: #fff">{{ __('تسجيل') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #fff">
                        {{ Auth::user()->name }}  &nbsp;&nbsp;<span class="fa fa-angle-down"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding: 5px 10px;">
                        <a class="dropdown-item" href="/profile1"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-user" style="color: #3897c5"></span> &nbsp;&nbsp;{{ __('المعلومات الشخصية') }}
                        </a>
                        <br>
                        <a class="dropdown-item" href="/profile2"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-user" style="color: #3897c5"></span>&nbsp;&nbsp; {{ __('المؤهل') }}
                        </a>
                        <br>
                        <a class="dropdown-item" href="/profile3"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-user" style="color: #3897c5"></span>&nbsp;&nbsp; {{ __('سنوات الخبرة') }}
                        </a>
                        <br>
                        <a class="dropdown-item" href="/profile4"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-file"  style="color: #3897c5"></span> &nbsp;&nbsp;  {{ __('ارفاق ملفات') }}
                        </a>
                        <br>
                          <hr style="margin: 5px 0px;">

                        <a class="dropdown-item" href="/myjobs"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-file"  style="color: #3897c5"></span> &nbsp;&nbsp; {{ __('قائمة التقديمات') }}
                        </a>
                      
                        <a class="dropdown-item" href="/favourite"
                             style="color: #333;padding: 3px;display: inline-block;">
                           <span class="fa fa-heart" style="color: #f54545"></span>   {{ __('المفضلة') }}
                        </a>

                        <hr style="margin: 5px 0px;">

                        <span class="fa fa-sign-out-alt" style="color: #249769"></span>   

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="color: #333;padding: 3px;display: inline-block;">
                            {{ __('تسجيل خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-xs-12">
    <div class="container">
        <div class="col-xs-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('data'))      
                <div >
                    <div class="alert alert-{{session('data')['alert-type']   }}" style="border-radius: 0px;">
                        {{  session('data')['alert'] }}
                    </div>  
                </div>
            @endif
        </div>     
    </div>
</div>


 
        <main class="py-4">
            @yield('content')
        </main>


       {{--  <div class="col-xs-12" style="height: 100px; background: #333">
          
        </div> --}}
    </div>
</body>


{{-- <script type="text/javascript">
  $('.screen-dev').css('min-height',$( window ).height()-$('.navbar').height()-$('footer-dev').height()+'px');
</script> --}}
</html>
