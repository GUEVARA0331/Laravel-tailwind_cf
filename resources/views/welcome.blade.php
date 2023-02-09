@extends('layouts.model')

@section('title', 'Menú')

@section('content')

    <div class="container">
        <ul>
            <li><a href="{{ route('tailwind.grids') }}">-> Utilización de grids <-</a></li>
            <li><a href="{{ route('tailwind.ratio') }}">-> Cambiar el Aspect Ratio (frame de video de YouTube) <-</a></li>
            <li><a href="{{ route('tailwind.columns') }}">-> Utilidad columns para el manejo de imagenes <-</a></li>
            <li><a href="{{ route('tailwind.display') }}">-> Guía sobre display <-</a></li>
            <li><a href="{{ route('tailwind.tipografias') }}">-> Tipografias <-</a></li>
            <li><a href="{{ route('tailwind.tipografias2') }}">-> Tipografias parte 2 <-</a></li>
            <li><a href="{{ route('tailwind.background') }}">-> Background <-</a></li>
            <li><a href="{{ route('tailwind.border') }}">-> Bordes en el manejo de cajas <-</a></li>
            <li><a href="{{ route('tailwind.tablas') }}">-> Manejo de tablas <-</a></li>
            <li><a href="{{ route('tailwind.sizes') }}">-> Tamaños de cajas <-</a></li>
        </ul>
    </div>

@endsection

