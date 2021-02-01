<?php

namespace App\Http\Controllers;

use App\Models\RequestMng;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestMngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=RequestMng::where('user_id',Auth::id())->get();
        return view('home.user_request',['datalist'=>$datalist]);
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
     * @param  \App\Models\RequestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function show(RequestMng $requestMng)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestMng $requestMng)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestMng $requestMng)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestMng  $requestMng
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestMng $requestMng)
    {
        //
    }
}
