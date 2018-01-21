
<form action="{{$item->exists ? route('article.update', [$item->id]): route('article.store')}}" method="POST">
    {{ csrf_field() }}

    {{ method_field( $item->exists ? 'PUT' : 'POST') }}
<div class="form-group">

    <input class="form-control"  value="{{old('title', $item->title)}}" type="text" name="title" placeholder="Titre">

</div>
    <div class="form-group">
    <input class="form-control"  value="{{old('title', $item->user_id)}}" type="text" name="user_id" placeholder="Votre nom">
    </div>

    <div class="form-group">
                        <textarea placeholder="Description"
                                  name="description"
                                  id=""
                                  cols="30"
                                  rows="10"
                                  class="form-control">{{old('description', $item->description)}}</textarea>
    </div>

    <div class="form-group">
        <select class="form-control" name="is_done" id="">
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>




    <button class="btn btn-primary btn-block">Envoyer</button>


