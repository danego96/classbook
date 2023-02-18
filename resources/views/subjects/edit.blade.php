@extends ('layouts.app')


@section ('title-block') Редактировать @endsection

@section ('content')

<h1>редактирование предмета</h1>

<form action="{{ route('subjects.update', $data -> id) }}" method="post">
{{csrf_field()}}
{{ method_field('put') }}
    <div class="mb-3">
        <label for="name" class="form-label">Введите название предмета</label>
        <input type="text" value="{{$data-> name}}" name="name" placeholder="Введите предмет" id="имя" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
<br>
<form action="{{ route('subjects.destroy', $data -> id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('delete') }}
    <button class="btn btn-danger">Удалить</button>
    </form>



@endsection