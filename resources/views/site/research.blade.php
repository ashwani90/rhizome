@extends('layout')

@section('title', 'Studio Rhizome - Research')

@section('content')
    @parent
    <section style="padding:0px!important; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="custom-container">
        @include('components.research')
        </div>
      </section>

      <section class="our_projects_area">
                  <div class="container">
                      <p class="pStyle">Architecture is not just about making impressive buildings on paper, but more importantly to deliver projects which are functional, safe, easy to maintain, sustainable and long lasting. We have been engaging with architecture in a holistic
                          manner since the inception of the firm and have all allied services like Structure, Engineering, Project Management, Value Engineering and Green Building as an integral part of the organisation. </p>
                  </div>
              </section>
@endsection
