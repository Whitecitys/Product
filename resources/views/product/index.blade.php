@extends('layouts.app')
@section('content')

<div class="container">
    <a href="/product/create" class="btn btn-success m-2">Add Data</a>
    <table class="table table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อขนม</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>

            </tr>
        </thead>
        <tbody>
            @foreach($product as $key => $products)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$products->name}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->piece}}</td>
                <td><a href="{{route('product.edit',$products->id)}}" type="button" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('product.destroy',$products->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Delete {{$products->name}} ?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container d-flex justify-content-center">
        {{ $product->links() }}
    </div>
</div>
@endsection