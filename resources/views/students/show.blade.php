@extends ('layouts.app')


@section ('title-block') Информация о студенте @endsection

@section ('content')

<h2 class="student_header">
        {{ $data->last_name}} {{ $data->first_name}}
</h2>
<a href="{{ route('students.marks.index', $data->id) }}"><button type="button" class="btn btn-dark add-group">Оценки</button></a>
@foreach($select_group as $selected)
@if ($data -> group_id == $selected->id)<p value="{{ $selected->group_id }}">Группа студента:{{ $selected->name }}</p> @endif
@endforeach
<p>Дата Рождения: {{ $data->birth_date}}</p>


@endsection