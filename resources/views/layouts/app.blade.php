<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <link rel="shortcut icon" href="/img/icons/icon-48x48.png" />
        <title> Monitoring System </title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="index.html">
                        <span class="align-middle">Monitoring System</span>
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Хуудас
                        </li>
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="/home">
                                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Хянах самбар</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main">
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle d-flex">
                        <i class="hamburger align-self-center"></i>
                    </a>
                    <form class="d-none d-sm-inline-block">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control" placeholder="Хайлт..." aria-label="Search">
                            <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                            </button>
                        </div>
                    </form>
                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i>
                                </a>
                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                                    <img src="/img/avatars/avatar-6.png" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">{{Auth::user()->name ?? 'Хэрэглэгч'}}</span>
                                </a>
                                @if(!Auth::guest())
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Профайл </a>
                                   
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                                   
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="log-out"></i> Гарах</a>
                                </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('content')
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-left">
                                <p class="mb-0">
                                    <a href="#" class="text-muted"><strong>Monitoring system {{now()->format('Y')}} </strong></a> &copy;
                                </p>
                            </div>
                            <!--
                            <div class="col-6 text-right">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Support</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Help Center</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Privacy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Terms</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="/js/app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/moment.js"></script>
        <script type="text/javascript" src="/js/live.min.js"></script>
        <script type="text/javascript">
            moment.locale('mn');
        </script>
        @yield('javascript')
    </body>
</html>