<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('user-dash/css/home_navsb.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user-dash/css/shop_card.css') }}" />

	<!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit()  {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <!-- google translator -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</head>
<style type="text/css">
      .opportunity-list {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }

      .op-list{
        float: left;
        margin-left:20px;
      }
      .btn {
        border-radius:0px;
      }

      .jumbotron{
        background-color: white !important;
        margin-top:10px;
      }
      .card {
        background-color: white;
        margin-bottom: 10px;
      }
      .card-footer {
        background-color: white;
      }
      .card-header {
        background-color: white;
      }
      a {
        border-radius: 0px;
      }
      .form-control {
        border-radius: 0px;
      }
      button {
        border-radius: 0px;
      }
      .jumbotron{
        border-radius: 0px;
      }
      html {
       scroll-behavior: smooth;
      }
</style>
<body>
     <!-- Start Wrapper -->
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" >
            <div class="sidebar-header">
                <img src="{{ asset('images/K_Logo6.png') }}" height="40" width="60"/>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <img src="{{ asset('images/user.png') }}" width="50" height="50" class="rounded-circle img-border box-shadow-1" alt="user image"> 
                    Test Test
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-pencil-alt"></i> My Schedule
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-camera"></i> Photo Editor
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i> Social
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                             <a href="#" dats-target="edit-profile">
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Account Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Account Invoices
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Messages
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                My Kunnecs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Mutual Kunnecs
                            </a>
                        </li>
                        <li>
                            <a href="#kunnectomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Events</a>
                                <ul class="collapse list-unstyled" id="kunnectomeSubmenu">
                                    <li>
                                        <a href="#"> Your Events</a>
                                    </li>
                                    <li>
                                        <a href="#"> Create an Event</a>
                                    </li>
                                    <li>
                                        <a href="#"> List of Event Invites</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#">
                                Archived Posts
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Reported Posts
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#kunnecSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-globe" style="color: #FA8D0A"></i> Kunnec
                    </a>
                    <ul class="collapse list-unstyled" id="kunnecSubmenu">
                        <li>
                            <a href="#kunnectome" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec to Me
                            </a>
                            <ul class="collapse list-unstyled" id="kunnectome">
                                <li>
                                    <a href="#" class="text-capitalize"> Post Opportunity</a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize"> Your Posts</a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">opportunities</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnectoyou" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec to You
                            </a>
                            <ul class="collapse list-unstyled" id="kunnectoyou">
                                <li>
                                    <a href="#" class="text-capitalize"> Your Profile </a>
                                </li>       
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecshop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> kunnec shop
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecshop">
                                    <li>
                                        <a href="#" class="text-capitalize"> Home </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize"> My Store </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize"> Create Add </a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunneccourseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Kunnec Courses
                            </a>
                            <ul class="collapse list-unstyled" id="kunneccourseSubmenu">
                                    <li>
                                        <a href="#"> Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Settings</a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecteachSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Screen
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecteachSubmenu">
                                <li>
                                    <a href="#kunnectutorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                        Tutors
                                    </a>
                                    <ul class="collapse list-unstyled" id="kunnectutorSubmenu">
                                        <li>
                                            <a href="#"> Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#kunnecrecordSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                        Recording
                                    </a>
                                    <ul class="collapse list-unstyled" id="kunnecrecordSubmenu">
                                        <li>
                                            <a href="#"> Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Settings</a>
                                        </li>
                                    </ul>
                                </li>       
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecshowSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Kunnec Live Show</a>
                            <ul class="collapse list-unstyled" id="kunnecshowSubmenu">
                                <li>
                                    <a href="#"> Home</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li>
                            <a href="#kunnecvidaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                    Kunnec Vid
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecvidaccountSubmenu">
                                <li>
                                    <a href="#"> Home</a>
                                </li>
                                <li>
                                     <a href="#">Settings </a>
                                </li>   
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecbooksaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Books
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecbooksaccountSubmenu">
                                <li>
                                    <a href="#"> Home</a>
                                </li>
                                <li>
                                     <a href="#">Settings </a>
                                </li>       
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecMusicaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec Music
                            </a>
                            <ul class="collapse list-unstyled" id="kunnecMusicaccountSubmenu">
                                <li>
                                    <a href="#"> Home</a>
                                </li>
                                <li>
                                     <a href="#">Settings </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#kunnecPodaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                Kunnec pod
                            </a>
                             <ul class="collapse list-unstyled" id="kunnecPodaccountSubmenu">
                                <li>
                                    <a href="#"> Home</a>
                                </li>
                                <li>
                                     <a href="#">Settings </a>
                                </li>
                            </ul>
                        </li>   
                    </ul>
                </li> 
                <li>
                    <a href="#">
                        <i class="fas fa-coins"></i> 
                        Credits <span class="badge badge-success"> Balance: <span style="color: #FFFFFF;"> 24 </span></span>
                    </a> 
                    <a href="#">
                        <i class="fas fa-ad"></i> 
                        K-Ads <span class="badge badge-success"> Balance: <span style="color: #FFFFFF;"> 0 </span></span>
                    </a>
                    <a href="">
                        <i class="fas fa-times-circle"></i> Sign-Out
                    </a>
                </li>       
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <p>Translate below</p>
                    <div id="google_translate_element"></div>
                </li>
            </ul>
        </nav>
        <!-- End sidebar content-->
        <!-- Page Content Holder -->
        <div id="content"> 
            <nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #009900;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <form>
                         <input type="search" placeholder="Search">
                    </form>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF; color: #009900; border-color: #009900;">
                        <i class="fas fa-align-justify"></i>
                    </button> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <font color="#FFFFFF" data-toggle="tooltip" data-placement="bottom" title="Days left before account ends." style="font-size:18px"> Account Days:</font> <span class="badge badge-warning"> 9 </span>  
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-plus" data-toggle="tooltip" data-placement="bottom" title="Kunnecs" style="color: #FFFFFF;"></i> 
                                            <span1 class="badge badge-danger"> 24</span1>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fas fa-bell" data-toggle="tooltip" data-placement="bottom" title="Notifications" style="color: #FFFFFF;"></i> 
                                            <span1 class="badge badge-danger"> 15</span1>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope" data-toggle="tooltip" data-placement="bottom" title="Main messages"></i> 
                                            <span1 class="badge badge-danger"> 4</span1>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-lg-12 pr-lg-2">
                <!-- <div class="card mb-3 mt-3 mt-lg-0">
                    <div class="card-body fs--1">
                        <div class="media"><span class="fa fa-bolt fs-0 text-warning"></span>
                        <div class="media-body ml-2">
                            <a class="font-weight-semi-bold" href="#">Kunnec Announcements:  
                                <span1 class="badge badge-danger"> 4</span1>
                            </a>
                        </div>
                        </div>
                    </div> -->
                </div>
                <!-- Mid Content -->
                @yield('content')
                <!-- End Mid Content -->

            </div>
        </div>
        <!-- Page Content Holder End -->
    </div>
    <!-- End Wrapper -->

    <!-- End files  -->
    <!-- Sidebar Toggle -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('libs/@fortawesome/all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user-dash/js/sbt.js') }}"></script>
    @yield('additional-js')
</body>
</html>