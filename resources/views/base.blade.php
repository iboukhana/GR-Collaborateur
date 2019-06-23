<!DOCTYPE html>
<html lang="en-US">


<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
	<title>Gestion des collaborateurs</title>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<link href="{{asset('assets/plugins/DataTables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href ="{{asset('assets/plugins/datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href ="{{asset('assets/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/regular.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/SQLI-logoc.ico') }}" />

</head>

<body>
        <div id="app">
<div id="page-container">
<nav id="sidebar" class="sidenav">
<div class="sidebar-wrapper scrollbar-inner">
<div class="profile-sidebar">
<div class="avatar">
<img src="{{asset('assets/images/profiles/utilisateur.png')}}" alt="">
</div>
<div class="profile-name">
Jane Doe
<button class="btn-prof" type="button" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-ellipsis-v"></i>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#"><span class="icon ti-user mr-3"></span>Profile</a>
<a class="dropdown-item" href="#"><span class="icon ti-email mr-3"></span>Inbox</a>
<a class="dropdown-item" href="#"><span class="icon ti-settings mr-3"></span>Settings</a>
<a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="icon ti-power-off mr-3"></span>Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>
</div>
<div class="profile-title">
Administrator</div>
</div>
      <ul class="main-menu" id="menus">
        <li class="header">interface Utilisateur</li>				
            <li>
                <a class="pr-mn collapsed" data-toggle="collapse" href="#uielements" aria-expanded="true">
                <span class="icon ti-notepad"></span>Collaborateur
                </a>
                <ul id="uielements" class="collapse" data-parent="#menus">
                    <li><a href='{{ url('collaborateur/index')}}'>Liste Collaborateur</a></li>
                    <li><a href='{{ url('collaborateur/create')}}'>Ajout Collaborateur</a></li>

                </ul>
            </li>
            <li>
                <a class="pr-mn collapsed" data-toggle="collapse" href="#components" aria-expanded="true">
                <span class="icon ti-notepad"></span>Gestion des reunion
                </a>
                <ul id="components" class="collapse" data-parent="#menus">
                     <li><a href="{{ url('collaborateur/reunion/calendrier')}}"> Calendrier</a></li>
                    <li><a href="{{ url('collaborateur/reunion/liste')}}">Liste des reunion</a></li>
                    <li><a href="{{ url('collaborateur/reunion/create')}}"> Planifier une reunion</a></li>

                </ul>
            </li>
             <li>
                <a class="pr-mn collapsed" data-toggle="collapse" href="#autres" aria-expanded="true">
                <span class="icon ti-notepad"></span>Autres
                </a>
                <ul id="autres" class="collapse" data-parent="#menus">
                    <li><a href="{{ url('poste/create')}}"> Poste</a></li>
                    <li><a href="{{ url('projet/create')}}">Projet</a></li>
                    <li><a href="{{ url('responsable/create')}}">Responsable</a></li>
                    <li><a href="{{ url('CollaborateurController@Listeprojet')}}">ListeProjet</a></li>



                </ul>
            </li>
    </ul>
</nav>
<header id="page-header" class="pageheader">
<div class="content-header"><div class="navbar-header">
<button type="button" class="btn-bars btn">
<span class="ti-menu"></span>
</button><div class="app-title">
<img src="{{ asset('img/SQLI-logo.png') }}" alt="SQLI">
</div><div class="mobile-nav">
<button class="btn" type="button" id="mobileBtn">
<i class="ti-layout-grid2-alt"></i></button>
</div></div>
<ul class="nav navbar-nav navbar-right"><li class="dropdown dropdown-search">
<button class="btn search-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="ti-search"></span></button>
<div class="dropdown-menu dropdown-search-container">
<div class="search-container">
<span class="ti-search"></span>
<input type="text" placeholder="Search" autocomplete="off"></div>
</div><div class="search-expand-container">

</li><li class="dropdown dropdown-help">
<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="ti-help"></span>
</button><div class="dropdown-menu dropdown-help-menu">
<div class="dropdown-header">Help & Support</div>
<ul class="help-list" id="helps"><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help1" aria-expanded="true"><span class="ti-user"></span>Profile settings
</a><ul id="help1" class="collapse" data-parent="#helps">
<li><span class="icon ti-panel"></span>
<div class="ctn-info">Das yurio samiun kareo san<br>
<a href="#">Use activity log</a></div>
</li><li><span class="icon ti-save-alt"></span>
<div class="ctn-info">Standard cus imorasun ko ganiu kobe kobe<br>
<a href="#">View more</a></div>
</li><li><span class="icon ti-reload"></span>
<div class="ctn-info">Feel sami qor tay vix<br>
<a href="#">View more</a></div>
</li></ul></li><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help2" aria-expanded="true">
<span class="ti-email"></span>Who can contact me?
</a><ul id="help2" class="collapse" data-parent="#helps">
<li><span class="icon ti-panel"></span><div class="ctn-info">
Hal pertama yang mesti diingat adalah bagaimana kita bisa survive<br>
<input type="text" class="form-control form-control-sm" placeholder="youremail@example.com"></div>
</li>
</ul>
</li><li>
<a class="pr-help collapsed" data-toggle="collapse" href="#help3" aria-expanded="true">
<span class="ti-na"></span>How to block someone?</a>
<ul id="help3" class="collapse" data-parent="#helps"><li>
<span class="icon ti-panel"></span>
<div class="ctn-info">Hal pertama yang mesti diingat adalah bagaimana kita bisa survive<br>
<a href="index-2.html">Find out more</a></div>
</li></ul>
</li></ul>
<div class="dropdown-footer">
<a href="javascript:void(0)">see more settings</a></div>
</div></li><li class="dropdown dropdown-notifications">
<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
<span class="ti-bell"></span><span class="badge badge-pill badge-danger">5</span>
</button><div class="dropdown-menu">
<div class="dropdown-header">Notifications (5)</div>
<div class="list-group notification-list scrollbar-inner">
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-primary"><i class="fa fa-comment"></i>
</div><div class="notif-info">
<strong>Aaron Andriy</strong> commented your status
<span>1 hour ago</span></div>
<div class="unread"></div>
</a><a href="#" class="list-group-item list-group-item-action">
<div class="notif-icon">

</div><div class="notif-info">
<strong>Kyllian Mbase</strong> send you a message
<span>2 hour ago</span></div>
<div class="read"></div></a>
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-success"><i class="fa fa-check"></i>
</div><div class="notif-info">Your setting was approved
<span>3 hour ago</span>
</div>
<div class="unread"></div></a>
<a href="#" class="list-group-item list-group-item-action active">
<div class="notif-icon bg-info"><i class="fa fa-image"></i>
</div><div class="notif-info">You changed your profile picture
<span>3 hour ago</span></div>
<div class="unread"></div></a>
<a href="#" class="list-group-item list-group-item-action">
<div class="notif-icon bg-warning"><i class="fa fa-envelope"></i>
</div><div class="notif-info">Your mailbox critical quota
<span>5 hour ago</span>
</div>
<div class="read"></div></a>
<a href="#" class="list-group-item list-group-item-action">
<div class="notif-info">
<strong>Chris Wilox</strong> tagged you
<span>7 hour ago</span>
</div><div class="read"></div></a>
</div><div class="dropdown-footer">
<a href="javascript:void(0)">see all</a></div>
</div>
</li>
</div></header><aside id="right-sidebar" class="r_sidebar">
<div class="content-wrapper"><a href="javascript:void(0)" class="close-btn">
<span class="ti-close"></span>
</a><ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="today-tab" data-toggle="tab" href="#today" aria-expanded="true">Today</a></li>
<li class="nav-item"><a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting">Setting</a>
</li></ul><div class="tab-content sidebar-wrapper scrollbar-inner" id="myTabContent">
<div class="tab-pane fade show active" id="today">
<div class="today-date"><span class="strong"><span id="prMonth"></span> <span id="prDate"></span></span>, <span id="prYear"></span>
<span id="prDay"></span>
</div><div class="block-tab">
<div class="block-title"><span class="ti-time"></span> Schedule
</div><ul class="schedule-list list-unstyled">
<li>
<div class="time">
09.00<span>AM</span></div><div class="point"></div>
<div class="schedule-info">
Briefing with product division
<span class="location"><span class="ti-location-pin"></span> New York, NA</span>
</div></li>
<li>
<div class="time">11.00<span>AM</span>
</div>
<div class="point"></div>
<div class="schedule-info">
Meeting with client
<span class="location"><span class="ti-location-pin"></span> Client office</span>
</div></li>
<li><div class="time">
01.30<span>PM</span></div>
<div class="point"></div><div class="schedule-info">
Project commisioning<span class="location"><span class="ti-location-pin"></span> Office</span>
</div></li>
<li><div class="time">
04.00<span>AM</span></div>
<div class="point"></div><div class="schedule-info">
Public discussion at office<span class="location"><span class="ti-location-pin"></span> Cafetaria</span>
</div></li>
</ul></div><div class="block-tab">
<div class="block-title"><span class="ti-flag"></span> Activity Log
</div><ul class="activity-list list-unstyled">
<li><div class="icon">
<span class="ti-image"></span>
</div><div class="log-info">
Photo profile has been updated<small>2 min ago</small>
</div></li>
<li><div class="icon"><span class="ti-email"></span>
</div><div class="log-info">
New email to <strong>John Cenna</strong> sent<small>4 hrs ago</small>
</div></li><li>
<div class="icon"><span class="ti-email"></span>
</div>
<div class="log-info">You compose new email
<small>6 hrs ago</small></div>
</li><li>
<div class="icon">
<span class="ti-email"></span></div>
<div class="log-info">You compose new email
<small>1 day ago</small></div>
</li></ul>
</div></div><div class="tab-pane fade" id="setting">
<ul class="setting-list list-unstyled">
<li class="header">
Main system</li>
<li><div class="setting-name">
Notifications</div>
<div class="switch"><input type="checkbox" class="js-switch" data-size="small" checked />
</div></li>
<li>
<div class="setting-name">
Auto updates
</div>
<div class="switch">
<input type="checkbox" class="js-switch" />
</div>
</li>
<li><div class="setting-name">
Location
</div><div class="switch">
<input type="checkbox" class="js-switch" data-size="small" checked />
</div></li>
<li class="header">Assistant
</li><li>
<div class="setting-name">
Show Assistant</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" />
</div>
</li>
<li class="header">
Appearances
</li>
<li>
<div class="setting-name">
Save history
</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" checked />
</div>
</li>
<li>
<div class="setting-name">
Quick results
</div>
<div class="switch">
<input type="checkbox" class="js-switch" data-size="small" />
</div></li>
</ul>
</div></div></div>		

                                    
</aside>
<main id="main-container">
    <div class="content">
        @yield('content')
    </div>
</main>
<footer id="page-footer" class="pagefooter"><div class="content">
<div class="row">
<div class="copyright col-sm-12 col-md-12 col-lg-6">
&copy; 2018 Ayoub - SQLI stage 2018</div><div class="footer-nav col-sm-12 col-md-12 col-lg-6">
</div></footer></div>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/holder.js')}}"></script>
<script src="{{asset('assets/js/ajout.js')}}"></script>
<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/datepicker/locales/bootstrap-datepicker.fr.min.js')}}"></script>
<script src="{{asset('assets/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/pages/table-data.js')}}"></script>
<script src="{{asset('assets/js/formulaire.js')}}"></script>
<script src="{{asset('assets/js/donnees.js')}}"></script>
</div>
</body>
</html>