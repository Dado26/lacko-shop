<html dir="ltr" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="{{asset('/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/84c500e8b9.js" crossorigin="anonymous"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->                      
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ url('/images/logo-icon.png') }}" alt="homepage" class="dark-logo">
                               <h5>{{ env('APP_NAME') }}</h5>  
                            </b>
                            
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown show ">                        
                                <img src="{{ url('/images/profile-boy.jpg') }}" alt="user" class="rounded-circle" width="50" style="padding-bottom:15px">
                                <span class="ml-2 d-none d-lg-inline-block"> <span class="text-dark">Hello {{ auth()->user()->name }}</span> </span>                        
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar ps-container ps-theme-default ps-active-y" data-sidebarbg="skin6" data-ps-id="a9f90511-df0f-fc1c-ec56-0bd173b59f89">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="in">
                        
                        <li class="nav-small-cap"><span class="hide-menu">Administration</span></li>

                        <li class="sidebar-item {{ (request()->is('gallery') || request()->is('picture*') )  ? 'selected' : '' }}"> <a class="sidebar-link" href="{{ route('index.gallery') }}" aria-expanded="false"> <i class="fas fa-images" style="margin:5px;"> <span class="hide-menu" style="font-family: sans-serif;"> &nbsp;Gallery </span> </i></a>
                        </li>


                        <li class="sidebar-item {{ (request()->is('news*')) ? 'selected' : '' }}"> <a class="sidebar-link" href="{{ route('news.index') }}" aria-expanded="false"><i class="fas fa-edit" style="margin:5px"> <span class="hide-menu" style="font-family: sans-serif;"> &nbsp;News </span> </i> </a> </li>
                        <li class="list-divider"></li>
                       
     
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}" aria-expanded="false"><i class="fas fa-sign-out-alt"><span class="hide-menu" style="font-family: sans-serif;"> &nbsp;Logout</span></i></a></li>
                    </ul>
                   
                </nav>
                <!-- End Sidebar navigation -->
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 780px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 574px;"></div></div></div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="display: block;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Developed by <a href="https://web.artisan.in.rs/">WebArtisan</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script>
        /*
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });

   
    $(".delete-gallery").on("submit", function(){ 
        return confirm("Do you want to delete this gallery? All pictures with in will be deleted");
    });
*/
$(".btn-delete").on("click", function(){
    var $deleteBtn = $(this);

    $.confirm({
        title: 'Confirm!',
        content: 'Do you want to delete this item?',
        buttons: {
            confirm: function () {
                $deleteBtn.closest('form').submit();
            },
            cancel: function () {
                $.alert('Canceled!');
            }
        }
    });
});

$(".btn-delete-gallery").on("click", function(){
    var $deleteBtn = $(this);

    $.confirm({
        title: 'Confirm!',
        content: 'Do you want to delete this gallery? All pictures within will be deleted!!',
        buttons: {
            confirm: function () {
                $deleteBtn.closest('form').submit();
            },
            cancel: function () {
                $.alert('Canceled!');
            }
        }
    });
});
    </script>
    
    
    
    
    


</body>
</html>