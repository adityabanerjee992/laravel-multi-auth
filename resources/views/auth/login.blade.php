@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <div class="container">
                        <ul class="nav nav-pills">
                          <li role="presentation" class="active"><a href="{{ route('login.parent') }}">Parent Login</a></li>
                          <li role="presentation"><a href="{{ route('login.student') }}">Student Login</a></li>
                          {{-- <li role="presentation"><a href="{{ route('login.teacher') }}">Teacher Login</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
