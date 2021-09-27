@extends('layout')

@section('title', 'Project')

@section('content')
    @parent
    <section class="breadcrumbs">
         					<div class="container-fluid">
                             
                                 <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long" >
                                    <div style="background-image: url(assets/img/projects_all/{{$images[0]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small">
                                    <div class="row">
                                    @if (count($images) > 1)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[1]->url}});">
                                    </div>
                                    @endif
                                        <div class="col-md-12 project-info" >
                                            <h1>{{$project->title}}</h1>
                                            <h4>{{$project->location}}</h4>
                                            <ul>
                                                <li><b>Project Office - </b> Gurugram</li>
                                                    <li>Typology - {{$project->type}}</li>
                                                    <li>Scale - 85 Keys</li>
                                                    <li>Interior Design</li>
                                                    <li>Studio B.Architects</li>
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                                @if (count($images) > 2)
                                <div class="col-xs-12 col-md-12 project-image-long mt-2" >
                                <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[2]->url}});">
                                    </div>
                            </div>
                                @endif
                                @if (count($images) > 3)
                                <div class="col-xs-12 col-md-7 project-image project-image-long mt-2" >
                            <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[3]->url}});">
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                            <div class="row">
                            @if (count($images) > 4)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[4]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 5)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[5]->url}});">
                                    </div>
                                    @endif
                            </div>
                            </div>
                            @endif
                            @if (count($images) > 6)
                            <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[6]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row">
                                    @if (count($images) > 7)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[7]->url}});">
                                    </div>
                                    @endif
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @if (count($images) > 8)

                                <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[8]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row project-image">
                                    @if (count($images) > 9)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[9]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 10)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[10]->url}});">
                                    </div>
                                    @endif
                                    </div>
                                
                                </div>
                           @endif

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
