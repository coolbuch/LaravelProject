


@extends("base")

@section("content")

    <form action="/studentSubject/create/" method="post">
        <div class="form-group">
            <label for="student_id">Введите ID студента</label>
            <input type="number" class="form-control" name="student_id" id="student_id" placeholder="Введите ID студента">
            <label for="subject_id">Введите ID предмета</label>
            <input type="number" class="form-control" name="subject_id" id="subject_id" placeholder="Введите ID предмета">

        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>

@stop




