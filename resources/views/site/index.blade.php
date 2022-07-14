@extends('layout')

@section('title', 'Studio Rhizome - Architecture')


@section('content')
<div class="main-content">
    @include('components.carousel')
        <div class="page-loader"></div>
    @include('components.research')
    @include('components.portfolio')
    @include('components.foures')
    @include('components.about-us')
    @include('components.clients')
    @include('components.blog')
    @include('components.branding')

</div>
        @endsection