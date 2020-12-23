@extends("base")

@section("content")

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">id</td>
            <td scope="col">Имя</td>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td scope="col">{{$subject->id}}</td>
                <td scope="col">{{$subject->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="javascript:window.location.href='/subject/create'">Create new</button>

@stop
