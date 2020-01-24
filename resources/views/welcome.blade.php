            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

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
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

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
      <div id="ytbg" data-youtube="https://www.youtube.com/watch?v=_-StQsHSTz0"></div>
    </section>

    <!-- ===================================
                    banner end
======================================== -->

    <!-- ===================================
                about start
======================================== -->

    <section id="about-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset("frontEnd/images/about.png")}}" alt="about">
                </div>
                <div class="col-lg-6">
                    <h1>about</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum voluptatem, deserunt, iste cumque,
                        mollitia sint id fugiat at necessitatibus itaque perferendis quas labore. Fugit consequatur
                        libero laboriosam iure, perferendis consectetur culpa dolore exercitationem doloremque eaque
                        aspernatur ab unde officia? Unde laborum at magnam quo. Iste, itaque rem! Cumque ut eligendi
                        nisi quisquam accusamus. Dignissimos soluta molestias, voluptatem totam repudiandae possimus
                        illum blanditiis error ex, cumque, maxime officia numquam? Sequi doloremque voluptatem veniam.
                        Veritatis ipsum voluptatum ullam aliquid voluptatibus alias, ex deleniti tempora, nulla illum
                        corrupti, dolore nostrum! Repellat voluptatibus tenetur accusamus et facilis unde cum facere!
                        Necessitatibus optio pariatur vel?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================
                about end
======================================== -->

    <!-- ===================================
                experience start
======================================== -->

    <section id="experience-part">
        <div class="title">
            <h1>Experince canada</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="exitem">
                        <div class="img">
                            <img src="{{asset("frontEnd/images/ex1.png")}}" alt="ex1">
                        </div>
                        <div class="text">
                            <h2><a href="#">study</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="exitem">
                        <div class="img">
                            <img src="{{asset("frontEnd/images/ex2.png")}}" alt="ex1">
                        </div>
                        <div class="text">
                            <h2><a href="#">international experience</a></h2>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="exitem">
                        <div class="img">
                            <img src="{{asset("frontEnd/images/ex3.png")}}" alt="ex1">
                        </div>
                        <div class="text">
                            <h2><a href="#">strong community</a></h2>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="exitem">
                        <div class="img">
                            <img src="{{asset("frontEnd/images/ex4.png")}}" alt="ex1">
                        </div>
                        <div class="text">
                            <h2><a href="#">academics</a></h2>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- ===================================
                experience end
======================================== -->

<!-- ===================================
                world start
======================================== -->

<section id="world-part">
    <div class="title">
        <h1>Experienc the world</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mt-sm-3">
                <div class="world-item">
                    <img src="{{asset("frontEnd/images/ex1.png")}}" alt="ex1">
                    <div class="overlay">
                        <div class="text">
                            <p>study</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-3">
                <div class="world-item">
                    <img src="{{asset("frontEnd/images/ex2.png")}}" alt="ex1">
                    <div class="overlay">
                        <div class="text">
                            <p>international experirence</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-3">
                <div class="world-item">
                    <img src="{{asset("frontEnd/images/ex3.png")}}" alt="ex1">
                    <div class="overlay">
                        <div class="text">
                            <p>stronger community</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-3">
                <div class="world-item">
                    <img src="{{asset("frontEnd/images/ex4.png")}}" alt="ex1">
                    <div class="overlay">
                        <div class="text">
                            <p>academics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================
                world end
======================================== -->

<!-- ===================================
                partner start
======================================== -->

<section id="partner-part">
    <div class="overlay">

        <div class="title">
            <h1>partner with us</h1>
        </div>

        <div class="container">
            <div class="responsive">
                <div class="img">
                    <img src="{{asset("frontEnd/images/partner1.png")}}" alt="partner1">
                    <h3>private sectior</h3>
                </div>
                <div class="img">
                    <img src="{{asset("frontEnd/images/partner1.png")}}" alt="partner1">
                    <h3>private sectior</h3>
                </div>
                <div class="img">
                    <img src="{{asset("frontEnd/images/partner1.png")}}" alt="partner1">
                    <h3>private sectior</h3>
                </div>
                <div class="img">
                    <img src="{{asset("frontEnd/images/partner1.png")}}" alt="partner1">
                    <h3>private sectior</h3>
                </div>
                <div class="img">
                    <img src="{{asset("frontEnd/images/partner1.png")}}" alt="partner1">
                    <h3>private sectior</h3>
                </div>
            </div>
            </div>


    </div>
</section>
<!-- ===================================
                partner end
