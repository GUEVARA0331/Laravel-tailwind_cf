@extends('layouts.model')

@section('title', 'Menú')

@section('content')

    <div class="container">
        <ul>
            <li><a href="{{ route('tailwind.grids') }}">-> Utilización de grids</a></li>
            <li><a href="{{ route('tailwind.display') }}">-> Guía sobre display</a></li>
            <li><a href="{{ route('tailwind.tipografias') }}">-> Tipografias</a></li>
            <li><a href="{{ route('tailwind.background') }}">-> Background</a></li>
        </ul>
    </div>

@endsection

