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
    <div class="row">
      <img src="{{asset('front/img/Scholarship program logo-1.png')}}" width="100%" alt="">
    </div>
  </div>
  <!--/ Nav End /-->
  

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
        @foreach ($routes as $route)
           <div class="col-md-3">
          <a href="{{route('get_servant',$route->id)}}">

          <div class="service-box" >
            <div class="service-ico">
              <!-- <span class="ico-circle"><i class="ion-monitor"></i></span> -->
              <span >
                <!-- <span class="ico-circle"> -->
                <img src="{{asset('images/'.$route->logo)}}" height="250px" width="90%" alt="">
              </span>
            </div>
            <div class="service-content">
              <h2 class="s-title"> {{$route->name}} </h2>
              <p class="s-description text-center">

              </p>
            </div>
          </div>
        </a>

        </div>
 
        @endforeach
        
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

 
  
  <!--/ Intro Skew Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-right" style="text-align: right; direction:rtl;">
            <h3>
              برنامج خادم الحرمين الشريفين للابتعاث الخارجي 
            </h3>
            <br>
            <br>
            <p>
              هو برنامج ابتعاث الطلاب والطالبات لأفضل المؤسسات التعليمية عالمياً حسب التصنيفات العالمية في العديد من المجالات والتخصصات 
              <br><br>
              ما هي أهداف البرنامج؟ 
              <br><br>
              رفع كفاءة رأس المال البشري وتحقيق التنمية المستدامة. -المساهمة في تعزيز قدرات المملكة في البحث والتطوير والابتكار وريادة الأعمال في المجالات ذات الأولوية. -المساهمة في إعادة تأهيل وتعزيز القدرات في تخصصات علمية مختلفة لتوفير كوادر وطنية موهوبة وخصوصًا في القطاعات الواعدة للمشاريع النوعية التي أطلقتها رؤية المملكة 2030 
              
               <br><br>
              
              ما هي مسارات البرنامج؟ 
              <br><br>
              ينقسم البرنامج الى أربعة مسارات أساسية هي:  
              <br><br>
              1 - "الرواد"
              <br><br>
              2-"البحث والتطوير" 
              <br><br>
               3-"إمداد" 
               <br><br>
               4-"واعد" 
              
               <br><br>
              
              ما المقصود بمسار الرواد؟ 
              <br><br>
              هو مسار يهدف لابتعاث الطلاب لأفضل 30 مؤسسة تعليمية في العالم مما يساهم في رفع كفاءة رأس المال البشري وتحقيق التنمية المستدامة تحقيقاً لمتطلبات وطموحات رؤية المملكة ٢٠٣٠ 
              <br><br>
               
              
              ما المقصود بمسار البحث والابتكار؟ 
              <br><br>
              هو مسار يهدف للابتعاث في عدد من المجالات ذات الأولوية والتي من شأنها تنمية البحث والتطوير في المملكة حسب قائمة الجامعات المحددة للمسار 
              
              <br><br>
              
              ما المقصود بمسار إمداد؟ 
              <br><br>
              هو مسار يهدف الطلاب لتلبية احتياجات سوق العمل 
              
              <br><br>
              
              ما المقصود بمسار واعد؟ 
              <br><br>
              هو مسار يهدف للابتعاث والتدريب لإعادة التأهيل وتعزيز القدرات في القطاعات والمجالات الواعدة. 
              <br><br><br>
               
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-4">
          <div class="work-box" style="text-align: center;">
            <a href="{{asset('front/img/ajpg')}}" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="{{asset('front/img/a.jpg')}}" alt="" style="height: 400px !important;" class="img-fluid">
              </div>
             
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box" style="text-align: center;">
            <a href="{{asset('front/img/b.jpg')}}" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="{{asset('front/img/b.jpg')}}" alt="" style="height: 400px !important;" class="img-fluid">
              </div>
             
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box" style="text-align: center;">
            <a href="{{asset('front/img/c.jpg')}}" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="{{asset('front/img/c.jpg')}}" alt="" style="height: 400px !important;" class="img-fluid">
              </div>
             
            </a>
          </div>
        </div>
       
        
      </div>
    </div>
  </section>
  <!--/ Intro Skew End /-->

<br>
  @endsection