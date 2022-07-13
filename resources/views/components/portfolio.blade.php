        <section class="pt-0">
            <div class="container">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-colorful portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-opacity="0.9" data-backgroundcolor="#58bc4b,#d9a026,#813ea9,#82bc13,#214bdf,#e28e1a,#04c05c,#e52d8c,#029bd3,#e77345,#0575c4,#e2731a,#9fb012,#13c7b8,#e8074c,">
                        @foreach ($projects as $project)      
                        <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            @if ($project->is_half == 1)
                            <li class="animated animatedFadeInUp fadeInUp grid-item {{$project->type}} show-on-scroll wow">
                            @else
                            <li class="animated animatedFadeInUp fadeInUp grid-item {{$project->type}} grid-item-double  show-on-scroll wow">
                            @endif
                            <!-- <li class="grid-item {{$project->type}} grid-item-double wow animate__fadeIn"> -->
                                <a href="/project?id={{$project->id}}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="assets/img/{{$project->url}}" alt="" />
                                            <div class="portfolio-hover bg-transparent-white justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <div class="alt-font text-small text-white text-uppercase margin-5px-bottom opacity-7 move-top-bottom-self"><span>{{$project->title}}</span></div>
                                                    <h6 class="font-weight-600 alt-font text-white text-uppercase no-margin-bottom move-bottom-top-self"><span>{{$project->subtitle}}</span></h6>
                                                </div>
                                                <span class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>