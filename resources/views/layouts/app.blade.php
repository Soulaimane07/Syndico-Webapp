<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/syndico1.png">
    
    <title>
        Syndico | @yield('title')
    </title>

    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>

                        <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="home">
                            <b class="logo">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/syndico.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/syndico.png" alt="homepage" class="light-logo" />
                            </b>
                        </a>
                    </div>
                    
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>

                
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="hna navbar-collapse collapse px-4 " id="navbarSupportedContent">
                    <h3>
                        @if ( Config::get('app.locale') == 'en')

                        {{ __('lang.english')  }}
                        
                        @elseif ( Config::get('app.locale') == 'fr' )
                        
                        {{ __('lang.french')  }}

                        @elseif ( Config::get('app.locale') == 'ar' )

                        {{ __('lang.arabic')  }}

                        @endif
                    </h3>

                    <h4>
                        @if(Auth::user()->is_admin == 1 )
                            <span class="text-success"> {{__('lang.admin')}} </span>
                        @else
                            <span class="text-danger"> {{__('lang.user')}} </span>
                        @endif
                    </h4>

                    <h3>
                        <span> {{ Auth::user()->name }} </span>
                    </h3>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="home"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu"> {{__('lang.dashboard')}} </span></a></li>
                        <li class="list-divider"></li>
                        
                        
                        
                        
                        <li class="nav-small-cap"><span class="hide-menu"> {{__('lang.applications')}} </span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="demandes"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">{{__('lang.demandes')}}
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="contacts"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu"> {{__('lang.contacts')}}</span></a></li>
                        
                        <li class="list-divider"></li>
                        
                        
                        @if(Auth::user()->is_admin == 1 )
                        
                        
                        <li class="nav-small-cap"><span class="hide-menu"> {{__('lang.components')}} </span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu"> {{__('lang.topics')}} </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="navbar" class="sidebar-link"><span
                                            class="hide-menu"> {{__('lang.navbar')}}
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="header" class="sidebar-link"><span
                                            class="hide-menu"> {{__('lang.header')}}
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="aboutus" class="sidebar-link"><span
                                            class="hide-menu"> {{__('lang.aboutus')}}
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="modules" class="sidebar-link"><span
                                        class="hide-menu"> {{__('lang.modules')}}
                                    </span></a>
                                </li>
                                <li class="sidebar-item"><a href="contact" class="sidebar-link"><span
                                        class="hide-menu"> {{__('lang.contact')}}
                                    </span></a>
                                </li>

                                <li class="sidebar-item"><a href="footer" class="sidebar-link"><span
                                        class="hide-menu"> {{__('lang.footer')}}
                                    </span></a>
                                </li>

                                <li class="sidebar-item"><a href="demandez" class="sidebar-link"><span
                                        class="hide-menu"> {{__('lang.demandez')}}
                                    </span></a>
                                </li>

                            </ul>
                        </li>

                        
                        
                        
                        <li class="list-divider"></li>
                        @endif
                        <li class="nav-small-cap"><span class="hide-menu"> {{__('lang.authentication')}} </span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="profile"
                                aria-expanded="false"><i class="icon-user"></i><span
                                    class="hide-menu">{{__('lang.profile')}}
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="users" aria-expanded="false"><i
                                    class="icon-people"></i><span class="hide-menu">{{__('lang.users')}}
                                </span></a>
                        </li>

                        
                        <li class="list-divider"></li>
                        

                        <li class="sidebar-item"> 
                            <a 
                                class="sidebar-link sidebar-link"
                                href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                <i data-feather="log-out" class="feather-icon"></i>
                                <span> {{ __('lang.logout') }} </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
        
            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center text-muted">
                {{__("lang.Mfooter")}}.
            </footer>
        
        </div>

    </div>





    

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>





    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <!--Custom JavaScript -->
    <!--This page plugins -->
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
    
        {{-- <script src="../dist/js/sidebarmenu.js"></script> --}}
        {{-- <script src="../dist/js/custom.min.js"></script> --}}
   



</body>

</html>
