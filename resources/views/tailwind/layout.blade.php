@extends('layouts.model')

@section('title', 'Layout')

@section('content')

    <div class="container mt-4">
        <div class="container">
            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">
                Título 1
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quam nobis, exercitationem sapiente dolores facilis eos eaque recusandae soluta optio aperiam praesentium voluptatem expedita corrupti quas eius laborum iusto minus!</p>
            <p>Ex aspernatur id quae vero, corporis tempora perspiciatis sit laudantium minima laborum tenetur dolorum architecto omnis illo eveniet eaque sapiente veniam sint voluptate facere. Ut incidunt obcaecati nesciunt error. Suscipit.</p>

            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">
                Título 2
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quam nobis, exercitationem sapiente dolores facilis eos eaque recusandae soluta optio aperiam praesentium voluptatem expedita corrupti quas eius laborum iusto minus!</p>
            <p>Ex aspernatur id quae vero, corporis tempora perspiciatis sit laudantium minima laborum tenetur dolorum architecto omnis illo eveniet eaque sapiente veniam sint voluptate facere. Ut incidunt obcaecati nesciunt error. Suscipit.</p>

            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">
                Título 3
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quam nobis, exercitationem sapiente dolores facilis eos eaque recusandae soluta optio aperiam praesentium voluptatem expedita corrupti quas eius laborum iusto minus!</p>
            <p>Ex aspernatur id quae vero, corporis tempora perspiciatis sit laudantium minima laborum tenetur dolorum architecto omnis illo eveniet eaque sapiente veniam sint voluptate facere. Ut incidunt obcaecati nesciunt error. Suscipit.</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi necessitatibus tenetur, amet labore totam libero expedita quisquam sunt temporibus, delectus repellat veritatis assumenda fugiat optio iusto, tempore modi praesentium repellendus!</p>
            <p>Facere, hic dignissimos quaerat distinctio perferendis, sed nulla asperiores accusantium adipisci iure quia, quibusdam quidem eaque possimus officia libero? Quas laborum necessitatibus quisquam sunt expedita possimus nisi ratione cumque. Sapiente?</p>
            <p>Nesciunt voluptatem neque mollitia explicabo recusandae, magni iure hic molestiae esse deleniti itaque id ipsam animi aperiam vel odio commodi modi porro libero numquam ex accusamus placeat perspiciatis. Corrupti, iusto?</p><p>Dignissimos nihil perferendis delectus laborum quae, sed aspernatur quo non corporis quia maiores, porro corrupti sapiente. Facilis modi in at perspiciatis rerum, ipsam a, accusantium voluptates vitae repellat quisquam quibusdam.</p>
            <p>Dignissimos asperiores consequuntur quibusdam. Deleniti repudiandae, ullam at cumque esse modi quisquam id nesciunt iusto? Temporibus vitae maxime, at expedita consectetur deleniti, voluptatibus odit, nihil reprehenderit libero velit veniam explicabo.</p>

        </div>
        <br>
        <strong>Posición fixed (comentado navbar y sidebar ->aquí<-):</strong>
        <br><br>
        {{-- <div class="container">
            <nav class="bg-blue-300 h-16 fixed w-full z-50">
                Menú de navegación
            </nav>
            <aside class="w-64 bg-gray-800 fixed inset-y-0 z-40"></aside>
            <div class="container pt-16">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat nobis alias in perferendis, possimus laborum consequatur dolore ipsum, minus voluptatibus id accusamus sint consectetur. Corrupti fugiat ipsa quaerat necessitatibus eveniet!</p>
                <p>Quae labore at, vitae impedit consectetur illo omnis quam sed necessitatibus quaerat quo quisquam facere obcaecati illum nostrum architecto earum vero, ullam iste modi, explicabo odio assumenda voluptatem! Exercitationem, illo!</p>
                <p>Distinctio quisquam magni recusandae quidem pariatur numquam corrupti, officiis laborum. Neque saepe quia error debitis, dolore provident ex hic dignissimos ea sequi vitae cum adipisci! A similique non nisi laborum?</p>
                <p>Iure ratione aut vero, ducimus voluptate deleniti impedit placeat obcaecati. Aliquid voluptas ratione rem ea odio adipisci provident, nam magnam omnis excepturi voluptatem, fuga tempora molestiae at quis placeat rerum?</p>
                <p>Soluta delectus animi eligendi non iste deleniti magni maiores illo fuga odit, voluptate, laboriosam facilis expedita qui veritatis id dolore modi perferendis possimus. Autem ad illum aperiam odit. Provident, ducimus!</p>
            </div>
        </div>
        <br> --}}
        <div class="container">
            <div class="bg-gray-300 p-4 relative">
                <div class="bg-gray-400 p-4 relative">

                    <div class="bg-blue-400 p-4">

                    </div>

                    <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0 left-0">
                        Caja por fuera del flujo de nuestro diseño
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="bg-gray-300 p-4 h-64 overflow-auto{{-- overflow-y-scroll --}}">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates tempora magni similique reprehenderit quisquam eligendi eaque minima eius fuga facere nam, doloribus corrupti dicta numquam incidunt velit dolore dolores perferendis.</p>
                <p>Cum eveniet recusandae autem sint minima. Veritatis, corporis repellendus! Porro sed animi consectetur quam accusamus veniam mollitia odit tempora, excepturi aut. In itaque labore rem corrupti ipsum cum tenetur dolores!</p>
                <p>Illo fugiat porro quo rem, accusamus labore velit consequatur officiis vitae, maxime unde. Amet voluptate, fuga ullam, minima, exercitationem placeat sint deleniti vitae enim suscipit voluptatem. Qui nihil exercitationem esse.</p>
                <p>Neque recusandae architecto ipsum, quae laboriosam dolorum dicta qui nostrum? Consequatur eos quis porro aliquid cumque, libero autem harum ex commodi corrupti provident totam! Laboriosam repellat sequi rerum harum dolorem.</p>
                <p>Sit, adipisci impedit veritatis porro dicta delectus recusandae ipsum dolorum sunt ad ea ab illo, labore incidunt! Atque, animi consectetur similique non sunt corporis dignissimos, facere ad accusamus cumque vel.</p>
                <p>Omnis fugiat aliquam maiores eveniet. Omnis temporibus molestiae veniam. Nam, laboriosam. Non expedita deleniti, atque nesciunt magni tempora blanditiis beatae, maiores itaque sapiente illo obcaecati et qui incidunt, praesentium repellat?</p>
                <p>Iusto, enim corrupti, laborum laudantium adipisci, animi neque impedit maxime eveniet vitae tenetur consequuntur excepturi ipsam placeat perspiciatis ducimus doloremque delectus qui sunt aperiam earum. Aperiam dignissimos expedita velit itaque.</p>
                <p>Reprehenderit nesciunt iste ducimus repellendus tempore distinctio sunt eaque, ea fugiat cum porro veniam nobis, nulla perspiciatis ullam rem, placeat a maxime qui tenetur voluptas. Veniam optio nulla sed placeat!</p>
            </div>
        </div>
        <br>
        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover object-none" src="{{ asset('img/china-town-5679982_960_720.jpg') }}" alt="" class="">
        </div>
        <br>
        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover" src="{{ asset('img/china-town-5679982_960_720.jpg') }}" alt="" class="">
        </div>
        <br>
        <div class="continer">

            <img class="float-right" src="{{ asset('img/pexels-photo-3049353.jpeg') }}" alt="">
            <img class="float-left" src="{{ asset('img/pexels-photo-4264047.jpeg') }}" alt="">

            <p class="mb-2 clear-both">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloremque ad obcaecati animi dolore nostrum. At dicta corporis nisi, debitis culpa adipisci officiis fuga repellendus, et non mollitia perferendis ad.</p>
            <p class="mb-2">Totam pariatur officiis commodi numquam quae? Officiis ab deserunt harum reiciendis quas? Dignissimos repellat molestiae consequatur fugit voluptate delectus nobis perspiciatis quis blanditiis minima nulla nesciunt, nemo maiores aliquam corrupti?</p>
            <p class="mb-2">Veniam, nostrum illum incidunt deleniti error, consequuntur aut provident repellat praesentium possimus voluptas amet doloribus laudantium cupiditate, quae reiciendis dignissimos impedit cumque accusantium obcaecati sint! Praesentium consequatur ipsam vero laboriosam!</p>
            <p class="mb-2">Eius mollitia veritatis alias, reprehenderit quisquam ullam? Sed, praesentium eligendi! Beatae odit quod cupiditate distinctio culpa fuga inventore, officiis ad? Voluptatibus nisi dolores deleniti, officiis nulla obcaecati ullam doloremque eos?</p>
            <p class="mb-2">Modi consequatur ea illo inventore numquam recusandae quos iste odit tempore. Eum ea mollitia quasi unde consequatur amet cupiditate? Vel, adipisci similique tempore in earum hic? Delectus nostrum maiores iusto!</p>
            <p class="mb-2">Modi consequatur ea illo inventore numquam recusandae quos iste odit tempore. Eum ea mollitia quasi unde consequatur amet cupiditate? Vel, adipisci similique tempore in earum hic? Delectus nostrum maiores iusto!</p>
        </div>
        Cambiar diplay de la caja:
        <div class="continer bg-blue-700">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline-block">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline-block lg:hidden">3</div>
        </div>
        <br>
        <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
            <div class="bg-gray-500 h-full w-full">
                Caja con espacio definido (contenido fijo)
            </div>
        </div>
        <br>
        <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500">
            <div class="bg-gray-500 h-full w-full"></div>
        </div>
    </div>

@endsection
