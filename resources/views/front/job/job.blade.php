@extends('layouts.front')
@section('content')

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(img-3.jpg);height: 100px;">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4"> </h2>
          
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

    <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="post-box" style="direction: rtl; text-align: right;">
            <div class="post-thumb" style="text-align: center">
              <img src="{{asset('images/'.$job->logo)}}" class="img-fluid" alt="">
            </div>
            <div class="post-meta" >
              <h1 class="article-title"> {{$job->title}}</h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"> {{$job->company_name}}</a>
                </li>
                
              </ul>
            </div>
            <div class="article-content">
            
              <blockquote class="blockquote">
                <p class="mb-0"> {!!$job->description!!} </p>
              </blockquote>
              <p>

                
              </p>
            </div>
            <br>
            <a href="{{$job->link}}" target="_blank" class="btn btn-primary"> زيارة الصفحة الرسمية للشركة</a>

          </div>
       
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

@endsection