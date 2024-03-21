<!DOCTYPE html>
<html>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/brand/favicon.png"
        type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- nucleo icon -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-design-system/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-design-system/assets/css/nucleo-svg.css">
    <!-- Argon CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- Google Tag Manager -->

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs4-4.6.0/dt-2.0.1/fc-5.0.0/fh-4.0.0/r-3.0.0/sl-2.0.0/datatables.min.css"
        rel="stylesheet">
    {{--
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css"> --}}
    <link rel="stylesheet" href="{{asset('a_assets/argon/argon.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1.1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/image-uploader.min.css') }}" type="text/css">
    <style>
        /* * {
            padding: 0;
            margin: 0;
            font-weight: 400 !important;
            font-family: "Noto Sans Myanmar", "Poppins", sans-serif;
        } */

        /* for select 2 */
        .note-group-select-from-files {
            display: none;
        }

        nav .nav-link-text {
            color: black;
        }

        nav .nav-item .nav-link {
            color: black;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            font-size: 10px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            padding-left: 10px !important;
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable,
        .select2-results__option--selectable {
            font-size: 10px !important;
        }

        .g-sidenav-pinned .sidenav {
            max-width: 200px !important;
        }

        @media (min-width: 1200px) {
            .g-sidenav-pinned .sidenav.fixed-left+.main-content {
                margin-left: 200px;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css"
        integrity="sha512-ioRJH7yXnyX+7fXTQEKPULWkMn3CqMcapK0NNtCN8q//sW7ZeVFcbMJ9RvX99TwDg6P8rAH2IqUSt2TLab4Xmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    @yield('css')


</head>

<body>

    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs border-none bg-white"
        style="border-width:0!important">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  d-flex  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    {{-- <h4 class="text-primary">Logo</h4> --}}
                    <img src="{{ asset('/a_assets/image/man.png') }}" style="border-radius: 10px"
                        class="navbar-brand-img" alt="...">
                </a>
                <div class=" ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- sidebar --}}
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('index') }}">
                                <i class="ni ni-atom text-warning"></i>
                                <span class="nav-link-text">Gem</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{ route('index') }}">
                                <i class="ni ni-tv-2 text-warning"></i>
                                <span class="nav-link-text">Metal Price</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link active" href="{{ route('index') }}">
                                <i class="ni ni-app text-warning"></i>
                                <span class="nav-link-text">Jellewery</span>
                            </a>
                        </li>
                        {{-- home page data --}}
                        <li class="nav-item ">
                            <a class="nav-link active" href="#homeData" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-dashboards">
                                <i class="ni ni-diamond text-warning"></i>
                                <span class="nav-link-text  ">Data Entry</span>
                            </a>
                            <div class="collapse" id="homeData">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.gem.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Gems</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.lots.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Lots</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.gold.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Gold</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.categories.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Categories</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.product_types.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Product Types</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.color.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Colour</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.brands.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Brands</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.goldsmith.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">GoldSmith</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.location.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Location</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.counter.index') }}">
                                            <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                                            <span class="sidenav-normal">Counter</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand bg-warning border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    {{-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form> --}}
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{asset('/a_assets/image/man.png')}}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                {{-- <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div> --}}
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

        <!-- Page content -->
        <div class="container-fluid" style="padding: 0 !important">
            <!-- Table -->

            {{-- Content --}}
            @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif
            {{-- @if($errors->any())
            @foreach ($errors->all() as $e )
            <div class="alert alert-danger">{{$e}}</div>
            @endforeach
            @endif --}}
            @yield('content')
            {{-- <div class="card">
                <div>

                </div>

            </div> --}}

        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('a_assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('a_assets/bootstrap/bootstrap.bundl.js')}}"></script>
    <script src="{{asset('a_assets/js/js-cookie.js')}}"></script>
    <script src="{{asset('a_assets/js/scroll.js')}}"></script>
    <script src="{{asset('a_assets/js/scroll-lock.js')}}"></script>
    <script src="{{asset('a_assets/argon/argon.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('/assets/js/tbl-responsive.js') }}"></script>

    <script src="https://cdn.datatables.net/v/bs4-4.6.0/dt-2.0.1/fc-5.0.0/fh-4.0.0/r-3.0.0/sl-2.0.0/datatables.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/image-uploader.min.js') }}"></script>
    {{-- ajax setup --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        @if (session() -> has('success'))
            toastr.success("{{session()->get('success')}}");
        @endif

        @if (session() -> has('error'))
            toastr.error("{{session()->get('error')}}");
        @endif
    </script>

    @yield('scripts')


</body>


</html>