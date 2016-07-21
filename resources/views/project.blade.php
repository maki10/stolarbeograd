@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    This application serves to easily design the kitchen and eject its prices.</div>
                    <a href="design" title="Design now"><button class="btn btn-primary">Design now</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
