@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Biodata detail</h3>
            <hr>
        </div>
    </div>
    <div class="row">        
        <div class="col-md-12">
            <div class="form-group">
            <strong>name :</strong>{{$biodata->name}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <strong>textarea :</strong>{{$biodata->surname}}
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>           
</div>
@endsection
