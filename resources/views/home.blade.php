@extends('layouts.master')

<!-- CSS -->
@section('styles')
    <!-- parent extends to the css from the layout -->
    @parent
    <link rel="stylesheet" href="/css/home.css">
    @show

<!-- Header -->
@section('header')
<h2>Welkom op de homepage</h2>
@endsection

<!-- Content -->
@section('content')
<!-- foreach -->
@foreach($producten as $product)

<!-- if statement -->
@if($product == 'Autoradio')
<li><strong>{{ $product }}</strong></li>

@else
<li>{{ $product }}</li>

@endif

@endforeach

<a href="{{ route('contact.form') }}">Form</a>
@endsection