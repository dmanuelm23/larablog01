@csrf
<div class="form-gorup">
    <label for="title">Título:</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $category->title) }}">
</div>
<div class="form-gorup">
    <label for="url_clean">Url limpia:</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean', $category->url_clean)}}">
</div>
<input type="submit" value="Guardar" name="" id="" class="btn btn-primary mt-3">