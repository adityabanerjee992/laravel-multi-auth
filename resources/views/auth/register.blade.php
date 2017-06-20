@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register As</div>
                <div class="panel-body">
                    <div class="container">
                        <ul class="nav nav-pills">
                          <li role="presentation" class="active"><a href="{{ route('register.parent') }}">Parent</a></li>
                          <li role="presentation"><a href="{{ route('register.student') }}">Student</a></li>
                          {{-- <li role="presentation"><a href="{{ route('register.teacher') }}">Teacher</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
