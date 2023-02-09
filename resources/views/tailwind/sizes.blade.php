@extends('layouts.model')

@section('title', 'Sizes')

@section('content')

    <ul>
        <li><a href="https://tailwindcss.com/docs/width">-> Ver documentación de clase para ajustar el ancho. <-</a></li>
        <li><a href="https://tailwindcss.com/docs/max-width">-> Ver documentación sobre los maximos tamaños de anchura. <-</a></li>
    </ul>

    <div class="container">
        <div class="bg-blue-600 h-64">
            <div class="bg-red-600 h-full w-full max-w-3xl">
                Caja hija con un determinado tamaño
            </div>
        </div>
        <br>
        <div class="bg-blue-600 h-64">
            <div class="bg-red-600 h-full w-full md:w-3/4 lg:w-1/2"></div>
        </div>
        <br>
        <div class="bg-green-600 h-screen"></div>
        <br>
        <div class="bg-black w-64 h-screen"></div>
        <br>
    </div>

@endsection

