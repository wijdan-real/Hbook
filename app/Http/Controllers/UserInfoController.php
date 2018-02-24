<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Illuminate\Support\Facades\Input;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('usersetting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),
            [
                'userbio'=>'max:500',
                'interest'=>'max:500',
                'occupation'=>'max:100',
                'city'=>'max:50',
                'phonenumber'=>'max:50'
            ]);
        $userProfile= new UserProfile;

        $userProfile->user_id = auth()->user()->id;
        $userProfile->userbio = Input::get("userbio");
        $userProfile->interest = Input::get("interest");
        $userProfile->occupation = Input::get("occupation");
        $userProfile->city = Input::get("city");
        $userProfile->phonenumber = Input::get("phonenumber");
        $userProfile->dob = Input::get("dob");
        $userProfile->gender = Input::get("gender");
        $userProfile->save();

              //  'user_id'=>auth()->user()->id,
              //  'userbio'=>request('userbio'),
              //  'interest'=>request('interest'),
              //  'occupation'=>request('occupation'),
              //  'city'=>request('city'),
              //  'phonenumber'=>request('phonenumber'),
               // 'gender'=>request('gender')->has("optradio1") ? 1 : 0,
               // $test->result = Input::has("optradio1") ? 1 : 0,
               // 'dob'=>request('dob')









        //$userProfile->save();
        return view('userprofile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('userprofile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
