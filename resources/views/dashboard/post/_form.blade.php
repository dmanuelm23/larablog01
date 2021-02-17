@csrf
<div class="form-gorup">
    <label for="title">Título:</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>
<div class="form-gorup">
    <label for="url_clean">Url limpia:</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean', $post->url_clean)}}">
</div>
<div class="form-gorup">
    <label for="content">Contenido:</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
</div>
<input type="submit" value="Guardar" name="" id="" class="btn btn-primary mt-3">