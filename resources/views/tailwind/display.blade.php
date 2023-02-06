@extends('layouts.model')

@section('title', 'Display')

@section('content')

    <div class="container mx-auto py-12">

        <div class="flex">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>

        <p class="bg-red-200 inline-block mb-4">Esta es una etiqueta en bloque</p>
        <p class="bg-red-200 hidden mb-4">Esta es una etiqueta en bloque oculta</p>
        <p class="bg-red-200 hidden lg:inline-block mb-4">Esta es una etiqueta en bloque oculta con modificadores</p>
        <div class="bg-red-200">Esta también es una etiqueta en bloque</div>
        <blockquote class="bg-red-200">Este también es una etique en bloque</blockquote>

        <span class="bg-blue-300 block">Etiqueta inline</span>
        <a href="#" class="bg-green-300 block">Esta también es una etiqueta inline</a>

    </div>

@endsection
