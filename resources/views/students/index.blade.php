@extends ('layouts.app')


@section ('title-block') Список cтудентов @endsection

@section ('content')
<a href="{{ route('students.create') }}"><button type="button" class="btn btn-dark add-group">Добавить нового студента</button></a>

<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Группа</th>
            <th scope="col">Редактировать</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $el)
        <tr>
          <td>{{ $el->last_name}} {{ $el->first_name}} {{ $el->middle_name}}</td>
          <td>{{ $el->group->name}}</td>
          <td><a href="{{ route('students.edit', $el -> id) }}">Редактировать</a></td>
      </tr>
      @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {{ $data->links() }}
      </div>
@endsection