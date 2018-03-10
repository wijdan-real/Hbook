<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Illuminate\Support\Facades\Input;
use Image;
use Auth;
use App\User;
use App\Post;
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
    public function index($id)
    {
        $userInfo=UserProfile::find($id);
        return view('usersetting',compact('userInfo'));
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

      //  $userProfile= new UserProfile;

       /* $userProfile->user_id = auth()->user()->id;
        $userProfile->userbio = Input::get("userbio");
        $userProfile->interest = Input::get("interest");
        $userProfile->occupation = Input::get("occupation");
        $userProfile->city = Input::get("city");
        $userProfile->phonenumber = Input::get("phonenumber");
        $userProfile->dob = Input::get("dob");
        $userProfile->gender = Input::get("gender");
        $userProfile->update();*/



        //updating query
      //  $userProfile->update([
      //      'last_seen' => new \DateTime(),
      //  ]);





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


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       // $posts = User::find(auth()->user()->id)->post;
        $posts = Post::Where('user_id', auth()->id())->latest()->get();
       // $posts =Post::find(1);
//dd($posts);
        //dd($posts->coverimage);
        return view('userprofile',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $this->validate(request(),
            [
                'userbio'=>'max:500',
                'interest'=>'max:500',
                'occupation'=>'max:100',
                'city'=>'max:50',
                'phonenumber'=>'max:50'
            ]);
        UserProfile::where('user_id',auth()->id())->update([
            'userbio'=>request('userbio'),
            'interest'=>request('interest'),
            'occupation'=>request('occupation'),
            'city'=>request('city'),
            'phonenumber'=>request('phonenumber'),
            'dob'=>request('dob'),
            'gender'=>request('gender'),
        ]);



        return redirect('/userprofile');
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

public function uploadPhoto(Request $request)
{
    if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename =time().'.'.$avatar->getClientOriginalExtension();// . '.' . $avatar->getClientOriginalExtension();
        // dd($filename);
        Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
        Auth::user()->avatar = $filename;
        //$user
        auth()->user()->update();

    }
    return redirect('/userprofile');
}


}