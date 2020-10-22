@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 style="text-align: center">Burner List</h1>
        <hr style="width: 20%">
        <div class="box" style="padding: 10px 400px 0px 400px">
            <table class="table" style="width: 100%!important;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Burner</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Burner-1</td>
                    <td><a href="{{route('cookingCreate',1)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Burner-2</td>
                    <td><a href="{{route('cookingCreate',2)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Burner-3</td>
                    <td><a href="{{route('cookingCreate',3)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Burner-4</td>
                    <td><a href="{{route('cookingCreate',4)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Burner-5</td>
                    <td><a href="{{route('cookingCreate',5)}}" class="btn btn-outline-success btn-sm">Make Appointment</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
