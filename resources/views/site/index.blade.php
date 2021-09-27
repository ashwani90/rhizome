@extends('layout')

@section('title', 'Studio Rhizome - Home')


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
                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/marriot.jfif" class="img-fluid" alt="">
              </div>

            </div>

          </div>
        </section><!-- End Clients Section -->

        <section id="blog" class="blog">
          <div class="custom-container">

            <div class="row">

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta zena prista maraeda talan mas indera.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-3.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

            </div>

          </div>
        </section><!-- End Blog Section -->
@endsection
