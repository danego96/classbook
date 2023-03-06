@extends ('layouts.app')


@section('title-block')
    Добавить оценку
@endsection

@section('content')
    <h1> Выберите оценку и предмет </h1>
    <form action="{{ route('students.marks.store', $data) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="subject_id" class="form-label">Предмет</label>
            <select class="form-select" aria-label="Default select example" name="subject_id">
                @foreach ($subject_data as $subject)
                    <option name="subject_id" value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
            <label for="mark" class="form-label">Оценка</label>
            <select class="form-select" aria-label="Default select example" name="mark" value="">
                @foreach ($mark_list as $el)
                    <option name="mark"> {{ $el }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Добавить группу</button>
    </form>
@endsection
