<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Post;
use Illuminate\Support\Facades\Input;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $this->validate(request(),
            [
                'title'=>'required',
                'description'=>'required',
                'coveimage'=>'max:2000'
            ]);
        $post=new Post();


         $post->user_id = auth()->user()->id;
         $post->title = Input::get("title");
         $post->description = Input::get("description");




       // Post::create(request( [
         ///   'user_id'=>auth()->user()->id,
         //   'title'=>request('title'),
         //   'description'=>request('description'),
       // ]));

        if($request->hasFile('coverimage')&&('file')) {
            $coverimage = $request->file('coverimage');
            $filename =time().'.'.$coverimage->getClientOriginalExtension();// . '.' . $avatar->getClientOriginalExtension();
            // dd($filename);
            Image::make($coverimage)->resize(300, 300)->save(public_path('/uploads/coverimages/' . $filename));
           $post->coverimage = $filename;
            foreach($request->file as $file)
            {
                $filename2 =time().'.'.$file->getClientOriginalname();
                Image::make($file)->resize(300, 300)->save(public_path('/uploads/images/' . $filename2));
                $post->image1=$filename2;
            }

        }





        $post->save();
        return redirect('/userprofile');


        /* $userProfile->user_id = auth()->user()->id;
         $userProfile->userbio = Input::get("userbio");
         $userProfile->interest = Input::get("interest");
         $userProfile->occupation = Input::get("occupation");
         $userProfile->city = Input::get("city");
         $userProfile->phonenumber = Input::get("phonenumber");
         $userProfile->dob = Input::get("dob");
         $userProfile->gender = Input::get("gender");
         $userProfile->update();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
