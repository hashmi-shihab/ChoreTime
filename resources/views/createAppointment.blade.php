@extends('layouts.app')

@section('content')
<div class="container" style="border: solid black;padding-bottom: 240px;background-color: white;">
    <div class="row" style="padding: 5px">
        <div class="col-md-6">
            <a href="{{route('cookingList')}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;color: black;height: 40px;padding: 40px 0px 95px 0px;">
                <h1>Cooking</h1>
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{route('laundryList')}}" class="col-md-5 btn btn-outline-danger" style="text-align: center;height: 40px;color: black;padding: 40px 0px 95px 0px;">
                <h1>Laundry</h1>
            </a>
        </div>
    </div>
</div>
@endsection
