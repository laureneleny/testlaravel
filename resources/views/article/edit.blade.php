@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 panel panel-default">
               @include ('article.partials.errors')
                <div class="col-xs-12 panel">
                    <h2>Modifier un article</h2>
                    @include('article.partials.form', ['item' => $article])
                </div>
            </div>
        </div>
    </div>

@endsection