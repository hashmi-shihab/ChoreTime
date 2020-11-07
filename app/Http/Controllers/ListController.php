<?php

namespace App\Http\Controllers;

use App\CookingAppointment;
use App\LaundryAppointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
//dd($laundryAppointments);
        return view('appointmentList',compact('cookingAppointments','laundryAppointments'));
    }

    public function createAppointment()
    {
        return view('createAppointment');
    }

    public function userInfoEdit()
    {
        $user= Auth::user();

        return view('userEdit',compact('user'));
    }

    public function userInfoUpdate(Request $request)
    {

//        dd($request->all());
        $user= Auth::user();

        $rules =[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.Auth::id(),
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            'birth_date' => 'required|date',
            'room_no' => 'required',
            'institute' => 'required|string|max:255',
        ];

        $customMessage = [
            'name.required'=>'User name is required',
            'email.required'=>'User email is required',
            'image.image'=>'User image must be an image',
            'birth_date.required'=>'User Birth Date  is required',
            'room_no.required'=>'User Room No is required',
            'institute.required'=>'User institution is required',
        ];

        $this->validate($request,$rules,$customMessage);

        $image = "";
        if ($files = $request->file('image')) {
            $filename = public_path() . '/images/' . $user->image;
            \File::delete($filename);

            $image = rand() . $files->getClientOriginalName();
            $files->move(public_path('images'), $image);
        }
        else{
            $image = $user->image;
        }

        $input = $request->all();
        if(!empty($input['password'])){
            $rules =[
                'password' => 'string|min:8|same:password_confirmation',];

            $customMessage = [
                'password.min:8'=>'User password must be at least 8 character',
                'password.same:password_confirmation'=>'User password and confirm password must be same',
            ];

            $this->validate($request,$rules,$customMessage);
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = array_except($input,array('password'));
        }

        $user->update($input);


        User::where('id',Auth::id())->update([

            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'birth_date' => $request->birth_date,
            'room_no' => $request->room_no,
            'institute' => $request->institute,

        ]);

        return redirect()->route('userInfoEdit')->with('message','info has been updated');

    }

    public function aboutUs()
    {
        return view('aboutUs');
    }
}
