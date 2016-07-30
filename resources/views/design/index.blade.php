@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <h1>First of all we must choose type of wall</h1>
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
		        @foreach ($walls as $wall)
		            <div class="col-sm-6">
		                <div class="col-sm-12 thumbnail text-center">
		                    <img alt="" class="img-responsive" src="{{ $wall->source }}">

	                        <h4><a href="administration/wall/{{ $wall->id }}">{{ $wall->title }}</a></h4>
		                </div>
		            </div>              
		        @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
