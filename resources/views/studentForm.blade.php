


@extends("base")

@section("content")

    <form action="/student/create/" method="post">
        <div class="form-group">
            <label for="first_name">Введите имя</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Введите Имя">
            <label for="second_name">Введите фамилию</label>
            <input type="text" class="form-control" name="second_name" id="second_name" placeholder="Введите фамилию">
            <label for="third_name">Введите Отчество</label>
            <input type="text" class="form-control" name="third_name" id="third_name" placeholder="Введите отчество">
            <label for="date_birth">Дата рождения</label>
            <input type="date" class="form-control" name="date_birth" id="date_birth" placeholder="Дата рождения">
            <label for="course">Курс</label>
            <input type="number" class="form-control" name="course" id="course" placeholder="Введите курс">

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




