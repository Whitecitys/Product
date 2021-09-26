@extends('layouts.app')

<style>
  div a {
    padding-left: 10px;
    padding-right: 10px;
  }
</style>
@section('content')
<div class="container">
  <H4 style="text-align: center;"><span>ยอดเงินปัจจุบันของคุณคือ : </span><span style="color:green">1000</span> บาท</H4>
  <div style="font-size: 30px;">
    <a>เพิ่มเงิน</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_1000']) }}" class="btn btn-success">1000</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_500']) }}" class="btn btn-success">500</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_100']) }}" class="btn btn-success">100</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_50']) }}" class="btn btn-success">50</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_20']) }}" class="btn btn-success">20</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_10']) }}" class="btn btn-success">10</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_5']) }}" class="btn btn-success">5</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_2']) }}" class="btn btn-success">2</a>
    <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_1']) }}"class="btn btn-success">1</a>
  </div>
  <br>
  <div class="row ">
    @foreach($product as $products)
    <div class="col-md-2 col-xs-12 g-4">
      <div class="card " style="width: auto;">
        <img class="card-img-top" src="https://dummyimage.com/200x200/ababab/ffffff" alt="Card image cap">
        <div class="card-body">
          {{$products->name}}
          <div class="d-flex justify-content-between">
            <p>ราคา</p>
            <p>{{$products->price}} บาท</p>
          </div>
          @if($products->piece==0)
          <a type="button" class="btn btn-danger w-100 mb-2" disabled>สินค้าหมด</a>
          @else
          <a type="button" class="btn btn-success w-100 mb-2">ซื้อ</a>
          @endif

        </div>
      </div>
    </div>
    @endforeach




  </div>



</div>
@endsection