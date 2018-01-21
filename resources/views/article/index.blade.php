@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 panel panel-default">
                <a href="{{ route ('article.create') }}" style="color: black; font-size: 24px;">Ajouter une tâche</a>
                <div class="panel-heading">Mes articles</div>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titre de l'article</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($article as $articl)
                        <tr>
                            <th>{{ $articl->title }}</th>

                            <td>
                                <a href="{{ route('article.show', [$articl->id]) }}">
                                    Voir
                                </a>


                                <a href="{{ route('article.edit', [$articl->id]) }}">
                                    Edit
                                </a>

                                <a href="#" onclick="event.preventDefault();
                                        document.getElementById('form-{!! $articl->id !!}').submit();">
                                    Supprimer
                                </a>

                                <form id="form-{{$articl->id}}" method="POST"
                                      action="{{ route('article.destroy', [$articl->id]) }}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection