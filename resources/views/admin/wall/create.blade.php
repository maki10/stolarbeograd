@extends('layouts.admin')

@section('style')

.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
@stop

@section('content')
<div class="container-fluid">
    <div class="row padding20">
        <h1>Create Wall</h1>
        <div class="col-sm-12 text-center">

        <form action="" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-1 control-label">Title:</label>

                <div class="col-md-12">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                </div>
            </div>            

            <div class="form-group">
                <label for="image" class="col-md-1 control-label">Image:</label>
                <div class="col-md-12">
                    <div class="input-group image-preview">
                        <input type="text" name="image" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                        <span class="input-group-btn">
                            <!-- image-preview-clear button -->
                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                <span class="glyphicon glyphicon-remove"></span> Clear
                            </button>
                            <!-- image-preview-input -->
                            <div class="btn btn-default image-preview-input">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                <span class="image-preview-input-title">Browse</span>
                                <input type="file" accept="image/png, image/jpeg, image/gif" name="source"/> <!-- rename it -->
                            </div>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-pencil"></i> Create
                    </button>
                </div>
            </div>

        </form>

        </div>
    </div>
</div>
@stop