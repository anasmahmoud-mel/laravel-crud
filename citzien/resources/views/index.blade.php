@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>

    <div class="card uper">

        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('citziens.create') }}"> Create New Post</a>
        </div>

        <div class="card-body">
            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Gender</td>
                        <td>Mobile</td>
                        <td>Edit</td>
                        <td>Show</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citzien as $citzien)
                        <tr>
                            <td>{{ $citzien->citzien_fullname }}</td>
                            <td>{{ $citzien->citzien_gender }}</td>
                            <td>{{ $citzien->citzien_mobile }}</td>

                            <td><a href="{{ route('citziens.edit', $citzien->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a class="btn btn-primary" href="{{ route('citziens.show', $citzien->id) }}">Show</a></td>
                            <td>
                                <form action="{{ route('citziens.destroy', $citzien->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
