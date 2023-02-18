@extends ('layouts.app')


@section ('title-block') Добавить предмет @endsection

@section ('content')
<h1> Новый предмет </h1>
<form action="{{ route('subjects.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Введите название предмета</label>
    <input type="text" name="name" id="имя" class="form-control">
</div>
  
    <button type="submit" class="btn btn-primary">Добавить предмет</button>
  </form>
@endsection