@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="border: solid black;margin-left:50px;margin-right: 50px;padding-bottom: 200px">
            <h1 style="text-align: center">Make An Appointment</h1>
            <hr style="width: 40%">
            <div style="padding: 10px 0px 0px 200px">
                <div style="padding-right: 200px">
                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                &times;
                            </button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            <strong>Burner</strong>
                            {{session()->get('message')}}
                        </div>
                    @endif
                    @if(session()->has('errorMessage'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                &times;
                            </button>
                            <h4><i class="icon fa fa-ban"></i>Error!</h4>
                            <strong>Burner</strong>
                            {{session()->get('errorMessage')}}
                        </div>
                    @endif
                </div>

                <form method="post" action="{{route('cookingAppointment')}}">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label>
                                Burner Name
                            </label>
                            @if($c_id == 1)
                                <input type="text" class="form-control" value="Burner-1" readonly>
                            @elseif($c_id == 2)
                                <input type="text" class="form-control" value="Burner-2" readonly>
                            @elseif($c_id == 3)
                                <input type="text" class="form-control" value="Burner-3" readonly>
                            @elseif($c_id == 4)
                                <input type="text" class="form-control" value="Burner-4" readonly>
                            @elseif($c_id == 5)
                                <input type="text" class="form-control" value="Burner-5" readonly>
                            @endif
                            <input type="hidden" name="c_id" value="{{$c_id}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="required-field">Choose Date &nbsp</label>
                            <input type="text" class="form-control" name="c_date" id="datepicker" placeholder="Please Enter Appointment Date" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="required-field">Choose Time Slot &nbsp</label>
                            <select class="form-control" name="c_time" required>
                                <option value="" selected disabled>Select Time Slot</option>
                                <option>06:00-07:00</option>
                                <option>07:00-08:00</option>
                                <option>08:00-09:00</option>
                                <option>10:00-11:00</option>
                                <option>12:00-13:00</option>
                                <option>14:00-15:00</option>
                                <option>16:00-17:00</option>
                                <option>17:00-18:00</option>
                                <option>18:00-19:00</option>
                                <option>19:00-20:00</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <br>
                            <button type="submit" class="btn btn-outline-success btn-sm" style="margin-top: 10px">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('jsScript')

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                minDate: 1,
                dateFormat: 'yy-mm-dd',
            });
        } );
    </script>

@endsection


