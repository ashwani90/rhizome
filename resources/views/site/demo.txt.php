<!-- 
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

                </article>
              </div>
              @endforeach
              @endif

                </article>
              </div>

            </div>

          </div>
        </section>
@endsection -->
