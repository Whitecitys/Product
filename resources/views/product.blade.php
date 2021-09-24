@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">#</th>
                <th scope="col" style="text-align: center;">ชื่อสินค้า</th>
                <th scope="col" style="text-align: center;">ราคา</th>
                <th scope="col" style="text-align: center;">จำนวน</th>
                <th scope="col" style="text-align: center;">แก้ไข</th>
                <th scope="col" style="text-align: center;">ลบ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
            <tr>
                <th style="text-align: center;" scope="row">{{$products->product_id}}</th>
                <td style="text-align: center;">{{$products->name}}</td>
                <td style="text-align: center;">{{$products->price}}</td>
                <td style="text-align: center;">{{$products->piece}}</td>
                <td style="text-align: center;"><button type="button" class="btn btn-warning">แก้ไข</button></td>
                <td style="text-align: center;"><button type="button" class="btn btn-danger">ลบ</button></td>
            </tr>
            @endforeach

        </tbody>
    </table>
   
</div>
<div class="container d-flex justify-content-center">
{{ $product->links() }}
</div>



@endsection