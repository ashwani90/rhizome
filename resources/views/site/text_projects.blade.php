@extends('layout')

@section('title', 'Studio Projects - Architecture')

@section('content')
    @parent
    <section style="padding-top: 100px; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="container-fluid">
          <div class="row">
          @foreach ($projects as $project)
          <div class="card col-md-4 col-sm-6 col-xs-12 p-2 mt-2">
            <h3 style="font: bold 23px/1.5 Helvetica, Verdana, sans-serif; color:red;"><a href="/project?id={{$project->id}}">{{$project->name}}</a></h3>
            <p style="font: 200 17px/1.5 Georgia, Times New Roman, serif;">{{$project->location}} | {{$project->type}}</p>
            </div>
          @endforeach
        </div>
        </div>
      </section>
@endsection

