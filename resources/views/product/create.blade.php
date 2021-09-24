@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->all())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p style="padding-left: 20;">{{$error}}</p>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="piece" class="form-label">Piece</label>
            <input type="text" class="form-control" id="piece" name="piece">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/product" type="button" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection