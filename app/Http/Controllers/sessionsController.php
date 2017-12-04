<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use Auth;

class sessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }
    public function index()
    {
        //
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
        $this->validate(request(),['username'=>'required','password'=>'required']);
        $credentials = array(
            'name' => $request->get('username'),
            'password' => $request->get('password'),

        );
        if( auth()->attempt($credentials))
        {
            return view('hotel-profile4');
        }
        else
        {

            return redirect('hme')->withErrors(['message'=>'The email or password you entered is incorrect.please try again']);
            //$this->show($id);//,compact('userid'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $userid=$id;
        //$userid= Auth::user()->id;
        // dd($id);

        //auth()->loginUsingId($id);
        //return view();
       // return view('hotel-profile4',compact('userid'));//,compact('userid'));

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
    public function destroy()
    {

        auth()->logout();
        return redirect('/hme');
    }
}
