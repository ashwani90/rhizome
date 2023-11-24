@extends('layout')

@section('title', 'Rhizomespace - Architect')

@section('content')
<section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg2.jpg');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height: 150px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Social Posts</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr" style="margin-top: -70px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @foreach($blogs as $blog)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="/blog?id={{$blog->id}}" class="text-small me-auto text-slate-blue text-extra-dark-gray-hover">{{date('j F, Y', strtotime($blog->date));}}</a>
                                    </div>
                                    <div class="blog-post-image" style="height: 180px">
                                        <a href="/blog?id={{$blog->id}}" title=""><img loading="lazy" src="assets/img/{{$blog->image}}" alt=""></a>
                                        <div class="alt-font blog-category"><a href="/blog?category={{$blog->category}}" class="text-uppercase text-extra-dark-gray-hover">{{$blog->category}}</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="/blog?id={{$blog->id}}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom">{{$blog->title}}</a>
                                        <p>{{ \Illuminate\Support\Str::limit($blog->desc, 150, $end='...') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr" style="margin-top: -70px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @if ($instaData)
            @foreach ($instaData as $data)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="{{$data['permalink']}}" class="text-small me-auto text-slate-blue text-extra-dark-gray-hover">{{date('Y-m-d', ($data['timestamp']))}}</a>
                                    </div>
                                    <div class="blog-post-image" style="height: 180px">
                                    @if (str_contains($data['media_url'], 'video') or str_contains($data['media_url'], '.mp4') or $data['type'] == '1')
                                    <a href="{{$data['permalink']}}" title="">
                                        <video width="320" height="190" controls>
                                            <source src="{{$data['media_url']}}" type="video/mp4">
                                            Your browser does not support video
                                        </video>    
                                    </a>
                                    @else
                                    <a href="{{$data['permalink']}}" title=""><img  loading="lazy" src="{{$data['media_url']}}" alt=""></a>
                                    @endif
                                        
                                        
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="{{$data['permalink']}}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom">Insta</a>
                                        <p>{{ \Illuminate\Support\Str::limit($data['caption'], 150, $end='...') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
              @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
@endsection


