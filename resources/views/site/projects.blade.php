@extends('layout')

@section('title', 'Studio Rhizome - Projects')

@section('content')
    @parent
    <section style="padding-top: 100px; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="custom-container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-house">House</li>
                <li data-filter=".filter-masterplanning">Master Planning</li>
                <li data-filter=".filter-interior">Interior</li>
                <li data-filter=".filter-institutional">Institutional</li>
                <li data-filter=".filter-residential">Residential</li>
                <li data-filter=".filter-mixuse">Mixuse</li>
                <li data-filter=".filter-industrial">Industrial</li>
                <li data-filter=".filter-hotels">Hotels & Resorts</li>
                <li data-filter=".filter-others">Others</li>
              </ul>
            </div>
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
        </div>
      </section>
@endsection
