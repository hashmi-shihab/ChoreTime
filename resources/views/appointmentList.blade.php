@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div style="border: solid black;margin-left:50px;margin-right: 50px;background-color: white;">
        <h1 style="text-align: center">Appointment List</h1>
        <hr style="width: 20%">
        <div class="box" style="padding: 10px 400px 0px 400px">
            <table class="table" style="width: 100%!important;">
                <thead>
                    <tr>
                        <th scope="col">Appointment For</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cookingAppointments)

                    @foreach($cookingAppointments as $cookingAppointment)
                    <tr>
                        <td>
                            @if($cookingAppointment->c_id ==1)
                            Stove-1
                            @elseif($cookingAppointment->c_id ==2)
                            Stove-2
                            @elseif($cookingAppointment->c_id ==3)
                            Stove-3
                            @elseif($cookingAppointment->c_id ==4)
                            Stove-4
                            @elseif($cookingAppointment->c_id ==5)
                            Stove-5
                            @endif
                        </td>
                        <td>{{$cookingAppointment->c_date}}</td>
                        <td>{{$cookingAppointment->c_time}}</td>
                    </tr>
                    @endforeach
                    @endif
                    @if($laundryAppointments)
                    @foreach($laundryAppointments as $laundryAppointment)
                    <tr>
                        <td>@if($laundryAppointment->l_id ==1)
                            Laundry-1
                            @elseif($laundryAppointment->l_id ==2)
                            Laundry-2
                            @elseif($laundryAppointment->l_id ==3)
                            Laundry-3
                            @elseif($laundryAppointment->l_id ==4)
                            Laundry-4
                            @elseif($laundryAppointment->l_id ==5)
                            Laundry-5
                        @endif</td>
                        <td>{{$laundryAppointment->l_date}}</td>
                        <td>{{$laundryAppointment->l_time}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
