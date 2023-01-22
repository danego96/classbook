@extends ('layouts.app')


@section ('title-block') Список cтудентов @endsection

@section ('content')
<a href="{{ route('students.create') }}"><button type="button" class="btn btn-dark add-group">Добавить нового студента</button></a>

<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Группа</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $el)
        <tr>
          <td>{{ $el->last_name}} {{ $el->first_name}} {{ $el->middle_name}}</td>
          <td>{{ $el->group->name}}</td>
      </tr>
      @endforeach
        </tbody>
      </table>
@endsection