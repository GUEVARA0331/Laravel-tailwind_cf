@extends('layouts.model')

@section('title', 'Tablas')

@section('content')

    <div class="container">
        <table class="table w-full border-separate lg:border-collapse table-fixed">
            <thead>
                <tr>
                    <th class="w-1/4">País</th>
                    <th class="w-1/4">Ciudad</th>
                    <th class="w-1/2">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Perú</td>
                    <td>Lima</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, id eveniet illum odio soluta ipsa dolorum est fuga dolores quas consequuntur magni debitis corporis, culpa molestiae cum tenetur quis laborum.</td>
                </tr>
                <tr>
                    <td>Colombia</td>
                    <td>Bogotá</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, id eveniet illum odio soluta ipsa dolorum est fuga dolores quas consequuntur magni debitis corporis, culpa molestiae cum tenetur quis laborum.</td>
                </tr>
                <tr>
                    <td>España</td>
                    <td>Madrid</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, id eveniet illum odio soluta ipsa dolorum est fuga dolores quas consequuntur magni debitis corporis, culpa molestiae cum tenetur quis laborum.</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

