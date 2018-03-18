@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LOGIN ANDA BERHASIL</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{asset('img/fb29918f39cbef5d57e63a7acfa19630.jpg')}}">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
