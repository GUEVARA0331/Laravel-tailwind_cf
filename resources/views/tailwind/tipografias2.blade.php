@extends('layouts.model')

@section('title', 'Tipografías 2')

@section('content')

    <ul>
        <li><a href="https://tailwindcss.com/docs/font-weight">-> Ver documentación de tamaño de fuente. <-</a></li>
        <li><a href="https://tailwindcss.com/docs/letter-spacing">-> Ver documentación de espaciado de letras. <-</a></li>
        <li><a href="https://tailwindcss.com/docs/list-style-type">-> Ver documentación de estilos de listas. <-</a></li>
        <li><a href="https://tailwindcss.com/docs/list-style-position">-> Ver documentación de posición de estilos en listas. <-</a></li>
        <li><a href="https://tailwindcss.com/docs/text-color">-> Ver documentación sobre los colores de fuentes. <-</a></li>
    </ul>

    <br>

    <div class="container">

        <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline uppercase">Este es el título con mayúsculas</h1>
        <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline">Este es el título</h1>

        <p class="text-red-700 hover:text-opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum dolorem nostrum praesentium rem aperiam laudantium delectus deleniti reiciendis eius, porro facilis? Unde aut quas facere voluptate asperiores eum ex?</p>
        <p class="text-red-700 hover:text-blue-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum dolorem nostrum praesentium rem aperiam laudantium delectus deleniti reiciendis eius, porro facilis? Unde aut quas facere voluptate asperiores eum ex?</p>

        <ul class="list-decimal md:list-disc list-inside">
            <li class="line-through">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ea libero, neque ducimus deserunt qui exercitationem esse corrupti natus rem, eligendi quo reiciendis quae alias nostrum perspiciatis aliquid maxime cupiditate.</li>
            <li>Similique quaerat autem dolorum dolore explicabo reprehenderit laborum hic ullam itaque deleniti nam aut, fuga beatae qui cumque ad quia culpa ducimus neque totam ea nihil, repellendus eum? Vel, aperiam.</li>
            <li>Praesentium, ab. Ipsa ducimus quae incidunt provident deserunt labore, facilis quis, debitis illum facere totam nam minima sunt minus natus? Quasi quaerat repellat atque rem sequi voluptatem? Sequi, eveniet in.</li>
            <li>Id tenetur, sint asperiores eveniet sapiente suscipit unde nemo quod quisquam, a eum laborum architecto, ducimus magnam. Cum, modi mollitia reprehenderit laborum esse vel ea provident assumenda quo. Officiis, perferendis?</li>
            <li class="lowercase"><strong>Todo en minúsculas</strong> Voluptas omnis voluptates ea nisi! Atque porro perferendis accusamus tempore natus esse ipsam? Iste odit optio harum! Molestiae, tempore, nobis corporis numquam labore ea porro unde adipisci odio illo possimus?</li>
        </ul>

        <p class="capitalize"><strong>Con mayusculas inicial en cada palabra: </strong>jesús david guevara munar</p>
    </div>

    <br>

    <div class="container">
        <p class="tracking-tighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptas perferendis repellendus provident nisi eos! Voluptatibus modi excepturi, sequi cumque omnis a? Nihil, totam magnam! Maiores consequatur explicabo ipsa quis!</p>
    </div>

    <br>

    <div class="container">
        <p class="font-mont font-hairline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptas perferendis repellendus provident nisi eos! Voluptatibus modi excepturi, sequi cumque omnis a? Nihil, totam magnam! Maiores consequatur explicabo ipsa quis!</p>
        <p class="font-mont font-light">Consectetur, architecto fuga sunt numquam a debitis dolore cumque iste illo, impedit at iure. A delectus enim sunt consequatur? Nostrum, neque voluptatem! Quos fugit corporis eligendi. Ad repellat deleniti nesciunt.</p>
        <p class="font-mont font-semibold">Obcaecati modi error quibusdam, ipsam nam sequi mollitia ipsum quam, aliquid ab in cumque id enim iure tenetur minima accusantium delectus inventore recusandae iste culpa tempore sit aut. Facere, quae?</p>
        <p class="font-mont font-black">Velit id, assumenda dolores sunt facere fuga unde optio aperiam odio asperiores ullam recusandae necessitatibus sapiente cumque officia error minima quidem reiciendis ex itaque eaque nulla veniam facilis. Quas, eligendi.</p>
    </div>

@endsection

