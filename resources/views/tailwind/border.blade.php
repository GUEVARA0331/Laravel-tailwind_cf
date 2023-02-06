@extends('layouts.model')

@section('title', 'Border')

@section('content')

    <ul>
        <li><a href="https://tailwindcss.com/docs/border-style">-> Ver documentación de estilos de bordes. <-</a></li>
    </ul>

    <br>

    <div class="container mx-auto pt-5 cols-5">
        <div class="grid grid-cols-4 gap-4">
            <div class="w-64 h-32 bg-gray-500 border-8 border-blue-800 mb-3 rounded-full">Bordes redondeados</div>
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800 mb-3 border-double">Bordes predeterminados</div>
            <div class="w-64 h-64 bg-gray-500 border-l-8 border-blue-800 mb-3 hover:border-opacity-25">Bordes con hover</div>
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800">Bordes normales</div>
        </div>

        <div class="divide-y-8 divide-gray-600 divide-dashed">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, animi? Laboriosam, explicabo delectus autem iste ullam obcaecati, repellat quas nemo, ea nostrum dignissimos tempore? Nam provident vel est iste. Labore?</p>
            <p>Temporibus, mollitia asperiores neque ea maiores fugit ducimus vel voluptatibus aliquam sapiente amet, qui consequuntur reprehenderit perspiciatis vitae itaque. Enim esse dicta hic illo. Ipsum laudantium nesciunt debitis consequatur optio!</p>
            <p>Facilis eum beatae, numquam tempora sed, labore corrupti totam rerum commodi veritatis a magnam non nostrum voluptate doloremque dolor sunt facere voluptatem pariatur, asperiores nemo voluptas! Reprehenderit ipsam culpa dolore.</p>
            <p>Porro doloremque libero, quos minima autem voluptate! Illum quasi eos voluptatum eaque iusto laborum quae eius! Porro itaque officiis magnam veniam ea ipsum deleniti assumenda, laboriosam praesentium quisquam autem maxime?</p>
            <p>Eveniet, enim blanditiis. Rerum, temporibus illum facere nulla facilis repellat iure aliquid nisi consequuntur, quos, nobis quam adipisci doloribus. Culpa ullam porro eum mollitia modi dolorem doloremque quia? Minima, cum!</p>
        </div>

        <nav class="divide-x-2 divide-blue-600">
            <a href="">link 1</a>
            <a href="">link 2</a>
            <a href="">link 3</a>
            <a href="">link 4</a>
            <a href="">link 5</a>
        </nav>
    </div>

@endsection

