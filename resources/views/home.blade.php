@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 card" style="background-color: #e0eee6;text-align: center">
            <h2>Student Profile</h2>
            <hr style="margin: 0px 20px 10px 20px">
            <div class="row" style="text-align: left">
                <div class="col-md-6">
                    <img src="{{asset('/images/'.$user->image)}}" height="300px" width="200px" style="border-radius: 80%;padding: 0px 0px 5px 10px">
                </div>
                <div class="col-md-6" style="margin-top:100px">
                    <label><b>Name:&nbsp</b>{{$user->name}}</label>
                    <label><b>Email:&nbsp</b>{{$user->email}}</label>
                </div>
            </div>
        </div>&nbsp&nbsp
        <a href="{{route('cookingList')}}" class="col-md-2 btn btn-outline-warning" style="text-align: center;height: 40px;padding-top: 5px;margin-top: 150px">
            Burner
        </a>&nbsp&nbsp
        <a href="{{route('laundryList')}}" class="col-md-2 btn btn-outline-danger" style="text-align: center;height: 40px;padding-top: 5px;margin-top: 150px">
            laundry
        </a>
    </div>
</div>
@endsection
