@extends ('layouts.app')


@section ('title-block') Редактировать @endsection

@section ('content')

<h1>Обновление записи</h1>

<form action="{{ route('students.update', $data -> id) }}" method="post">
{{csrf_field()}}
{{ method_field('put') }}
<div class="mb-3">
    <label for="last_name" class="form-label">Фамилия</label>
    <input type="text" name="last_name" id="last_name" value="{{$data-> last_name}}" class="form-control">
</div>
  <div class="mb-3">
    <label for="first_name" class="form-label">Имя</label>
    <input type="text" name="first_name" id="first_name" class="form-control" value="{{$data-> first_name}}">
</div>
<div class="mb-3">
    <label for="middle_name" class="form-label">Отчество</label>
    <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{$data-> middle_name}}">
</div>
<div class="mb-3">
    <label for="group_id" class="form-label">Группа</label>
      <select class="form-select" aria-label="Default select example" name="group_id" value="{{$data-> group_id}}">
        <option selected>{{$data-> group_id}}</option>
          @foreach($select_group as $selected)
           <option name="group_id" value="{{$selected->id}}">{{$selected->name}}</option>
          @endforeach
    </select>
  </div>
<div class="mb-3">
    <label for="birth_date" class="form-label">Дата рождения</label>
    <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{$data-> birth_date}}">
</div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
<br>
<form action="{{ route('students.destroy', $data -> id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('delete') }}
    <button class="btn btn-danger">Удалить</button>
    </form>



@endsection