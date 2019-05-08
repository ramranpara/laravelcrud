@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>new Biodata</h3>
        </div>       

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>whoops! </strong>There were some problems with your input.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('biodata.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <strong>name :</strong>
                    <input type="text" name="name" class="form-control" placeholder="name" >
                </div>
                <div class="col-md-12">
                        <strong>textarea :</strong>
                        <textarea name="surname" class="form-control" rows="8" cols="80" placeholder="textarea" ></textarea>
                </div>

                <div class="col-md-12">
                    <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>    

            </div>
        </form>

    </div>
</div>
@endsection
