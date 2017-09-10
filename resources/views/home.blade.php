@extends('layouts.app')
@section('content')
    @include('home_page.banner')
    @include('home_page.what_we_do')
    <!-- @include('home_page.services') -->
    @include('home_page.why_were_marvella')
    @include('home_page.products')
    <!-- @include('home_page.quote') -->
    @include('sweet::alert')
@stop