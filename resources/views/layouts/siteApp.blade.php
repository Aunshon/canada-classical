

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Education Canada</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("frontEnd/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontEnd/css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("frontEnd/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontEnd/css/responsive.css")}}">
    <link href="{{ asset('assets/tost/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    @yield('css')
</head>

<body>




    <!-- ===================================
                    header-top start
    ======================================== -->

    <section id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="language">
                        <span>English</span>
                        <span>FRENCE</span>
                        <span>mandarin</span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="icon">
                        <a class="contact" href="#">Contact Us</a>
                        @foreach ($allSocial as $item)
                            <a href="{{$item->link}}"><i class="{{$item->icon}}" aria-hidden="true"></i></a>
                        @endforeach

                    </div>

                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="{{asset("uploads/logo")}}/{{$photo}}" alt="">
                    <h1>global education</h1>
                    <p>canada</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i style="color:#fff" class="fa fa-bars" aria-hidden="true"></i>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">about <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">experience canada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">experience world</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">partner with us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                    </ul>
                    <div class="button">
                        <a class="apply" href="#">apply now</a>
                        <a class="login" href="#">log in</a>
                            {{-- @guest
                            <a class="login" href="{{ route('login') }}">log in</a>
                            @else

                                 <a class="login" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @endguest --}}
                        {{-- <a class="login" href="#">log in</a> --}}
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- ===================================
                header-top end
======================================== -->



    <!-- ===================================
                    banner start
======================================== -->

    <section id="banner-part">
        @foreach ($allBaner as $item)
            <div id="ytbg" data-youtube="{{$item->link}}"></div>
        @endforeach
    </section>

    <!-- ===================================
                    banner end
======================================== -->






@yield('content')






<!-- ===================================
                footer start
======================================== -->

  <section id="footer">
    <p>Privacy Notice-Terms & Conditions &copy; GLOBAL EDUCATION CANADA 2020.ALL RIGHTS RESERVED</p>
  </section>

<!-- ===================================
                footer end
======================================== -->




    <script src="{{asset("frontEnd/js/jquery-3.4.1.slim.min.js")}}"></script>
    <script src="{{asset("frontEnd/js/popper.min.js")}}"></script>
    <script src="{{asset("frontEnd/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("frontEnd/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("frontEnd/js/slick.min.js")}}"></script>
    <script src="{{asset("frontEnd/js/jquery.youtube-background.js")}}"></script>
    <script src="{{asset("frontEnd/js/script.js")}}"></script>
    <script src="{{ asset('assets/tost/toastr.min.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

            <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
            <script>
                @if(Session::has('greenStatus'))
                            toastr.success("{{ Session::get('greenStatus') }}");
                @endif
            </script>
            <script>
                @if(Session::has('redStatus'))
                            toastr.error("{{ Session::get('redStatus') }}");
                @endif
            </script>
            <script>
                @if(Session::has('yellowStatus'))
                            toastr.warning("{{ Session::get('yellowStatus') }}");
                @endif
            </script>
            <script>
                @if($errors->all())
                        toastr.error("Error Occared ! Please Check The Form Requirements 😢");
                        @foreach ($errors->all() as $item)
                            toastr.warning("{{ $item }}");
                        @endforeach
                @endif
            </script>
    @yield('js')
</body>

</html>
