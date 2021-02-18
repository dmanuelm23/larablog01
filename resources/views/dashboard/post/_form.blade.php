@csrf
<div class="form-group">
    <label for="title">Título:</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>
<div class="form-group">
    <label for="url_clean">Url limpia:</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean', $post->url_clean)}}">
</div>
<div class="form-group">
    <label for="category_id">Categorias:</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value="">Seleccione...</option>
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected ="selected"' : ''  }} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="posted">Publicado:</label>
    <select name="posted" id="posted" class="form-control">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>
<div class="form-group">
    <label for="content">Contenido:</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
</div>
<input type="submit" value="Guardar" name="" id="" class="btn btn-primary mt-3">