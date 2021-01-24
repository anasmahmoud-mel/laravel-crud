@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            View Post
            <a class="btn btn-primary" href="{{ route('citziens.create') }}"> Back</a>


        </div>
        @foreach ($citzien as $citzien)
            <div class="card-body">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Title:</strong>
                            {{ $citzien->citzien_fullname }}

                        </div>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Body:</strong>

                            <P> {{ $citzien->citzien_fullname }}</P>

                        </div>

                    </div>

                </div>
        @endforeach

    </div>
    </div>

@endsection
