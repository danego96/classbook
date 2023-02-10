@extends ('layouts.app')


@section ('title-block') Список cтудентов @endsection

@section ('content')

<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Группа</th>
            <th scope="col">Редактировать</th>
          </tr>
        </thead>
        <tbody>
        @foreach($group_students as $group_student)
        <tr>
          <td>{{ $group_student->last_name}} {{ $group_student->first_name}} {{ $group_student->middle_name}}</td>
          <td>{{ $group_student->group->name}}</td>
          <td><a href="{{ route('students.edit', $group_student -> id) }}">Редактировать</a></td>
      </tr>
      @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {{ $group_students->links() }}
      </div>
@endsection