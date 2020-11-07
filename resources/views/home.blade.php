@extends('layouts.app')

@section('content')
<div class="container" style="border: solid black">
    <div class="row" style="padding: 5px">
        <div class="col-md-7 card" style="text-align: center;border: solid black">
            <h1 style="margin-top: 175px">News Feed Under Construction</h1>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-4 card" style="text-align: center;border: solid black;">
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
