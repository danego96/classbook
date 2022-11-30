@extends ('layouts.app')


@section ('title-block') Добавить группу @endsection

@section ('content')
<h1> Новая группа </h1>
<form action="{{ route('groups.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Введите название группы</label>
    <input type="text" name="name" id="имя" class="form-control">
</div>
  
    <button type="submit" class="btn btn-primary">Добавить группу</button>
  </form>
@endsection