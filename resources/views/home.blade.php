@extends('layouts.app')

@section('content')
<div class="container" style="border: solid black">
    <div class="row" style="padding: 5px">
        <div class="col-md-6">
            <a href="{{route('cookingList')}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;height: 40px;padding: 60px 0px 95px 0px;">
                Burner
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{route('laundryList')}}" class="col-md-5 btn btn-outline-danger" style="text-align: center;height: 40px;padding: 60px 0px 95px 0px;">
                laundry
            </a>
        </div>

        <div class="col-md-6 card" style="background-color: #e0eee6;text-align: center">
            <h2>Student Profile</h2>
            <hr style="margin: 0px 20px 10px 20px">
            <div class="row" style="text-align: center">
                <div class="col-md-12">
                    <img src="{{asset('/images/'.$user->image)}}" height="200px" width="200px" style="padding: 0px 0px 5px 10px">
                </div>
                <div class="col-md-12" style="margin-top:10px">
                    <label><b>Name:&nbsp</b>{{$user->name}}</label><br>
                    <label><b>Date of Birth:&nbsp</b>{{$user->birth_date}}</label><br>
                    <label><b>Room No:&nbsp</b>{{$user->room_no}}</label><br>
                    <label><b>Email:&nbsp</b>{{$user->email}}</label><br>
                    <label><b>Institution:&nbsp</b>{{$user->institute}}</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
