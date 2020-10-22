<?php

namespace App\Http\Controllers;

use App\CookingAppointment;
use App\LaundryAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function cookingList()
    {
        return view('cookingList');
    }
    public function laundryList()
    {
        return view('laundryList');
    }
    public function cookingCreate($id)
    {
        $c_id = $id;
        return view('cookingCreate',compact('c_id'));
    }
    public function laundryCreate($id)
    {
        $l_id = $id;
        return view('laundryCreate',compact('l_id'));
    }

    public function cookingAppointment(Request $request)
    {
        $users_id = Auth::id();
        $taken = CookingAppointment::where('c_id',$request->c_id)->where('c_date',$request->c_date)->get();
        if (count($taken) == 0){
            CookingAppointment::create([
                'c_id' => $request->c_id,
                'c_date' => $request->c_date,
                'c_time' => $request->c_time,
                'users_id' => $users_id,
            ]);
            return redirect()->back()->with('message','has been booked');
        }
        else{
            $timeTaken = $taken->where('c_time',$request->c_time);
            if (count($timeTaken) == 0)
            {
                CookingAppointment::create([
                    'c_id' => $request->c_id,
                    'c_date' => $request->c_date,
                    'c_time' => $request->c_time,
                    'users_id' => $users_id,
                ]);
                return redirect()->back()->with('message','has been booked');
            }
            else
            {
                return redirect()->back()->with('errorMessage','Already taken! Try another one');
            }
        }

    }
    public function laundryAppointment(Request $request)
    {
        $users_id = Auth::id();
        $taken = LaundryAppointment::where('l_id',$request->c_id)->where('l_date',$request->c_date)->get();
        if (count($taken) == 0){
            LaundryAppointment::create([
                'l_id' => $request->l_id,
                'l_date' => $request->l_date,
                'l_time' => $request->l_time,
                'users_id' => $users_id,
            ]);
            return redirect()->back()->with('message','has been booked');
        }
        else{
            $timeTaken = $taken->where('l_time',$request->l_time);
            if (count($timeTaken) == 0)
            {
                LaundryAppointment::create([
                    'l_id' => $request->l_id,
                    'l_date' => $request->l_date,
                    'l_time' => $request->l_time,
                    'users_id' => $users_id,
                ]);
                return redirect()->back()->with('message','has been booked');
            }
            else
            {
                return redirect()->back()->with('errorMessage','Already taken! Try another one');
            }
        }
    }

    public function userAppointmentList()
    {
        $users_id = Auth::id();
        $cookingAppointments = CookingAppointment::select()->where('users_id',$users_id)->get();
        $laundryAppointments = LaundryAppointment::select()->where('users_id',$users_id)->get();

        return view('appointmentList',compact('cookingAppointments','laundryAppointments'));
    }
}
