@extends('layout')

@section('title', 'About Studio Rhizome Team - Architects')

@section('content')
    @parent
<section class="blog-right-side-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="row">
                            <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="#">{{date('j F, Y', strtotime($blog->date));}}</a></li>
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="/social-posts?category={{$blog->category}}">{{$blog->category}}</a></li>
                                    <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a href="#">{{$blog->author}}</a></li>
                                </ul>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{$blog->title}}</h5>
                                <img src="assets/img/{{$blog->image}}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                                <p>{!! $output !!}</p>
                                
                                </div>
                            <div class="col-12 d-flex flex-wrap align-items-center padding-15px-tb mx-auto margin-20px-bottom wow animate__fadeIn">
                                <div class="col-12 col-md-9 text-center text-md-start sm-margin-10px-bottom px-0">
                                    <div class="tag-cloud">
                                        @foreach($tags as $tag)
                                        <a href="/social-posts?tag={{$tag}}">{{$tag}}</a>
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                            
                                                      
                        </div>
                    </div>
                    <!-- start sidebar -->
                    <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                        
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categories</span>
                            <ul class="list-style-07 list-unstyled">
                            @foreach($categories as $category)
                                <li><a href="/social-posts?category={{$category->category}}">{{$category->category}}</a><span class="item-qty">{{$category->dataCount}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                       
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Tags cloud</span>
                            <div class="tag-cloud">
                            @foreach($allTags as $myTag)
                            <a href="/social-posts?tag={{$myTag}}">{{$myTag}}</a>
                                @endforeach
                                
                            </div>
                        </div>
                        
                    </aside>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end blog content section -->
        <!-- start section -->
        @if (count($relatedPosts) > 0)
        <section class="bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-uppercase d-inline-block">You may also like</span>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related posts</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @foreach($relatedPosts as $post)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="/blog?id={{$post->id}}" class="text-small me-auto text-slate-blue text-extra-dark-gray-hover">{{date('j F, Y', strtotime($post->date));}}</a>
                                    </div>
                                    <div class="blog-post-image" style="height: 180px">
                                        <a href="/social-posts?category={{$post->category}}" title=""><img src="assets/img/{{$post->image}}" alt=""></a>
                                        <div class="alt-font blog-category"><a href="/social-posts?category={{$post->category}}" class="text-uppercase text-extra-dark-gray-hover">{{$post->category}}</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="/blog?id={{$post->id}}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom">{{$post->title}}</a>
                                        <p>{{ \Illuminate\Support\Str::limit($post->desc, 150, $end='...') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @endif


       @endsection