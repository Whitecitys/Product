@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('money.update','1')}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$data->price}}">
        </div>
        <div class="mb-3">
            <label for="piece" class="form-label">Piece</label>
            <input type="text" class="form-control" id="piece" name="piece" value="{{$data->piece}}">
        </div>
        <button type="submit" class="btn btn-warning">Edit</button>
        <a href="/product" type="button" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection