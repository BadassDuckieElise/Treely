<<<<<<< HEAD
@include('layout');

<!doctype html>
<html class="no-js" lang="zxx">

<body>

</body>

</html>
=======
@extends('layouts.commands')

@section('content')
<div class="row mb-3">
    <div class="col-md-8 offset-md-2">
        <form method="GET" action="{{ url('/commands') }}">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search commands..." value="{{ request()->input('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="commands-row">
    <div class="col-md-10 offset-md-1">
        @if(count($commands) > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Command</th>
                            <th scope="col">Description</th>
                            <th scope="col">Usage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commands as $command)
                            <tr>
                                <td>{{ $command['name'] }}</td>
                                <td>{{ $command['description'] }}</td>
                                <td>{{ $command['usage'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info" role="alert">
                No commands found.
            </div>
        @endif
    </div>
</div>
@endsection
>>>>>>> master
