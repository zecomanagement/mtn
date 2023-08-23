<?php

namespace App\Http\Controllers\travel;

use Illuminate\Http\Request;
use App\Models\TravelApplication;
use App\Http\Controllers\Controller;
use App\Mail\AdminTravelSuccess;
use App\Mail\TravelSuccess;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TravelApplicationController extends Controller
{
    public function index()
    {
        return view('travel.create');
    }


    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'passport' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'name_nok' => 'required',
            'mobile_nok' => 'required',

        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Please enter required fields.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } else {
            $travel = $request->except(['_token']);

            $applicant = TravelApplication::create($travel);

            Mail::to($applicant->email)->send(new TravelSuccess($applicant));
            Mail::to(env('ADMIN_NOTIF_MAIL'))->send(new AdminTravelSuccess($applicant));

            $notification = array(
                'message' => 'Application added Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
