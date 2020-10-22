@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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
                                Burner-1
                            @elseif($cookingAppointment->c_id ==2)
                                Burner-2
                            @elseif($cookingAppointment->c_id ==3)
                                Burner-3
                            @elseif($cookingAppointment->c_id ==4)
                                Burner-4
                            @elseif($cookingAppointment->c_id ==5)
                                Burner-5
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
                            <td>@if($cookingAppointment->l_id ==1)
                                    Laundry-1
                                @elseif($cookingAppointment->l_id ==2)
                                    Laundry-2
                                @elseif($cookingAppointment->l_id ==3)
                                    Laundry-3
                                @elseif($cookingAppointment->l_id ==4)
                                    Laundry-4
                                @elseif($cookingAppointment->l_id ==5)
                                    Laundry-5
                                @endif</td>
                            <td>{{$laundryAppointments->l_date}}</td>
                            <td>{{$laundryAppointments->l_time}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
