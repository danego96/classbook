@extends ('layouts.app')


@section ('title-block') Добавить оценку @endsection

@section ('content')
<h1> Выберите оценку и предмет </h1>
<form action="#" method="post">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Введите название группы</label>
    <input type="text" name="name" id="имя" class="form-control">
</div>
  
    <button type="submit" class="btn btn-primary">Добавить группу</button>
  </form>
@endsection