@extends('layouts.model')

@section('title', 'Columns image')

@section('content')

    <div class="container mx-auto py-12">

        <a href="https://tailwindcss.com/docs/columns">-> Ver documentación de columnas. <-</a>

        <div class="columns-2">
            <p class="bg-red-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi finibus, venenatis risus vitae, consequat ligula. Suspendisse potenti. Vestibulum quis eros nec orci ultrices tempus sit amet eleifend Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium reiciendis illo deserunt, aperiam odio facilis adipisci ullam vitae voluptate eum, laborum maiores repellendus. Assumenda ullam magni beatae quis, qui quisquam. justo. Phasellus ullamcorper nec ex vel auctor. Curabitur non sem id nisl egestas condimentum. Mauris dapibus vestibulum augue vitae aliquam. Nulla egestas, massa at sollicitudin sollicitudin, enim augue pulvinar ante, in commodo eros purus et est. Aliquam nibh dui, rutrum ac nunc quis, mattis rhoncus odio. Pellentesque dolor tellus, condimentum quis mauris id, tincidunt condimentum ante. Nulla iaculis iaculis viverra. Integer non mi a sapien maximus dictum.</p>
            <p class="bg-blue-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis esse nostrum nisi amet autem cum ea optio odio harum aspernatur sequi, dicta placeat id sunt necessitatibus veniam libero consectetur blanditiis. Etiam non nisl enim. Nunc et tellus et arcu ornare porttitor. Duis pulvinar et elit a fermentum. Curabitur pulvinar sodales tortor, quis porta diam finibus et. Morbi sodales efficitur lacus, eu laoreet dui finibus quis. Sed sodales risus eu aliquet convallis. Vestibulum laoreet vehicula leo eu ullamcorper. Morbi nec finibus justo. Cras non ipsum odio. Maecenas id mauris nulla. Integer et odio sit amet risus iaculis rhoncus a non enim. Aenean sit amet tempor neque, at convallis quam. Nulla in diam id nisi cursus laoreet. Nam ut mauris nisi.</p>
            <p class="bg-green-200 break-inside-avoid-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur temporibus facere accusantium quo numquam asperiores? Deserunt expedita, repellendus, vero aut aliquid illum facilis asperiores rerum voluptatum magnam quasi veniam optio. Phasellus a odio congue, tempor mauris non, elementum tortor. Aliquam ante velit, pretium ac ipsum semper, faucibus placerat nisl. Proin tempus sodales sapien, in volutpat quam. Sed ornare arcu orci, quis tempor est dignissim eget. Etiam nec massa vitae diam dignissim vulputate. Morbi id eleifend sapien. Fusce vitae vehicula erat. Integer fringilla nibh in nisl cursus ultricies. Nulla tempus quis nibh vitae fermentum. Ut finibus est sit amet molestie suscipit. Sed malesuada viverra metus, porttitor euismod magna varius nec. Fusce sit amet velit imperdiet, suscipit eros non, dignissim magna.</p>
            <p class="bg-indigo-200">Curabitur congue blandit libero quis sollicitudin. Ut faucibus, eros et rhoncus laoreet, ipsum nibh lobortis orci, id consequat ligula arcu ac metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla accumsan, nibh quis euismod iaculis, lectus ex consequat ipsum, sed volutpat neque leo nec elit. Integer vulputate vestibulum erat, nec dapibus est varius ac. Sed varius metus vitae nulla tempor, ut suscipit diam pellentesque. Morbi sollicitudin enim eget magna aliquam, nec maximus dui gravida. Cras lacinia convallis porttitor. Pellentesque ullamcorper placerat efficitur. Aenean nisi magna, ultricies sit amet sollicitudin sit amet, consequat quis metus. Sed ac elit justo. Curabitur id consectetur turpis. Curabitur lacus mauris, tincidunt quis augue a, dictum dignissim massa. Sed sit amet neque a nibh varius viverra. Cras vel facilisis enim, non fermentum lectus. Maecenas enim nibh, ullamcorper non mauris at, commodo fermentum libero.</p>
            <p class="bg-yellow-200">Maecenas nenunc mattis lacus, eu sagittis libero dui at lorem. Vestibulum at aliquam mi. Maecenas vel arcu arcu. Sed tempor nulla bibendum turpis venenatis, in commodo sem dapibus. Integer nec neque id dui bibendum aliquet ac quis purus. In velit tellus, interdum condimentum lectus non, consectetur rutrum sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris erat lorem, pellentesque vitae facilisis sed, rhoncus non massa.</p>
        </div>

        <br>

        <div class="columns-3xs gap-6">
            <img src="{{ asset('img/eurasian-blue-tit-7085704_960_720.jpg') }}" alt="">
            <img src="{{ asset('img/wind-energy-7342177_960_720.jpg') }}" alt="">
            <img src="{{ asset('img/old-woman-7340874_960_720.jpg') }}" alt="">
            <img src="{{ asset('img/squirrel-7367445_960_720.jpg') }}" alt="">
            <img src="{{ asset('img/woman-7333557_960_720.jpg') }}" alt="">
            <img src="{{ asset('img/cat-7287671_960_720.jpg') }}" alt="">
        </div>

    </div>

@endsection

