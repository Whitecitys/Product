@extends('layouts.app')

<style>
  div a {
    padding-left: 10px;
    padding-right: 10px;
  }
</style>
@section('content')

<div class="container">

  @if(session()->has('clear'))
  <div class="alert alert-success" id="re">
    {{ session()->get('clear') }}
  </div>
  @endif
  @if(session()->has('message'))
  @if(session()->get('change')=='เงินทอนไม่เพียงพอ')
  <div class="alert alert-danger" id="nch">
    {{ session()->get('change') }}
  </div>
  @else
  <div class="alert alert-success" id="ch">
    {{ session()->get('message') }} เงินทอน {{ session()->get('change') }} บาท
  </div>
  @endif


  @endif

  <H4 style="text-align: center;"><span>ยอดเงินปัจจุบันของคุณคือ : </span><span style="color:green">{{$sum}}</span> บาท</H4>
  <div class="col-12" style="font-size: 30px;">
    <div class="row">

      <div class="col-10 " style="align-items: center;">
        <a>เพิ่มเงิน</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_1000','price' => '1000']) }}" class="btn btn-success">1000</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_500','price' => '500']) }}" class="btn btn-success">500</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_100','price' => '100']) }}" class="btn btn-success">100</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_50','price' => '50']) }}" class="btn btn-success">50</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_20','price' => '20']) }}" class="btn btn-success">20</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_10','price' => '10']) }}" class="btn btn-success">10</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_5','price' => '5']) }}" class="btn btn-success">5</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_2','price' => '2']) }}" class="btn btn-success">2</a>
        <a type="button" href="{{ route('addCust',['id' => '2','money' => 'money_1','price' => '1']) }}" class="btn btn-success">1</a>
      </div>
      <div class="col-2">
        <a type="button" href="{{ route('clear2')}}" class="btn btn-danger">Cancel</a>

      </div>
    </div>

  </div>
  <br>
  <table class="table ">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">ชนิดเงินของเครื่อง</th>
        <th scope="col">1000</th>
        <th scope="col">500</th>
        <th scope="col">100</th>
        <th scope="col">50</th>
        <th scope="col">20</th>
        <th scope="col">10</th>
        <th scope="col">5</th>
        <th scope="col">2</th>
        <th scope="col">1</th>
      </tr>
    </thead>
    <tbody>
      <tr style="text-align: center;">
        <td>จำนวน</td>
        <td>{{($data->money_1000/1000)}}</td>
        <td>{{($data->money_500/500)}}</td>
        <td>{{($data->money_100/100)}}</td>
        <td>{{($data->money_50/50)}}</td>
        <td>{{($data->money_20/20)}}</td>
        <td>{{($data->money_10/10)}}</td>
        <td>{{($data->money_5/5)}}</td>
        <td>{{($data->money_2/2)}}</td>
        <td>{{$data->money_1}}</td>
      </tr>
    </tbody>
  </table>
  <div class="row ">
    @foreach($product as $products)
    <div class="col-md-2 col-xs-12 g-4">
      <div class="card " style="width: auto;">
        <img class="card-img-top" src="https://dummyimage.com/200x200/ababab/ffffff" alt="Card image cap">
        <div class="card-body" style="text-align: center;">
          <h5>{{$products->name}}</h5>
          <div class="d-flex justify-content-between">
            <p>ราคา</p>
            <p>{{$products->price}} บาท</p>
          </div>
          <div class="d-flex justify-content-between">
            จำนวน</p>
            <p>{{$products->piece}} ชิ้น</p>
          </div>
          @if($products->piece==0)
          <a type="button" class="btn btn-danger w-100 mb-2" disabled>สินค้าหมด</a>
          @else
          @if($sum<$products->price)
            <a type="button" class="btn btn-secondary w-100 mb-2">เงินไม่เพียงพอ</a>
            @else
            <a type="button" href="{{ route('sum',['id' => $products->id]) }}" class="btn btn-success w-100 mb-2">ซื้อ</a>
            @endif
            @endif

        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<script>
  window.setTimeout(function() {
    $("#ch").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 10000);

  window.setTimeout(function() {
    $("#re").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 2000);

  window.setTimeout(function() {
    $("#nch").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 2000);
</script>

@endsection