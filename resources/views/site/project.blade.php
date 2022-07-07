@extends('layout')

@section('title', 'Project Architecture')

@section('content')
    @parent
    <section id="breadcrumbs" class="breadcrumbs pt-1" style="margin-bottom:0;padding-bottom:0;">
    <div class="section-title pl-5" style="margin-top:0;padding-top:0;padding-bottom:20px;">
              <p>Project</p>
            </div>
          
        </section>
    <section class="breadcrumbs" style="margin-top:0;padding-top:0;">
         					<div class="container-fluid">
                             
                                 <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long" >
                                    <div style="background-image: url(assets/img/projects_all/{{$images[0]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small">
                                    <div class="row">
                                    
                                        <div class="col-md-12 project-info" >
                                            <h1>{{$project->title}}</h1>
                                            <h4>{{$project->location}}</h4>
                                            <ul>
                                                <li><b>Project Office - </b> Gurugram</li>
                                                    <li>Typology - {{$project->type}}</li>
                                                    @if($project->scale)
                                                    <li>Scale - {{$project->scale}}</li>
                                                    @endif
                                                    @if($project->scope)
                                                    <li>{{$project->scope}}</li>
                                                    @endif
                                                    @if($project->opened)
                                                    <li>Completion - {{$project->opened}}</li>
                                                    @endif
                                                    @if($project->studio)
                                                    <li>{{$project->studio}}</li>
                                                    @endif
                                                    
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                                @if (count($images) > 1)
                                <div class="col-xs-12 col-md-12 project-image-long mt-2 image-type-2" >
                                <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[1]->url}});">
                                    </div>
                            </div>
                                @endif
                                @if (count($images) > 2)
                                <div class="col-xs-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                            <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[2]->url}});">
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                            <div class="row">
                            @if (count($images) > 3)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[3]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 4)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[4]->url}});">
                                    </div>
                                    @endif
                            </div>
                            </div>
                            @endif
                            @if (count($images) > 5)
                            <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[5]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row">
                                    @if (count($images) > 6)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[6]->url}});">
                                    </div>
                                    @endif
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @if (count($images) > 7)

                                <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[7]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row project-image">
                                    @if (count($images) > 8)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[8]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 9)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[9]->url}});">
                                    </div>
                                    @endif
                                    </div>
                                
                                </div>
                           @endif

</div>
</div>

<div class="more-block fadeInUp animated container-fluid">
                <div class="row">
                    <div class="col-sm-12" style="padding: 20px 20px 10px 30px;">
                        <h3>Similar Works</h3>
                    </div>
								                    
					                    @foreach ($projects as $project)
                    <div class="col-md-4 col-sm-12 half-height portfolio-item">
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover" style="background: rgba(0,0,0,0.7); cursor: pointer;">
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
            @endforeach
                                        
									                </div>
            </div>

         </section>

        <!-- SnapWidget -->
         <!-- <section class="our_projects_area">
                           <div class="container">
                               <p class="pStyle">Architecture is not just about making impressive buildings on paper, but more importantly to deliver projects which are functional, safe, easy to maintain, sustainable and long lasting. We have been engaging with architecture in a holistic
                                   manner since the inception of the firm and have all allied services like Structure, Engineering, Project Management, Value Engineering and Green Building as an integral part of the organisation. </p>
                           </div>
                       </section> -->

@endsection
