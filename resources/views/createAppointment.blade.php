@extends('layouts.app')

@section('content')
    <div class="container" style="border: solid black;padding-bottom: 240px">
        <div class="row" style="padding: 5px">
            <div class="col-md-6">
                <a href="{{route('cookingList')}}" class="col-md-5 btn btn-outline-warning" style="text-align: center;height: 40px;padding: 60px 0px 95px 0px;">
                    Burner
                </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{route('laundryList')}}" class="col-md-5 btn btn-outline-danger" style="text-align: center;height: 40px;padding: 60px 0px 95px 0px;">
                    laundry
                </a>
            </div>
        </div>
    </div>
@endsection
