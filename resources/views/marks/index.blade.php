@extends ('layouts.app')


@section ('title-block') Информация о студенте @endsection

@section ('content')

<h2 class="student_header">
    
</h2>
<a href=" {{ route('students.marks.create', $data) }}"><button type="button" class="btn btn-dark add-group">Добавить оценку</button></a>
<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">Предмет</th>
            <th scope="col">Оценки</th>
          </tr>
        </thead>
        <tbody>
        @foreach($mark_data as $mark)
        <tr>
          <td value="{{ $mark->id}}">{{ $mark->subject}}</td>
          <td value="{{ $mark->id}}">{{ $mark->mark}}</td>
      </tr>
      @endforeach
        </tbody>
      </table>

@endsection