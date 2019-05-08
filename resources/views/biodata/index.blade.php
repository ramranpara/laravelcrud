@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>List of Biodata</h3>
        </div>       
        <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('biodata.create') }}">Create New</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        
        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"><b>No</b></th>
                <th width="300px">Name</th>
                <th>textarea</th>
                <th width="180px">Action</th>
            </tr>

            @foreach ($biodatas as $biodata)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$biodata->name}}</td>
                    <td>{{$biodata->surname}}</td>
                    <td>
                        <form action="{{route('biodata.destroy', $biodata->id) }}" method="POST">
                            <a class="btn btn-sm btn-success" href="{{route('biodata.show', $biodata->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{route('biodata.edit', $biodata->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>   
            @endforeach

        </table>
        {!! $biodatas->links() !!}
    </div>
</div>
@endsection
