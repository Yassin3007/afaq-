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


<section class="blog-wrapper sect-pt4" id="blog">
  <div class="container" style="text-align: right;">
    <div class="row">
      @foreach ($articles as $article)
      <a href="{{route('article',$article->id)}}">
        <div class="col-md-12">
          <div class="post-box">
            <div class="post-thumb" style="text-align: center;">
              <img src="{{( $article->logo!== null)? asset('images/'.$article->logo):asset('front/img/article.jpg')}}" width="500px" class="img-fluid" alt="">
            </div>
            <div class="post-meta" style="text-align: center">
              <h1 class="article-title">{{$article->name}}</h1>
              
            </div>
            <div class="article-content">
              {{-- <p>
                {!!$article->description!!}
              </p>
              --}}
            </div>
          </div>
        
        
        </div>
      </a>
        
  
      @endforeach
  
    </div>
  </div>
</section>

<br>


  @endsection