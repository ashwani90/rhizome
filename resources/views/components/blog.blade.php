<section class="bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 text-center text-sm-start wow animate__fadeIn">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Interesting articles</h4>
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end wow animate__fadeIn">
                        <a href="{{url('/social-posts')}}" class="btn btn-link btn-extra-large text-extra-dark-gray">all articles</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content px-sm-0 margin-7-rem-top md-margin-4-rem-top">
                        <ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @foreach($blogs as $blog)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-extra-dark-gray-hover">{{date('j F, Y', strtotime($blog->date));}}</a>
                                    </div>
                                    <div class="blog-post-image" style="height: 180px">
                                        <a href="blog-post-layout-01.html" title=""><img src="assets/img/{{$blog->image}}" alt=""></a>
                                        <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-extra-dark-gray-hover">{{$blog->category}}</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom">{{$blog->title}}</a>
                                        <p>{{ \Illuminate\Support\Str::limit($blog->desc, 150, $end='...') }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
       