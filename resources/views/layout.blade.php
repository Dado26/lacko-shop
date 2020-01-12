<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <title>{{ config('app.name') }} - Admin Panel</title>
        <!-- This page css -->
        <!-- Custom CSS -->
        <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">
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
        <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin6">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                        <a href="/admin">
                            <div class="navbar-brand">
                                <!-- Logo icon -->
                                <b class="logo-icon">
                                    <!-- Dark Logo icon -->
                                    <img src="{{ url('/images/logo-icon.png') }}" alt="homepage" class="dark-logo">
                                </b>

                                <span class="logo-text" style="width: 100%; font-size: 25px; margin-left: 12px; font-weight: 400; margin-top: 5px;">
                                    {{ config('app.name') }}
                                </span>
                            </div>
                        </a>
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background: #fff">
                        <ul class="navbar-nav float-left mr-auto ml-3 pl-1"></ul>
                        <ul class="navbar-nav float-right">
                            <li class="nav-item mr-2">
                                <img src="{{ url('/images/profile-boy.jpg') }}" alt="user" class="rounded-circle" width="50" style="padding-bottom:15px">
                                <span class="ml-2 d-none d-lg-inline-block"><span class="text-dark">{{ auth()->user()->name }}</span></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar ps-container ps-theme-default ps-active-y" data-sidebarbg="skin6" data-ps-id="a9f90511-df0f-fc1c-ec56-0bd173b59f89">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="in">

                            <li class="nav-small-cap"><span class="hide-menu">Administration</span></li>

                            <li class="sidebar-item {{ (request()->is('admin/gallery*'))  ? 'selected' : '' }}">
                                <a class="sidebar-link" href="{{ route('index.gallery') }}" aria-expanded="false">
                                    <i class="fas fa-images" style="margin:5px;">
                                        <span class="hide-menu" style="font-family: sans-serif;"> &nbsp;Gallery </span>
                                    </i>
                                </a>
                            </li>

                            <li class="sidebar-item {{ (request()->is('admin/news*')) ? 'selected' : '' }}">
                                <a class="sidebar-link" href="{{ route('news.index') }}" aria-expanded="false">
                                    <i class="fas fa-edit" style="margin:5px">
                                        <span class="hide-menu" style="font-family: sans-serif;"> &nbsp;News </span>
                                    </i>
                                </a>
                            </li>
                            <li class="list-divider"></li>

                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link" href="{{ route('logout') }}" aria-expanded="false">
                                    <i class="fas fa-sign-out-alt"><span class="hide-menu" style="font-family: sans-serif;"> &nbsp;Logout</span></i>
                                </a>
                            </li>
                        </ul>

                    </nav>
                    <!-- End Sidebar navigation -->
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 780px; right: 3px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 574px;"></div>
                    </div>
                </div>
                <!-- End Sidebar scroll-->
            </aside>

            <div class="page-wrapper" style="display: block;">
                <div class="container-fluid">
                    <!-- basic table -->
                    @yield('content')
                </div>

                <footer class="footer text-center text-muted">
                    Developed by <a href="https://web.artisan.in.rs" target="_blank">WebArtisan</a>
                </footer>
            </div>
        </div>

        <script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <!-- apps -->
        <script>
            $(".btn-delete").on("click", function () {
                var $deleteBtn = $(this);

                $.confirm({
                    title: 'Delete',
                    content: 'Are you sure you want to delete selected item?',
                    buttons: {
                        cancel: function () {
                            // $.alert('Canceled!');
                        },
                        confirm: {
                            text: 'Delete',
                            btnClass: 'btn-danger',
                            action: function () {
                                $deleteBtn.closest('form').submit();
                            },
                        },
                    }
                });
            });

            $(".btn-delete-gallery").on("click", function () {
                var $deleteBtn = $(this);

                $.confirm({
                    title: 'Delete',
                    content: "Are you sure? This action will delete gallery with all it's photos.",
                    buttons: {
                        cancel: function () {
                            // $.alert('Canceled!');
                        },
                        confirm: {
                            text: 'Delete',
                            btnClass: 'btn-danger',
                            action: function () {
                                $deleteBtn.closest('form').submit();
                            },
                        },
                    }
                });
            });
        </script>

    </body>
</html>
