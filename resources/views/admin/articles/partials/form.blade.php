<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" name="title" class="form-control" placeholder="Заголовок новости"
value="{{$article->title or ""}}" required>

<label for="">Slug (уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
  @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание новости</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>
<label for="">Полное описание новости</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" value="{{$article->meta_title or ""}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" value="{{$article->meta_description or ""}}">

<label for="">Ключевые слова (через запятую)</label>
<input type="text" class="form-control" name="meta_keyword" value="{{$article->meta_keyword or ""}}">

<hr />

<input class="btn btn-primar" type="submit" value="Сохранить">
