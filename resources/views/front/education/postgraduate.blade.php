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

 
  <div class="container">
    <div  style="text-align: center">
      <img src="{{asset('images/'.$postgraduate->logo)}}"   alt="">
    </div>
  </div>
  <!--/ Nav End /-->
  

 
  
  <!--/ Intro Skew Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-right" style="text-align: right; direction:rtl;">
            <h3>
              {{$postgraduate->name}}
            </h3>
            <br>
            <br>
            <p>
              {!!$postgraduate->description!!}
               
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div  style="text-align: right">
        
      
        <a class="btn btn-outline-success" target="_blank" href="{{$postgraduate->link}}">زيارة الموقع الرئيسي</a> <br><br>
        
      </div>
      <div style="text-align: center">
        <a class="btn btn-outline-primary" href="{{asset('images/'.$postgraduate->file)}}" target="_blank" >تحميل ملف الوسائط  </a>

      </div>
    </div>
  </section>
  <!--/ Intro Skew End /-->

<br>
  @endsection