<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangeRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index', array('user'=>Auth::user()));
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
        //
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
        try {
            $user = User::find($id);
            return view('profile.edit', compact('user'));

        } catch (Exception $e) {

            return Redirect::to('/')->with('msg', trans('index.errors'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('profile.index')
        ->with('success', trans('index.msgUpUserSuccess'));
    }

    public function changePassword(ChangeRequest $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {

            return redirect()->back()->with('error', trans('index.msgPassFail'));
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0) {

            return redirect()->back()->with('error', trans('index.msgPassSame'));
        }
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->route('profile.index')->with('success', trans('index.msgUpUserSuccess'));

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
