@extends('layouts.app')
@section('content')
<div class="container">
    
    <form action="{{route('money.update',1)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 1000 (จำนวน)</label>
            <input type="text" class="form-control" name="money_1000">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 500 (จำนวน)</label>
            <input type="text" class="form-control" name="money_500">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 100 (จำนวน)</label>
            <input type="text" class="form-control" name="money_100">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 50 (จำนวน)</label>
            <input type="text" class="form-control" name="money_50">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 20 (จำนวน)</label>
            <input type="text" class="form-control" name="money_20">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 10 (จำนวน)</label>
            <input type="text" class="form-control" name="money_10">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 5 (จำนวน)</label>
            <input type="text" class="form-control" name="money_5">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 2 (จำนวน)</label>
            <input type="text" class="form-control" name="money_2">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">เงิน 1 (จำนวน)</label>
            <input type="text" class="form-control" name="money_1">
        </div>
        <table class="table ">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">ชนิดเงิน</th>
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
                <td>{{$data->money_1000}}</td>
                <td>{{$data->money_500}}</td>
                <td>{{$data->money_100}}</td>
                <td>{{$data->money_50}}</td>
                <td>{{$data->money_20}}</td>
                <td>{{$data->money_10}}</td>
                <td>{{$data->money_5}}</td>
                <td>{{$data->money_2}}</td>
                <td>{{$data->money_1}}</td>
            </tr>
        </tbody>
    </table>


        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection