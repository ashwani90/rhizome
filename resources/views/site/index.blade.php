@extends('layout')

@section('title', 'Studio Rhizome - Architecture')


@section('content')
    @include('components.carousel')
    @include('components.research')
        <section id="portfolio" class="portfolio">
          <div class="custom-container">

            <div class="section-title pl-5">
              <p>Recent Works</p>
            </div>

            <div class="row portfolio-container">
            @foreach ($projects as $project)
          @if ($project->not_show)
            @continue
          @endif

          @if ($project->next_empty)
            @if ($project->image_dim == 5 && !$project->add_below)
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}}" >
              <div class="row"  style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
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
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
              <div class="col-md-12 col-sm-12 half-height">
              <div class="text-place">
           <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>      
          </div>
                </div>
              
              </div>
            </div>
            @elseif ($project->image_dim == 4 || $project->image_dim == 2 || ($project->image_dim == 5 && $project->add_below))
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}}" >
              
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
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
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
</div>
</div>
              <div class="col-lg-4 col-md-4 col-sm-12 {{$project->height}} portfolio-item filter-{{$project->type}}" >
                <div class="text-place">
                <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>
           
                </div>
            @endif
            @elseif ($project->next_horizontal)
            
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}}" >
              <div class="row" style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
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
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
</div>
              <div class="col-md-12 col-sm-12 half-height" style="padding-top: 5px;">
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->nextPro->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->nextPro->title}}</span>
                                                            @if(isset($project->nextPro->location) && isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}} | 
                                                            {!! date('d/M/y', strtotime($project->nextPro->date)) !!}  </span>
                                                            @elseif (isset($project->nextPro->location))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}}</span>
                                                            @elseif (isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->nextPro->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->nextPro->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->nextPro->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
              
              </div>
            </div>
            @else
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}}" >
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
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
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
          @endif

          
          @endforeach

            </div>

          </div>
        </section>
       

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
