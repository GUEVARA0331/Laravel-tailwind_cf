@extends('layouts.model')

@section('title', 'Background')

@section('head')
    <style>
        .imagen{
            background-image: url("{{ asset('img/YOGA-C740.JPG') }}");
            height: 400px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .imagen2{
            background-image: url("{{ asset('img/YOGA-C740.JPG') }}");
            height: 400px;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection

@section('content')

    <h1 class="text-center text-3xl font-bold mb-3">Background</h1>

    <div class="container">
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
            Hola mundo
        </div>
        <div class="bg-blue-700 h-12 bg-opacity-50">
        </div>
    </div>

    <div class="container">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, repellendus? Hic, doloremque iste sint necessitatibus expedita iure maxime incidunt unde. Numquam magnam ut adipisci, dicta cupiditate modi reprehenderit necessitatibus assumenda.
        </p>

        <div class="imagen2 bg-fixed"></div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita deserunt animi vitae ipsam dolore repudiandae nemo, blanditiis deleniti nulla dolorum. Ipsum beatae earum laboriosam? Alias soluta est expedita veniam fugiat.</p>
        <p>Aliquam laudantium vitae iure omnis minus fuga! Quam dolorum aliquid nam rerum autem fuga quidem tempora odio provident a veritatis nulla facere quasi sed eveniet non neque, atque nostrum facilis.</p>
        <p>Consequuntur suscipit deserunt quod perspiciatis quibusdam aliquid deleniti laboriosam quisquam labore? Illum molestiae ad, dolores, deserunt alias architecto ut ab sequi aliquam dolorum, pariatur at repudiandae. Maiores vero tempora natus!</p>
        <p>Qui excepturi repudiandae ullam expedita sunt explicabo fugit ipsum nostrum, facere maiores pariatur unde eum eveniet perferendis? Perferendis quis eveniet quam ab distinctio commodi sapiente perspiciatis illum amet obcaecati. Dicta!</p>
        <p>Minus voluptatum rerum quaerat amet natus id hic, debitis suscipit cupiditate quod distinctio animi ipsum, expedita blanditiis laboriosam soluta veniam aliquid saepe eum. Cum tempore et quo aut, dolorum pariatur.</p>
        <p>Natus deserunt architecto in voluptas beatae optio assumenda iure voluptatibus dolorem quibusdam officia magni, facere nisi consectetur! Fugit, ab inventore rerum expedita consequuntur quisquam ex possimus, molestiae voluptas quasi necessitatibus?</p>
        <p>Animi ipsum, minus facere vitae impedit voluptatibus veritatis placeat nihil itaque magni consequatur quia eos aliquid provident. Aperiam iure possimus fuga architecto repudiandae? Quia, repellat quo dicta amet neque dolorem.</p>
        <p>Quod officiis id magnam fuga ipsa fugiat neque, quas inventore aperiam corrupti dolores tempore. Autem, et quod dolorum ducimus exercitationem iusto nostrum ipsa veritatis ab, dolorem distinctio possimus, sequi dolor.</p>
        <p>Odit corrupti nihil sapiente fuga, est quo aspernatur ullam atque esse animi? Fuga aspernatur voluptas iste praesentium voluptatem vel ex ducimus ipsam? Sed molestias expedita non sit culpa adipisci vitae.</p>
        <p>Earum modi eligendi, corrupti provident labore dignissimos eum placeat at cumque error exercitationem ex voluptatem, fugiat, quos omnis aperiam maxime ducimus? Labore minima saepe autem aut tempora fugiat natus ad!</p>
        <div class="imagen bg-cover bg-right border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>
    </div>

@endsection
