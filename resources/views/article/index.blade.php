@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <a href="{{ route ('article.create') }}" style="color: black; font-size: 18px; ;">Ajouter un article</a>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Vous êtes connecté !

                        <h1>Articles</h1>

                        <div class="container" style="">
                            <div class="row">
                                @if(isset($article))
                                    @foreach($article as $art)
                                        <h2>{{ $art->title }}</h2>
                                        <p>{{ $art->description }}</p>
                                        <p>Ecrit par {{$art->user_id}}</p>
                                    @endforeach

                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection