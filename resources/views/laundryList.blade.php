@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div style="border: solid black;margin-left:50px;margin-right: 50px;background-color: white">
        <h1 style="text-align: center">Laundry List</h1>
        <hr style="width: 20%">
        <!-- <div class="box" style="padding: 10px 400px 0px 400px">
            <table class="table" style="width: 100%!important;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Laundry</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Laundry-1</td>
                        <td><a href="{{route('laundryCreate',1)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Laundry-2</td>
                        <td><a href="{{route('laundryCreate',2)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Laundry-3</td>
                        <td><a href="{{route('laundryCreate',3)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Laundry-4</td>
                        <td><a href="{{route('laundryCreate',4)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Laundry-5</td>
                        <td><a href="{{route('laundryCreate',5)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                    </tr>
                </tbody>
            </table>
        </div> -->
        <div class="row" style="padding: 5px">
            <div class="col-md-6">
                <a href="{{route('laundryCreate',1)}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;color: black;height: 40px;padding: 40px 0px 95px 0px;">
                    <img src="{{asset('laundry.png')}}" style="height: 50px;" />
                    <h1>1</h1>
                </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{route('laundryCreate',2)}}" class="col-md-5 btn btn-outline-danger" style="text-align: center;height: 40px;color: black;padding: 40px 0px 95px 0px;">
                    <img src="{{asset('laundry.png')}}" style="height: 50px;" />
                    <h1>2</h1>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{route('laundryCreate',3)}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;color: black;height: 40px;padding: 40px 0px 95px 0px;">
                    <img src="{{asset('laundry.png')}}" style="height: 50px;" />
                    <h1>3</h1>
                </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{route('laundryCreate',4)}}" class="col-md-5 btn btn-outline-danger" style="text-align: center;height: 40px;color: black;padding: 40px 0px 95px 0px;">
                    <img src="{{asset('laundry.png')}}" style="height: 50px;" />
                    <h1>4</h1>
                </a>
            </div>
        </div>
        <div class="row" style="padding: 5px">
            <div class="col-md-6">
                <a href="{{route('laundryCreate',5)}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;color: black;height: 40px;padding: 40px 0px 95px 0px;">
                    <img src="{{asset('laundry.png')}}" style="height: 50px;" />
                    <h1>5</h1>
                </a>
            </div>

        </div>
    </div>



</div>
@endsection