======================================== -->

<!-- ===================================
                faq start
======================================== -->

<section id="faq-part">
    <div class="title">
        <h1>faq</h1>
    </div>
    <div class="container">
       <div class="row">
        <div class=" col-sm-6 col">
            <h3>getting started</h3>
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">

                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group
                        <div class="round">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                          </div>
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingOne">

                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                          Collapsible Group
                          <div class="round">
                              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                            </div>
                        </button>
                      </h2>
                    </div>

                    <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingOne">

                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                          Collapsible Group
                          <div class="round">
                              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                            </div>
                        </button>
                      </h2>
                    </div>

                    <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingOne">

                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                          Collapsible Group
                          <div class="round">
                              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                            </div>
                        </button>
                      </h2>
                    </div>

                    <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                      </div>
                    </div>
                  </div>

        </div>

       </div>
       <div class=" col-sm-6 col">
        <h3>account and profile setting</h3>
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">

                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group
                    <div class="round">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                      </div>
                  </button>
                </h2>
              </div>

              <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">

                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group
                      <div class="round">
                          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </div>
                    </button>
                  </h2>
                </div>

                <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingOne">

                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group
                      <div class="round">
                          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </div>
                    </button>
                  </h2>
                </div>

                <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingOne">

                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group
                      <div class="round">
                          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </div>
                    </button>
                  </h2>
                </div>

                <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
                  </div>
                </div>
              </div>

    </div>

   </div>
   <div class=" col-sm-6 col">
    <h3>experience canada</h3>
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">

            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group
                <div class="round">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                  </div>
              </button>
            </h2>
          </div>

          <div id="collapse8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse10" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse11" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>

</div>

</div>
<div class=" col-sm-6 col">
    <h3>experience canada</h3>
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">

            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group
                <div class="round">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                  </div>
              </button>
            </h2>
          </div>

          <div id="collapse12" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse13" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse14" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse15" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>

</div>

</div>
<div class=" col-sm-6 col">
    <h3>experience canada</h3>
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">

            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group
                <div class="round">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                  </div>
              </button>
            </h2>
          </div>

          <div id="collapse16" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse17" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse18" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">

              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group
                  <div class="round">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                    </div>
                </button>
              </h2>
            </div>

            <div id="collapse19" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunc
              </div>
            </div>
          </div>

</div>

</div>
    </div>
</section>

<!-- ===================================
                faq end
======================================== -->

<!-- ===================================
                contact start
======================================== -->
<section id="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <h3>contact</h3>
                <p class="address">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, distinctio?</p>
                <p class="tel"><b>T:</b> +90 (212) 400 00 00</p>
                <p class="tel"><b>T:</b> +90 (212) 400 00 00</p>
                <p class="tel">info@gmail.com</p>
            </div>
            <div class="col-lg-9 col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41306296.48766045!2d-130.17484359298257!3d50.81011405904711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2z4KaV4Ka-4Kao4Ka-4Kah4Ka-!5e0!3m2!1sbn!2sbd!4v1579805023997!5m2!1sbn!2sbd" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>
<!-- ===================================
                contact end
======================================== -->

<!-- ===================================
                form part start
======================================== -->

<section id="form">
  <div class="overlay">

    <form>
      <div class="container">
        <div class="title">
          <h1>contact form</h1>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <input type="text" placeholder="FIRST NAME">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="LAST NAME">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="INDIVIDUAL/ORGANIGATION">
          </div>
          <div class="col-lg-4">
            <input type="email" placeholder="EMAIL">
          </div>
          <div class="col-lg-4">
            <input type="email" placeholder="CONFIRM EMAIL">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="TELEPHONE">
          </div>
          <div class="col-lg-12">
            <div class="interest">
              <p>(menu):interest</p>
              <input type="radio" id="one" name="menu">
              <label for="one">about</label>
              <input type="radio" id="two" name="menu">
              <label for="two">experienc in canada</label>
              <input type="radio" id="three" name="menu">
              <label for="three">experienc the world</label>
              <input type="radio" id="four" name="menu">
              <label for="four">partner with us</label>
              <input type="radio" id="five" name="menu">
              <label for="five">other category</label>
            </div>
          </div>
          <div class="col-lg-12">
            <textarea placeholder="TYPE IN YOUR MESSSAGE"></textarea>
          </div>
          <div class="col-lg-12">
            <button type="submit">send</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<!-- ===================================
                form part end
======================================== -->

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
</body>

</html>
