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
  <div style="text-align: center; color: #0257b7 !important ; margin-top:30px">
    <h2 style="color: #0257b7">مسار التدريب</h2>
  </div>
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" style="direction: rtl;" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
     
          <div class="box-comments" style="direction: rtl;">
            {{-- <div class="title-box-2">
              <h4 class="title-comments title-left" style="text-align: right;"> مسار التدريب</h4>
            </div> --}}
            <ul style="text-align: right;" class="list-comments">
              @foreach ($trainings as $training)
                     <li>
                <div class="comment-avatar" >
                   <img src="{{( $training->logo!== null)? asset('images/'.$training->logo):asset('front/img/x.png')}}" style="margin-left: 20px;width: 60px;height: 60px; "  alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author"> {{$training->name}}</h4>
                  <p>
                    {{$training->description}}
                  </p>
                  <a href="{{$training->link}}" target="_blank">  زيارة الموقع  </a>
                </div>
              </li>
              @endforeach
           
    
            </ul>
          </div>
      
        </div>
     
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  @endsection