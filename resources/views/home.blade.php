@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">LOGIN ANDA BERHASIL</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                    <img src="{{asset('img/monitor.png')}}" width="60%">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
