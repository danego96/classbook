@extends ('layouts.app')


@section ('title-block') Список групп @endsection

@section ('content')
<a href="{{ route('groups.create') }}"><button type="button" class="btn btn-dark add-group">Добавить группу</button></a>

тут будет список
@endsection