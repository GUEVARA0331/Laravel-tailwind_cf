@extends('layouts.model')

@section('title', 'Aspect Ratio')

@section('content')

    <div class="container mx-auto py-12">

        <a href="https://tailwindcss.com/docs/aspect-ratio">-> Ver documentación. <-</a>

        <div class="grid grid-cols-3 gap-6">

            <div class="col-span-2 ">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/r1ySsbIA7EU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <div class="bg-red-400 aspect-[2/1]">

                </div>

            </div>

            <div class="col-span-1 bg-blue-200">

            </div>

        </div>

    </div>

@endsection

