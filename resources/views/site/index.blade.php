@extends('layout')

@section('title', 'Studio Rhizome - Architecture')


@section('content')

    @parent
    @include('components.carousel')
        <section id="portfolio" class="portfolio">
          <div class="custom-container">

            <div class="section-title pl-5">
              <p>Recent Works</p>
            </div>

            <div class="row portfolio-container">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 portfolio-item filter-{{$project->type}}">
              <div class="portfolio-wrap">
                <img src="assets/img/projects/{{$project->url}}" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">See</a>
                                                        </span>
                                                </div>
              </div>
            </div>
          @endforeach

            </div>

          </div>
        </section>
        @include('components.research')

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
          <div class="container">

            <div class="row">

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/marriot.jfif" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client2.svg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client4.jpeg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-6.webp" class="img-fluid" alt="">
              </div>

            </div>

          </div>
        </section><!-- End Clients Section -->

        <section id="blog" class="blog">
          <div class="custom-container">
          
            <div class="row">
              @if ($instaData)
            @foreach ($instaData as $data)
              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    @if (@isset($data['caption'])) 
                      <img src="{{$data['media_url']}}" alt="{{$data['caption']}}" class="img-fluid">
                    @else
                    <img src="{{$data['media_url']}}"  class="img-fluid">
                    @endif
                    
                  </div>

                  <h2 class="entry-title">
                  @if (@isset($data['caption'])) 
                  <a href="{{$data['permalink']}}">{{$data['caption']}}</a>
                    @else
                    <a href="{{$data['permalink']}}">Instagram Post</a>
                    @endif
                    
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="{{date('Y-m-d', strtotime($data['timestamp']))}}">{{date('Y-m-d', strtotime($data['timestamp']))}}</time></li>
                    </ul>
                  </div>

                </article><!-- End blog entry -->
              </div>
              @endforeach
              @endif

                </article><!-- End blog entry -->
              </div>

            </div>

          </div>
        </section><!-- End Blog Section -->
@endsection
