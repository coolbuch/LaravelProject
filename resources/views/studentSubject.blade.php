@extends("base")

@section("content")

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">id</td>
            <td scope="col">ФИО студента</td>
            <td scope="col">Название предмета</td>
        </tr>
        </thead>
        <tbody>
        @foreach($studentSubjects as $stSubject)
            <tr>
                <td scope="col">{{$stSubject->id}}</td>
                <td scope="col">{{$stSubject->student->second_name}} {{$stSubject->student->first_name}} {{$stSubject->student->third_name}}</td>
                <td scope="col">{{$stSubject->subject->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="javascript:window.location.href='/studentSubject/create'">Create new</button>

@stop
