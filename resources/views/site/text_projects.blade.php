@extends('layout')

@section('title', 'Studio Projects - Architecture')

@section('content')
    @parent
    <section id="breadcrumbs" class="breadcrumbs pt-1" style="padding-top: 0;padding-bottom:0;margin-bottom:0;">
    <div class="section-title pl-5">
              <p>Projects</p>
            </div>
        </section>
    <section style="padding-top: 0;margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="container">
          <div class="row">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Subtitle</th>
    </tr>
  </thead>
  <tbody>
          @foreach ($projects as $project)
         
    <tr>
      <th scope="row">{{$project->title}}</th>
      <td>{{$project->location}}</td>
      <td>{!! date('d/M/y', strtotime($project->date)) !!} </td>
      <td>{{$project->name}}</td>
      <td>{{$project->subtitle}}</td>
    </tr>
  
          @endforeach
          </tbody>
</table>
        </div>
        </div>
      </section>
      <div class="fixed-circle">
      <a href="{{ url('/projects') }}"><i class="icofont-table"></i></a>
      </div>
@endsection

