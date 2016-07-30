@extends('layouts.admin')

@section('style')
    .caption {
        width:100%;
        bottom: .3rem;
        position: absolute;
        background:#000;
        background: -webkit-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: -moz-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: -o-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: linear-gradient(to top, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    }

    .thumbnail {
        border: 0 none;
        box-shadow: none;
        margin:0;
        padding:0;
    }

    .caption h4 {
        color: #fff;
        -webkit-font-smoothing: antialiased;
    }
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 padding20">
	        <h1>Wall panel</h1>
	        <a href="wall/create"><button class="btn btn-warning pull-right margintop-40">Create wall</button></a>
        </div>

        @foreach ($walls as $wall)
            <div class="col-sm-6">
                <div class="col-sm-12 thumbnail text-center">
                    <img alt="" class="img-responsive" src="../{{ $wall->source }}">

                    <div class="caption">
                        <h4><a href="administration/wall/{{ $wall->id }}">{{ $wall->title }}</a></h4>
                    </div>
                </div>
            </div>              
        @endforeach

    </div>
</div>
@stop