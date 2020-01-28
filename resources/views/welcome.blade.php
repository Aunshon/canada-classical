@extends('layouts.siteApp')


@section('content')


    <!-- ===================================
                about start
======================================== -->

    <section id="about-part">
        <div class="container">
            @foreach ($allAbout as $item)
            <div class="row">

                <div class="col-lg-6">
                    <img src="{{asset("uploads/about")}}/{{$item->photo}}" alt="about">
                </div>
                <div class="col-lg-6">
                    <h1>{{$item->titie}}</h1>
                    <p>{{$item->dis}}</p>
                </div>
            </div>
            @endforeach
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
                @foreach ($ExperienceCanada as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="exitem">
                        <div class="img">
                            <a href="{{url('ExperienceCanada/Details')}}/{{$item->id}}"><img src="{{asset('uploads/canada')}}/{{$item->photo}}" alt="ex1"></a>
                        </div>
                        <div class="text">
                            <h2><a href="{{url('ExperienceCanada/Details')}}/{{$item->id}}">{{$item->title}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach

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
            @foreach ($ExperienceTheWorld as $item)
            <div class="col-lg-3 col-sm-6 mt-sm-3">
                <div class="world-item">
                    <a href="{{url('ExperienceCanada/Details')}}/{{$item->id}}"><img src="{{asset('uploads/world')}}/{{$item->photo}}" alt="ex1"></a>
                    <div class="overlay">
                        <div class="text">
                            <p>{{$item->titie}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                @foreach ($Partner as $item)
                <div class="img">
                    <a href="{{url('Partner/Details')}}/{{$item->id}}"><img src="{{asset('uploads/partner')}}/{{$item->photo}}" alt="partner1"></a>
                    <h3>{{$item->titie}}</h3>
                </div>
                @endforeach
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

        @foreach ($Faq as $f)

        <div class=" col-sm-6 col">
            <h3>{{$f->title}}</h3>
            <div class="accordion" id="accordionExample">
                @foreach ($SubFaq as $s)

                @if ($f->id == $s->faq)
                <div class="card">
                  <div class="card-header" id="headingOne">

                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$s->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$s->subTitle}}
                        <div class="round">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                          </div>
                      </button>
                    </h2>
                  </div>
                  @if ($loop->iteration == 1)
                        <div id="collapse{{$s->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            {{$s->dis}}
                            </div>
                        </div>
                        </div>
                  @else
                            <div id="collapse{{$s->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      {{$s->dis}}
                    </div>
                  </div>
                </div>
                  @endif
                 @endif

                @endforeach

                </div>
        </div>
        @endforeach

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
        @foreach ($Contact as $item)
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <h3>contact</h3>
                <p class="address">{{$item->title}}</p>
                <p class="tel"><b>T:</b> {{$item->numOne}}</p>
                <p class="tel"><b>T:</b> {{$item->numTwo}}</p>
                <p class="tel">{{$item->email}}</p>
            </div>
            <div class="col-lg-9 col-sm-6">
                <iframe src="{{$item->mapLocaiton}}" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            {{-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41306296.48766045!2d-130.17484359298257!3d50.81011405904711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2z4KaV4Ka-4Kao4Ka-4Kah4Ka-!5e0!3m2!1sbn!2sbd!4v1579805023997!5m2!1sbn!2sbd --}}
        </div>
        @endforeach
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

    <form method="POST" action="{{route('saveContactForm')}}">
        @csrf
      <div class="container">
        <div class="title">
          <h1>contact form</h1>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <input type="text" placeholder="FIRST NAME" name="fname">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="LAST NAME" name="lname">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="INDIVIDUAL/ORGANIGATION" name="ind">
          </div>
          <div class="col-lg-4">
            <input type="email" placeholder="EMAIL" name="email">
          </div>
          <div class="col-lg-4">
            <input type="email" placeholder="CONFIRM EMAIL" name="cemail">
          </div>
          <div class="col-lg-4">
            <input type="text" placeholder="TELEPHONE" name="tele">
          </div>
          <div class="col-lg-12">
            <div class="interest">
              <p>(menu):interest</p>
              <input type="radio" id="one" name="menu" value="About">
              <label for="one">About</label>
              <input type="radio" id="two" name="menu" value="Experience in canada">
              <label for="two">Experience in canada</label>
              <input type="radio" id="three" name="menu" value="Experience the world">
              <label for="three">Experience the world</label>
              <input type="radio" id="four" name="menu" value="Partner with us">
              <label for="four">Partner with us</label>
              <input type="radio" id="five" name="menu" value="Other category">
              <label for="five">Other category</label>
            </div>
          </div>
          <div class="col-lg-12">
            <textarea placeholder="TYPE IN YOUR MESSSAGE" name="msg"></textarea>
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

@endsection
