@extends('layouts.front')
@section('content')


  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url();height: 100px;">
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
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif 

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{asset('front/img/overlay-bg.jpg')}})">
      <div class="" ></div>
      <div class="container" style="text-align: right;">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left" >
                       أرسل لنا رسالة
                      </h5>
                    </div>
                    <div>
                        <form action="{{route('storeContact')}}" method="post" role="form" class="contactForm">
                        @csrf
                          <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="row" style="text-align: right;direction: rtl;">
                          <div class="col-md-12 mb-3">
                            <div class="form-group" >
                              <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع " data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                              </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="محتوى الرسالة"></textarea>
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button type="submit" class="button button-a button-big button-rouded"> ارسال</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        إبق علي تواصل
                      </h5>
                    </div> <br>
                    <div class="more-info">
                      <p class="lead">
                        منصة آفاق لدعم الخريجين وتيسير عملية البحث عن التدريبات او فرص  العمل
                      </p>
                      <br>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> {{$setting->address}}</li>
                        <li><span class="ion-ios-telephone"></span>{{$setting->phone}}</li>
                        <li><span class="ion-email"></span> {{$setting->email}}</li>
                      </ul>
                    </div>
                    <div class="socials">
                      {{-- <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
       
      </footer>
    </section>
    <!--/ Section Contact-footer End /-->
  
  @endsection