@extends('layouts.master')

<!-- CSS -->
@section('styles')
    @parent
    <link rel="stylesheet" href="/css/product.css">
    @show

@section('header')
    <h3>Product toevoegen</h3>
@endsection

@section('content')
<form action="{{ route('product.store') }}" method="POST">
    @csrf
        <div>
                <label for="">Titel</label>
                <br>
                <input type="text" name="title" />
        </div>
        <div>
                <label for="">Omschrijving</label>
                <br>
                <textarea name="description"></textarea>
        </div>
        <div>
                <label for="">Prijs</label>
                <br>
                <input type="text" name="price" />
        </div>
        <div>
            <input type="submit" value="submit">
        </div>

    </form>
@endsection