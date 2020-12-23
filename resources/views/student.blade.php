@extends("base")

@section("content")

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">id</td>
            <td scope="col">Имя</td>
            <td scope="col">Фамилия</td>
            <td scope="col">Отчество</td>
            <td scope="col">Дата рождения</td>
            <td scope="col">Курс</td>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td scope="col">{{$student->id}}</td>
                <td scope="col">{{$student->first_name}}</td>
                <td scope="col">{{$student->second_name}}</td>
                <td scope="col">{{$student->third_name}}</td>
                <td scope="col">{{$student->date_birth}}</td>
                <td scope="col">{{$student->course}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="javascript:window.location.href='/student/create'">Create new</button>

@stop
