@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="badge badge-primary">Категорий 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="badge badge-primary">Материалов 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="badge badge-primary">Посетителей 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="badge badge-primary">Ближайших событий 0</span></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Создать категорию</a>
        <div class="list-group-item" href="#">
          <h4 class="list-group-item-heading">Категория первая</h4>
          <p class="list-group-item-text">Колличество материалов</p>
        </div>
      </div>

      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Создать категорию</a>
        <div class="list-group-item" href="#">
          <h4 class="list-group-item-heading">Материал первый</h4>
          <p class="list-group-item-text">Категория</p>
        </div>
      </div>
    </div>
  </div>
@endsection
