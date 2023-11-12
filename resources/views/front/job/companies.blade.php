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
  <section class="blog-wrapper sect-pt4" style="direction: rtl;" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
     
          <div class="box-comments" style="direction: rtl;">
            <div class="title-box-2">
              <h4 class="title-comments title-left" style="text-align: right;"> اسماء الشركات </h4>
            </div>
            <table class="table table-hover" style="text-align: right;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">لوجو الشركة</th>
                  <th scope="col">اسم الشركة</th>
                  <th scope="col">النوع</th>
                  <th scope="col">رابط التقديم</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($companies as $company)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
               
                  <td>
                    <img src="{{( $company->logo!== null)? asset('images/'.$company->logo):asset('front/img/x.png')}}" style="margin-left: 20px;width: 60px;height: 60px; "  alt="">

                  </td>
                  <td>{{$company->name}}</td>
                  <td>{{$company->type}}</td>
                  <td>
                    <a href="{{$company->link}}" target="_blank">{{$company->link}}</a>
                    </td>
           
                </tr>
                @endforeach
              
            
              </tbody>
            </table>
          </div>
      
        </div>
     
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  @endsection