@extends ('layouts.app')


@section ('title-block') Добавить студента @endsection

@section ('content')
<h1> Данные студента </h1>
<form action="{{ route('students.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="last_name" class="form-label">Фамилия</label>
    <input type="text" name="last_name" id="last_name" class="form-control">
</div>
  <div class="mb-3">
    <label for="first_name" class="form-label">Имя</label>
    <input type="text" name="first_name" id="first_name" class="form-control">
</div>
<div class="mb-3">
    <label for="middle_name" class="form-label">Отчество</label>
    <input type="text" name="middle_name" id="middle_name" class="form-control">
</div>
<div class="mb-3">
  <label for="group_id" class="form-label">Группа</label>
    <select class="form-select" aria-label="Default select example" name="group_id">
      <option selected>Выберите группу</option>
        @foreach($data as $el)
         <option name="group_id" value="{{$el->id}}">{{$el->name}}</option>
        @endforeach
  </select>
</div>
<div class="mb-3">
    <label for="birth_date" class="form-label">Дата рождения</label>
    <input type="date" name="birth_date" id="birth_date" class="form-control">
</div>
  
    <button type="submit" class="btn btn-primary">Добавить Студента</button>
  </form>
@endsection