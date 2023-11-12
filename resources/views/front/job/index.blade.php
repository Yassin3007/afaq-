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
    <h2 style="color: #0257b7">مسار التوظيف</h2>
  </div>
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" style="direction: rtl;" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
     
          <div class="box-comments" style="direction: rtl;">
            <div class="title-box-2">
              <h4 class="title-comments title-left" style="text-align: right;"> الفرص الوظيفية الشاغرة </h4>
            </div>
            <ul style="text-align: right;" class="list-comments">
              @foreach ($opportunities as $opportunity)
                    <li>
                <div class="comment-avatar">
                  <img src="{{asset('images/'.$opportunity->logo)}}" style="margin-left: 20px; "  alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">{{ $opportunity->title}}</h4>
                  <span style="color: rgb(0, 60, 255)">{{$opportunity->start}} - {{$opportunity->end}}</span><br>

                  @if($opportunity->start<= date('Y-m-d') && $opportunity->end > date('Y-m-d'))
                  <span class="badge badge-success">متاحة الان</span>

                  @else
                  <span class="badge badge-danger">غير متاحة  </span>

                  @endif
                  <br>
                  <span>  {{$opportunity->company_name}}</span>
                  <!--<p>-->
                  <!--  {!!\Illuminate\Support\Str::limit($opportunity->description  ,150)  !!}-->
                    
                  <!--</p>-->
                  <br/>
                  <br/>
                  <a href="{{route('job',$opportunity->id)}}">عرض التفاصيل</a>
                </div>
              </li> 
              @endforeach
           
      
            </ul>
          </div>
      
        </div>
        <div class="col-md-4">
     
          <div class="box-comments" style="direction: rtl; padding-left: 0;">
            <div class="title-box-2">
              <h6 class="title-comments title-left" style="text-align: right;"> اسماء الشركات </h6>
            </div>
            <ul style="text-align: right;padding-right: 0; "  class="list-comments">
              @foreach ($companies as $company)
                  <li>
                <div class="comment-avatar">
                  <img src="{{( $company->logo!== null)? asset('images/'.$company->logo):asset('front/img/x.png')}}" style="margin-left: 20px;width: 60px;height: 60px; "  alt="">
                </div>
                <div class="comment-details" style="padding-left: 0;">
                  
                  <a href="{{$company->link}}" target="_blank" style="font-size: 15px;padding-left: 0;">
                    {{$company->name}} 

                  </a>
                  <p> {{$company->type}}</p>

                </div>
              </li>
              @endforeach
              
         
              <a href="{{route('all_companies')}}"  class="btn btn-outline-primary button-rouded" >عرض كل الشركات</a>

          
      
            </ul>
            
          </div>
          <a href="{{asset('images/'.$file)}}"   target="_blank" >تحميل ملف الشركات </a>

        </div>
     
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  @endsection