<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2017 10:41:30 GMT -->
<head>

    <!-- Title -->
    <title>Linha Fala Criança</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Linha Fala Criança / UNICEF Mozambique" />
    <meta name="keywords" content="Linha Fala Criança ,UNICEF Mozambique" />
    <meta name="author" content="Linha Fala Criança / UNICEF Mozambique">
    <link rel="icon" href="/img/lfc_logo.png">

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/MetroJs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" integrity="sha256-IPtNBA1od/cGBfXTxYDxuT5+Y2BKy14o6j0FaIXDmYk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">       
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js" integrity="sha256-SHXnnZAbgSEf+OBhDLR7I2mx9vNZAIzPeCGhxRV+VQw=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    {{--<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css"/>--}}
    {{--<link href="/css/select2.css" rel="stylesheet">--}}
    {{--<link href="/css/select2.min.css" rel="stylesheet">--}}
{{--<link href="/css/weather-icons.min.css" rel="stylesheet">--}}


    <!-- Theme Styles -->
    <link href="/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/custom.css" rel="stylesheet" type="text/css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed" style="background-color: #32c787 !important;">
        <nav class="cyan darken-1"  style="background-color: #32c787 !important;">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <a href="index.html"> <img class="" style="vertical-align: middle;width: auto;padding: 10px 5px 4px 0px;height: 42px;" src="/img/lfc_logo_name.png" alt=""></a>
                </div>
                <form class="left search col s6 hide-on-small-and-down">
                    <div class="input-field">
                        <input id="search" type="search" placeholder="Search" autocomplete="off">
                        <label for="search"><i class="material-icons search-icon">search</i></label>
                    </div>
                    <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                </form>
                <ul class="right col s9 m3 nav-right-menu">
                    <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                    <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                    <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                </ul>

                <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                    <li class="notificatoins-dropdown-container">
                        <ul>
                            <li class="notification-drop-title">Today</li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                        <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                        <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                        <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                        <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                        <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-drop-title">Yestarday</li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                        <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                        <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                        <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="search-results">
        <div class="container search-container">
            <div class="row">
                <div class="col s12 search-head">
                    <div class="row">
                        <div class="col s12">
                            <div class="left">
                                <p class="search-results-title">Quick search results</p>
                                <p class="search-filter left">
                                    <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                    <label for="filled-in-box">Google search</label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="res-not-found">No results found</div>
                </div>
                <div class="col s12 m4 search-result-container">
                    <div class="card card-transparent">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <img src="/img/lfc_logo_name.png" alt="" class="circle responsive-img z-depth-1">
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-transparent">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <img src="/img/lfc_logo_name.png" alt="" class="circle responsive-img z-depth-1">
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-transparent">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <img src="/img/lfc_logo_name.png" alt="" class="circle responsive-img z-depth-1">
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 search-result-container">
                    <div class="card card-transparent ">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-transparent">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-transparent">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <span class="z-depth-1 circle search-circle red darken-1">G</span>
                            </div>
                            <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 search-result-container">
                    <div class="card card-transparent">
                        <div class="card-content first">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                        </div>
                        <div class="card-action">
                            <span class="grey-text">Yesterday, 4:56 PM</span>
                        </div>
                    </div>
                    <div class="card card-transparent">
                        <div class="card-content">
                            <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                        </div>
                        <div class="card-action">
                            <span class="grey-text">27 January 2016</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside id="chat-sidebar" class="side-nav white">
        <div class="side-nav-wrapper">
            <div class="col s12">
                <ul class="tabs tab-demo" style="width: 100%;">
                    <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                    <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                </ul>
            </div>
            <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                <p class="right-sidebar-heading">CHAT LIST</p>
                <div class="chat-list">
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">John Doe</p>
                                <span class="chat-message">Hello</span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Tom Simpson</p>
                                <span class="chat-message">How are you?</span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Alan Grey</p>
                                <span class="chat-message">Call me later</span></div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Michael Fisher</p>
                                <span class="chat-message">How's it going?</span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Amily Lee</p>
                                <span class="chat-message">We're good</span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Sandra Smith</p>
                                <span class="chat-message">See you later!</span>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="chat-message">
                        <div class="chat-item">
                            <div class="chat-item-image">
                                <img src="/img/lfc_logo_name.png" class="circle" alt="">
                            </div>
                            <div class="chat-item-info">
                                <p class="chat-name">Sandra Smith</p>
                                <span class="chat-message">Can we meet?</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="chat-sidebar-options">
                    <a href="#" class="left"><i class="material-icons">edit</i></a>
                    <a href="#" class="right"><i class="material-icons">settings</i></a>
                </div>
            </div>
            <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                <p class="right-sidebar-heading">SYSTEM</p>
                <div class="settings-list">
                    <div class="setting-item">
                        <div class="setting-text">Notifications</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="setting-text">Quick Results</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="setting-text">Auto Updates</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="right-sidebar-heading">ACCOUNT</p>
                <div class="settings-list">
                    <div class="setting-item">
                        <div class="setting-text">Offline Mode</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="setting-text">Location</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="setting-text">Show Offline Users</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-item">
                        <div class="setting-text">Save History</div>
                        <div class="setting-set">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <aside id="chat-messages" class="side-nav white">
        <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
        <div class="messages-container">
            <div class="message-wrapper them">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">Lorem Ipsum</div>
            </div>
            <div class="message-wrapper me">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">Integer in faucibus diam?</div>
            </div>
            <div class="message-wrapper them">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
            </div>
            <div class="message-wrapper me">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
            </div>
            <div class="message-wrapper them">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
            </div>
            <div class="message-wrapper me">
                <div class="circle-wrapper"><img src="/img/lfc_logo_name.png" class="circle" alt=""></div>
                <div class="text-wrapper">Duis maximus leo eget massa porta</div>
            </div>
        </div>
        <div class="message-compose-box">
            <div class="input-field">
                <input placeholder="Write message" id="message_compose" type="text">
            </div>
        </div>
    </aside>
    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="/img/{{Auth::user()->avatar}}" class="circle" alt="">
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <p>{{Auth::user()->nome}}</p>
                        <span>{{Auth::user()->email}}<i class="material-icons right">arrow_drop_down</i></span>
                    </a>
                </div>
            </div>
            <div class="sidebar-account-settings">
                <ul>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                    </li>
                    <li class="divider"></li>
                    <li class="no-padding">
                        <a href="{{route('logout')}}" id="logout" type="submit" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                        </li>
                </ul>
            </div>
            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                @if(Auth::user()->role_id=1)
                <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{url('/')}}"><i class="material-icons">home</i>Home</a></li>

                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">account_circle</i>Utilizadores<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-hidden-sidebar.html">Hidden Sidebar</a></li>
                            <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                        </ul>
                    </div>
                </li>
                @elseif(Auth::user()->role_id=2)
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Forms<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-image-crop.html">Image Crop</a></li>
                            <li><a href="form-image-zoom.html">Image Zoom</a></li>
                            <li><a href="form-input-mask.html">Input Mask</a></li>
                            <li><a href="form-select2.html">Select2</a></li>
                        </ul>
                    </div>
                </li>
                    {{--@endif--}}
                @elseif(Auth::user()->role_id=3)
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">grid_on</i>Tables<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="table-static.html">Static Tables</a></li>
                            <li><a href="table-responsive.html">Responsive Tables</a></li>
                            <li><a href="table-comparison.html">Comparison Table</a></li>
                            <li><a href="table-data.html">Data Tables</a></li>
                        </ul>
                    </div>
                </li>
                    {{--@endif--}}
                @else
                <li class="no-padding"><a class="waves-effect waves-grey" href="charts.html"><i class="material-icons">trending_up</i>Charts</a></li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">tag_faces</i>Extra Pages<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="pattern-lock-screen.html">Pattern Lock Screen</a></li>
                            <li><a href="forgot.html">Forgot Password</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </div>
                </li>
                    @endif

            </ul>
            <div class="footer">
                <p class="copyright">© Linha Fala Criança </p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                {{--<a href="#!">Todos os Direitos Reservados</a>--}}
            </div>
        </div>
    </aside>
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">

        @yield('content')

        </div>
        <div class="inner-sidebar">
            <span class="inner-sidebar-title">New Messages</span>
            <div class="message-list">
                <div class="info-item message-item"><img class="circle" src="/img/lfc_logo_name.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
                <div class="info-item message-item"><img class="circle" src="/img/lfc_logo_name.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
                <div class="info-item message-item"><img class="circle" src="/img/lfc_logo_name.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
            </div>
            <span class="inner-sidebar-title">Events</span>
            <span class="info-item">Envato meeting<span class="new badge">12</span></span>
            <div class="inner-sidebar-divider"></div>
            <span class="info-item">Google I/O</span>
            <div class="inner-sidebar-divider"></div>
            <span class="info-item disabled">No more events scheduled</span>
            <div class="inner-sidebar-divider"></div>

            <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
            <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
        </div>
    </main>

</div>
<div class="left-sidebar-hover right"></div>


{{--<!-- Javascripts -->--}}


{{--<script src="/js/jquery-2.2.0.min.js"></script>--}}
{{--<script src="/js/materialize.min.js"></script>--}}
{{--<script src="/js/materialPreloader.min.js"></script>--}}
{{--<script src="/js/alpha.min.js"></script>--}}
{{--<script src="/js/dashboard.js"></script>--}}
{{--<script src="/js/jquery.blockui.js"></script>--}}
{{--<script src="/js/jquery.waypoints.min.js"></script>--}}
{{--<script src="/js/jquery.counterup.min.js"></script>--}}
{{--<script src="/js/jquery.sparkline.min.js"></script>--}}
{{--<script src="/js/chart.min.js"></script>--}}
{{--<script src="/js/jquery.flot.min.js"></script>--}}
{{--<script src="/js/jquery.flot.time.min.js"></script>--}}
{{--<script src="/js/jquery.flot.symbol.min.js"></script>--}}
{{--<script src="/js/jquery.flot.resize.min.js"></script>--}}
{{--<script src="/js/jquery.flot.tooltip.min.js"></script>--}}
{{--<script src="/js/curvedLines.js"></script>--}}
{{--<script src="/js/jquery.peity.min.js"></script>--}}

{{--<script src="/js/select2.min.js"></script>--}}
{{--<script src="/js/form-select2.js"></script>--}}
{{--<script src="/js/form-input-mask.js"></script>--}}
{{--<script src="/js/jquery.inputmask.bundle.js"></script>--}}
{{--<script src="/js/select2.full.min.js"></script>--}}
{{--<script src="/js/init.js"></script>--}}
{{----}}
{{--<script type="text/javascript">--}}

    {{--$(document).ready(function(){--}}
{{--//        $.ajaxSetup({--}}
{{--//            headers: {--}}
{{--//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--//            }--}}
{{--//        });--}}

{{--//        $('#registar-contacto').on('click', function (e) {--}}
{{--//            alert('Heheehehehehy');--}}
{{--//            e.preventDefault();--}}
{{--//--}}
{{--//            var dados = $('#addcontacto').serialize();--}}
{{--//--}}
{{--//            $.ajax({--}}
{{--//                method: 'Post',--}}
{{--//                url: '/registarcontacto',--}}
{{--////                enctype: 'multipart/form-data',--}}
{{--//                data: dados,--}}
{{--//                success: function (data) {--}}
{{--//--}}
{{--//                    if (data) {--}}
{{--//--}}
{{--//                        setTimeout(function(){ Materialize.toast('Registado com Sucesso!', 4000) }, 4000);--}}
{{--//                        $('#addcontacto')[0].reset();--}}
{{--////                        window.location.href = '/';--}}
{{--//                        alert('Salvo com Sucesso!');--}}
{{--//--}}
{{--//                    }--}}
{{--//                    else {--}}
{{--//                        alert(error)--}}
{{--//--}}
{{--//                    }--}}
{{--//                }--}}
{{--//            });--}}
{{--//--}}
{{--//        })--}}

    {{--alert('Script lido com sucesso');--}}
    {{--$(document).on('change','.provincia',function(){--}}
    {{--alert('Changed com sucesso');--}}
    {{--// console.log("hmm its change");--}}

    {{--var prov_id=$(this).val();--}}
    {{--alert(prov_id);--}}
    {{--var div=$(this).parent();--}}

    {{--var op=" ";--}}

    {{--$.ajax({--}}
    {{--type:'get',--}}
    {{--url:'{!!URL::to('findDistrito')!!}',--}}
    {{--data:{'id':prov_id},--}}
    {{--success:function(data){--}}
    {{--//console.log('success');--}}

    {{--//console.log(data);--}}

    {{--//console.log(data.length);--}}
    {{--op+='<option value="0" selected disabled>--Escolhe o Distrito--</option>';--}}
    {{--for(var i=0;i<data.length;i++){--}}
    {{--op+='<option value="'+data[i].id+'">'+data[i].distritonome+'</option>';--}}
    {{--}--}}
    {{--//                   alert(op);--}}
    {{--div.find('.distritonome').html(" ");--}}
    {{--div.find('.distritonome').append(op);--}}
    {{--},--}}
    {{--error:function(){--}}
    {{--alert('erro encontrado');--}}
    {{--}--}}
    {{--});--}}
    {{--});--}}


    {{--$(document).on('change','.distritonome',function(){--}}
    {{--console.log("hmm its change");--}}

    {{--var distr_id=$(this).val();--}}
    {{--// console.log(cat_id);--}}
    {{--var div=$(this).parent();--}}

    {{--var op=" ";--}}

    {{--$.ajax({--}}
    {{--type:'get',--}}
    {{--url:'{!!URL::to('findLocalidade')!!}',--}}
    {{--data:{'id':distr_id},--}}
    {{--success:function(data){--}}

    {{--op+='<option value="0" selected disabled>--Escolhe a Localidade--</option>';--}}
    {{--for(var i=0;i<data.length;i++){--}}
    {{--op+='<option value="'+data[i].id+'">'+data[i].localidadenome+'</option>';--}}
    {{--}--}}

    {{--div.find('.localidadenome').html(" ");--}}
    {{--div.find('.localidadenome').append(op);--}}
    {{--},--}}
    {{--error:function(){--}}

    {{--}--}}
    {{--});--}}
    {{--});--}}

    {{--});--}}
    {{--</script>--}}
{{--<script type="text/javascript">--}}

    {{--$("#case").hide();--}}
    {{--$("#notcase").hide();--}}
    {{--$("#addmorepessoas").hide();--}}
    {{--$("#addmorepessoas1").hide();--}}
    {{--$("#addmorepessoas2").hide();--}}
    {{--function showHidecaso() {--}}
        {{--if(document.getElementById('naocaso').checked) {--}}
            {{--$("#case").show();--}}
            {{--$("#notcase").hide();--}}
            {{--$("#addmorepessoas").hide();--}}
            {{--$("#addmorepessoas1").hide();--}}
            {{--$("#addmorepessoas2").hide()--}}
        {{--} else {--}}
            {{--$("#notcase").show();--}}
            {{--$("#case").hide();--}}
        {{--}--}}
    {{--}--}}

    {{--function addpessoa() {--}}
        {{--if(document.getElementById('addpessoas').checked) {--}}
            {{--$("#addmorepessoas").show();--}}
            {{--$("#addmorepessoas1").show();--}}
            {{--$("#addmorepessoas2").show();--}}
        {{--}else {--}}
            {{--$("#addmorepessoas").hide();--}}
            {{--$("#addmorepessoas1").hide();--}}
            {{--$("#addmorepessoas2").hide();--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}

        {{--$('#registar-contacto').on('click', function (e) {--}}
            {{--alert('Heheehehehehy');--}}
            {{--e.preventDefault();--}}

            {{--var dados = $('#addcontacto').serialize();--}}

            {{--$.ajax({--}}
                {{--method: 'Post',--}}
                {{--url: '/registarcontacto',--}}
{{--//                enctype: 'multipart/form-data',--}}
                {{--data: dados,--}}
                {{--success: function (data) {--}}

                    {{--if (data) {--}}

                        {{--setTimeout(function(){ Materialize.toast('Registado com Sucesso!', 4000) }, 4000);--}}
                        {{--$('#addcontacto')[0].reset();--}}
{{--//                        window.location.href = '/';--}}
                        {{--alert('Salvo com Sucesso!');--}}

                    {{--}--}}
                    {{--else {--}}
                        {{--alert(error)--}}

                    {{--}--}}
                {{--}--}}
            {{--});--}}

        {{--})--}}


    {{--});--}}
{{--</script>--}}
@include('admin.partials.javascript')
</body>

</html>