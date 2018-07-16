<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Centaurus - Bootstrap Admin Template</title>

    <script type="text/javascript">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1419364062,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok2v=1613a3a185/"},atok:"1fca8a26fb9678bbb4b5c54c34e227b9",petok:"08e52c5dd12ae1e96de2585c39cff0240cf98c14-1420553925-1800",zone:"adbee.technology",rocket:"0",apps:{"ga_key":{"ua":"UA-49262924-2","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="http://www.product.com/special///ajax.cloudflare.com/cdn-cgi/nexp/dok2v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel="stylesheet" type="text/css" href="http://www.product.com/special/css/bootstrap/bootstrap.min.css"/>

    <script src="http://www.product.com/special/js/demo-rtl.js"></script>


    <link rel="stylesheet" type="text/css" href="http://www.product.com/special/css/libs/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="http://www.product.com/special/css/libs/nanoscroller.css"/>

    <link rel="stylesheet" type="text/css" href="http://www.product.com/special/css/compiled/theme_styles.css"/>

    <link rel="stylesheet" href="http://www.product.com/special/css/libs/morris.css" type="text/css"/>
    <link rel="stylesheet" href="http://www.product.com/special/css/libs/daterangepicker.css" type="text/css"/>

    <link type="image/x-icon" href="http://www.product.com/special/favicon.png" rel="shortcut icon"/>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://www.product.com/special/js/html5shiv.js"></script>
    <script src="http://www.product.com/special/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        /* <![CDATA[ */
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-49262924-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        (function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
        /* ]]> */
    </script>
</head>
<body>
<div id="theme-wrapper">
    <header class="navbar" id="header-navbar">
        <div class="container">
            <a href="http://www.product.com/special/index.html" id="logo" class="navbar-brand">
                <img src="http://www.product.com/special/img/logo.png" alt="" class="normal-logo logo-white"/>
                <img src="http://www.product.com/special/img/logo-black.png" alt="" class="normal-logo logo-black"/>
                <img src="http://www.product.com/special/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
            </a>
            <div class="clearfix">
                <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a class="btn" id="make-small-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-no-collapse pull-right" id="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="mobile-search">
                            <a class="btn">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="drowdown-search">
                                <form role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fa fa-search nav-search-icon"></i>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="count">8</span>
                            </a>
                            <ul class="dropdown-menu notifications-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item-header">You have 6 new notifications</li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <i class="fa fa-comment"></i>
                                        <span class="content">New comment on ‘Awesome P...</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <i class="fa fa-plus"></i>
                                        <span class="content">New user registration</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="content">New Message from George</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="content">New purchase</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <i class="fa fa-eye"></i>
                                        <span class="content">New order</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="http://www.product.com/special/#">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="count">16</span>
                            </a>
                            <ul class="dropdown-menu notifications-list messages-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item first-item">
                                    <a href="http://www.product.com/special/#">
                                        <img src="http://www.product.com/special/img/samples/messages-photo-1.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <img src="http://www.product.com/special/img/samples/messages-photo-2.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="http://www.product.com/special/#">
                                        <img src="http://www.product.com/special/img/samples/messages-photo-3.png" alt=""/>
                                        <span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="http://www.product.com/special/#">
                                        View all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                        <li class="dropdown profile-dropdown">
                            <a href="http://www.product.com/special/#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://www.product.com/special/img/samples/scarlet-159.png" alt=""/>
                                <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.product.com/special/user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a href="http://www.product.com/special/#"><i class="fa fa-cog"></i>Settings</a></li>
                                <li><a href="http://www.product.com/special/#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                <li><a href="http://www.product.com/special/#"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xxs">
                            <a class="btn">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="page-wrapper" class="container">
        <div class="row">
            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                            <img alt="" src="http://www.product.com/special/img/samples/scarlet-159.png"/>
                            <div class="user-box">
<span class="name">
Welcome<br/>
Scarlett
</span>
                                <span class="status">
<i class="fa fa-circle"></i> Online
</span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="http://www.product.com/special/index.html">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Dashboard</span>
                                        <span class="label label-info label-circle pull-right">28</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-table"></i>
                                        <span>Tables</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/tables.html">
                                                Simple
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/tables-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/users.html">
                                                Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-envelope"></i>
                                        <span>Email</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/email-inbox.html">
                                                Inbox
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/email-detail.html">
                                                Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/email-compose.html">
                                                Compose
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Graphs</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/graphs-morris.html">
                                                Morris &amp; Mixed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/graphs-flot.html">
                                                Flot
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/graphs-dygraphs.html">
                                                Dygraphs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/graphs-xcharts.html">
                                                xCharts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="http://www.product.com/special/widgets.html">
                                        <i class="fa fa-th-large"></i>
                                        <span>Widgets</span>
                                        <span class="label label-success pull-right">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-desktop"></i>
                                        <span>Pages</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/calendar.html">
                                                Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/gallery.html">
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/gallery-v2.html">
                                                Gallery v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/pricing.html">
                                                Pricing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/team-members.html">
                                                Team Members
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/timeline.html">
                                                Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/timeline-grid.html">
                                                Timeline Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/user-profile.html">
                                                User Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/search.html">
                                                Search Results
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/invoice.html">
                                                Invoice
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/intro.html">
                                                Tour Layout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-edit"></i>
                                        <span>Forms</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/form-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/x-editable.html">
                                                X-Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-wizard.html">
                                                Wizard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-wizard-popup.html">
                                                Wizard popup
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-wysiwyg.html">
                                                WYSIWYG
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-summernote.html">
                                                WYSIWYG Summernote
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-ckeditor.html">
                                                WYSIWYG CKEditor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/form-dropzone.html">
                                                Multiple File Upload
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-desktop"></i>
                                        <span>UI Kit</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/ui-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/notifications.html">
                                                Notifications &amp; Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/modals.html">
                                                Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/video.html">
                                                Video
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                                Icons
                                                <i class="fa fa-chevron-circle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="http://www.product.com/special/icons-awesome.html">
                                                        Awesome Icons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.product.com/special/icons-halflings.html">
                                                        Halflings Icons
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/ui-nestable.html">
                                                Nestable List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/typography.html">
                                                Typography
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                                3 Level Menu
                                                <i class="fa fa-chevron-circle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="http://www.product.com/special/#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.product.com/special/#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.product.com/special/#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/maps.html">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Google Maps</span>
                                        <span class="label label-danger pull-right">Updated</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.product.com/special/#" class="dropdown-toggle">
                                        <i class="fa fa-file-text-o"></i>
                                        <span>Extra pages</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="http://www.product.com/special/faq.html">
                                                FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/emails.html">
                                                Email Templates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/login-full.html">
                                                Login Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/registration.html">
                                                Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/registration-full.html">
                                                Registration Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/forgot-password.html">
                                                Forgot Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/forgot-password-full.html">
                                                Forgot Password Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/lock-screen.html">
                                                Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/lock-screen-full.html">
                                                Lock Screen Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/error-404.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/error-404-v2.html">
                                                Error 404 Nested
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/error-500.html">
                                                Error 500
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.product.com/special/extra-grid.html">
                                                Grid
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <ol class="breadcrumb">
                                    <li><a href="http://www.product.com/special/#">Home</a></li>
                                    <li class="active"><span>Widgets</span></li>
                                </ol>
                                <h1></h1>


                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12">
                                <div class="main-box">
                                    <div class="clearfix">
                                        <div class="infographic-box merged merged-top pull-left">
                                            <i class="fa fa-user purple-bg"></i>
                                            <span class="value purple">2.562</span>
                                            <span class="headline">Users</span>
                                        </div>
                                        <div class="infographic-box merged merged-top merged-right pull-left">
                                            <i class="fa fa-money green-bg"></i>
                                            <span class="value green">&dollar;12.400</span>
                                            <span class="headline">Income</span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="infographic-box merged pull-left">
                                            <i class="fa fa-eye yellow-bg"></i>
                                            <span class="value yellow">12.526</span>
                                            <span class="headline">Monthly Visits</span>
                                        </div>
                                        <div class="infographic-box merged merged-right pull-left">
                                            <i class="fa fa-globe red-bg"></i>
                                            <span class="value red">28</span>
                                            <span class="headline">Countries</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="main-box small-graph-box red-bg">
                                    <span class="value">2.562</span>
                                    <span class="headline">Users</span>
                                    <div class="progress">
                                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                    <span class="subinfo">
<i class="fa fa-arrow-circle-o-up"></i> 10% higher than last week
</span>
                                    <span class="subinfo">
<i class="fa fa-users"></i> 29 new users
</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box">
                                    <i class="fa fa-shopping-cart emerald-bg"></i>
                                    <span class="headline">Purchases</span>
                                    <span class="value">{{$count}}</span>
                                </div>
                            </div>
                        </div>
                        <!--  -->






                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <h2>Products</h2>
                                    </header>
                                    <div class="main-box-body clearfix">
                                        <ul class="widget-products">
                                            @foreach($nums as $num)
                                                <li>
                                                    @if($num->ispay==0)
                                                        <a href="payfor?id={{$num->order_num}}">
                                        <span class="img">
                                         {{$num->company}}公司
                                        </span>
                                                            <span class="product clearfix">
                                        <span class="name">
                                        订单号:{{$num->order_num}}
                                            @if($num['ispay']==0)
                                                <span class="label label-warning">未支付</span>
                                            @elseif($num['ispay']==1)
                                                <span class="label label-success">支付成功</span>
                                            @else


                                                <span class="label label-danger">支付失败</span>

                                            @endif
                                        </span>
                                        <span class="price">
                                        <i class="fa fa-money"></i> &dollar;{{$num->money}}
                                        </span>
                                                                @if($num->create_time)
                                                                    <span >
                                        <i class="fa fa-certificate"></i> 下单时间：{{date("Y:m:d H:i:s",$num->create_time)}}
                                        </span>
                                                                @endif

                                                                <span >
                                        <i class="fa fa-certificate"></i> 订单类型：{{$num->name}}
                                        </span>

                                         <span >
                                        <i class="fa fa-certificate"></i> 支付方式：{{$num->pay_type}}
                                        </span>




                                        </span>



                                                        </a>
                                                    @elseif($num->ispay==1)

                                                        <a href="payinfo?id={{$num->order_num}}">
                                        <span class="img">
                                         {{$num->company}}公司
                                        </span>
                                                            <span class="product clearfix">
                                        <span class="name">
                                        订单号:{{$num->order_num}}
                                            @if($num['ispay']==0)
                                                <span class="label label-warning">未支付</span>
                                            @elseif($num['ispay']==1)
                                                <span class="label label-success">支付成功</span>
                                            @else


                                                <span class="label label-danger">支付失败</span>

                                            @endif
                                        </span>
                                        <span class="price">
                                        <i class="fa fa-money"></i> &dollar;{{$num->money}}
                                        </span>

                                                                @if($num->create_time)
                                                                    <span  class="warranty">
                                        <i class="fa fa-certificate"></i> 下单时间：{{date("Y:m:d H:i:s",$num->create_time)}}
                                        </span>
                                                                @endif

                                                                <span >
                                        <i class="fa fa-certificate"></i> 订单类型：{{$num->name}}
                                        </span>

                                         <span >
                                        <i class="fa fa-certificate"></i> 支付方式：{{$num->pay_type}}
                                        </span>




                                        </span>



                                                        </a>
                                                    @elseif($num->ispay==2)

                                                        <a href="sms?id={{$num->company}}">
                                        <span class="img">
                                         {{$num->company}}公司
                                        </span>
                                                            <span class="product clearfix">
                                        <span class="name">
                                        订单号:{{$num->order_num}}
                                            @if($num['ispay']==0)
                                                <span class="label label-warning">未支付</span>
                                            @elseif($num['ispay']==1)
                                                <span class="label label-success">支付成功</span>
                                            @else


                                                <span class="label label-danger">支付失败</span>

                                            @endif
                                        </span>
                                        <span class="price">
                                        <i class="fa fa-money"></i> &dollar;{{$num->money}}
                                        </span>
                                                                @if($num->create_time)
                                                                    <span  class="warranty">
                                        <i class="fa fa-certificate"></i> 下单时间：{{date("Y:m:d H:i:s",$num->create_time)}}
                                        </span>
                                                                @endif

                                                                <span >
                                        <i class="fa fa-certificate"></i> 订单类型：{{$num->name}}
                                        </span>

                                         <span >
                                        <i class="fa fa-certificate"></i> 支付方式：{{$num->pay_type}}
                                        </span>




                                        </span>



                                                        </a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
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
<div id="config-tool" class="closed">
    <a id="config-tool-cog">
        <i class="fa fa-cog"></i>
    </a>
    <div id="config-tool-options">
        <h4>Layout Options</h4>
        <ul>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-header"/>
                    <label for="config-fixed-header">
                        Fixed Header
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-sidebar"/>
                    <label for="config-fixed-sidebar">
                        Fixed Left Menu
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-fixed-footer"/>
                    <label for="config-fixed-footer">
                        Fixed Footer
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-boxed-layout"/>
                    <label for="config-boxed-layout">
                        Boxed Layout
                    </label>
                </div>
            </li>
            <li>
                <div class="checkbox-nice">
                    <input type="checkbox" id="config-rtl-layout"/>
                    <label for="config-rtl-layout">
                        Right-to-Left
                    </label>
                </div>
            </li>
        </ul>
        <br/>
        <h4>Skin Color</h4>
        <ul id="skin-colors" class="clearfix">
            <li>
                <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
                </a>
            </li>
            <li>
                <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
                </a>
            </li>
        </ul>
    </div>
</div>

<script src="http://www.product.com/special/js/demo-skin-changer.js"></script>
<script src="http://www.product.com/special/js/jquery.js"></script>
<script src="http://www.product.com/special/js/bootstrap.js"></script>
<script src="http://www.product.com/special/js/jquery.nanoscroller.min.js"></script>
<script src="http://www.product.com/special/js/demo.js"></script>

<script src="http://www.product.com/special/js/jquery-ui.custom.min.js"></script>
<script src="http://www.product.com/special/js/fullcalendar.min.js"></script>
<script src="http://www.product.com/special/js/jquery.slimscroll.min.js"></script>
<script src="http://www.product.com/special/js/raphael-min.js"></script>
<script src="http://www.product.com/special/js/morris.min.js"></script>
<script src="http://www.product.com/special/js/moment.min.js"></script>
<script src="http://www.product.com/special/js/daterangepicker.js"></script>
<script src="http://www.product.com/special/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://www.product.com/special/js/jquery-jvectormap-world-merc-en.js"></script>
<script src="http://www.product.com/special/js/gdp-data.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.min.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.pie.min.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.stack.min.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.resize.min.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.time.min.js"></script>
<script src="http://www.product.com/special/js/flot/jquery.flot.threshold.js"></script>

<script src="http://www.product.com/special/js/scripts.js"></script>
<script src="http://www.product.com/special/js/pace.min.js"></script>

<script>
    $(document).ready(function() {

        $('.conversation-inner').slimScroll({
            height: '352px',
            alwaysVisible: false,
            railVisible: true,
            wheelStep: 5,
            allowPageScroll: false
        });

        //CHARTS
        graphLine = Morris.Line({
            element: 'graph-line',
            data: [
                {period: '2014-01-01', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2014-01-02', iphone: 9778, ipad: 2294, itouch: 2441},
                {period: '2014-01-03', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2014-01-04', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2014-01-05', iphone: 6810, ipad: 1914, itouch: 2293},
                {period: '2014-01-06', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2014-01-07', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2014-01-08', iphone: 15073, ipad: 5967, itouch: 5175},
                {period: '2014-01-09', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2014-01-10', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            lineColors: ['#ffffff'],
            xkey: 'period',
            ykeys: ['iphone'],
            labels: ['iPhone'],
            pointSize: 3,
            hideHover: 'auto',
            gridTextColor: '#ffffff',
            gridLineColor: 'rgba(255, 255, 255, 0.3)',
            resize: true
        });
    });
</script>
</body>
</html>