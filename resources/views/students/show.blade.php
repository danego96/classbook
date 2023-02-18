@extends ('layouts.app')


@section ('title-block') Информация о студенте @endsection

@section ('content')

<h2 class="student_header">
        {{ $data->last_name}} {{ $data->first_name}}
</h2>
<a href="{{ route('marks.create') }}"><button type="button" class="btn btn-dark add-group">Добавить оценку</button></a>
<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">Предмет</th>
            <th scope="col">Оценки</th>
          </tr>
        </thead>
        <tbody>
        @foreach($subject_data as $subjects)
        <tr>
          <td>{{ $subjects->name}}</td>
      </tr>
      @endforeach
        </tbody>
      </table>

@endsection