@extends ('layouts.app')


@section ('title-block') Предметы @endsection

@section ('content')
<a href="{{ route('subjects.create') }}"><button type="button" class="btn btn-dark add-group">Добавить предмет</button></a>

<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">Наименование</th>
            <th scope="col">Редактировать</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $el)
        <tr>
          <td>{{ $el->name }}</td>
          <td><a href="{{ route('subjects.edit', $el -> id) }}">Редактировать</a></td>
      </tr>
      @endforeach
        </tbody>
      </table>
      {{$data -> links()}}
@endsection