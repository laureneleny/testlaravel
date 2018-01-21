@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 panel panel-default">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->description }}</p>

            </div>
        </div>
    </div>


@endsection

