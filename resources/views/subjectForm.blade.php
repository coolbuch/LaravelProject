


@extends("base")

@section("content")

    <form action="/subject/create/" method="post">
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите Имя">

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




