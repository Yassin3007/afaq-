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
    <h2 style="color: #0257b7">مسار التعليم</h2>
  </div>
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" style="direction: rtl;" id="blog">
    <div class="container">
      <div class="row">
        <div class="container" style="text-align: center; margin-bottom: 20px;">
          <!-- <div class="raw" style="display:inline-flex;">
            <div class="dropdown">

              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الابتعاث الخارجي
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#">برنامج خادم الحرمين الشريفين للابتعاث</a>
               <a class="dropdown-item" href="#">سفير الجامعات </a>
               <a class="dropdown-item" href="#">سفير الخريجين</a>
               <a class="dropdown-item" href="#">منصة الابتعاث الثقافي - برنامج وزارة الثقافة</a>
               
             </div>
            </div>
            
            <div class="dropdown">
              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                فرص الدراسات العليا داخل المملكة 
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#">  UPT جامعة الاعمال والتكنولوجيا  </a>
               <a class="dropdown-item" href="#">  جامعة الملك عبد العزيز  </a>
               <a class="dropdown-item" href="#">  كلية جدة العالمية  </a>
               
             </div>

            </div>
           
           
           
          </div> -->
          
        </div>
        <div class="col-md-6">
     
          <div class="box-comments" style="direction: rtl;">
            <div class="title-box-2">
              <h4 class="title-comments title-left" style="text-align: right;"> الابتعاث الخارجي </h4>
            </div>
            <br>
            <ul style="text-align: right;" class="list-comments">
              
              <li>
                <a href="{{route('elharamains')}}">
                  <div class="comment-avatar">
                    <img src="{{asset('front/img/Scholarship program logo-1.png')}}" style="width: 150px !important; "  alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author"> برنامج خادم الحرمين الشريفين للابتعاث</h4>
                    <!-- <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    </p>
                    <a href="blog.html">عرض التفاصيل</a> -->
                  </div>
                </a>
              </li>
              @foreach ($scholarships as $scholarship)
                  <li>
                <a href="{{route('get_scholarship',$scholarship->id)}}">
                  <div class="comment-avatar">
                    <img src="{{asset('images/'.$scholarship->logo)}}" style="margin-left: 20px;width:90% !important ;"   alt="">
                  </div>
                  <div class="comment-details"><br>
                    <h4 class="comment-author"> {{$scholarship->name}}      </h4>
                    <!-- <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    </p>
                    <a href="blog.html">عرض التفاصيل</a> -->
                  </div>
                </a>
                
              </li>
              @endforeach
              
           
     
            </ul>
          </div>
      
        </div>

        <div class="col-md-6">
     
          <div class="box-comments" style="direction: rtl;">
            <div class="title-box-2">
              <h4 class="title-comments title-left" style="text-align: right;">  فرص الدراسات العليا داخل المملكة  </h4>
            </div>
            <ul style="text-align: right;" class="list-comments">
              @foreach ($postgraduates as $postgraduate)
                 <li>
                <a href="{{route('postgraduates',$postgraduate->id)}}">
                  <div class="comment-avatar">
                    <img src="{{asset('images/'.$postgraduate->logo)}}" style="margin-left: 10px; "  alt="">
                  </div>
                  <div class="comment-details">
                    <br>
                    <h4 class="comment-author">  {{$postgraduate->name}}    </h4>
                    <!-- <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    </p> -->
                  </div>
                </a>
                
              </li> 
              @endforeach
              
         
              <!-- <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" style="margin-left: 20px; "  alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author"> Valex Company For Software Industry</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                  </p>
                  <a href="blog.html">عرض التفاصيل</a>
                </div>
              </li> -->
     
            </ul>
          </div>
      
        </div>
     
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->


  @endsection