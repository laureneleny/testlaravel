@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @include('article.partials.errors')
            <div class="col-xs-12 panel panel-default">
                <h2>Créer un nouvel article</h2>
                @include ('article.partials.form', ['item'=> $article])
            </div>
        </div>
    </div>

@endsection