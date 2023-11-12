@extends('layouts.front')
@section('content')
    
  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url({{asset('front/img/header.png')}}); direction: rtl;">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4" style="text-align: right;">منصة افاق   </h1>
          <p class="intro-subtitle"><span class="text-slider-items"> لدعم الخريجين </span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

<br>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route" style="direction: rtl;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              المسارات
            </h3>
           
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="{{route('training_route')}}">

          <div class="service-box" >
            <div class="service-ico">
              <!-- <span class="ico-circle"><i class="ion-monitor"></i></span> -->
              <span >
                <!-- <span class="ico-circle"> -->
                <img src="{{asset('front/img/1M.png')}}" width="90%" alt="">
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> {{$training->name}} </h2>
              <p class="s-description text-center">
                {{$training->description}}
            </p>
            </div>
          </div>
        </a>

        </div>

        <div class="col-md-4" >
          <a href="{{route('education_route')}}">

          <div class="service-box" >
            <div class="service-ico">
              <!-- <span class="ico-circle"><i class="ion-code-working"></i></span> -->
              <span >
                <img src="{{asset('front/img/2m.png')}}" width="90%" alt="">
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> {{$edu->name}} </h2>
              <p class="s-description text-center">
                {{$edu->description}}
              </p>
            </div>
          </div>
        </a>

        </div>
        <div class="col-md-4">
          <a href="{{route('job_route')}}">

          <div class="service-box" >
            <div class="service-ico">
              <!-- <span class="ico-circle"><i class="ion-camera"></i></span> -->
              <span >
                <img src="{{asset('front/img/3M.png')}}" width="90%" alt="">
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title">{{$job->name}} </h2>
              <p class="s-description text-center">
                {{$job->description}}
              </p>
            </div>
          </div>
        </a>

        </div>
    
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route" style="direction: rtl;text-align: right;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              أحدث المقالات 
            </h3>
        
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($articles as $article)
             <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html">
                  <img src="{{( $article->logo!== null)? asset('images/'.$article->logo):asset('front/img/article.jpg')}}" width="500px" class="img-fluid" alt="">
              </a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  {{-- <h6 class="category">مسار التوظيف</h6> --}}
                </div>
              </div>
              <h3 class="card-title"><a href="{{route('get_articles')}}">{{ $article->name}}  </a></h3>
              <p class="card-description">


              </p>
            </div>
            <div class="card-footer">
             
              {{-- <div class="post-author">
                <a href="#">
                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Valex Company</span>
                </a>
              </div> --}}
             
            </div>
          </div>
        </div>
        @endforeach
       
    
 
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

 
@endsection