@extends ('layouts.app')


@section ('title-block') Редактировать @endsection

@section ('content')

<h1>Обновление записи</h1>

<form action="{{ route('groups.update', $data -> id) }}" method="post">
{{csrf_field()}}
{{ method_field('put') }}
    <div class="mb-3">
        <label for="name" class="form-label">Введите название группы</label>
        <input type="text" value="{{$data-> name}}" name="name" placeholder="Введите имя" id="имя" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
<br>
<form action="{{ route('groups.destroy', $data -> id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('delete') }}
    <button class="btn btn-danger">Удалить</button>
    </form>



@endsection